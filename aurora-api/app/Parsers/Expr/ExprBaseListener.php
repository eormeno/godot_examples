<?php

/*
 * Generated from Expr.g4 by ANTLR 4.13.1
 */
namespace App\Parsers\Expr;

use App\Parsers\Expr\Context\ProgContext;
use App\Parsers\Expr\Context\ExprContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

/**
 * This class provides an empty implementation of {@see ExprListener},
 * which can be extended to create a listener which only needs to handle a subset
 * of the available methods.
 */
class ExprBaseListener implements ExprListener
{
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterProg(ProgContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitProg(ProgContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterExpr(ExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitExpr(ExprContext $context): void {}

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
