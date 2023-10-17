<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/AdventureLexer.php';
require_once __DIR__ . '/AdventureParser.php';

use App\Parser\AdventureLexer;
use App\Parser\AdventureParser;
use App\Parser\Context\AssignmentContext as AssignmentContext;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;


final class TreeShapeListener implements ParseTreeListener {

    private $vars = [];

    public function visitTerminal(TerminalNode $node) : void {
    }
    public function visitErrorNode(ErrorNode $node) : void {
        $line = $node->getSymbol()->getLine();
        $msg = $node->getSymbol()->getText();
        echo "Error on line " . $line . ": " . $msg . "\n";

    }
    public function exitEveryRule(ParserRuleContext $ctx) : void {
    }

    public function enterEveryRule(ParserRuleContext $ctx) : void {
        echo get_class($ctx) . "\n";
        if ($ctx instanceof AssignmentContext) {
            $id = $ctx->ID()->getText();
            $expr = $ctx->expression()->getText();
            echo "Var:\t" . $id . " = " . $expr . "\n";
            $this->vars[$id] = $expr;
        }
        if ($ctx instanceof Context\Move_statementContext) {
            $id_expr = $ctx->expression()->ID();
            $str_expr = $ctx->expression()->STRING();
            $value = null;
            if ($id_expr != null) {
                $id = $id_expr->getText();
                $value = $this->vars[$id];
            } else if ($str_expr != null) {
                $value = $str_expr->getText();
            } else {
                $value = $ctx->expression()->getText();
            }
            echo "Move:\t" . $value . "\n";
        }

        if ($ctx instanceof Context\Take_statementContext) {
            $id_expr = $ctx->expression()->ID();
            $str_expr = $ctx->expression()->STRING();
            $value = null;
            if ($id_expr != null) {
                $id = $id_expr->getText();
                $value = $this->vars[$id];
            } else if ($str_expr != null) {
                $value = $str_expr->getText();
            } else {
                $value = $ctx->expression()->getText();
            }
            echo "Take:\t" . $value . "\n";
        }
    }
}

$input = InputStream::fromPath($argv[1]);
$lexer = new AdventureLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new AdventureParser($tokens);
$parser->addErrorListener(new DiagnosticErrorListener());
$tree = $parser->program();

ParseTreeWalker::default()->walk(new TreeShapeListener(), $tree);
