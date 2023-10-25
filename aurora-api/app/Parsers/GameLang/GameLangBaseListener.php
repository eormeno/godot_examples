<?php

/*
 * Generated from GameLang.g4 by ANTLR 4.13.1
 */

namespace App\Parsers\GameLang;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

/**
 * This class provides an empty implementation of {@see GameLangListener},
 * which can be extended to create a listener which only needs to handle a subset
 * of the available methods.
 */
class GameLangBaseListener implements GameLangListener
{
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterProgram(Context\ProgramContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitProgram(Context\ProgramContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterCharacter(Context\CharacterContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitCharacter(Context\CharacterContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterDefinitions(Context\DefinitionsContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitDefinitions(Context\DefinitionsContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterState(Context\StateContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitState(Context\StateContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTransition(Context\TransitionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTransition(Context\TransitionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTimeUnit(Context\TimeUnitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTimeUnit(Context\TimeUnitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterStatement(Context\StatementContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitStatement(Context\StatementContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterWhileStatement(Context\WhileStatementContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitWhileStatement(Context\WhileStatementContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIfStatement(Context\IfStatementContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIfStatement(Context\IfStatementContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAssignment(Context\AssignmentContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAssignment(Context\AssignmentContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAnimationDef(Context\AnimationDefContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAnimationDef(Context\AnimationDefContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSoundDef(Context\SoundDefContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSoundDef(Context\SoundDefContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAttributeCall(Context\AttributeCallContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAttributeCall(Context\AttributeCallContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterEntering(Context\EnteringContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitEntering(Context\EnteringContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterExiting(Context\ExitingContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitExiting(Context\ExitingContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAfterTimer(Context\AfterTimerContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAfterTimer(Context\AfterTimerContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterEveryTimer(Context\EveryTimerContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitEveryTimer(Context\EveryTimerContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterMethodCall(Context\MethodCallContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitMethodCall(Context\MethodCallContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFunctionDef(Context\FunctionDefContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFunctionDef(Context\FunctionDefContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterExpression(Context\ExpressionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitExpression(Context\ExpressionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterCondition(Context\ConditionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitCondition(Context\ConditionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterEveryRule(ParserRuleContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitEveryRule(ParserRuleContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function visitTerminal(TerminalNode $node): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function visitErrorNode(ErrorNode $node): void {}
}