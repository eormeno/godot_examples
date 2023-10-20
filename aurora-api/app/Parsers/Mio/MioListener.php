<?php

/*
 * Generated from Mio.g4 by ANTLR 4.13.1
 */

namespace App\Parsers\Mio;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see MioParser}.
 */
interface MioListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see MioParser::program()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context): void;
	/**
	 * Exit a parse tree produced by {@see MioParser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void;
	/**
	 * Enter a parse tree produced by {@see MioParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see MioParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see MioParser::moveStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterMoveStatement(Context\MoveStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see MioParser::moveStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitMoveStatement(Context\MoveStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see MioParser::takeStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterTakeStatement(Context\TakeStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see MioParser::takeStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitTakeStatement(Context\TakeStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see MioParser::repeatStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterRepeatStatement(Context\RepeatStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see MioParser::repeatStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitRepeatStatement(Context\RepeatStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see MioParser::ifStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStatement(Context\IfStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see MioParser::ifStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStatement(Context\IfStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see MioParser::assignmentStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignmentStatement(Context\AssignmentStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see MioParser::assignmentStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignmentStatement(Context\AssignmentStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see MioParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see MioParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see MioParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function enterCondition(Context\ConditionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see MioParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function exitCondition(Context\ConditionContext $context): void;
}