<?php

/*
 * Generated from Adventure.g4 by ANTLR 4.13.1
 */

namespace App\Parser;

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

final class AdventureParser extends Parser
{
    public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6,
            T__6 = 7, T__7 = 8, ID = 9, STRING = 10, NUMBER = 11, INDENT = 12,
            DEDENT = 13, WS = 14;

    public const RULE_program = 0, RULE_statement = 1, RULE_assignment = 2,
            RULE_move_statement = 3, RULE_take_statement = 4, RULE_statements = 5,
            RULE_if_statement = 6, RULE_repeat_statement = 7, RULE_expression = 8,
            RULE_condition = 9;

    /**
     * @var array<string>
     */
    public const RULE_NAMES = [
        'program', 'statement', 'assignment', 'move_statement', 'take_statement',
        'statements', 'if_statement', 'repeat_statement', 'expression', 'condition'
    ];

    /**
     * @var array<string|null>
     */
    private const LITERAL_NAMES = [
        null, "'var'", "'='", "'move to'", "'take'", "'if'", "':'", "'repeat'",
        "'until'", null, null, null, null, "'\\n'"
    ];

    /**
     * @var array<string>
     */
    private const SYMBOLIC_NAMES = [
        null, null, null, null, null, null, null, null, null, "ID", "STRING",
        "NUMBER", "INDENT", "DEDENT", "WS"
    ];

    private const SERIALIZED_ATN =
        [4, 1, 14, 75, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4,
        7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9,
        1, 0, 5, 0, 22, 8, 0, 10, 0, 12, 0, 25, 9, 0, 1, 1, 1, 1, 1, 1, 1,
        1, 1, 1, 3, 1, 32, 8, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 3,
        1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 4, 5, 50, 8,
        5, 11, 5, 12, 5, 51, 1, 5, 1, 5, 3, 5, 56, 8, 5, 1, 6, 1, 6, 1, 6,
        1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8,
        1, 8, 1, 9, 1, 9, 1, 9, 0, 0, 10, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18,
        0, 1, 1, 0, 9, 11, 71, 0, 23, 1, 0, 0, 0, 2, 31, 1, 0, 0, 0, 4, 33,
        1, 0, 0, 0, 6, 39, 1, 0, 0, 0, 8, 43, 1, 0, 0, 0, 10, 55, 1, 0, 0,
        0, 12, 57, 1, 0, 0, 0, 14, 63, 1, 0, 0, 0, 16, 70, 1, 0, 0, 0, 18,
        72, 1, 0, 0, 0, 20, 22, 3, 2, 1, 0, 21, 20, 1, 0, 0, 0, 22, 25, 1,
        0, 0, 0, 23, 21, 1, 0, 0, 0, 23, 24, 1, 0, 0, 0, 24, 1, 1, 0, 0, 0,
        25, 23, 1, 0, 0, 0, 26, 32, 3, 4, 2, 0, 27, 32, 3, 6, 3, 0, 28, 32,
        3, 8, 4, 0, 29, 32, 3, 12, 6, 0, 30, 32, 3, 14, 7, 0, 31, 26, 1, 0,
        0, 0, 31, 27, 1, 0, 0, 0, 31, 28, 1, 0, 0, 0, 31, 29, 1, 0, 0, 0,
        31, 30, 1, 0, 0, 0, 32, 3, 1, 0, 0, 0, 33, 34, 5, 1, 0, 0, 34, 35,
        5, 9, 0, 0, 35, 36, 5, 2, 0, 0, 36, 37, 3, 16, 8, 0, 37, 38, 5, 13,
        0, 0, 38, 5, 1, 0, 0, 0, 39, 40, 5, 3, 0, 0, 40, 41, 3, 16, 8, 0,
        41, 42, 5, 13, 0, 0, 42, 7, 1, 0, 0, 0, 43, 44, 5, 4, 0, 0, 44, 45,
        3, 16, 8, 0, 45, 46, 5, 13, 0, 0, 46, 9, 1, 0, 0, 0, 47, 49, 5, 12,
        0, 0, 48, 50, 3, 2, 1, 0, 49, 48, 1, 0, 0, 0, 50, 51, 1, 0, 0, 0,
        51, 49, 1, 0, 0, 0, 51, 52, 1, 0, 0, 0, 52, 53, 1, 0, 0, 0, 53, 54,
        5, 13, 0, 0, 54, 56, 1, 0, 0, 0, 55, 47, 1, 0, 0, 0, 55, 56, 1, 0,
        0, 0, 56, 11, 1, 0, 0, 0, 57, 58, 5, 5, 0, 0, 58, 59, 3, 16, 8, 0,
        59, 60, 5, 6, 0, 0, 60, 61, 5, 13, 0, 0, 61, 62, 3, 10, 5, 0, 62,
        13, 1, 0, 0, 0, 63, 64, 5, 7, 0, 0, 64, 65, 5, 8, 0, 0, 65, 66, 3,
        16, 8, 0, 66, 67, 5, 6, 0, 0, 67, 68, 5, 13, 0, 0, 68, 69, 3, 10,
        5, 0, 69, 15, 1, 0, 0, 0, 70, 71, 7, 0, 0, 0, 71, 17, 1, 0, 0, 0,
        72, 73, 3, 16, 8, 0, 73, 19, 1, 0, 0, 0, 4, 23, 31, 51, 55];
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
        return "Adventure.g4";
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
            $this->setState(23);
            $this->errorHandler->sync($this);

