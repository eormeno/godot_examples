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
        $number = $context->NUMBER();
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

class GameLangSpecificListener extends GameLangBaseListener
{

    private $stack = [];

    public function valueOnStack()
    {
        return implode("\n", $this->stack);
    }

    public function enterExpression(Context\ExpressionContext $context): void
    {
        if ($context->NUMBER()) {
            array_push($this->stack, floatval($context->NUMBER()->getText()));
            //echo "INT: " . $context->INT()->getText() . "\n";
        }
    }

    public function exitExpression(Context\ExpressionContext $context): void
    {
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
        // array_push($this->stack, $op->getText());
        // echo "OP: $op\n";
        $right = array_pop($this->stack);
        $left = array_pop($this->stack);
        $res = 0;
        switch ($op) {
            case '+':
                $res = $left + $right;
                break;
            case '-':
                $res = $left - $right;
                break;
            case '*':
                $res = $left * $right;
                break;
            case '/':
                $res = $left / $right;
                break;
        }
        array_push($this->stack, $res);
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

echo $listener->valueOnStack() . "\n";
