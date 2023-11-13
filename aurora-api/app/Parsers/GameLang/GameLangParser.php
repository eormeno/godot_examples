<?php

/*
 * Generated from GameLang.g4 by ANTLR 4.13.1
 */

namespace App\Parsers\GameLang {
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

	final class GameLangParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, ID = 11, UNDERSCORE = 12, 
               LOWER = 13, DIGIT = 14, NUMBER = 15, STRING = 16, DELTA = 17, 
               NULL = 18, DO = 19, IF = 20, THEN = 21, ELSE = 22, WHILE = 23, 
               CONSOLE = 24, SPRITE = 25, END = 26, NL = 27, TB = 28, PLUS = 29, 
               MINUS = 30, MULTIPLY = 31, DIVIDE = 32, LPAREN = 33, RPAREN = 34, 
               DOT = 35, EQUAL = 36, AND = 37, LOR = 38, TRUE = 39, FALSE = 40, 
               NOT = 41, EQL = 42, NEQ = 43, LST = 44, LTE = 45, GRT = 46, 
               GTE = 47, WS = 48, COMMENT = 49;

		public const RULE_program = 0, RULE_character = 1, RULE_parameters = 2, 
               RULE_timeUnit = 3, RULE_statement = 4, RULE_printable = 5, 
               RULE_consoleStatement = 6, RULE_whileStatement = 7, RULE_doStatement = 8, 
               RULE_ifStatement = 9, RULE_thenStatement = 10, RULE_elseStatement = 11, 
               RULE_assignment = 12, RULE_afterTimer = 13, RULE_everyTimer = 14, 
               RULE_functionCall = 15, RULE_lineFunctionCall = 16, RULE_functionDef = 17, 
               RULE_num = 18, RULE_expression = 19, RULE_logicExpression = 20;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'character', 'parameters', 'timeUnit', 'statement', 'printable', 
			'consoleStatement', 'whileStatement', 'doStatement', 'ifStatement', 'thenStatement', 
			'elseStatement', 'assignment', 'afterTimer', 'everyTimer', 'functionCall', 
			'lineFunctionCall', 'functionDef', 'num', 'expression', 'logicExpression'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PARAM'", "','", "'SEG'", "'MIL'", "'MIN'", "'LUEGO'", "'DE'", 
		    "'CADA'", "'FUNC'", "'RET'", null, "'_'", null, null, null, null, 
		    "'DELTA'", null, null, null, null, null, null, null, null, null, "'NL'", 
		    "'TB'", "'+'", "'-'", "'*'", "'/'", "'('", "')'", "'.'", "'='", "'Y'", 
		    "'O'", "'V'", "'F'", "'NO'", "'=='", "'!='", "'<'", "'<='", "'>'", 
		    "'>='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    "ID", "UNDERSCORE", "LOWER", "DIGIT", "NUMBER", "STRING", "DELTA", 
		    "NULL", "DO", "IF", "THEN", "ELSE", "WHILE", "CONSOLE", "SPRITE", 
		    "END", "NL", "TB", "PLUS", "MINUS", "MULTIPLY", "DIVIDE", "LPAREN", 
		    "RPAREN", "DOT", "EQUAL", "AND", "LOR", "TRUE", "FALSE", "NOT", "EQL", 
		    "NEQ", "LST", "LTE", "GRT", "GTE", "WS", "COMMENT"
		];

		private const SERIALIZED_ATN =
			[4, 1, 49, 278, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 1, 0, 4, 0, 44, 8, 0, 11, 0, 12, 0, 45, 1, 0, 
		    1, 0, 1, 1, 1, 1, 1, 1, 3, 1, 53, 8, 1, 1, 1, 1, 1, 5, 1, 57, 8, 1, 
		    10, 1, 12, 1, 60, 9, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 5, 2, 
		    68, 8, 2, 10, 2, 12, 2, 71, 9, 2, 3, 2, 73, 8, 2, 1, 3, 1, 3, 1, 4, 
		    1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 3, 4, 84, 8, 4, 1, 5, 1, 5, 1, 
		    6, 1, 6, 1, 6, 5, 6, 91, 8, 6, 10, 6, 12, 6, 94, 9, 6, 3, 6, 96, 8, 
		    6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 5, 8, 105, 8, 8, 10, 
		    8, 12, 8, 108, 9, 8, 1, 9, 1, 9, 1, 9, 1, 9, 3, 9, 114, 8, 9, 1, 9, 
		    1, 9, 1, 10, 1, 10, 5, 10, 120, 8, 10, 10, 10, 12, 10, 123, 9, 10, 
		    1, 11, 1, 11, 5, 11, 127, 8, 11, 10, 11, 12, 11, 130, 9, 11, 1, 12, 
		    1, 12, 1, 12, 1, 12, 3, 12, 136, 8, 12, 1, 13, 1, 13, 3, 13, 140, 
		    8, 13, 1, 13, 1, 13, 1, 13, 5, 13, 145, 8, 13, 10, 13, 12, 13, 148, 
		    9, 13, 1, 13, 1, 13, 1, 14, 1, 14, 1, 14, 1, 14, 5, 14, 156, 8, 14, 
		    10, 14, 12, 14, 159, 9, 14, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 
		    15, 1, 15, 5, 15, 168, 8, 15, 10, 15, 12, 15, 171, 9, 15, 3, 15, 173, 
		    8, 15, 1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 5, 16, 182, 
		    8, 16, 10, 16, 12, 16, 185, 9, 16, 3, 16, 187, 8, 16, 1, 17, 1, 17, 
		    1, 17, 3, 17, 192, 8, 17, 1, 17, 5, 17, 195, 8, 17, 10, 17, 12, 17, 
		    198, 9, 17, 1, 17, 1, 17, 1, 17, 1, 18, 3, 18, 204, 8, 18, 1, 18, 
		    1, 18, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 
		    19, 1, 19, 3, 19, 218, 8, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 
		    19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 5, 19, 232, 8, 19, 10, 
		    19, 12, 19, 235, 9, 19, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 
		    20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 3, 20, 265, 8, 20, 1, 20, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 5, 20, 273, 8, 20, 10, 20, 12, 20, 276, 9, 20, 1, 20, 
		    0, 2, 38, 40, 21, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 
		    28, 30, 32, 34, 36, 38, 40, 0, 2, 1, 0, 3, 5, 3, 0, 11, 11, 16, 16, 
		    27, 28, 306, 0, 43, 1, 0, 0, 0, 2, 49, 1, 0, 0, 0, 4, 63, 1, 0, 0, 
		    0, 6, 74, 1, 0, 0, 0, 8, 83, 1, 0, 0, 0, 10, 85, 1, 0, 0, 0, 12, 87, 
		    1, 0, 0, 0, 14, 97, 1, 0, 0, 0, 16, 102, 1, 0, 0, 0, 18, 109, 1, 0, 
		    0, 0, 20, 117, 1, 0, 0, 0, 22, 124, 1, 0, 0, 0, 24, 131, 1, 0, 0, 
		    0, 26, 137, 1, 0, 0, 0, 28, 151, 1, 0, 0, 0, 30, 162, 1, 0, 0, 0, 
		    32, 176, 1, 0, 0, 0, 34, 188, 1, 0, 0, 0, 36, 203, 1, 0, 0, 0, 38, 
		    217, 1, 0, 0, 0, 40, 264, 1, 0, 0, 0, 42, 44, 3, 2, 1, 0, 43, 42, 
		    1, 0, 0, 0, 44, 45, 1, 0, 0, 0, 45, 43, 1, 0, 0, 0, 45, 46, 1, 0, 
		    0, 0, 46, 47, 1, 0, 0, 0, 47, 48, 5, 0, 0, 1, 48, 1, 1, 0, 0, 0, 49, 
		    50, 5, 25, 0, 0, 50, 52, 5, 11, 0, 0, 51, 53, 3, 4, 2, 0, 52, 51, 
		    1, 0, 0, 0, 52, 53, 1, 0, 0, 0, 53, 58, 1, 0, 0, 0, 54, 57, 3, 8, 
		    4, 0, 55, 57, 3, 34, 17, 0, 56, 54, 1, 0, 0, 0, 56, 55, 1, 0, 0, 0, 
		    57, 60, 1, 0, 0, 0, 58, 56, 1, 0, 0, 0, 58, 59, 1, 0, 0, 0, 59, 61, 
		    1, 0, 0, 0, 60, 58, 1, 0, 0, 0, 61, 62, 5, 26, 0, 0, 62, 3, 1, 0, 
		    0, 0, 63, 72, 5, 1, 0, 0, 64, 69, 5, 11, 0, 0, 65, 66, 5, 2, 0, 0, 
		    66, 68, 5, 11, 0, 0, 67, 65, 1, 0, 0, 0, 68, 71, 1, 0, 0, 0, 69, 67, 
		    1, 0, 0, 0, 69, 70, 1, 0, 0, 0, 70, 73, 1, 0, 0, 0, 71, 69, 1, 0, 
		    0, 0, 72, 64, 1, 0, 0, 0, 72, 73, 1, 0, 0, 0, 73, 5, 1, 0, 0, 0, 74, 
		    75, 7, 0, 0, 0, 75, 7, 1, 0, 0, 0, 76, 84, 3, 14, 7, 0, 77, 84, 3, 
		    18, 9, 0, 78, 84, 3, 24, 12, 0, 79, 84, 3, 32, 16, 0, 80, 84, 3, 26, 
		    13, 0, 81, 84, 3, 28, 14, 0, 82, 84, 3, 12, 6, 0, 83, 76, 1, 0, 0, 
		    0, 83, 77, 1, 0, 0, 0, 83, 78, 1, 0, 0, 0, 83, 79, 1, 0, 0, 0, 83, 
		    80, 1, 0, 0, 0, 83, 81, 1, 0, 0, 0, 83, 82, 1, 0, 0, 0, 84, 9, 1, 
		    0, 0, 0, 85, 86, 7, 1, 0, 0, 86, 11, 1, 0, 0, 0, 87, 95, 5, 24, 0, 
		    0, 88, 92, 3, 10, 5, 0, 89, 91, 3, 10, 5, 0, 90, 89, 1, 0, 0, 0, 91, 
		    94, 1, 0, 0, 0, 92, 90, 1, 0, 0, 0, 92, 93, 1, 0, 0, 0, 93, 96, 1, 
		    0, 0, 0, 94, 92, 1, 0, 0, 0, 95, 88, 1, 0, 0, 0, 95, 96, 1, 0, 0, 
		    0, 96, 13, 1, 0, 0, 0, 97, 98, 5, 23, 0, 0, 98, 99, 3, 40, 20, 0, 
		    99, 100, 3, 16, 8, 0, 100, 101, 5, 26, 0, 0, 101, 15, 1, 0, 0, 0, 
		    102, 106, 5, 19, 0, 0, 103, 105, 3, 8, 4, 0, 104, 103, 1, 0, 0, 0, 
		    105, 108, 1, 0, 0, 0, 106, 104, 1, 0, 0, 0, 106, 107, 1, 0, 0, 0, 
		    107, 17, 1, 0, 0, 0, 108, 106, 1, 0, 0, 0, 109, 110, 5, 20, 0, 0, 
		    110, 111, 3, 40, 20, 0, 111, 113, 3, 20, 10, 0, 112, 114, 3, 22, 11, 
		    0, 113, 112, 1, 0, 0, 0, 113, 114, 1, 0, 0, 0, 114, 115, 1, 0, 0, 
		    0, 115, 116, 5, 26, 0, 0, 116, 19, 1, 0, 0, 0, 117, 121, 5, 21, 0, 
		    0, 118, 120, 3, 8, 4, 0, 119, 118, 1, 0, 0, 0, 120, 123, 1, 0, 0, 
		    0, 121, 119, 1, 0, 0, 0, 121, 122, 1, 0, 0, 0, 122, 21, 1, 0, 0, 0, 
		    123, 121, 1, 0, 0, 0, 124, 128, 5, 22, 0, 0, 125, 127, 3, 8, 4, 0, 
		    126, 125, 1, 0, 0, 0, 127, 130, 1, 0, 0, 0, 128, 126, 1, 0, 0, 0, 
		    128, 129, 1, 0, 0, 0, 129, 23, 1, 0, 0, 0, 130, 128, 1, 0, 0, 0, 131, 
		    132, 5, 11, 0, 0, 132, 135, 5, 36, 0, 0, 133, 136, 3, 38, 19, 0, 134, 
		    136, 3, 40, 20, 0, 135, 133, 1, 0, 0, 0, 135, 134, 1, 0, 0, 0, 136, 
		    25, 1, 0, 0, 0, 137, 139, 5, 6, 0, 0, 138, 140, 5, 7, 0, 0, 139, 138, 
		    1, 0, 0, 0, 139, 140, 1, 0, 0, 0, 140, 141, 1, 0, 0, 0, 141, 142, 
		    3, 38, 19, 0, 142, 146, 3, 6, 3, 0, 143, 145, 3, 8, 4, 0, 144, 143, 
		    1, 0, 0, 0, 145, 148, 1, 0, 0, 0, 146, 144, 1, 0, 0, 0, 146, 147, 
		    1, 0, 0, 0, 147, 149, 1, 0, 0, 0, 148, 146, 1, 0, 0, 0, 149, 150, 
		    5, 26, 0, 0, 150, 27, 1, 0, 0, 0, 151, 152, 5, 8, 0, 0, 152, 153, 
		    3, 38, 19, 0, 153, 157, 3, 6, 3, 0, 154, 156, 3, 8, 4, 0, 155, 154, 
		    1, 0, 0, 0, 156, 159, 1, 0, 0, 0, 157, 155, 1, 0, 0, 0, 157, 158, 
		    1, 0, 0, 0, 158, 160, 1, 0, 0, 0, 159, 157, 1, 0, 0, 0, 160, 161, 
		    5, 26, 0, 0, 161, 29, 1, 0, 0, 0, 162, 163, 5, 11, 0, 0, 163, 172, 
		    5, 33, 0, 0, 164, 169, 3, 38, 19, 0, 165, 166, 5, 2, 0, 0, 166, 168, 
		    3, 38, 19, 0, 167, 165, 1, 0, 0, 0, 168, 171, 1, 0, 0, 0, 169, 167, 
		    1, 0, 0, 0, 169, 170, 1, 0, 0, 0, 170, 173, 1, 0, 0, 0, 171, 169, 
		    1, 0, 0, 0, 172, 164, 1, 0, 0, 0, 172, 173, 1, 0, 0, 0, 173, 174, 
		    1, 0, 0, 0, 174, 175, 5, 34, 0, 0, 175, 31, 1, 0, 0, 0, 176, 177, 
		    5, 19, 0, 0, 177, 186, 5, 11, 0, 0, 178, 183, 3, 38, 19, 0, 179, 180, 
		    5, 2, 0, 0, 180, 182, 3, 38, 19, 0, 181, 179, 1, 0, 0, 0, 182, 185, 
		    1, 0, 0, 0, 183, 181, 1, 0, 0, 0, 183, 184, 1, 0, 0, 0, 184, 187, 
		    1, 0, 0, 0, 185, 183, 1, 0, 0, 0, 186, 178, 1, 0, 0, 0, 186, 187, 
		    1, 0, 0, 0, 187, 33, 1, 0, 0, 0, 188, 189, 5, 9, 0, 0, 189, 191, 5, 
		    11, 0, 0, 190, 192, 3, 4, 2, 0, 191, 190, 1, 0, 0, 0, 191, 192, 1, 
		    0, 0, 0, 192, 196, 1, 0, 0, 0, 193, 195, 3, 8, 4, 0, 194, 193, 1, 
		    0, 0, 0, 195, 198, 1, 0, 0, 0, 196, 194, 1, 0, 0, 0, 196, 197, 1, 
		    0, 0, 0, 197, 199, 1, 0, 0, 0, 198, 196, 1, 0, 0, 0, 199, 200, 5, 
		    10, 0, 0, 200, 201, 3, 38, 19, 0, 201, 35, 1, 0, 0, 0, 202, 204, 5, 
		    30, 0, 0, 203, 202, 1, 0, 0, 0, 203, 204, 1, 0, 0, 0, 204, 205, 1, 
		    0, 0, 0, 205, 206, 5, 15, 0, 0, 206, 37, 1, 0, 0, 0, 207, 208, 6, 
		    19, -1, 0, 208, 218, 5, 11, 0, 0, 209, 218, 5, 18, 0, 0, 210, 218, 
		    5, 17, 0, 0, 211, 218, 3, 30, 15, 0, 212, 213, 5, 33, 0, 0, 213, 214, 
		    3, 38, 19, 0, 214, 215, 5, 34, 0, 0, 215, 218, 1, 0, 0, 0, 216, 218, 
		    3, 36, 18, 0, 217, 207, 1, 0, 0, 0, 217, 209, 1, 0, 0, 0, 217, 210, 
		    1, 0, 0, 0, 217, 211, 1, 0, 0, 0, 217, 212, 1, 0, 0, 0, 217, 216, 
		    1, 0, 0, 0, 218, 233, 1, 0, 0, 0, 219, 220, 10, 5, 0, 0, 220, 221, 
		    5, 31, 0, 0, 221, 232, 3, 38, 19, 6, 222, 223, 10, 4, 0, 0, 223, 224, 
		    5, 32, 0, 0, 224, 232, 3, 38, 19, 5, 225, 226, 10, 3, 0, 0, 226, 227, 
		    5, 29, 0, 0, 227, 232, 3, 38, 19, 4, 228, 229, 10, 2, 0, 0, 229, 230, 
		    5, 30, 0, 0, 230, 232, 3, 38, 19, 3, 231, 219, 1, 0, 0, 0, 231, 222, 
		    1, 0, 0, 0, 231, 225, 1, 0, 0, 0, 231, 228, 1, 0, 0, 0, 232, 235, 
		    1, 0, 0, 0, 233, 231, 1, 0, 0, 0, 233, 234, 1, 0, 0, 0, 234, 39, 1, 
		    0, 0, 0, 235, 233, 1, 0, 0, 0, 236, 237, 6, 20, -1, 0, 237, 265, 5, 
		    39, 0, 0, 238, 265, 5, 40, 0, 0, 239, 265, 5, 11, 0, 0, 240, 241, 
		    5, 41, 0, 0, 241, 265, 3, 40, 20, 10, 242, 243, 5, 33, 0, 0, 243, 
		    244, 3, 40, 20, 0, 244, 245, 5, 34, 0, 0, 245, 265, 1, 0, 0, 0, 246, 
		    247, 5, 11, 0, 0, 247, 248, 5, 42, 0, 0, 248, 265, 3, 38, 19, 0, 249, 
		    250, 5, 11, 0, 0, 250, 251, 5, 43, 0, 0, 251, 265, 3, 38, 19, 0, 252, 
		    253, 5, 11, 0, 0, 253, 254, 5, 44, 0, 0, 254, 265, 3, 38, 19, 0, 255, 
		    256, 5, 11, 0, 0, 256, 257, 5, 45, 0, 0, 257, 265, 3, 38, 19, 0, 258, 
		    259, 5, 11, 0, 0, 259, 260, 5, 46, 0, 0, 260, 265, 3, 38, 19, 0, 261, 
		    262, 5, 11, 0, 0, 262, 263, 5, 47, 0, 0, 263, 265, 3, 38, 19, 0, 264, 
		    236, 1, 0, 0, 0, 264, 238, 1, 0, 0, 0, 264, 239, 1, 0, 0, 0, 264, 
		    240, 1, 0, 0, 0, 264, 242, 1, 0, 0, 0, 264, 246, 1, 0, 0, 0, 264, 
		    249, 1, 0, 0, 0, 264, 252, 1, 0, 0, 0, 264, 255, 1, 0, 0, 0, 264, 
		    258, 1, 0, 0, 0, 264, 261, 1, 0, 0, 0, 265, 274, 1, 0, 0, 0, 266, 
		    267, 10, 8, 0, 0, 267, 268, 5, 37, 0, 0, 268, 273, 3, 40, 20, 9, 269, 
		    270, 10, 7, 0, 0, 270, 271, 5, 38, 0, 0, 271, 273, 3, 40, 20, 8, 272, 
		    266, 1, 0, 0, 0, 272, 269, 1, 0, 0, 0, 273, 276, 1, 0, 0, 0, 274, 
		    272, 1, 0, 0, 0, 274, 275, 1, 0, 0, 0, 275, 41, 1, 0, 0, 0, 276, 274, 
		    1, 0, 0, 0, 30, 45, 52, 56, 58, 69, 72, 83, 92, 95, 106, 113, 121, 
		    128, 135, 139, 146, 157, 169, 172, 183, 186, 191, 196, 203, 217, 231, 
		    233, 264, 272, 274];
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
			return "GameLang.g4";
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
		        $this->setState(43); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(42);
		        	$this->character();
		        	$this->setState(45); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::SPRITE);
		        $this->setState(47);
		        $this->match(self::EOF);
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
		public function character(): Context\CharacterContext
		{
		    $localContext = new Context\CharacterContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_character);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(49);
		        $this->match(self::SPRITE);
		        $this->setState(50);
		        $this->match(self::ID);
		        $this->setState(52);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__0) {
		        	$this->setState(51);
		        	$this->parameters();
		        }
		        $this->setState(58);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 26741568) !== 0)) {
		        	$this->setState(56);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::T__5:
		        	    case self::T__7:
		        	    case self::ID:
		        	    case self::DO:
		        	    case self::IF:
		        	    case self::WHILE:
		        	    case self::CONSOLE:
		        	    	$this->setState(54);
		        	    	$this->statement();
		        	    	break;

		        	    case self::T__8:
		        	    	$this->setState(55);
		        	    	$this->functionDef();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(60);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(61);
		        $this->match(self::END);
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
		public function parameters(): Context\ParametersContext
		{
		    $localContext = new Context\ParametersContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_parameters);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(63);
		        $this->match(self::T__0);
		        $this->setState(72);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		            case 1:
		        	    $this->setState(64);
		        	    $this->match(self::ID);
		        	    $this->setState(69);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__1) {
		        	    	$this->setState(65);
		        	    	$this->match(self::T__1);
		        	    	$this->setState(66);
		        	    	$this->match(self::ID);
		        	    	$this->setState(71);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	break;
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
		public function timeUnit(): Context\TimeUnitContext
		{
		    $localContext = new Context\TimeUnitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_timeUnit);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(74);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 56) !== 0))) {
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
		public function statement(): Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_statement);

		    try {
		        $this->setState(83);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::WHILE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(76);
		            	$this->whileStatement();
		            	break;

		            case self::IF:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(77);
		            	$this->ifStatement();
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(78);
		            	$this->assignment();
		            	break;

		            case self::DO:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(79);
		            	$this->lineFunctionCall();
		            	break;

		            case self::T__5:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(80);
		            	$this->afterTimer();
		            	break;

		            case self::T__7:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(81);
		            	$this->everyTimer();
		            	break;

		            case self::CONSOLE:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(82);
		            	$this->consoleStatement();
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
		public function printable(): Context\PrintableContext
		{
		    $localContext = new Context\PrintableContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_printable);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(85);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 402720768) !== 0))) {
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
		public function consoleStatement(): Context\ConsoleStatementContext
		{
		    $localContext = new Context\ConsoleStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_consoleStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(87);
		        $this->match(self::CONSOLE);
		        $this->setState(95);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
		            case 1:
		        	    $this->setState(88);
		        	    $this->printable();
		        	    $this->setState(92);
		        	    $this->errorHandler->sync($this);

		        	    $alt = $this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx);

		        	    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	    	if ($alt === 1) {
		        	    		$this->setState(89);
		        	    		$this->printable(); 
		        	    	}

		        	    	$this->setState(94);
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx);
		        	    }
		        	break;
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
		public function whileStatement(): Context\WhileStatementContext
		{
		    $localContext = new Context\WhileStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_whileStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(97);
		        $this->match(self::WHILE);
		        $this->setState(98);
		        $this->recursiveLogicExpression(0);
		        $this->setState(99);
		        $this->doStatement();
		        $this->setState(100);
		        $this->match(self::END);
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
		public function doStatement(): Context\DoStatementContext
		{
		    $localContext = new Context\DoStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_doStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(102);
		        $this->match(self::DO);
		        $this->setState(106);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 26741056) !== 0)) {
		        	$this->setState(103);
		        	$this->statement();
		        	$this->setState(108);
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
		public function ifStatement(): Context\IfStatementContext
		{
		    $localContext = new Context\IfStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_ifStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(109);
		        $this->match(self::IF);
		        $this->setState(110);
		        $this->recursiveLogicExpression(0);
		        $this->setState(111);
		        $this->thenStatement();
		        $this->setState(113);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(112);
		        	$this->elseStatement();
		        }
		        $this->setState(115);
		        $this->match(self::END);
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
		public function thenStatement(): Context\ThenStatementContext
		{
		    $localContext = new Context\ThenStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_thenStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(117);
		        $this->match(self::THEN);
		        $this->setState(121);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 26741056) !== 0)) {
		        	$this->setState(118);
		        	$this->statement();
		        	$this->setState(123);
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
		public function elseStatement(): Context\ElseStatementContext
		{
		    $localContext = new Context\ElseStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_elseStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(124);
		        $this->match(self::ELSE);
		        $this->setState(128);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 26741056) !== 0)) {
		        	$this->setState(125);
		        	$this->statement();
		        	$this->setState(130);
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
		public function assignment(): Context\AssignmentContext
		{
		    $localContext = new Context\AssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(131);
		        $this->match(self::ID);
		        $this->setState(132);
		        $this->match(self::EQUAL);
		        $this->setState(135);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	case 1:
		        	    $this->setState(133);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 2:
		        	    $this->setState(134);
		        	    $this->recursiveLogicExpression(0);
		        	break;
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
		public function afterTimer(): Context\AfterTimerContext
		{
		    $localContext = new Context\AfterTimerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_afterTimer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(137);
		        $this->match(self::T__5);
		        $this->setState(139);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__6) {
		        	$this->setState(138);
		        	$this->match(self::T__6);
		        }
		        $this->setState(141);
		        $this->recursiveExpression(0);
		        $this->setState(142);
		        $this->timeUnit();
		        $this->setState(146);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 26741056) !== 0)) {
		        	$this->setState(143);
		        	$this->statement();
		        	$this->setState(148);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(149);
		        $this->match(self::END);
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
		public function everyTimer(): Context\EveryTimerContext
		{
		    $localContext = new Context\EveryTimerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_everyTimer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(151);
		        $this->match(self::T__7);
		        $this->setState(152);
		        $this->recursiveExpression(0);
		        $this->setState(153);
		        $this->timeUnit();
		        $this->setState(157);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 26741056) !== 0)) {
		        	$this->setState(154);
		        	$this->statement();
		        	$this->setState(159);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(160);
		        $this->match(self::END);
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
		public function functionCall(): Context\FunctionCallContext
		{
		    $localContext = new Context\FunctionCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_functionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(162);
		        $this->match(self::ID);
		        $this->setState(163);
		        $this->match(self::LPAREN);
		        $this->setState(172);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 9664104448) !== 0)) {
		        	$this->setState(164);
		        	$this->recursiveExpression(0);
		        	$this->setState(169);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__1) {
		        		$this->setState(165);
		        		$this->match(self::T__1);
		        		$this->setState(166);
		        		$this->recursiveExpression(0);
		        		$this->setState(171);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(174);
		        $this->match(self::RPAREN);
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
		public function lineFunctionCall(): Context\LineFunctionCallContext
		{
		    $localContext = new Context\LineFunctionCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_lineFunctionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(176);
		        $this->match(self::DO);
		        $this->setState(177);
		        $this->match(self::ID);
		        $this->setState(186);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx)) {
		            case 1:
		        	    $this->setState(178);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(183);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__1) {
		        	    	$this->setState(179);
		        	    	$this->match(self::T__1);
		        	    	$this->setState(180);
		        	    	$this->recursiveExpression(0);
		        	    	$this->setState(185);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	break;
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
		public function functionDef(): Context\FunctionDefContext
		{
		    $localContext = new Context\FunctionDefContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_functionDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(188);
		        $this->match(self::T__8);
		        $this->setState(189);
		        $this->match(self::ID);
		        $this->setState(191);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__0) {
		        	$this->setState(190);
		        	$this->parameters();
		        }
		        $this->setState(196);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 26741056) !== 0)) {
		        	$this->setState(193);
		        	$this->statement();
		        	$this->setState(198);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(199);
		        $this->match(self::T__9);
		        $this->setState(200);
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
		public function num(): Context\NumContext
		{
		    $localContext = new Context\NumContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_num);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(203);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::MINUS) {
		        	$this->setState(202);
		        	$this->match(self::MINUS);
		        }
		        $this->setState(205);
		        $this->match(self::NUMBER);
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
			$startState = 38;
			$this->enterRecursionRule($localContext, 38, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(217);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx)) {
					case 1:
					    $this->setState(208);
					    $this->match(self::ID);
					break;

					case 2:
					    $this->setState(209);
					    $this->match(self::NULL);
					break;

					case 3:
					    $this->setState(210);
					    $this->match(self::DELTA);
					break;

					case 4:
					    $this->setState(211);
					    $this->functionCall();
					break;

					case 5:
					    $this->setState(212);
					    $this->match(self::LPAREN);
					    $this->setState(213);
					    $this->recursiveExpression(0);
					    $this->setState(214);
					    $this->match(self::RPAREN);
					break;

					case 6:
					    $this->setState(216);
					    $this->num();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(233);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(231);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(219);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(220);
							    $this->match(self::MULTIPLY);
							    $this->setState(221);
							    $this->recursiveExpression(6);
							break;

							case 2:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(222);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(223);
							    $this->match(self::DIVIDE);
							    $this->setState(224);
							    $this->recursiveExpression(5);
							break;

							case 3:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(225);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(226);
							    $this->match(self::PLUS);
							    $this->setState(227);
							    $this->recursiveExpression(4);
							break;

							case 4:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(228);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(229);
							    $this->match(self::MINUS);
							    $this->setState(230);
							    $this->recursiveExpression(3);
							break;
						} 
					}

					$this->setState(235);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx);
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
		public function logicExpression(): Context\LogicExpressionContext
		{
			return $this->recursiveLogicExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveLogicExpression(int $precedence): Context\LogicExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\LogicExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 40;
			$this->enterRecursionRule($localContext, 40, self::RULE_logicExpression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(264);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
					case 1:
					    $this->setState(237);
					    $this->match(self::TRUE);
					break;

					case 2:
					    $this->setState(238);
					    $this->match(self::FALSE);
					break;

					case 3:
					    $this->setState(239);
					    $this->match(self::ID);
					break;

					case 4:
					    $this->setState(240);
					    $this->match(self::NOT);
					    $this->setState(241);
					    $this->recursiveLogicExpression(10);
					break;

					case 5:
					    $this->setState(242);
					    $this->match(self::LPAREN);
					    $this->setState(243);
					    $this->recursiveLogicExpression(0);
					    $this->setState(244);
					    $this->match(self::RPAREN);
					break;

					case 6:
					    $this->setState(246);
					    $this->match(self::ID);
					    $this->setState(247);
					    $this->match(self::EQL);
					    $this->setState(248);
					    $this->recursiveExpression(0);
					break;

					case 7:
					    $this->setState(249);
					    $this->match(self::ID);
					    $this->setState(250);
					    $this->match(self::NEQ);
					    $this->setState(251);
					    $this->recursiveExpression(0);
					break;

					case 8:
					    $this->setState(252);
					    $this->match(self::ID);
					    $this->setState(253);
					    $this->match(self::LST);
					    $this->setState(254);
					    $this->recursiveExpression(0);
					break;

					case 9:
					    $this->setState(255);
					    $this->match(self::ID);
					    $this->setState(256);
					    $this->match(self::LTE);
					    $this->setState(257);
					    $this->recursiveExpression(0);
					break;

					case 10:
					    $this->setState(258);
					    $this->match(self::ID);
					    $this->setState(259);
					    $this->match(self::GRT);
					    $this->setState(260);
					    $this->recursiveExpression(0);
					break;

					case 11:
					    $this->setState(261);
					    $this->match(self::ID);
					    $this->setState(262);
					    $this->match(self::GTE);
					    $this->setState(263);
					    $this->recursiveExpression(0);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(274);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(272);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
							case 1:
							    $localContext = new Context\LogicExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_logicExpression);
							    $this->setState(266);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(267);
							    $this->match(self::AND);
							    $this->setState(268);
							    $this->recursiveLogicExpression(9);
							break;

							case 2:
							    $localContext = new Context\LogicExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_logicExpression);
							    $this->setState(269);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(270);
							    $this->match(self::LOR);
							    $this->setState(271);
							    $this->recursiveLogicExpression(8);
							break;
						} 
					}

					$this->setState(276);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);
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
					case 19:
						return $this->sempredExpression($localContext, $predicateIndex);

					case 20:
						return $this->sempredLogicExpression($localContext, $predicateIndex);

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

		private function sempredLogicExpression(?Context\LogicExpressionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 4:
			        return $this->precpred($this->ctx, 8);

			    case 5:
			        return $this->precpred($this->ctx, 7);
			}

			return true;
		}
	}
}

