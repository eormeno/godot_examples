<?php
namespace App\Parsers\GameLang;

class GameLangSpecificListener extends GameLangBaseListener
{

    /**
     * Represents an unknown intermediate code line.
     */
    private const UNKOWN_IC_LINE = -1;

    private $code = [];

    private $function_register = [];

    private $statement_register = [];

    public function getCode()
    {
        return $this->code;
    }

    public function lastIntermediateCodeLine(): int
    {
        return count($this->code) - 1;
    }

    /**
     * Stores the given data in the specified register number (0..3)
     */
    private function insReg(int $line, int $reg, $data): int
    {
        $this->code[] = [
            $line,
            Operation::reg,
            $reg,
            $data
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Stores the value of the register in the memory with the given identificator.
     */
    private function insMem(int $line, int $reg, string $identificator): void
    {
        $this->code[] = [
            $line,
            Operation::mem,
            $reg,
            $identificator
        ];
    }

    /**
     * Gets the value of the memory with the given identificator and stores it in the register.
     */
    private function insGet(int $line, int $reg, string $identificator): void
    {
        $this->code[] = [
            $line,
            Operation::get,
            $reg,
            $identificator
        ];
    }

    private function insDelta(int $line, int $reg): void
    {
        $this->code[] = [
            $line,
            Operation::delta,
            $reg,
            null
        ];
    }

    /**
     * Pushes the value of the register to the top of the stack machine.
     */
    private function insPsh(int $line, int $reg): void
    {
        $this->code[] = [
            $line,
            Operation::psh,
            $reg,
            null
        ];
    }

    /**
     * Pops the value of the top of the stack machine and stores it in the register.
     */
    private function insPop(int $line, int $reg): void
    {
        $this->code[] = [
            $line,
            Operation::pop,
            $reg,
            null
        ];
    }

    private function insOp(int $line, Operation $op, int $reg): void
    {
        $this->code[] = [
            $line,
            $op,
            $reg,
            null
        ];
    }

    private function insJMP(int $line, int $jump_to): int
    {
        $this->code[] = [
            $line,
            Operation::jmp,
            -1,
            $jump_to
        ];
        return $this->lastIntermediateCodeLine();
    }

    private function insIIF(int $line, int $jump_to): int
    {
        $this->code[] = [
            $line,
            Operation::ifi,
            -1,
            $jump_to
        ];
        return $this->lastIntermediateCodeLine();
    }

    private function updDat(int $ic_line, $data): void
    {
        $this->code[$ic_line][3] = $data;
    }

    private function insFdf(int $ic_line, string $name ): void
    {
        $this->code[] = [
            0,
            Operation::fdf,
            $ic_line,
            $name
        ];
    }

    private function insLCALL(int $ic_line, string $name): int
    {
        $this->code[] = [
            $ic_line,
            Operation::lcall,
            -1,
            $name
        ];
        return $this->lastIntermediateCodeLine();
    }

    private function insEND(int $ic_line): void {
        $this->code[] = [
            $ic_line,
            Operation::end,
            -1,
            null
        ];
    }

    /**
     * Returns the identifier of the current statement. This identifier is used to store
     * data for intermediate code generation algorithm.
     */
    private function getStatementId($context): int
    {
        $from_line = $context->getStart()->getLine();
        $to_line = $context->getStop()->getLine();
        $from_char = $context->getStart()->getCharPositionInLine();
        $to_char = $context->getStop()->getCharPositionInLine();
        return $from_line * 1000 + $from_char * 100 + $to_line * 10 + $to_char;
    }

    private function registerStatement($context): void
    {
        $statement_id = $this->getStatementId($context);
        $this->statement_register[$statement_id] = [];
    }

    private function setStatementData($context, $key, $data): void
    {
        $statement_id = $this->getStatementId($context);
        $this->statement_register[$statement_id][$key] = $data;
    }

    private function getStatementData($context, $key)
    {
        $statement_id = $this->getStatementId($context);
        return $this->statement_register[$statement_id][$key];
    }

    public function exitAssignment(Context\AssignmentContext $context): void
    {
        $line = $context->getStart()->getLine();
        $identificator = $context->ID()->getText();
        $this->insPop($line, 0);
        $this->insMem($line, 0, $identificator);
    }

    public function enterExpression(Context\ExpressionContext $context): void
    {
        $line = $context->getStart()->getLine();
        if ($context->num()) {
            $value = floatval($context->num()->getText());
            $this->insReg($line, 0, $value);
            $this->insPsh($line, 0);
        } elseif ($context->ID()) {
            $identificator = $context->ID()->getText();
            $this->insGet($line, 0, $identificator);
            $this->insPsh($line, 0);
        } elseif ($context->STRING()) {
            $string = $context->STRING()->getText();
            // remove the quotes
            $string = substr($string, 1, -1);
            $this->insReg($line, 0, $string);
            $this->insPsh($line, 0);
        } elseif ($context->DELTA()) {
            $this->insDelta($line, 0);
            $this->insPsh($line, 0);
        } elseif ($context->NULL()) {
            $this->insReg($line, 0, null);
            $this->insPsh($line, 0);
        }
    }

    public function exitExpression(Context\ExpressionContext $context): void
    {
        $line = $context->getStart()->getLine();
        $op = $context->PLUS() ??
            $context->MINUS() ??
            $context->MULTIPLY() ??
            $context->DIVIDE() ??
            $context->LPAREN() ??
            $context->RPAREN();

        if (!$op) {
            return;
        }

        $op = $op->getText();

        if ($op == '(' || $op == ')') {
            return;
        }
        $this->insPop($line, 2);
        $this->insPop($line, 1);

        switch ($op) {
            case '+':
                $this->insOp($line, Operation::add, 3);
                break;
            case '-':
                $this->insOp($line, Operation::sub, 3);
                break;
            case '*':
                $this->insOp($line, Operation::mul, 3);
                break;
            case '/':
                $this->insOp($line, Operation::div, 3);
                break;
        }
        $this->insPsh($line, 3);
    }

    public function enterLogicExpression(Context\LogicExpressionContext $context): void
    {
        $line = $context->getStart()->getLine();
        if ($context->TRUE()) {
            $value = True;
            $this->insReg($line, 0, $value);
            $this->insPsh($line, 0);
        } elseif ($context->FALSE()) {
            $value = False;
            $this->insReg($line, 0, $value);
            $this->insPsh($line, 0);
        } elseif ($context->ID()) {
            $identificator = $context->ID()->getText();
            $this->insGet($line, 0, $identificator);
            $this->insPsh($line, 0);
        }
    }

    public function exitLogicExpression(Context\LogicExpressionContext $context): void
    {
        $line = $context->getStart()->getLine();

        $op =
            $context->LOR() ??
            $context->AND() ??
            $context->GRT() ??
            $context->LST() ??
            $context->GTE() ??
            $context->LTE() ??
            $context->EQL() ??
            $context->NEQ() ??
            $context->NOT();

        if (!$op) {
            return;
        }

        $op = $op->getText();

        if ($op == '(' || $op == ')') {
            return;
        }

        if ($op == 'NO') {
            $this->insPop($line, 1);
        } else {
            $this->insPop($line, 2);
            $this->insPop($line, 1);
        }

        switch ($op) {
            case 'O':
                $this->insOp($line, Operation::lor, 3);
                break;
            case 'Y':
                $this->insOp($line, Operation::and , 3);
                break;
            case '>':
                $this->insOp($line, Operation::grt, 3);
                break;
            case '<':
                $this->insOp($line, Operation::lst, 3);
                break;
            case '>=':
                $this->insOp($line, Operation::gte, 3);
                break;
            case '<=':
                $this->insOp($line, Operation::lte, 3);
                break;
            case '==':
                $this->insOp($line, Operation::eql, 3);
                break;
            case '!=':
                $this->insOp($line, Operation::neq, 3);
                break;
            case 'NO':
                $this->insOp($line, Operation::not, 3);
                break;
        }
        $this->insPsh($line, 3);
    }

    public function enterIfStatement(Context\IfStatementContext $context): void
    {
        // I need to register the if statement, so I can update the jumps when I know the
        // end of the if statement, else statement or both.
        $this->registerStatement($context);
    }

    public function enterThenStatement(Context\ThenStatementContext $context): void
    {
        $line = $context->getStart()->getLine();
        // This is the beginning of the then statement, so at this point, the logicExpression
        // has been evaluated and its result is in the top of the stack machine.
        $this->insPop($line, 0); // pop the logicExpression result and store it in reg[0]
        // Now, reg[0] will have the result of the logicExpression.
        // If reg[0] is false, we need to jump to the end of the if statement or the else statement.
        // But, by the moment, both are UNKNOWN, so we need to register the iif operation for its
        // latter updating, when we know the end of the current if statement or the beginning of
        // its else statement (if it has one).
        $ic_line = $this->insIIF($line, self::UNKOWN_IC_LINE);
        $this->setStatementData($context->getParent(), "iif", $ic_line);
    }

    public function exitThenStatement(Context\ThenStatementContext $context): void
    {
        // This is the end of the then statements block. Here we need to jump to the end of the if
        // statement, just in case the current if statement has an else statement.
        $ic_line = $this->insJMP($context->getStart()->getLine(), self::UNKOWN_IC_LINE);
        $this->setStatementData($context->getParent(), "then", $ic_line);
    }

    public function enterElseStatement(Context\ElseStatementContext $context): void
    {
        $iif_ic_line = $this->getStatementData($context->getParent(), "iif");
        $this->updDat($iif_ic_line, $this->lastIntermediateCodeLine());
    }

    public function exitIfStatement(Context\IfStatementContext $context): void
    {
        if (!$context->thenStatement()) {
            // we need to update the jump of the iif with the current index of the code
            $iif_ic_line = $this->getStatementData($context, "iif");
            $this->updDat($iif_ic_line, $this->lastIntermediateCodeLine());
        }
        $then_ic_line = $this->getStatementData($context, "then");
        $this->updDat($then_ic_line, $this->lastIntermediateCodeLine());
    }

    public function enterWhileStatement(Context\WhileStatementContext $context): void
    {
        // I need to register the while statement, so I can update the jumps when I know its end.
        $this->registerStatement($context);
        $this->setStatementData($context, "begin", $this->lastIntermediateCodeLine());
    }

    public function enterDoStatement(Context\DoStatementContext $context): void
    {
        $line = $context->getStart()->getLine();
        // This is the beginning of the do statement, so at this point, the logicExpression
        // has been evaluated and its result is in the top of the stack machine.
        $this->insPop($line, 0); // pop the logicExpression result and store it in reg[0]
        // Now, reg[0] will have the result of the logicExpression.
        // If reg[0] is false, we need to jump to the end of the while statement.
        // But, by the moment, it is UNKNOWN, so we need to register the iif operation for its
        // latter updating, when we know the end of the current while statement.
        $ic_line = $this->insIIF($line, self::UNKOWN_IC_LINE);
        $this->setStatementData($context->getParent(), "iif", $ic_line);
    }

    public function exitDoStatement(Context\DoStatementContext $context): void
    {
        $line = $context->getStart()->getLine();
        // This is the end of the do statements block. Here we need to jump to the beginning of the
        // while statement.
        $ic_iif = $this->getStatementData($context->getParent(), "iif");
        $ic_begin = $this->getStatementData($context->getParent(), "begin");
        $this->insJMP($line, $ic_begin);
        $this->updDat($ic_iif, $this->lastIntermediateCodeLine());
    }

    public function exitConsoleStatement(Context\ConsoleStatementContext $context): void
    {
        $line = $context->getStart()->getLine();
        $printable = $context->printable();
        $count = count($printable);
        // this is like to do: reg[1] = ""
        $this->insReg($line, 1, "");
        for ($i = 0; $i < $count; $i++) {
            if ($printable[$i]->ID()) {
                $identificator = $printable[$i]->ID()->getText();
                // this is like to do: reg[2] = value(identificator)
                $this->insGet($line, 2, $identificator);
            } elseif ($printable[$i]->STRING()) {
                $string = $printable[$i]->STRING()->getText();
                // remove the quotes
                $string = substr($string, 1, -1);
                // this is like to do: reg[2] = "string"
                $this->insReg($line, 2, $string);
            } elseif ($printable[$i]->NL()) {
                // this is like to do: reg[2] = "\n"
                $this->insReg($line, 2, "\n");
            } elseif ($printable[$i]->TB()) {
                // this is like to do: reg[2] = "\t"
                $this->insReg($line, 2, "\t");
            }
            // this is like to do: reg[1] = reg[1] . reg[2]
            $this->insOp($line, Operation::cat, 1);
        }
        $this->insOp($line, Operation::out, 1);
    }

    public function enterFunctionDef(Context\FunctionDefContext $context): void
    {
        $line = $context->getStart()->getLine();
        $identificator = $context->ID()->getText();


        // I register the function definition, so I can update the jump when I know its end.
        $this->registerStatement($context);
        // I insert a jump to the end to make sure that the function definition is not executed
        $ic_line = $this->insJMP($line, self::UNKOWN_IC_LINE);
        $this->setStatementData($context, "jump_to_end", $ic_line);
        // Associates the function name with the current intermediate code line
        $this->function_register[$identificator] = $this->lastIntermediateCodeLine() + 1;
    }

    public function exitFunctionDef(Context\FunctionDefContext $context): void
    {
        $line = $context->getStart()->getLine();
        // I update the jump to the end of the function definition
        $ic_line = $this->getStatementData($context, "jump_to_end");
        $this->updDat($ic_line, $this->lastIntermediateCodeLine() + 1);
    }

    public function enterLineFunctionCall(Context\LineFunctionCallContext $context): void
    {
        $this->registerStatement($context);
        $line = $context->getStart()->getLine();
        $ic_line = $this->insReg($line, 0, self::UNKOWN_IC_LINE);
        $this->setStatementData($context, "return_ic_line", $ic_line);
        $this->insPsh($line, 0);
    }

    public function exitLineFunctionCall(Context\LineFunctionCallContext $context): void
    {
        $line = $context->getStart()->getLine();
        $identificator = $context->ID()->getText();
        $this->insLCALL($line, $identificator);
        $ic_line = $this->getStatementData($context, "return_ic_line");
        $this->updDat($ic_line, $this->lastIntermediateCodeLine() + 1);
    }

    public function exitProgram(Context\ProgramContext $context): void
    {
        $line = $context->getStop()->getLine();
        $this->insEND($line);
        foreach ($this->function_register as $identificator => $ic_line) {
            $this->insFdf($ic_line, $identificator);
        }
    }
}
