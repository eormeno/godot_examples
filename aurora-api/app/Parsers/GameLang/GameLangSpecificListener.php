<?php
namespace App\Parsers\GameLang;

use App\Parsers\GameLang\Constants;
use App\Parsers\GameLang\Operation;

class GameLangSpecificListener extends GameLangBaseListener
{

    private $code = [];

    private $function_data = [];

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
     * Registers the intermediate code line (ICL) where the function definition starts.
     */
    private function registerFunctionStartICL($name, $ic_line): void
    {
        $this->function_data[$name]['icl_start'] = $ic_line;
    }

    private function registerFunctionCallICL($name, $ic_line): void
    {
        $this->function_data[$name]['icl_calls'][] = $ic_line;
    }

    private function updateFunctionCallsICL(): void
    {
        // for each key in the array
        foreach ($this->function_data as $name => $data) {
            // if the data does not have the ICL where the function definition starts, means that
            // the function is not defined, so I need to throw an exception.
            if (!isset($data['icl_start'])) {
                throw new \Exception("Function $name is not defined.");
            }
            // in other hand, if the function is not called, I don't need to update the ICLs
            if (!isset($data['icl_calls'])) {
                continue;
            }
            // for each ICL where the function is called
            foreach ($data['icl_calls'] as $icl_call) {
                // update the ICL with the ICL where the function definition starts
                $this->updDat($icl_call, $data['icl_start']);
            }
        }
    }

