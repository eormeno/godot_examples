<?php

namespace App\Parsers\GameLang;

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
