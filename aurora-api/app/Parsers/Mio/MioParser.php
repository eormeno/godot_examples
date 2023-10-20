<?php

/*
 * Generated from Mio.g4 by ANTLR 4.13.1
 */

namespace App\Parsers\Mio {
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

	final class MioParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, ID = 17, 
               STRING = 18, INT = 19, PLUS = 20, MINUS = 21, MULTIPLY = 22, 
               DIVIDE = 23, LPAREN = 24, RPAREN = 25, WS = 26;

		public const RULE_program = 0, RULE_statement = 1, RULE_moveStatement = 2, 
               RULE_takeStatement = 3, RULE_repeatStatement = 4, RULE_ifStatement = 5, 
               RULE_assignmentStatement = 6, RULE_expression = 7, RULE_condition = 8;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'statement', 'moveStatement', 'takeStatement', 'repeatStatement', 
			'ifStatement', 'assignmentStatement', 'expression', 'condition'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'mover'", "'a'", "'tomar'", "'repetir'", "'veces'", "'fin'", 
		    "'si'", "'entonces'", "'sino'", "'='", "'=='", "'!='", "'<'", "'<='", 
		    "'>'", "'>='", null, null, null, "'+'", "'-'", "'*'", "'/'", "'('", 
		    "')'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, "ID", "STRING", "INT", "PLUS", 
		    "MINUS", "MULTIPLY", "DIVIDE", "LPAREN", "RPAREN", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 26, 104, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 1, 0, 4, 0, 
		    20, 8, 0, 11, 0, 12, 0, 21, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 29, 
		    8, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 
		    1, 4, 5, 4, 42, 8, 4, 10, 4, 12, 4, 45, 9, 4, 1, 4, 1, 4, 1, 5, 1, 
		    5, 1, 5, 1, 5, 5, 5, 53, 8, 5, 10, 5, 12, 5, 56, 9, 5, 1, 5, 1, 5, 
		    5, 5, 60, 8, 5, 10, 5, 12, 5, 63, 9, 5, 3, 5, 65, 8, 5, 1, 5, 1, 5, 
		    1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 
		    1, 7, 3, 7, 81, 8, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 
		    7, 1, 7, 1, 7, 1, 7, 1, 7, 5, 7, 95, 8, 7, 10, 7, 12, 7, 98, 9, 7, 
		    1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 0, 1, 14, 9, 0, 2, 4, 6, 8, 10, 12, 
		    14, 16, 0, 1, 1, 0, 11, 16, 110, 0, 19, 1, 0, 0, 0, 2, 28, 1, 0, 0, 
		    0, 4, 30, 1, 0, 0, 0, 6, 34, 1, 0, 0, 0, 8, 37, 1, 0, 0, 0, 10, 48, 
		    1, 0, 0, 0, 12, 68, 1, 0, 0, 0, 14, 80, 1, 0, 0, 0, 16, 99, 1, 0, 
		    0, 0, 18, 20, 3, 2, 1, 0, 19, 18, 1, 0, 0, 0, 20, 21, 1, 0, 0, 0, 
		    21, 19, 1, 0, 0, 0, 21, 22, 1, 0, 0, 0, 22, 1, 1, 0, 0, 0, 23, 29, 
		    3, 4, 2, 0, 24, 29, 3, 6, 3, 0, 25, 29, 3, 8, 4, 0, 26, 29, 3, 10, 
		    5, 0, 27, 29, 3, 12, 6, 0, 28, 23, 1, 0, 0, 0, 28, 24, 1, 0, 0, 0, 
		    28, 25, 1, 0, 0, 0, 28, 26, 1, 0, 0, 0, 28, 27, 1, 0, 0, 0, 29, 3, 
		    1, 0, 0, 0, 30, 31, 5, 1, 0, 0, 31, 32, 5, 2, 0, 0, 32, 33, 5, 18, 
		    0, 0, 33, 5, 1, 0, 0, 0, 34, 35, 5, 3, 0, 0, 35, 36, 5, 18, 0, 0, 
		    36, 7, 1, 0, 0, 0, 37, 38, 5, 4, 0, 0, 38, 39, 3, 14, 7, 0, 39, 43, 
		    5, 5, 0, 0, 40, 42, 3, 2, 1, 0, 41, 40, 1, 0, 0, 0, 42, 45, 1, 0, 
		    0, 0, 43, 41, 1, 0, 0, 0, 43, 44, 1, 0, 0, 0, 44, 46, 1, 0, 0, 0, 
		    45, 43, 1, 0, 0, 0, 46, 47, 5, 6, 0, 0, 47, 9, 1, 0, 0, 0, 48, 49, 
		    5, 7, 0, 0, 49, 50, 3, 16, 8, 0, 50, 54, 5, 8, 0, 0, 51, 53, 3, 2, 
		    1, 0, 52, 51, 1, 0, 0, 0, 53, 56, 1, 0, 0, 0, 54, 52, 1, 0, 0, 0, 
		    54, 55, 1, 0, 0, 0, 55, 64, 1, 0, 0, 0, 56, 54, 1, 0, 0, 0, 57, 61, 
		    5, 9, 0, 0, 58, 60, 3, 2, 1, 0, 59, 58, 1, 0, 0, 0, 60, 63, 1, 0, 
		    0, 0, 61, 59, 1, 0, 0, 0, 61, 62, 1, 0, 0, 0, 62, 65, 1, 0, 0, 0, 
		    63, 61, 1, 0, 0, 0, 64, 57, 1, 0, 0, 0, 64, 65, 1, 0, 0, 0, 65, 66, 
		    1, 0, 0, 0, 66, 67, 5, 6, 0, 0, 67, 11, 1, 0, 0, 0, 68, 69, 5, 17, 
		    0, 0, 69, 70, 5, 10, 0, 0, 70, 71, 3, 14, 7, 0, 71, 13, 1, 0, 0, 0, 
		    72, 73, 6, 7, -1, 0, 73, 81, 5, 19, 0, 0, 74, 81, 5, 18, 0, 0, 75, 
		    81, 5, 17, 0, 0, 76, 77, 5, 24, 0, 0, 77, 78, 3, 14, 7, 0, 78, 79, 
		    5, 25, 0, 0, 79, 81, 1, 0, 0, 0, 80, 72, 1, 0, 0, 0, 80, 74, 1, 0, 
		    0, 0, 80, 75, 1, 0, 0, 0, 80, 76, 1, 0, 0, 0, 81, 96, 1, 0, 0, 0, 
		    82, 83, 10, 5, 0, 0, 83, 84, 5, 20, 0, 0, 84, 95, 3, 14, 7, 6, 85, 
		    86, 10, 4, 0, 0, 86, 87, 5, 21, 0, 0, 87, 95, 3, 14, 7, 5, 88, 89, 
		    10, 3, 0, 0, 89, 90, 5, 22, 0, 0, 90, 95, 3, 14, 7, 4, 91, 92, 10, 
		    2, 0, 0, 92, 93, 5, 23, 0, 0, 93, 95, 3, 14, 7, 3, 94, 82, 1, 0, 0, 
		    0, 94, 85, 1, 0, 0, 0, 94, 88, 1, 0, 0, 0, 94, 91, 1, 0, 0, 0, 95, 
		    98, 1, 0, 0, 0, 96, 94, 1, 0, 0, 0, 96, 97, 1, 0, 0, 0, 97, 15, 1, 
		    0, 0, 0, 98, 96, 1, 0, 0, 0, 99, 100, 3, 14, 7, 0, 100, 101, 7, 0, 
		    0, 0, 101, 102, 3, 14, 7, 0, 102, 17, 1, 0, 0, 0, 9, 21, 28, 43, 54, 
		    61, 64, 80, 94, 96];
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
			return "Mio.g4";
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
		public function program(): Context\ProgramContext
		{
		    $localContext = new Context\ProgramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_program);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(19); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(18);
		        	$this->statement();
		        	$this->setState(21); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 131226) !== 0));
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
		public function statement(): Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_statement);

		    try {
		        $this->setState(28);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__0:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(23);
		            	$this->moveStatement();
		            	break;

		            case self::T__2:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(24);
		            	$this->takeStatement();
		            	break;

		            case self::T__3:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(25);
		            	$this->repeatStatement();
		            	break;

		            case self::T__6:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(26);
		            	$this->ifStatement();
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(27);
		            	$this->assignmentStatement();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
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
		public function moveStatement(): Context\MoveStatementContext
		{
		    $localContext = new Context\MoveStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_moveStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(30);
		        $this->match(self::T__0);
		        $this->setState(31);
		        $this->match(self::T__1);
		        $this->setState(32);
		        $this->match(self::STRING);
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
		public function takeStatement(): Context\TakeStatementContext
		{
		    $localContext = new Context\TakeStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_takeStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(34);
		        $this->match(self::T__2);
		        $this->setState(35);
		        $this->match(self::STRING);
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
		public function repeatStatement(): Context\RepeatStatementContext
		{
		    $localContext = new Context\RepeatStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_repeatStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(37);
		        $this->match(self::T__3);
		        $this->setState(38);
		        $this->recursiveExpression(0);
		        $this->setState(39);
		        $this->match(self::T__4);
		        $this->setState(43);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 131226) !== 0)) {
		        	$this->setState(40);
		        	$this->statement();
		        	$this->setState(45);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(46);
		        $this->match(self::T__5);
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
		public function ifStatement(): Context\IfStatementContext
		{
		    $localContext = new Context\IfStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_ifStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(48);
		        $this->match(self::T__6);
		        $this->setState(49);
		        $this->condition();
		        $this->setState(50);
		        $this->match(self::T__7);
		        $this->setState(54);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 131226) !== 0)) {
		        	$this->setState(51);
		        	$this->statement();
		        	$this->setState(56);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(64);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__8) {
		        	$this->setState(57);
		        	$this->match(self::T__8);
		        	$this->setState(61);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 131226) !== 0)) {
		        		$this->setState(58);
		        		$this->statement();
		        		$this->setState(63);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(66);
		        $this->match(self::T__5);
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
		public function assignmentStatement(): Context\AssignmentStatementContext
		{
		    $localContext = new Context\AssignmentStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_assignmentStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(68);
		        $this->match(self::ID);
		        $this->setState(69);
		        $this->match(self::T__9);
		        $this->setState(70);
		        $this->recursiveExpression(0);
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
		public function expression(): Context\ExpressionContext
		{
			return $this->recursiveExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpression(int $precedence): Context\ExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 14;
			$this->enterRecursionRule($localContext, 14, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(80);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::INT:
				    	$this->setState(73);
				    	$this->match(self::INT);
				    	break;

				    case self::STRING:
				    	$this->setState(74);
				    	$this->match(self::STRING);
				    	break;

				    case self::ID:
				    	$this->setState(75);
				    	$this->match(self::ID);
				    	break;

				    case self::LPAREN:
				    	$this->setState(76);
				    	$this->match(self::LPAREN);
				    	$this->setState(77);
				    	$this->recursiveExpression(0);
				    	$this->setState(78);
				    	$this->match(self::RPAREN);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(96);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(94);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(82);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(83);
							    $this->match(self::PLUS);
							    $this->setState(84);
							    $this->recursiveExpression(6);
							break;

							case 2:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(85);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(86);
							    $this->match(self::MINUS);
							    $this->setState(87);
							    $this->recursiveExpression(5);
							break;

							case 3:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(88);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(89);
							    $this->match(self::MULTIPLY);
							    $this->setState(90);
							    $this->recursiveExpression(4);
							break;

							case 4:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(91);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(92);
							    $this->match(self::DIVIDE);
							    $this->setState(93);
							    $this->recursiveExpression(3);
							break;
						} 
					}

					$this->setState(98);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);
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

		/**
		 * @throws RecognitionException
		 */
		public function condition(): Context\ConditionContext
		{
		    $localContext = new Context\ConditionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_condition);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(99);
		        $this->recursiveExpression(0);
		        $this->setState(100);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 129024) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(101);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 7:
						return $this->sempredExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 5);

			    case 1:
			        return $this->precpred($this->ctx, 4);

			    case 2:
			        return $this->precpred($this->ctx, 3);

			    case 3:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}
	}
}

