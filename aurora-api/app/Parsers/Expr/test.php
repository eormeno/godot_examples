<?php

namespace App\Parsers\Expr;
require_once __DIR__ . '/../../../vendor/autoload.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

final class TreeShapeListener implements ExprListener {
    public function enterProg(Context\ProgContext $context): void {
    }
    public function exitProg(Context\ProgContext $context): void {
    }

    public function enterExpr(Context\ExprContext $context): void {
    }

    public function exitExpr(Context\ExprContext $context): void {
    }

    public function visitTerminal(TerminalNode $node): void {
        echo $node->getSymbol()->getText() . "\n";
    }

    public function visitErrorNode(ErrorNode $node): void {
    }

    public function enterEveryRule(ParserRuleContext $ctx): void {
    }

    public function exitEveryRule(ParserRuleContext $ctx): void {
    }
}

$input = InputStream::fromPath("example");
$lexer = new ExprLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new ExprParser($tokens);
$parser->addErrorListener(new DiagnosticErrorListener());
$tree = $parser->expr();
$ruleNames = $parser->getRuleNames();
// echo $tree->toStringTree($ruleNames) . "\n";

ParseTreeWalker::default()->walk(new TreeShapeListener(), $tree);
