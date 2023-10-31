<?php

/*
 * Generated from GameLang.g4 by ANTLR 4.13.1
 */

namespace App\Parsers\GameLang;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GameLangParser}.
 */
interface GameLangListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see GameLangParser::program()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::character()}.
	 * @param $context The parse tree.
	 */
	public function enterCharacter(Context\CharacterContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::character()}.
	 * @param $context The parse tree.
	 */
	public function exitCharacter(Context\CharacterContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::parameters()}.
	 * @param $context The parse tree.
	 */
	public function enterParameters(Context\ParametersContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::parameters()}.
	 * @param $context The parse tree.
	 */
	public function exitParameters(Context\ParametersContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::timeUnit()}.
	 * @param $context The parse tree.
	 */
	public function enterTimeUnit(Context\TimeUnitContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::timeUnit()}.
	 * @param $context The parse tree.
	 */
	public function exitTimeUnit(Context\TimeUnitContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::printable()}.
	 * @param $context The parse tree.
	 */
	public function enterPrintable(Context\PrintableContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::printable()}.
	 * @param $context The parse tree.
	 */
	public function exitPrintable(Context\PrintableContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::consoleStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterConsoleStatement(Context\ConsoleStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::consoleStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitConsoleStatement(Context\ConsoleStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::whileStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterWhileStatement(Context\WhileStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::whileStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitWhileStatement(Context\WhileStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::ifStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStatement(Context\IfStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::ifStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStatement(Context\IfStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignment(Context\AssignmentContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignment(Context\AssignmentContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::attributeCall()}.
	 * @param $context The parse tree.
	 */
	public function enterAttributeCall(Context\AttributeCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::attributeCall()}.
	 * @param $context The parse tree.
	 */
	public function exitAttributeCall(Context\AttributeCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::afterTimer()}.
	 * @param $context The parse tree.
	 */
	public function enterAfterTimer(Context\AfterTimerContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::afterTimer()}.
	 * @param $context The parse tree.
	 */
	public function exitAfterTimer(Context\AfterTimerContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::everyTimer()}.
	 * @param $context The parse tree.
	 */
	public function enterEveryTimer(Context\EveryTimerContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::everyTimer()}.
	 * @param $context The parse tree.
	 */
	public function exitEveryTimer(Context\EveryTimerContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::methodCall()}.
	 * @param $context The parse tree.
	 */
	public function enterMethodCall(Context\MethodCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::methodCall()}.
	 * @param $context The parse tree.
	 */
	public function exitMethodCall(Context\MethodCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::functionDef()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionDef(Context\FunctionDefContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::functionDef()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionDef(Context\FunctionDefContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::num()}.
	 * @param $context The parse tree.
	 */
	public function enterNum(Context\NumContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::num()}.
	 * @param $context The parse tree.
	 */
	public function exitNum(Context\NumContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GameLangParser::logicExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicExpression(Context\LogicExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GameLangParser::logicExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicExpression(Context\LogicExpressionContext $context): void;
}