            $_la = $this->input->LA(1);
            while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 186) !== 0)) {
                $this->setState(20);
                $this->statement();
                $this->setState(25);
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
    public function statement(): Context\StatementContext
    {
        $localContext = new Context\StatementContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 2, self::RULE_statement);

        try {
            $this->setState(31);
            $this->errorHandler->sync($this);

            switch ($this->input->LA(1)) {
                case self::T__0:
                    $this->enterOuterAlt($localContext, 1);
                    $this->setState(26);
                    $this->assignment();
                    break;

                case self::T__2:
                    $this->enterOuterAlt($localContext, 2);
                    $this->setState(27);
                    $this->move_statement();
                    break;

                case self::T__3:
                    $this->enterOuterAlt($localContext, 3);
                    $this->setState(28);
                    $this->take_statement();
                    break;

                case self::T__4:
                    $this->enterOuterAlt($localContext, 4);
                    $this->setState(29);
                    $this->if_statement();
                    break;

                case self::T__6:
                    $this->enterOuterAlt($localContext, 5);
                    $this->setState(30);
                    $this->repeat_statement();
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
    public function assignment(): Context\AssignmentContext
    {
        $localContext = new Context\AssignmentContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 4, self::RULE_assignment);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(33);
            $this->match(self::T__0);
            $this->setState(34);
            $this->match(self::ID);
            $this->setState(35);
            $this->match(self::T__1);
            $this->setState(36);
            $this->expression();
            $this->setState(37);
            $this->match(self::DEDENT);
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
    public function move_statement(): Context\Move_statementContext
    {
        $localContext = new Context\Move_statementContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 6, self::RULE_move_statement);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(39);
            $this->match(self::T__2);
            $this->setState(40);
            $this->expression();
            $this->setState(41);
            $this->match(self::DEDENT);
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
    public function take_statement(): Context\Take_statementContext
    {
        $localContext = new Context\Take_statementContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 8, self::RULE_take_statement);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(43);
            $this->match(self::T__3);
            $this->setState(44);
            $this->expression();
            $this->setState(45);
            $this->match(self::DEDENT);
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
    public function statements(): Context\StatementsContext
    {
        $localContext = new Context\StatementsContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 10, self::RULE_statements);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(55);
            $this->errorHandler->sync($this);
            $_la = $this->input->LA(1);

            if ($_la === self::INDENT) {
                $this->setState(47);
                $this->match(self::INDENT);
                $this->setState(49);
                $this->errorHandler->sync($this);

                $_la = $this->input->LA(1);
                do {
                    $this->setState(48);
                    $this->statement();
                    $this->setState(51);
                    $this->errorHandler->sync($this);
                    $_la = $this->input->LA(1);
                } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 186) !== 0));
                $this->setState(53);
                $this->match(self::DEDENT);
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
    public function if_statement(): Context\If_statementContext
    {
        $localContext = new Context\If_statementContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 12, self::RULE_if_statement);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(57);
            $this->match(self::T__4);
            $this->setState(58);
            $this->expression();
            $this->setState(59);
            $this->match(self::T__5);
            $this->setState(60);
            $this->match(self::DEDENT);
            $this->setState(61);
            $this->statements();
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
    public function repeat_statement(): Context\Repeat_statementContext
    {
        $localContext = new Context\Repeat_statementContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 14, self::RULE_repeat_statement);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(63);
            $this->match(self::T__6);
            $this->setState(64);
            $this->match(self::T__7);
            $this->setState(65);
            $this->expression();
            $this->setState(66);
            $this->match(self::T__5);
            $this->setState(67);
            $this->match(self::DEDENT);
            $this->setState(68);
            $this->statements();
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
        $localContext = new Context\ExpressionContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 16, self::RULE_expression);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(70);

            $_la = $this->input->LA(1);

            if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 3584) !== 0))) {
            $this->errorHandler->recoverInline($this);
            } else {
                if ($this->input->LA(1) === Token::EOF) {
                    $this->matchedEOF = true;
                }

                $this->errorHandler->reportMatch($this);
                $this->consume();
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
    public function condition(): Context\ConditionContext
    {
        $localContext = new Context\ConditionContext($this->ctx, $this->getState());

        $this->enterRule($localContext, 18, self::RULE_condition);

        try {
            $this->enterOuterAlt($localContext, 1);
            $this->setState(72);
            $this->expression();
        } catch (RecognitionException $exception) {
            $localContext->exception = $exception;
            $this->errorHandler->reportError($this, $exception);
            $this->errorHandler->recover($this, $exception);
        } finally {
            $this->exitRule();
        }

        return $localContext;
    }
}


