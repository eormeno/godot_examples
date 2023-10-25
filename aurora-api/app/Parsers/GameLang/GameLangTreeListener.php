<?php
namespace App\Parsers\GameLang;

use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

final class TreeShapeListener implements GameLangListener
{
    public function visitTerminal(TerminalNode $node): void
    {
    }

    public function visitErrorNode(ErrorNode $node): void
    {
    }

    public function enterEveryRule(ParserRuleContext $ctx): void
    {
    }

    public function exitEveryRule(ParserRuleContext $ctx): void
    {
    }

    public function enterProgram(Context\ProgramContext $context): void
    {
    }
    public function exitProgram(Context\ProgramContext $context): void
    {
    }
    public function enterCharacter(Context\CharacterContext $context): void
    {
    }
    public function exitCharacter(Context\CharacterContext $context): void
    {
    }
    public function enterDefinitions(Context\DefinitionsContext $context): void
    {
    }
    public function exitDefinitions(Context\DefinitionsContext $context): void
    {
    }
    public function enterState(Context\StateContext $context): void
    {
    }
    public function exitState(Context\StateContext $context): void
    {
    }
    public function enterTransition(Context\TransitionContext $context): void
    {
    }
    public function exitTransition(Context\TransitionContext $context): void
    {
    }
    public function enterTimeUnit(Context\TimeUnitContext $context): void
    {
    }
    public function exitTimeUnit(Context\TimeUnitContext $context): void
    {
    }
    public function enterStatement(Context\StatementContext $context): void
    {
    }
    public function exitStatement(Context\StatementContext $context): void
    {
    }
    public function enterWhileStatement(Context\WhileStatementContext $context): void
    {
    }
    public function exitWhileStatement(Context\WhileStatementContext $context): void
    {
    }
    public function enterIfStatement(Context\IfStatementContext $context): void
    {
    }
    public function exitIfStatement(Context\IfStatementContext $context): void
    {
    }
    public function enterAssignment(Context\AssignmentContext $context): void
    {
    }
    public function exitAssignment(Context\AssignmentContext $context): void
    {
    }
    public function enterAnimationDef(Context\AnimationDefContext $context): void
    {
    }
    public function exitAnimationDef(Context\AnimationDefContext $context): void
    {
    }
    public function enterSoundDef(Context\SoundDefContext $context): void
    {
    }
    public function exitSoundDef(Context\SoundDefContext $context): void
    {
    }
    public function enterAttributeCall(Context\AttributeCallContext $context): void
    {
    }
    public function exitAttributeCall(Context\AttributeCallContext $context): void
    {
    }
    public function enterEntering(Context\EnteringContext $context): void
    {
    }
    public function exitEntering(Context\EnteringContext $context): void
    {
    }
    public function enterExiting(Context\ExitingContext $context): void
    {
    }
    public function exitExiting(Context\ExitingContext $context): void
    {
    }
    public function enterAfterTimer(Context\AfterTimerContext $context): void
    {
    }
    public function exitAfterTimer(Context\AfterTimerContext $context): void
    {
    }
    public function enterEveryTimer(Context\EveryTimerContext $context): void
    {
    }
    public function exitEveryTimer(Context\EveryTimerContext $context): void
    {
    }
    public function enterMethodCall(Context\MethodCallContext $context): void
    {
    }
    public function exitMethodCall(Context\MethodCallContext $context): void
    {
    }
    public function enterFunctionDef(Context\FunctionDefContext $context): void
    {
    }
    public function exitFunctionDef(Context\FunctionDefContext $context): void
    {
    }
    public function enterExpression(Context\ExpressionContext $context): void
    {
    }
    public function exitExpression(Context\ExpressionContext $context): void
    {
    }
    public function enterCondition(Context\ConditionContext $context): void
    {
    }
    public function exitCondition(Context\ConditionContext $context): void
    {
    }
}