namespace App\Parsers\Mio\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use App\Parsers\Mio\MioParser;
	use App\Parsers\Mio\MioListener;

	class ProgramContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return MioParser::RULE_program;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->exitProgram($this);
		    }
		}
	} 

	class StatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return MioParser::RULE_statement;
	    }

	    public function moveStatement(): ?MoveStatementContext
	    {
	    	return $this->getTypedRuleContext(MoveStatementContext::class, 0);
	    }

	    public function takeStatement(): ?TakeStatementContext
	    {
	    	return $this->getTypedRuleContext(TakeStatementContext::class, 0);
	    }

	    public function repeatStatement(): ?RepeatStatementContext
	    {
	    	return $this->getTypedRuleContext(RepeatStatementContext::class, 0);
	    }

	    public function ifStatement(): ?IfStatementContext
	    {
	    	return $this->getTypedRuleContext(IfStatementContext::class, 0);
	    }

	    public function assignmentStatement(): ?AssignmentStatementContext
	    {
	    	return $this->getTypedRuleContext(AssignmentStatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->enterStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->exitStatement($this);
		    }
		}
	} 

	class MoveStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return MioParser::RULE_moveStatement;
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->enterMoveStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->exitMoveStatement($this);
		    }
		}
	} 

	class TakeStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return MioParser::RULE_takeStatement;
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->enterTakeStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->exitTakeStatement($this);
		    }
		}
	} 

	class RepeatStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return MioParser::RULE_repeatStatement;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->enterRepeatStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->exitRepeatStatement($this);
		    }
		}
	} 

	class IfStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return MioParser::RULE_ifStatement;
	    }

	    public function condition(): ?ConditionContext
	    {
	    	return $this->getTypedRuleContext(ConditionContext::class, 0);
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->enterIfStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->exitIfStatement($this);
		    }
		}
	} 

	class AssignmentStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return MioParser::RULE_assignmentStatement;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::ID, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->enterAssignmentStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->exitAssignmentStatement($this);
		    }
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return MioParser::RULE_expression;
	    }

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::INT, 0);
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::STRING, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::ID, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::LPAREN, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::RPAREN, 0);
	    }

	    public function PLUS(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::PLUS, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::MINUS, 0);
	    }

	    public function MULTIPLY(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::MULTIPLY, 0);
	    }

	    public function DIVIDE(): ?TerminalNode
	    {
	        return $this->getToken(MioParser::DIVIDE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->enterExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->exitExpression($this);
		    }
		}
	} 

	class ConditionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return MioParser::RULE_condition;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->enterCondition($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof MioListener) {
			    $listener->exitCondition($this);
		    }
		}
	} 
}