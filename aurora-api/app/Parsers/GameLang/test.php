<?php

namespace App\Parsers\GameLang;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Antlr\Antlr4\Runtime\Recognizer;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\Error\Exceptions\ParseCancellationException;

class MyErrorListener extends DiagnosticErrorListener
{
    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $e
    ): void {
        // echo the error and the line
        echo "Error: " . $msg . " on line " . $line . "\n";
        // throw new ParseCancellationException($msg, 0, $e);
    }
}

class GameLangSpecificVisitor extends GameLangBaseVisitor
{
    public function visitParameters(Context\ParametersContext $context)
    {
        $identificators = $context->ID();
        foreach ($identificators as $identificator) {
            // echo "param: $identificator \n";
        }
    }

    public function visitAssignment(Context\AssignmentContext $context)
    {
        $line = $context->getStart()->getLine();
        $identificator = $context->ID()->getText();
        $expression = $this->visit($context->expression());
        echo "$line:\t$identificator = $expression\n";
    }

    public function visitExpression(Context\ExpressionContext $context)
    {
        $res = "";
        $identificator = $context->ID();
        $plus = $context->PLUS();
        $minus = $context->MINUS();
        $multiply = $context->MULTIPLY();
        $divide = $context->DIVIDE();
        $leftParen = $context->LPAREN();
        $rightParen = $context->RPAREN();
        $number = $context->num();
        $string = $context->STRING();
        $method = $context->methodCall();
        $attribute = $context->attributeCall();
        $expression = $context->expression();
        if ($identificator)
            $res = "[" . $identificator->getText() . "]";
        elseif ($number)
            $res = $number->getText() . ".00";
        elseif ($string)
            $res = "\"" . $string->getText() . "\"";
        elseif ($method)
            $res = $this->visit($method);
        elseif ($attribute)
            $res = "->" . $attribute->getText();
        elseif ($plus)
            $res = $this->visit($context->expression(0)) . " + " . $this->visit($context->expression(1));
        elseif ($minus)
            $res = $this->visit($context->expression(0)) . " - " . $this->visit($context->expression(1));
        elseif ($multiply)
            $res = $this->visit($context->expression(0)) . " * " . $this->visit($context->expression(1));
        elseif ($divide)
            $res = $this->visit($context->expression(0)) . " / " . $this->visit($context->expression(1));
        elseif ($leftParen)
            $res = "'(" . $this->visit($context->expression(0)) . ")'";
        elseif ($rightParen)
            $res = "'(" . $this->visit($context->expression(0)) . ")'";
        elseif ($expression) {
            if (!is_array($expression)) {
                $res = $this->visit($expression);
            } else {
                $res = "";
                foreach ($expression as $expr) {
                    $res .= $this->visit($expr) . " ";
                }
            }
        }

        return $res;
    }
}
enum Operation implements \JsonSerializable
{
    case reg; // register
    case psh; // push
    case pop; // pop
    case add; // math add operation
    case sub; // math substract operation
    case mul; // math muliplication operation
    case div; // math div operation
    case lor; // logical or
    case and; // logical and
    case grt; // greater than
    case not; // not
    case lst; // less than
    case gte; // greater than or equal
    case lte; // less than or equal
    case eql; // equal
    case neq; // not equal
    case mem; // store in memory
    case get; // get from memory
    case out; // output
    case inp; // input
    case ifi; // if instruction
    case cat; // concatenate
    case jmp; // jump

    public function jsonSerialize()
    {
        return match ($this) {
            self::psh => 'psh',
            self::pop => 'pop',
            self::add => 'add',
            self::sub => 'sub',
            self::mul => 'mul',
            self::div => 'div',
            self::reg => 'reg',
            self::mem => 'mem',
            self::get => 'get',
            self::lor => 'lor',
            self::and => 'and',
            self::grt => 'grt',
            self::lst => 'lst',
            self::gte => 'gte',
            self::lte => 'lte',
            self::eql => 'eql',
            self::neq => 'neq',
            self::not => 'not',
            self::out => 'out',
            self::inp => 'inp',
            self::ifi => 'ifi',
            self::cat => 'cat',
            self::jmp => 'jmp',
        };
    }
}

class GameLangSpecificListener extends GameLangBaseListener
{

    /**
     * Represents an unknown intermediate code line.
     */
    private const UNKOWN_IC_LINE = -1;

    private $code = [];

    private $jumpStack = [];

    public function getCode()
    {
        return $this->code;
    }

    public function lastIndex() : int {
        return count($this->code) - 1;
    }

    private function insReg(int $line, int $reg, $data): void
    {
        $this->code[] = [
            $line,
            Operation::reg,
            $reg,
            $data
        ];
    }

    private function insMem(int $line, int $reg, string $identificator): void
    {
        $this->code[] = [
            $line,
            Operation::mem,
            $reg,
            $identificator
        ];
    }

    private function insGet(int $line, int $reg, string $identificator): void
    {
        $this->code[] = [
            $line,
            Operation::get,
            $reg,
            $identificator
        ];
    }

