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
    case reg;
    case psh;
    case pop;
    case add;
    case sub;
    case mul;
    case div;
    case mem;
    case get;

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
        };
    }
}

class GameLangSpecificListener extends GameLangBaseListener
{
    private $code = [];

    public function getCode()
    {
        return $this->code;
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
    foreach ($code as $line) {
        [$lineNumber, $op, $reg, $data] = $line;
        switch ($op) {
            case Operation::reg:
                $regs[$reg] = $data;
                break;
            case Operation::psh:
                array_push($stack, $regs[$reg]);
                break;
            case Operation::pop:
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
                    throw new \Exception("Undefined variable '$data'");
                }
                $value = $mem[$data];
                $regs[$reg] = $value;
                break;
        }
    }
    echo json_encode($mem, JSON_PRETTY_PRINT) . "\n";
}
