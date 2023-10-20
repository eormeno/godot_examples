<?php

/*
 * Generated from Expr.g4 by ANTLR 4.13.1
 */

namespace App\Parsers\Expr
{
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class ExprParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6,
               NEWLINE = 7, INT = 8;

		public const RULE_prog = 0, RULE_expr = 1;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'prog', 'expr'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'*'", "'/'", "'+'", "'-'", "'('", "')'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, "NEWLINE", "INT"
		];

		private const SERIALIZED_ATN =
			[4, 1, 8, 32, 2, 0, 7, 0, 2, 1, 7, 1, 1, 0, 1, 0, 1, 0, 5, 0, 8, 8, 0,
		    10, 0, 12, 0, 11, 9, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1,
		    19, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 5, 1, 27, 8, 1, 10,
		    1, 12, 1, 30, 9, 1, 1, 1, 0, 1, 2, 2, 0, 2, 0, 2, 1, 0, 1, 2, 1, 0,
		    3, 4, 33, 0, 9, 1, 0, 0, 0, 2, 18, 1, 0, 0, 0, 4, 5, 3, 2, 1, 0, 5,
		    6, 5, 7, 0, 0, 6, 8, 1, 0, 0, 0, 7, 4, 1, 0, 0, 0, 8, 11, 1, 0, 0,
		    0, 9, 7, 1, 0, 0, 0, 9, 10, 1, 0, 0, 0, 10, 1, 1, 0, 0, 0, 11, 9,
		    1, 0, 0, 0, 12, 13, 6, 1, -1, 0, 13, 19, 5, 8, 0, 0, 14, 15, 5, 5,
		    0, 0, 15, 16, 3, 2, 1, 0, 16, 17, 5, 6, 0, 0, 17, 19, 1, 0, 0, 0,
		    18, 12, 1, 0, 0, 0, 18, 14, 1, 0, 0, 0, 19, 28, 1, 0, 0, 0, 20, 21,
		    10, 4, 0, 0, 21, 22, 7, 0, 0, 0, 22, 27, 3, 2, 1, 5, 23, 24, 10, 3,
		    0, 0, 24, 25, 7, 1, 0, 0, 25, 27, 3, 2, 1, 4, 26, 20, 1, 0, 0, 0,
		    26, 23, 1, 0, 0, 0, 27, 30, 1, 0, 0, 0, 28, 26, 1, 0, 0, 0, 28, 29,
		    1, 0, 0, 0, 29, 3, 1, 0, 0, 0, 30, 28, 1, 0, 0, 0, 4, 9, 18, 26, 28];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Expr.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function prog(): Context\ProgContext
		{
		    $localContext = new Context\ProgContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_prog);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(9);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4 || $_la === self::INT) {
		        	$this->setState(4);
		        	$this->recursiveExpr(0);
		        	$this->setState(5);
		        	$this->match(self::NEWLINE);
		        	$this->setState(11);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expr(): Context\ExprContext
		{
			return $this->recursiveExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpr(int $precedence): Context\ExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 2;
			$this->enterRecursionRule($localContext, 2, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(18);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::INT:
				    	$this->setState(13);
				    	$this->match(self::INT);
				    	break;

				    case self::T__4:
				    	$this->setState(14);
				    	$this->match(self::T__4);
				    	$this->setState(15);
				    	$this->recursiveExpr(0);
				    	$this->setState(16);
				    	$this->match(self::T__5);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(28);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(26);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExprContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(20);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(21);

							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__0 || $_la === self::T__1)) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(22);
							    $this->recursiveExpr(5);
							break;

							case 2:
							    $localContext = new Context\ExprContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(23);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(24);

							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__2 || $_la === self::T__3)) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(25);
							    $this->recursiveExpr(4);
							break;
						}
					}

					$this->setState(30);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 1:
						return $this->sempredExpr($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpr(?Context\ExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 4);

			    case 1:
			        return $this->precpred($this->ctx, 3);
			}

			return true;
		}
	}
}

namespace App\Parsers\Expr\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use App\Parsers\Expr\ExprParser;
	use ExprListener;

	class ProgContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ExprParser::RULE_prog;
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function NEWLINE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ExprParser::NEWLINE);
	    	}

	        return $this->getToken(ExprParser::NEWLINE, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof ExprListener) {
			    $listener->enterProg($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof ExprListener) {
			    $listener->exitProg($this);
		    }
		}
	}

	class ExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ExprParser::RULE_expr;
	    }

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(ExprParser::INT, 0);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof ExprListener) {
			    $listener->enterExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof ExprListener) {
			    $listener->exitExpr($this);
		    }
		}
	}
}