    private function insPsh(int $line, int $reg): void
    {
        $this->code[] = [
            $line,
            Operation::psh,
            $reg,
            null
        ];
    }

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

    private function pushJMP(int $line, int $jump_to): void
    {
        $this->code[] = [
            $line,
            Operation::jmp,
            null,
            $jump_to
        ];
        array_push($this->jumpStack, $this->lastIndex());
    }

    private function pushIIF(int $line, int $jump_to): void
    {
        $this->code[] = [
            $line,
            Operation::ifi,
            null,
            $jump_to
        ];
        array_push($this->jumpStack, $this->lastIndex());
    }

    private function updaIIf(int $jump_to): void {
        $idx = array_pop($this->jumpStack);
        $this->code[$idx][3] = $jump_to;
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

    public function enterThenStatement(Context\ThenStatementContext $context) : void {
        $line = $context->getStart()->getLine();
        // This is the beginning of the then statement, so at this point, the logicExpression
        // has been evaluated and its result is in the top of the stack machine.
        $this->insPop($line, 0); // pop the logicExpression result and store it in reg[0]
        // Now, reg[0] will have the result of the logicExpression.
        // If reg[0] is false, we need to jump to the end of the if statement or the else statement.
        // But, by the moment, both are UNKNOWN, so we need to stack the iif operation for its
        // latter updating, when we know the end of the current if statement or the beginning of
        // its else statement (if it has one).
        $this->pushIIF($line, self::UNKOWN_IC_LINE);
    }

    public function exitThenStatement(Context\ThenStatementContext $context) : void {
        // This is the end of the then statements block. Here we need to jump to the end of the if
        // statement, just in case the current if statement has an else statement.
    }

    public function enterElseStatement(Context\ElseStatementContext $context) : void {
    }

    public function exitIfStatement(Context\IfStatementContext $context): void
    {
        // at this point, we need to update the index of the end of the if statement
        // with the current index of the code
        $this->updaIIf($this->lastIndex());
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
}

$input = InputStream::fromPath("example-1.gl");
$lexer = new GameLangLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new GameLangParser($tokens);
$parser->addErrorListener(new MyErrorListener());
$tree = $parser->program();
$visitor = new GameLangSpecificVisitor();

$listener = new GameLangSpecificListener();
// $visitor->visit($tree);
ParseTreeWalker::default()->walk($listener, $tree);

try {
    runCode($listener->getCode());
} catch (\Exception $e) {
    echo $e->getMessage() . "\n";
}

function runCode(array $code)
{
    $stack = [];
    $regs = [3];
    $mem = [];
    for ($i = 0; $i < count($code); $i++) {
        [$lineNumber, $op, $reg, $data] = $code[$i];
        switch ($op) {
            case Operation::reg:
                $regs[$reg] = $data;
                break;
            case Operation::psh:
                array_push($stack, $regs[$reg]);
                break;
            case Operation::pop:
                if ($reg == 9) {
                    dd($i, count($code));
                }
                $regs[$reg] = array_pop($stack);
                break;
            case Operation::add:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left + $right;
                break;
            case Operation::sub:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left - $right;
                break;
            case Operation::mul:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left * $right;
                break;
            case Operation::div:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left / $right;
                break;
            case Operation::mem:
                $result = $regs[$reg];
                $mem[$data] = $result;
                break;
            case Operation::get:
                if (!array_key_exists($data, $mem)) {
                    throw new \Exception("Undefined variable '$data' at line $lineNumber.");
                }
                $value = $mem[$data];
                $regs[$reg] = $value;
                break;
            case Operation::eql:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left == $right;
                break;
            case Operation::neq:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left != $right;
                break;
            case Operation::grt:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left > $right;
                break;
            case Operation::lst:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left < $right;
                break;
            case Operation::gte:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left >= $right;
                break;
            case Operation::lte:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left <= $right;
                break;
            case Operation::lor:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left || $right;
                break;
            case Operation::and:
                $left = $regs[1];
                $right = $regs[2];
                $regs[$reg] = $left && $right;
                break;
            case Operation::not:
                $left = $regs[1];
                $regs[$reg] = !$left;
                break;
            case Operation::cat:
                $left = $regs[1];
                $right = $regs[2];
                if (is_bool($left)) {
                    $left = $left ? 'V' : 'F';
                }
                if (is_bool($right)) {
                    $right = $right ? 'V' : 'F';
                }
                $regs[$reg] = $left . $right;
                break;
            case Operation::out:
                $str = $regs[$reg];
                echo $str . "\n";
                break;
            case Operation::ifi:
                // dd($regs[0], $regs[1], $i, count($code));
                $condition = $regs[0];
                if (!$condition) {
                    // dd($i, $regs[1]);
                    $i = $data;
                }
                break;
            case Operation::jmp:
                $i = $data;
                break;
        }
    }
    // echo json_encode($mem, JSON_PRETTY_PRINT) . "\n";
}