namespace App\Parsers\GameLang\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use App\Parsers\GameLang\GameLangParser;
	use App\Parsers\GameLang\GameLangListener;

	class ProgramContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_program;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::EOF, 0);
	    }

	    /**
	     * @return array<CharacterContext>|CharacterContext|null
	     */
	    public function character(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(CharacterContext::class);
	    	}

	        return $this->getTypedRuleContext(CharacterContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitProgram($this);
		    }
		}
	} 

	class CharacterContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_character;
	    }

	    public function SPRITE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::SPRITE, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

	    public function END(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::END, 0);
	    }

	    public function parameters(): ?ParametersContext
	    {
	    	return $this->getTypedRuleContext(ParametersContext::class, 0);
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

	    /**
	     * @return array<FunctionDefContext>|FunctionDefContext|null
	     */
	    public function functionDef(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(FunctionDefContext::class);
	    	}

	        return $this->getTypedRuleContext(FunctionDefContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterCharacter($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitCharacter($this);
		    }
		}
	} 

	class ParametersContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_parameters;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GameLangParser::ID);
	    	}

	        return $this->getToken(GameLangParser::ID, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterParameters($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitParameters($this);
		    }
		}
	} 

	class TimeUnitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_timeUnit;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterTimeUnit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitTimeUnit($this);
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
		    return GameLangParser::RULE_statement;
	    }

	    public function whileStatement(): ?WhileStatementContext
	    {
	    	return $this->getTypedRuleContext(WhileStatementContext::class, 0);
	    }

	    public function ifStatement(): ?IfStatementContext
	    {
	    	return $this->getTypedRuleContext(IfStatementContext::class, 0);
	    }

	    public function assignment(): ?AssignmentContext
	    {
	    	return $this->getTypedRuleContext(AssignmentContext::class, 0);
	    }

	    public function lineFunctionCall(): ?LineFunctionCallContext
	    {
	    	return $this->getTypedRuleContext(LineFunctionCallContext::class, 0);
	    }

	    public function afterTimer(): ?AfterTimerContext
	    {
	    	return $this->getTypedRuleContext(AfterTimerContext::class, 0);
	    }

	    public function everyTimer(): ?EveryTimerContext
	    {
	    	return $this->getTypedRuleContext(EveryTimerContext::class, 0);
	    }

	    public function consoleStatement(): ?ConsoleStatementContext
	    {
	    	return $this->getTypedRuleContext(ConsoleStatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitStatement($this);
		    }
		}
	} 

	class PrintableContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_printable;
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::STRING, 0);
	    }

	    public function NL(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NL, 0);
	    }

	    public function TB(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::TB, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterPrintable($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitPrintable($this);
		    }
		}
	} 

	class ConsoleStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_consoleStatement;
	    }

	    public function CONSOLE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::CONSOLE, 0);
	    }

	    /**
	     * @return array<PrintableContext>|PrintableContext|null
	     */
	    public function printable(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(PrintableContext::class);
	    	}

	        return $this->getTypedRuleContext(PrintableContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterConsoleStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitConsoleStatement($this);
		    }
		}
	} 

	class WhileStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_whileStatement;
	    }

	    public function WHILE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::WHILE, 0);
	    }

	    public function logicExpression(): ?LogicExpressionContext
	    {
	    	return $this->getTypedRuleContext(LogicExpressionContext::class, 0);
	    }

	    public function doStatement(): ?DoStatementContext
	    {
	    	return $this->getTypedRuleContext(DoStatementContext::class, 0);
	    }

	    public function END(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::END, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterWhileStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitWhileStatement($this);
		    }
		}
	} 

	class DoStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_doStatement;
	    }

	    public function DO(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::DO, 0);
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
			if ($listener instanceof GameLangListener) {
			    $listener->enterDoStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitDoStatement($this);
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
		    return GameLangParser::RULE_ifStatement;
	    }

	    public function IF(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::IF, 0);
	    }

	    public function logicExpression(): ?LogicExpressionContext
	    {
	    	return $this->getTypedRuleContext(LogicExpressionContext::class, 0);
	    }

	    public function thenStatement(): ?ThenStatementContext
	    {
	    	return $this->getTypedRuleContext(ThenStatementContext::class, 0);
	    }

	    public function END(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::END, 0);
	    }

	    public function elseStatement(): ?ElseStatementContext
	    {
	    	return $this->getTypedRuleContext(ElseStatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterIfStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitIfStatement($this);
		    }
		}
	} 

	class ThenStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_thenStatement;
	    }

	    public function THEN(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::THEN, 0);
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
			if ($listener instanceof GameLangListener) {
			    $listener->enterThenStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitThenStatement($this);
		    }
		}
	} 

	class ElseStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_elseStatement;
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ELSE, 0);
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
			if ($listener instanceof GameLangListener) {
			    $listener->enterElseStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitElseStatement($this);
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
		    return GameLangParser::RULE_assignment;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

	    public function EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::EQUAL, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function logicExpression(): ?LogicExpressionContext
	    {
	    	return $this->getTypedRuleContext(LogicExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterAssignment($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitAssignment($this);
		    }
		}
	} 

	class AfterTimerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_afterTimer;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function timeUnit(): ?TimeUnitContext
	    {
	    	return $this->getTypedRuleContext(TimeUnitContext::class, 0);
	    }

	    public function END(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::END, 0);
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
			if ($listener instanceof GameLangListener) {
			    $listener->enterAfterTimer($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitAfterTimer($this);
		    }
		}
	} 

	class EveryTimerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_everyTimer;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function timeUnit(): ?TimeUnitContext
	    {
	    	return $this->getTypedRuleContext(TimeUnitContext::class, 0);
	    }

	    public function END(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::END, 0);
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
			if ($listener instanceof GameLangListener) {
			    $listener->enterEveryTimer($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitEveryTimer($this);
		    }
		}
	} 

	class FunctionCallContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_functionCall;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::RPAREN, 0);
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
			if ($listener instanceof GameLangListener) {
			    $listener->enterFunctionCall($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitFunctionCall($this);
		    }
		}
	} 

	class LineFunctionCallContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_lineFunctionCall;
	    }

	    public function DO(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::DO, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
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
			if ($listener instanceof GameLangListener) {
			    $listener->enterLineFunctionCall($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitLineFunctionCall($this);
		    }
		}
	} 

	class FunctionDefContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_functionDef;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function parameters(): ?ParametersContext
	    {
	    	return $this->getTypedRuleContext(ParametersContext::class, 0);
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
			if ($listener instanceof GameLangListener) {
			    $listener->enterFunctionDef($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitFunctionDef($this);
		    }
		}
	} 

	class NumContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_num;
	    }

	    public function NUMBER(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NUMBER, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::MINUS, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterNum($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitNum($this);
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
		    return GameLangParser::RULE_expression;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

	    public function NULL(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NULL, 0);
	    }

	    public function DELTA(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::DELTA, 0);
	    }

	    public function functionCall(): ?FunctionCallContext
	    {
	    	return $this->getTypedRuleContext(FunctionCallContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::LPAREN, 0);
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
	        return $this->getToken(GameLangParser::RPAREN, 0);
	    }

	    public function num(): ?NumContext
	    {
	    	return $this->getTypedRuleContext(NumContext::class, 0);
	    }

	    public function MULTIPLY(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::MULTIPLY, 0);
	    }

	    public function DIVIDE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::DIVIDE, 0);
	    }

	    public function PLUS(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::PLUS, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::MINUS, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitExpression($this);
		    }
		}
	} 

	class LogicExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_logicExpression;
	    }

	    public function TRUE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::TRUE, 0);
	    }

	    public function FALSE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::FALSE, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

	    public function NOT(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NOT, 0);
	    }

	    /**
	     * @return array<LogicExpressionContext>|LogicExpressionContext|null
	     */
	    public function logicExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LogicExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(LogicExpressionContext::class, $index);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::RPAREN, 0);
	    }

	    public function EQL(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::EQL, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function NEQ(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NEQ, 0);
	    }

	    public function LST(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::LST, 0);
	    }

	    public function LTE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::LTE, 0);
	    }

	    public function GRT(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::GRT, 0);
	    }

	    public function GTE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::GTE, 0);
	    }

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::AND, 0);
	    }

	    public function LOR(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::LOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterLogicExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitLogicExpression($this);
		    }
		}
	} 
}