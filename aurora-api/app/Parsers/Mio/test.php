<?php

namespace App\Parsers\Mio;

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

final class TreeShapeListener implements MioListener {

    public function visitTerminal(TerminalNode $node): void {
        // echo "visitTerminal\n";
    }
    public function visitErrorNode(ErrorNode $node): void {
        // echo "visitErrorNode\n";
    }
    public function enterEveryRule(ParserRuleContext $ctx): void {
        // echo "enterEveryRule\n";
    }
    public function exitEveryRule(ParserRuleContext $ctx): void {
        // echo "exitEveryRule\n";
    }
    public function enterProgram(Context\ProgramContext $context): void {}
	/**
	 * Exit a parse tree produced by {@see MioParser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void {}
	/**
	 * Enter a parse tree produced by {@see MioParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context): void {}
	/**
	 * Exit a parse tree produced by {@see MioParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context): void {}
	/**
	 * Enter a parse tree produced by {@see MioParser::moveStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterMoveStatement(Context\MoveStatementContext $context): void {}
	/**
	 * Exit a parse tree produced by {@see MioParser::moveStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitMoveStatement(Context\MoveStatementContext $context): void {}
	/**
	 * Enter a parse tree produced by {@see MioParser::takeStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterTakeStatement(Context\TakeStatementContext $context): void {}
	/**
	 * Exit a parse tree produced by {@see MioParser::takeStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitTakeStatement(Context\TakeStatementContext $context): void {}
	/**
	 * Enter a parse tree produced by {@see MioParser::repeatStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterRepeatStatement(Context\RepeatStatementContext $context): void {}
	/**
	 * Exit a parse tree produced by {@see MioParser::repeatStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitRepeatStatement(Context\RepeatStatementContext $context): void {}
	/**
	 * Enter a parse tree produced by {@see MioParser::ifStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStatement(Context\IfStatementContext $context): void {}
	/**
	 * Exit a parse tree produced by {@see MioParser::ifStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStatement(Context\IfStatementContext $context): void {}
	/**
	 * Enter a parse tree produced by {@see MioParser::assignmentStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignmentStatement(Context\AssignmentStatementContext $context): void {}
	/**
	 * Exit a parse tree produced by {@see MioParser::assignmentStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignmentStatement(Context\AssignmentStatementContext $context): void {}
	/**
	 * Enter a parse tree produced by {@see MioParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context): void {}
	/**
	 * Exit a parse tree produced by {@see MioParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context): void {}
	/**
	 * Enter a parse tree produced by {@see MioParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function enterCondition(Context\ConditionContext $context): void {}
	/**
	 * Exit a parse tree produced by {@see MioParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function exitCondition(Context\ConditionContext $context): void {}
}

class MyErrorListener extends DiagnosticErrorListener {
    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $e
    ) : void {
        // echo the error and the line
        echo "Error: " . $msg . " on line " . $line . "\n";
        // throw new ParseCancellationException($msg, 0, $e);
    }
}

$input = InputStream::fromPath("example1.mio");
$lexer = new MioLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new MioParser($tokens);
$parser->addErrorListener(new MyErrorListener());
$tree = $parser->program();
$ruleNames = $parser->getRuleNames();
// foreach ($ruleNames as $ruleName) {
//     echo $ruleName . "\n";
// }

ParseTreeWalker::default()->walk(new TreeShapeListener(), $tree);
