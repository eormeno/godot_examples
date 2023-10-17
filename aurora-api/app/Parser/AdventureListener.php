<?php

namespace App\Parser;

/*
 * Generated from Adventure.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see AdventureParser}.
 */
interface AdventureListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see AdventureParser::program()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context): void;
	/**
	 * Exit a parse tree produced by {@see AdventureParser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void;
	/**
	 * Enter a parse tree produced by {@see AdventureParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see AdventureParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see AdventureParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignment(Context\AssignmentContext $context): void;
	/**
	 * Exit a parse tree produced by {@see AdventureParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignment(Context\AssignmentContext $context): void;
	/**
	 * Enter a parse tree produced by {@see AdventureParser::move_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterMove_statement(Context\Move_statementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see AdventureParser::move_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitMove_statement(Context\Move_statementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see AdventureParser::take_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterTake_statement(Context\Take_statementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see AdventureParser::take_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitTake_statement(Context\Take_statementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see AdventureParser::statements()}.
	 * @param $context The parse tree.
	 */
	public function enterStatements(Context\StatementsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see AdventureParser::statements()}.
	 * @param $context The parse tree.
	 */
	public function exitStatements(Context\StatementsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see AdventureParser::if_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterIf_statement(Context\If_statementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see AdventureParser::if_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitIf_statement(Context\If_statementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see AdventureParser::repeat_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterRepeat_statement(Context\Repeat_statementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see AdventureParser::repeat_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitRepeat_statement(Context\Repeat_statementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see AdventureParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see AdventureParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see AdventureParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function enterCondition(Context\ConditionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see AdventureParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function exitCondition(Context\ConditionContext $context): void;
}
