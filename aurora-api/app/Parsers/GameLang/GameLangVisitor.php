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
	 * Visit a parse tree produced by {@see GameLangParser::definitions()}.
	 *
	 * @param Context\DefinitionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefinitions(Context\DefinitionsContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::state()}.
	 *
	 * @param Context\StateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitState(Context\StateContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::transition()}.
	 *
	 * @param Context\TransitionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTransition(Context\TransitionContext $context);

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
	 * Visit a parse tree produced by {@see GameLangParser::whileStatement()}.
	 *
	 * @param Context\WhileStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWhileStatement(Context\WhileStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::ifStatement()}.
	 *
	 * @param Context\IfStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIfStatement(Context\IfStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::assignment()}.
	 *
	 * @param Context\AssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment(Context\AssignmentContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::animationDef()}.
	 *
	 * @param Context\AnimationDefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAnimationDef(Context\AnimationDefContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::soundDef()}.
	 *
	 * @param Context\SoundDefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSoundDef(Context\SoundDefContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::attributeCall()}.
	 *
	 * @param Context\AttributeCallContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAttributeCall(Context\AttributeCallContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::entering()}.
	 *
	 * @param Context\EnteringContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEntering(Context\EnteringContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::exiting()}.
	 *
	 * @param Context\ExitingContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExiting(Context\ExitingContext $context);

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
	 * Visit a parse tree produced by {@see GameLangParser::methodCall()}.
	 *
	 * @param Context\MethodCallContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMethodCall(Context\MethodCallContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::functionDef()}.
	 *
	 * @param Context\FunctionDefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionDef(Context\FunctionDefContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::expression()}.
	 *
	 * @param Context\ExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression(Context\ExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see GameLangParser::condition()}.
	 *
	 * @param Context\ConditionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCondition(Context\ConditionContext $context);
}