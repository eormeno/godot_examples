<?php

/*
 * Generated from GameLang.g4 by ANTLR 4.13.1
 */

namespace App\Parsers\GameLang;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GameLangParser}.
 */
interface GameLangVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see GameLangParser::program()}.
	 *
	 * @param Context\ProgramContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProgram(Context\ProgramContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::character()}.
	 *
	 * @param Context\CharacterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCharacter(Context\CharacterContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::parameters()}.
	 *
	 * @param Context\ParametersContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameters(Context\ParametersContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::timeUnit()}.
	 *
	 * @param Context\TimeUnitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTimeUnit(Context\TimeUnitContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::statement()}.
	 *
	 * @param Context\StatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStatement(Context\StatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::printable()}.
	 *
	 * @param Context\PrintableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrintable(Context\PrintableContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::consoleStatement()}.
	 *
	 * @param Context\ConsoleStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConsoleStatement(Context\ConsoleStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::whileStatement()}.
	 *
	 * @param Context\WhileStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWhileStatement(Context\WhileStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::doStatement()}.
	 *
	 * @param Context\DoStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDoStatement(Context\DoStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::ifStatement()}.
	 *
	 * @param Context\IfStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIfStatement(Context\IfStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::thenStatement()}.
	 *
	 * @param Context\ThenStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitThenStatement(Context\ThenStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::elseStatement()}.
	 *
	 * @param Context\ElseStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElseStatement(Context\ElseStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::assignment()}.
	 *
	 * @param Context\AssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment(Context\AssignmentContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::afterTimer()}.
	 *
	 * @param Context\AfterTimerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAfterTimer(Context\AfterTimerContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::everyTimer()}.
	 *
	 * @param Context\EveryTimerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEveryTimer(Context\EveryTimerContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::functionCall()}.
	 *
	 * @param Context\FunctionCallContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionCall(Context\FunctionCallContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::lineFunctionCall()}.
	 *
	 * @param Context\LineFunctionCallContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLineFunctionCall(Context\LineFunctionCallContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::functionDef()}.
	 *
	 * @param Context\FunctionDefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionDef(Context\FunctionDefContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::num()}.
	 *
	 * @param Context\NumContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNum(Context\NumContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::expression()}.
	 *
	 * @param Context\ExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression(Context\ExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::logicExpression()}.
	 *
	 * @param Context\LogicExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogicExpression(Context\LogicExpressionContext $context);
}