    /**
     * Stores the given data in the specified register number (0..3)
     */
    private function insReg(int $line, int $reg, $data, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::REG,
            $reg,
            $data,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * If the $reg is specified, stores the value of the register in the memory with the given
     * identificator. If the $reg is not specified, stores the given value in the memory with
     * the given identificator.
     */
    private function insMem(int $line, int $reg, string $identificator, $aux = null, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::MEM,
            $reg,
            $identificator,
            $aux,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Gets the value of the memory with the given identificator and stores it in the register.
     */
    private function insGet(int $line, int $reg, string $identificator, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::GET,
            $reg,
            $identificator,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Set the register with a delta value. Which is the difference between the current time and
     * the previous time.
     */
    private function insDelta(int $line, int $reg, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::DELTA,
            $reg,
            null,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * If the $reg is specified, pushes the content of the register or the specified value to the
     * top of the stack machine. If the $reg is not specified, pushes the specified value to the
     * top of the stack machine.
     */
    private function insPsh(int $line, int $reg, $value = null, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::PSH,
            $reg,
            $value,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Pops the value of the top of the stack machine and stores it in the register, if it is
     * specified, or in the memory with the given identificator, if the register is not specified.
     */
    private function insPop(int $line, int $reg, string $identificator = null, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::POP,
            $reg,
            $identificator,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Allows create a MI (Micro Instruction) with the given operation. The operation is executed
     * with the values in the stack machine, and the result is stored in the register, if it is
     * specified, or in the memory with the given identificator, if the register is not specified.
     */
    private function insOp(int $line, Operation $op, int $reg, string $identificator = null, string $label = null): int
    {
        $this->code[] = [
            $line,
            $op,
            $reg,
            $identificator,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Creates a MI that makes the VM jump to the given intermediate code line.
     * If the given intermediate code line
     * is unknown, it inserts a jump to an unknown intermediate code line.
     * A reg value of -1 means that the jump is defined in the data field of the intermediate
     * code line. If the reg value is not -1, it means that the jump is defined in the specified
     * register.
     *
     * @param int $line
     * @param int $reg
     * @param int $jump_to
     * @param string $label
     * @return int
     */
    private function insJMP(int $line, int $reg, int $jump_to, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::JMP,
            $reg,
            $jump_to,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Creates a MI that makes the VM jump to the given intermediate code line if the value of the
     * register 0 is false.
     */
    private function insIIF(int $line, int $jump_to, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::IFI,
            -1,
            $jump_to,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Allows updating the data field of the intermediate code line.
     */
    private function updDat(int $ic_line, $data): void
    {
        $this->code[$ic_line][3] = $data;
    }

    /**
     * Creates a MI that makes the VM call the function with the given name. This MI must work like
     * a jump to the intermediate code line where the function definition starts.
     */
    private function insLCALL(int $line, string $name, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::LCALL,
            -1,
            $name,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Creates and stacks a new call stack frame, and makes it the current call stack frame.
     */
    private function insPSHCS(int $line, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::PSHCS,
            -1,
            null,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Removes and unstack the current call stack frame.
     */
    private function insPOPCS(int $line, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::POPCS,
            -1,
            null,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    private function insSys(int $line, string $data, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::SYS,
            -1,
            $data,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    private function insAwait(int $line, string $data, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::AWAIT,
            -1,
            $data,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
    }

    /**
     * Creates a MI that makes the VM end its execution.
     */
    private function insEND(int $line, string $label = null): int
    {
        $this->code[] = [
            $line,
            Operation::END,
            -1,
            null,
            null,
            $label
        ];
        return $this->lastIntermediateCodeLine();
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
        $this->insPop($line, Constants::NO_REG, $identificator);
        //$this->insMem($line, 0, $identificator);
    }

    public function enterExpression(Context\ExpressionContext $context): void
    {
        $line = $context->getStart()->getLine();
        if ($context->num()) {
            $value = floatval($context->num()->getText());
            //$this->insReg($line, 0, $value);
            $this->insPsh($line, Constants::NO_REG, $value);
        } elseif ($context->ID()) {
            $identificator = $context->ID()->getText();
            $this->insGet($line, 0, $identificator);
            $this->insPsh($line, 0);
        } elseif ($context->DELTA()) {
            $this->insDelta($line, 0);
            $this->insPsh($line, 0);
        } elseif ($context->NULL()) {
            $this->insReg($line, 0, null);
            $this->insPsh($line, 0);
        } elseif ($context->STRING()) {
            $string = $context->STRING()->getText();
            // remove the quotes
            $string = substr($string, 1, -1);
            //$this->insReg($line, 0, $string);
            //$this->insPsh($line, 0);
            $this->insPsh($line, Constants::NO_REG, $string);
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
                $this->insOp($line, Operation::ADD, 3);
                break;
            case '-':
                $this->insOp($line, Operation::SUB, 3);
                break;
            case '*':
                $this->insOp($line, Operation::MUL, 3);
                break;
            case '/':
                $this->insOp($line, Operation::DIV, 3);
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
                $this->insOp($line, Operation::LOR, 3);
                break;
            case 'Y':
                $this->insOp($line, Operation::AND , 3);
                break;
            case '>':
                $this->insOp($line, Operation::GRT, 3);
                break;
            case '<':
                $this->insOp($line, Operation::LST, 3);
                break;
            case '>=':
                $this->insOp($line, Operation::GTE, 3);
                break;
            case '<=':
                $this->insOp($line, Operation::LTE, 3);
                break;
            case '==':
                $this->insOp($line, Operation::EQL, 3);
                break;
            case '!=':
                $this->insOp($line, Operation::NEQ, 3);
                break;
            case 'NO':
                $this->insOp($line, Operation::NOT, 3);
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
        $ic_line = $this->insIIF($line, Constants::UNKOWN_IC_LINE);
        $this->setStatementData($context->getParent(), "iif", $ic_line);
    }

    public function exitThenStatement(Context\ThenStatementContext $context): void
    {
        // This is the end of the then statements block. Here we need to jump to the end of the if
        // statement, just in case the current if statement has an else statement.
        $ic_line = $this->insJMP($context->getStart()->getLine(), Constants::NO_REG, Constants::UNKOWN_IC_LINE);
        $this->setStatementData($context->getParent(), "then", $ic_line);
    }

    public function enterElseStatement(Context\ElseStatementContext $context): void
    {
        $iif_ic_line = $this->getStatementData($context->getParent(), "iif");
        $this->updDat($iif_ic_line, $this->lastIntermediateCodeLine() + 1);
    }

    public function exitIfStatement(Context\IfStatementContext $context): void
    {
        if (!$context->elseStatement()) {
            // we need to update the jump of the iif with the current index of the code
            $iif_ic_line = $this->getStatementData($context, "iif");
            $this->updDat($iif_ic_line, $this->lastIntermediateCodeLine());
        }
        $then_ic_line = $this->getStatementData($context, "then");
        $this->updDat($then_ic_line, $this->lastIntermediateCodeLine() + 1);
    }

    public function enterWhileStatement(Context\WhileStatementContext $context): void
    {
        // I need to register the while statement, so I can update the jumps when I know its end.
        $this->registerStatement($context);
        $this->setStatementData($context, "begin", $this->lastIntermediateCodeLine() + 1);
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
        $ic_line = $this->insIIF($line, Constants::UNKOWN_IC_LINE);
        $this->setStatementData($context->getParent(), "iif", $ic_line);
    }

    public function exitDoStatement(Context\DoStatementContext $context): void
    {
        $line = $context->getStart()->getLine();
        // This is the end of the do statements block. Here we need to jump to the beginning of the
        // while statement.
        $ic_iif = $this->getStatementData($context->getParent(), "iif");
        $ic_begin = $this->getStatementData($context->getParent(), "begin");
        $this->insJMP($line, Constants::NO_REG, $ic_begin);
        $this->updDat($ic_iif, $this->lastIntermediateCodeLine() + 1);
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
            $this->insOp($line, Operation::CAT, 1);
        }
        $this->insOp($line, Operation::OUT, 1);
    }

    public function enterFunctionDef(Context\FunctionDefContext $context): void
    {
        $line = $context->getStart()->getLine();
        $functionName = $context->ID()->getText();

        // I register the function definition, so I can update the jump when I know its end.
        $this->registerStatement($context);
        // I insert a jump to the end to make sure that the function definition is not executed
        $ic_line = $this->insJMP($line, Constants::NO_REG, Constants::UNKOWN_IC_LINE);
        $this->setStatementData($context, "jump_to_end", $ic_line);
        $this->registerFunctionStartICL($functionName, $ic_line + 1);
    }

    public function exitParameters(Context\ParametersContext $context): void
    {
        $line = $context->getStart()->getLine();
        $parameters = $context->ID();
        $count = count($parameters);
        for ($j = $count - 1; $j >= 0; $j--) {
            $identificator = $parameters[$j]->getText();
            $this->insPop($line, 0, $identificator);
        }
    }

    public function exitFunctionDef(Context\FunctionDefContext $context): void
    {
        $line = $context->getStop()->getLine();
        $this->insPOPCS($line);
        $this->insGet($line, 0, "return");
        $this->insJMP($line, 0, Constants::NO_ICL);
        // I update the jump to the end of the function definition
        $ic_line = $this->getStatementData($context, "jump_to_end");
        $this->updDat($ic_line, $this->lastIntermediateCodeLine() + 1);
    }

    public function exitLineFunctionCall(Context\LineFunctionCallContext $context): void
    {
        $line = $context->getStart()->getLine();

        $calledFunctionName = $context->ID()->getText();
        // creates an internal variable to store the return next ICL of the function call
        // $this->insReg($line, 0, $this->lastIntermediateCodeLine() + 5);
        $this->insMem($line, Constants::NO_REG, "return", $this->lastIntermediateCodeLine() + 4);
        $this->insPSHCS($line);

        $to_change_ic_line = $this->insLCALL($line, $calledFunctionName);
        // register the ICL where the function is called, so I can update the jump when I know
        // the beginning of the function definition.
        $this->registerFunctionCallICL($calledFunctionName, $to_change_ic_line);

        //$ic_line = $this->getStatementData($context, "return_ic_line");
        //$this->updDat($ic_line, $this->lastIntermediateCodeLine() + 1);
    }

    public function exitFunctionCall(Context\FunctionCallContext $context): void
    {
        $line = $context->getStart()->getLine();

        $calledFunctionName = $context->ID()->getText();
        // creates an internal variable to store the return next ICL of the function call
        $this->insReg($line, 0, $this->lastIntermediateCodeLine() + 5);
        $this->insMem($line, 0, "return");
        $this->insPSHCS($line);

        $to_change_ic_line = $this->insLCALL($line, $calledFunctionName);
        // register the ICL where the function is called, so I can update the jump when I know
        // the beginning of the function definition.
        $this->registerFunctionCallICL($calledFunctionName, $to_change_ic_line);
    }

    public function exitMoveStatement(Context\MoveStatementContext $context): void
    {
        $line = $context->getStart()->getLine();
        $this->insSys($line, "move");
        $this->insAwait($line, "arrived");
    }

    public function exitProgram(Context\ProgramContext $context): void
    {
        $line = $context->getStop()->getLine();
        $this->insEND($line);
        $this->updateFunctionCallsICL();
    }
}