namespace App\Parser\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use AdventureParser;
use AdventureListener;

class ProgramContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return AdventureParser::RULE_program;
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
        if ($listener instanceof AdventureListener) {
            $listener->enterProgram($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
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
        return AdventureParser::RULE_statement;
    }

    public function assignment(): ?AssignmentContext
    {
        return $this->getTypedRuleContext(AssignmentContext::class, 0);
    }

    public function move_statement(): ?Move_statementContext
    {
        return $this->getTypedRuleContext(Move_statementContext::class, 0);
    }

    public function take_statement(): ?Take_statementContext
    {
        return $this->getTypedRuleContext(Take_statementContext::class, 0);
    }

    public function if_statement(): ?If_statementContext
    {
        return $this->getTypedRuleContext(If_statementContext::class, 0);
    }

    public function repeat_statement(): ?Repeat_statementContext
    {
        return $this->getTypedRuleContext(Repeat_statementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->enterStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->exitStatement($this);
        }
    }
}

class AssignmentContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return AdventureParser::RULE_assignment;
    }

    public function ID(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::ID, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function DEDENT(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::DEDENT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->enterAssignment($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->exitAssignment($this);
        }
    }
}

class Move_statementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return AdventureParser::RULE_move_statement;
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function DEDENT(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::DEDENT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->enterMove_statement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->exitMove_statement($this);
        }
    }
}

class Take_statementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return AdventureParser::RULE_take_statement;
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function DEDENT(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::DEDENT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->enterTake_statement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->exitTake_statement($this);
        }
    }
}

class StatementsContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return AdventureParser::RULE_statements;
    }

    public function INDENT(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::INDENT, 0);
    }

    public function DEDENT(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::DEDENT, 0);
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
        if ($listener instanceof AdventureListener) {
            $listener->enterStatements($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->exitStatements($this);
        }
    }
}

class If_statementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return AdventureParser::RULE_if_statement;
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function DEDENT(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::DEDENT, 0);
    }

    public function statements(): ?StatementsContext
    {
        return $this->getTypedRuleContext(StatementsContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->enterIf_statement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->exitIf_statement($this);
        }
    }
}

class Repeat_statementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return AdventureParser::RULE_repeat_statement;
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function DEDENT(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::DEDENT, 0);
    }

    public function statements(): ?StatementsContext
    {
        return $this->getTypedRuleContext(StatementsContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->enterRepeat_statement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->exitRepeat_statement($this);
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
        return AdventureParser::RULE_expression;
    }

    public function ID(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::ID, 0);
    }

    public function STRING(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::STRING, 0);
    }

    public function NUMBER(): ?TerminalNode
    {
        return $this->getToken(AdventureParser::NUMBER, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->enterExpression($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
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
        return AdventureParser::RULE_condition;
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->enterCondition($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof AdventureListener) {
            $listener->exitCondition($this);
        }
    }
}
