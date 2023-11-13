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
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, ID = 11, NUMBER = 12, 
               STRING = 13, DELTA = 14, NULL = 15, DO = 16, IF = 17, THEN = 18, 
               ELSE = 19, WHILE = 20, CONSOLE = 21, SPRITE = 22, END = 23, 
               NL = 24, TB = 25, PLUS = 26, MINUS = 27, MULTIPLY = 28, DIVIDE = 29, 
               LPAREN = 30, RPAREN = 31, DOT = 32, EQUAL = 33, AND = 34, 
               LOR = 35, TRUE = 36, FALSE = 37, NOT = 38, EQL = 39, NEQ = 40, 
               LST = 41, LTE = 42, GRT = 43, GTE = 44, NEWLINE = 45, WS = 46, 
               COMMENT = 47;

		public const RULE_program = 0, RULE_character = 1, RULE_parameters = 2, 
               RULE_timeUnit = 3, RULE_emptyNewLine = 4, RULE_statement = 5, 
               RULE_printable = 6, RULE_consoleStatement = 7, RULE_whileStatement = 8, 
               RULE_doStatement = 9, RULE_ifStatement = 10, RULE_thenStatement = 11, 
               RULE_elseStatement = 12, RULE_assignment = 13, RULE_afterTimer = 14, 
               RULE_everyTimer = 15, RULE_functionCall = 16, RULE_lineFunctionCall = 17, 
               RULE_functionDef = 18, RULE_num = 19, RULE_expression = 20, 
               RULE_logicExpression = 21;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'character', 'parameters', 'timeUnit', 'emptyNewLine', 'statement', 
			'printable', 'consoleStatement', 'whileStatement', 'doStatement', 'ifStatement', 
			'thenStatement', 'elseStatement', 'assignment', 'afterTimer', 'everyTimer', 
			'functionCall', 'lineFunctionCall', 'functionDef', 'num', 'expression', 
			'logicExpression'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PARAM'", "','", "'SEG'", "'MIL'", "'MIN'", "'LUEGO'", "'DE'", 
		    "'CADA'", "'FUNC'", "'RET'", null, null, null, "'DELTA'", null, null, 
		    null, null, null, null, null, null, null, "'NL'", "'TB'", "'+'", "'-'", 
		    "'*'", "'/'", "'('", "')'", "'.'", "'='", "'Y'", "'O'", "'V'", "'F'", 
		    "'NO'", "'=='", "'!='", "'<'", "'<='", "'>'", "'>='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    "ID", "NUMBER", "STRING", "DELTA", "NULL", "DO", "IF", "THEN", "ELSE", 
		    "WHILE", "CONSOLE", "SPRITE", "END", "NL", "TB", "PLUS", "MINUS", 
		    "MULTIPLY", "DIVIDE", "LPAREN", "RPAREN", "DOT", "EQUAL", "AND", "LOR", 
		    "TRUE", "FALSE", "NOT", "EQL", "NEQ", "LST", "LTE", "GRT", "GTE", 
		    "NEWLINE", "WS", "COMMENT"
		];

		private const SERIALIZED_ATN =
			[4, 1, 47, 286, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 1, 0, 4, 0, 46, 8, 0, 11, 0, 12, 
		    0, 47, 1, 0, 3, 0, 51, 8, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 3, 1, 58, 
		    8, 1, 1, 1, 1, 1, 1, 1, 5, 1, 63, 8, 1, 10, 1, 12, 1, 66, 9, 1, 1, 
		    1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 5, 2, 74, 8, 2, 10, 2, 12, 2, 77, 
		    9, 2, 3, 2, 79, 8, 2, 1, 3, 1, 3, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 
		    5, 1, 5, 1, 5, 1, 5, 1, 5, 3, 5, 93, 8, 5, 1, 6, 1, 6, 1, 7, 1, 7, 
		    1, 7, 5, 7, 100, 8, 7, 10, 7, 12, 7, 103, 9, 7, 3, 7, 105, 8, 7, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 9, 1, 9, 5, 9, 114, 8, 9, 10, 9, 12, 
		    9, 117, 9, 9, 1, 10, 1, 10, 1, 10, 1, 10, 3, 10, 123, 8, 10, 1, 10, 
		    1, 10, 1, 11, 1, 11, 5, 11, 129, 8, 11, 10, 11, 12, 11, 132, 9, 11, 
		    1, 12, 1, 12, 5, 12, 136, 8, 12, 10, 12, 12, 12, 139, 9, 12, 1, 13, 
		    1, 13, 1, 13, 1, 13, 1, 13, 1, 14, 1, 14, 3, 14, 148, 8, 14, 1, 14, 
		    1, 14, 1, 14, 5, 14, 153, 8, 14, 10, 14, 12, 14, 156, 9, 14, 1, 14, 
		    1, 14, 1, 15, 1, 15, 1, 15, 1, 15, 5, 15, 164, 8, 15, 10, 15, 12, 
		    15, 167, 9, 15, 1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 5, 
		    16, 176, 8, 16, 10, 16, 12, 16, 179, 9, 16, 3, 16, 181, 8, 16, 1, 
		    16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 5, 17, 190, 8, 17, 10, 
		    17, 12, 17, 193, 9, 17, 3, 17, 195, 8, 17, 1, 18, 1, 18, 1, 18, 3, 
		    18, 200, 8, 18, 1, 18, 5, 18, 203, 8, 18, 10, 18, 12, 18, 206, 9, 
		    18, 1, 18, 1, 18, 1, 18, 1, 19, 3, 19, 212, 8, 19, 1, 19, 1, 19, 1, 
		    20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 
		    3, 20, 226, 8, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 5, 20, 240, 8, 20, 10, 20, 12, 
		    20, 243, 9, 20, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 
		    21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 
		    1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 
		    21, 1, 21, 3, 21, 273, 8, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 
		    21, 5, 21, 281, 8, 21, 10, 21, 12, 21, 284, 9, 21, 1, 21, 0, 2, 40, 
		    42, 22, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 
		    32, 34, 36, 38, 40, 42, 0, 2, 1, 0, 3, 5, 3, 0, 11, 11, 13, 13, 24, 
		    25, 314, 0, 45, 1, 0, 0, 0, 2, 54, 1, 0, 0, 0, 4, 69, 1, 0, 0, 0, 
		    6, 80, 1, 0, 0, 0, 8, 82, 1, 0, 0, 0, 10, 92, 1, 0, 0, 0, 12, 94, 
		    1, 0, 0, 0, 14, 96, 1, 0, 0, 0, 16, 106, 1, 0, 0, 0, 18, 111, 1, 0, 
		    0, 0, 20, 118, 1, 0, 0, 0, 22, 126, 1, 0, 0, 0, 24, 133, 1, 0, 0, 
		    0, 26, 140, 1, 0, 0, 0, 28, 145, 1, 0, 0, 0, 30, 159, 1, 0, 0, 0, 
		    32, 170, 1, 0, 0, 0, 34, 184, 1, 0, 0, 0, 36, 196, 1, 0, 0, 0, 38, 
		    211, 1, 0, 0, 0, 40, 225, 1, 0, 0, 0, 42, 272, 1, 0, 0, 0, 44, 46, 
		    3, 2, 1, 0, 45, 44, 1, 0, 0, 0, 46, 47, 1, 0, 0, 0, 47, 45, 1, 0, 
		    0, 0, 47, 48, 1, 0, 0, 0, 48, 50, 1, 0, 0, 0, 49, 51, 5, 45, 0, 0, 
		    50, 49, 1, 0, 0, 0, 50, 51, 1, 0, 0, 0, 51, 52, 1, 0, 0, 0, 52, 53, 
		    5, 0, 0, 1, 53, 1, 1, 0, 0, 0, 54, 55, 5, 22, 0, 0, 55, 57, 5, 11, 
		    0, 0, 56, 58, 3, 4, 2, 0, 57, 56, 1, 0, 0, 0, 57, 58, 1, 0, 0, 0, 
		    58, 59, 1, 0, 0, 0, 59, 64, 5, 45, 0, 0, 60, 63, 3, 10, 5, 0, 61, 
		    63, 3, 36, 18, 0, 62, 60, 1, 0, 0, 0, 62, 61, 1, 0, 0, 0, 63, 66, 
		    1, 0, 0, 0, 64, 62, 1, 0, 0, 0, 64, 65, 1, 0, 0, 0, 65, 67, 1, 0, 
		    0, 0, 66, 64, 1, 0, 0, 0, 67, 68, 5, 23, 0, 0, 68, 3, 1, 0, 0, 0, 
		    69, 78, 5, 1, 0, 0, 70, 75, 5, 11, 0, 0, 71, 72, 5, 2, 0, 0, 72, 74, 
		    5, 11, 0, 0, 73, 71, 1, 0, 0, 0, 74, 77, 1, 0, 0, 0, 75, 73, 1, 0, 
		    0, 0, 75, 76, 1, 0, 0, 0, 76, 79, 1, 0, 0, 0, 77, 75, 1, 0, 0, 0, 
		    78, 70, 1, 0, 0, 0, 78, 79, 1, 0, 0, 0, 79, 5, 1, 0, 0, 0, 80, 81, 
		    7, 0, 0, 0, 81, 7, 1, 0, 0, 0, 82, 83, 5, 45, 0, 0, 83, 9, 1, 0, 0, 
		    0, 84, 93, 3, 16, 8, 0, 85, 93, 3, 20, 10, 0, 86, 93, 3, 26, 13, 0, 
		    87, 93, 3, 34, 17, 0, 88, 93, 3, 28, 14, 0, 89, 93, 3, 30, 15, 0, 
		    90, 93, 3, 14, 7, 0, 91, 93, 3, 8, 4, 0, 92, 84, 1, 0, 0, 0, 92, 85, 
		    1, 0, 0, 0, 92, 86, 1, 0, 0, 0, 92, 87, 1, 0, 0, 0, 92, 88, 1, 0, 
		    0, 0, 92, 89, 1, 0, 0, 0, 92, 90, 1, 0, 0, 0, 92, 91, 1, 0, 0, 0, 
		    93, 11, 1, 0, 0, 0, 94, 95, 7, 1, 0, 0, 95, 13, 1, 0, 0, 0, 96, 104, 
		    5, 21, 0, 0, 97, 101, 3, 12, 6, 0, 98, 100, 3, 12, 6, 0, 99, 98, 1, 
		    0, 0, 0, 100, 103, 1, 0, 0, 0, 101, 99, 1, 0, 0, 0, 101, 102, 1, 0, 
		    0, 0, 102, 105, 1, 0, 0, 0, 103, 101, 1, 0, 0, 0, 104, 97, 1, 0, 0, 
		    0, 104, 105, 1, 0, 0, 0, 105, 15, 1, 0, 0, 0, 106, 107, 5, 20, 0, 
		    0, 107, 108, 3, 42, 21, 0, 108, 109, 3, 18, 9, 0, 109, 110, 5, 23, 
		    0, 0, 110, 17, 1, 0, 0, 0, 111, 115, 5, 16, 0, 0, 112, 114, 3, 10, 
		    5, 0, 113, 112, 1, 0, 0, 0, 114, 117, 1, 0, 0, 0, 115, 113, 1, 0, 
		    0, 0, 115, 116, 1, 0, 0, 0, 116, 19, 1, 0, 0, 0, 117, 115, 1, 0, 0, 
		    0, 118, 119, 5, 17, 0, 0, 119, 120, 3, 42, 21, 0, 120, 122, 3, 22, 
		    11, 0, 121, 123, 3, 24, 12, 0, 122, 121, 1, 0, 0, 0, 122, 123, 1, 
		    0, 0, 0, 123, 124, 1, 0, 0, 0, 124, 125, 5, 23, 0, 0, 125, 21, 1, 
		    0, 0, 0, 126, 130, 5, 18, 0, 0, 127, 129, 3, 10, 5, 0, 128, 127, 1, 
		    0, 0, 0, 129, 132, 1, 0, 0, 0, 130, 128, 1, 0, 0, 0, 130, 131, 1, 
		    0, 0, 0, 131, 23, 1, 0, 0, 0, 132, 130, 1, 0, 0, 0, 133, 137, 5, 19, 
		    0, 0, 134, 136, 3, 10, 5, 0, 135, 134, 1, 0, 0, 0, 136, 139, 1, 0, 
		    0, 0, 137, 135, 1, 0, 0, 0, 137, 138, 1, 0, 0, 0, 138, 25, 1, 0, 0, 
		    0, 139, 137, 1, 0, 0, 0, 140, 141, 5, 11, 0, 0, 141, 142, 5, 33, 0, 
		    0, 142, 143, 3, 40, 20, 0, 143, 144, 5, 45, 0, 0, 144, 27, 1, 0, 0, 
		    0, 145, 147, 5, 6, 0, 0, 146, 148, 5, 7, 0, 0, 147, 146, 1, 0, 0, 
		    0, 147, 148, 1, 0, 0, 0, 148, 149, 1, 0, 0, 0, 149, 150, 3, 40, 20, 
		    0, 150, 154, 3, 6, 3, 0, 151, 153, 3, 10, 5, 0, 152, 151, 1, 0, 0, 
		    0, 153, 156, 1, 0, 0, 0, 154, 152, 1, 0, 0, 0, 154, 155, 1, 0, 0, 
		    0, 155, 157, 1, 0, 0, 0, 156, 154, 1, 0, 0, 0, 157, 158, 5, 23, 0, 
		    0, 158, 29, 1, 0, 0, 0, 159, 160, 5, 8, 0, 0, 160, 161, 3, 40, 20, 
		    0, 161, 165, 3, 6, 3, 0, 162, 164, 3, 10, 5, 0, 163, 162, 1, 0, 0, 
		    0, 164, 167, 1, 0, 0, 0, 165, 163, 1, 0, 0, 0, 165, 166, 1, 0, 0, 
		    0, 166, 168, 1, 0, 0, 0, 167, 165, 1, 0, 0, 0, 168, 169, 5, 23, 0, 
		    0, 169, 31, 1, 0, 0, 0, 170, 171, 5, 11, 0, 0, 171, 180, 5, 30, 0, 
		    0, 172, 177, 3, 40, 20, 0, 173, 174, 5, 2, 0, 0, 174, 176, 3, 40, 
		    20, 0, 175, 173, 1, 0, 0, 0, 176, 179, 1, 0, 0, 0, 177, 175, 1, 0, 
		    0, 0, 177, 178, 1, 0, 0, 0, 178, 181, 1, 0, 0, 0, 179, 177, 1, 0, 
		    0, 0, 180, 172, 1, 0, 0, 0, 180, 181, 1, 0, 0, 0, 181, 182, 1, 0, 
		    0, 0, 182, 183, 5, 31, 0, 0, 183, 33, 1, 0, 0, 0, 184, 185, 5, 16, 
		    0, 0, 185, 194, 5, 11, 0, 0, 186, 191, 3, 40, 20, 0, 187, 188, 5, 
		    2, 0, 0, 188, 190, 3, 40, 20, 0, 189, 187, 1, 0, 0, 0, 190, 193, 1, 
		    0, 0, 0, 191, 189, 1, 0, 0, 0, 191, 192, 1, 0, 0, 0, 192, 195, 1, 
		    0, 0, 0, 193, 191, 1, 0, 0, 0, 194, 186, 1, 0, 0, 0, 194, 195, 1, 
		    0, 0, 0, 195, 35, 1, 0, 0, 0, 196, 197, 5, 9, 0, 0, 197, 199, 5, 11, 
		    0, 0, 198, 200, 3, 4, 2, 0, 199, 198, 1, 0, 0, 0, 199, 200, 1, 0, 
		    0, 0, 200, 204, 1, 0, 0, 0, 201, 203, 3, 10, 5, 0, 202, 201, 1, 0, 
		    0, 0, 203, 206, 1, 0, 0, 0, 204, 202, 1, 0, 0, 0, 204, 205, 1, 0, 
		    0, 0, 205, 207, 1, 0, 0, 0, 206, 204, 1, 0, 0, 0, 207, 208, 5, 10, 
		    0, 0, 208, 209, 3, 40, 20, 0, 209, 37, 1, 0, 0, 0, 210, 212, 5, 27, 
		    0, 0, 211, 210, 1, 0, 0, 0, 211, 212, 1, 0, 0, 0, 212, 213, 1, 0, 
		    0, 0, 213, 214, 5, 12, 0, 0, 214, 39, 1, 0, 0, 0, 215, 216, 6, 20, 
		    -1, 0, 216, 226, 5, 11, 0, 0, 217, 226, 5, 15, 0, 0, 218, 226, 5, 
		    14, 0, 0, 219, 226, 3, 32, 16, 0, 220, 221, 5, 30, 0, 0, 221, 222, 
		    3, 40, 20, 0, 222, 223, 5, 31, 0, 0, 223, 226, 1, 0, 0, 0, 224, 226, 
		    3, 38, 19, 0, 225, 215, 1, 0, 0, 0, 225, 217, 1, 0, 0, 0, 225, 218, 
		    1, 0, 0, 0, 225, 219, 1, 0, 0, 0, 225, 220, 1, 0, 0, 0, 225, 224, 
		    1, 0, 0, 0, 226, 241, 1, 0, 0, 0, 227, 228, 10, 5, 0, 0, 228, 229, 
		    5, 28, 0, 0, 229, 240, 3, 40, 20, 6, 230, 231, 10, 4, 0, 0, 231, 232, 
		    5, 29, 0, 0, 232, 240, 3, 40, 20, 5, 233, 234, 10, 3, 0, 0, 234, 235, 
		    5, 26, 0, 0, 235, 240, 3, 40, 20, 4, 236, 237, 10, 2, 0, 0, 237, 238, 
		    5, 27, 0, 0, 238, 240, 3, 40, 20, 3, 239, 227, 1, 0, 0, 0, 239, 230, 
		    1, 0, 0, 0, 239, 233, 1, 0, 0, 0, 239, 236, 1, 0, 0, 0, 240, 243, 
		    1, 0, 0, 0, 241, 239, 1, 0, 0, 0, 241, 242, 1, 0, 0, 0, 242, 41, 1, 
		    0, 0, 0, 243, 241, 1, 0, 0, 0, 244, 245, 6, 21, -1, 0, 245, 273, 5, 
		    36, 0, 0, 246, 273, 5, 37, 0, 0, 247, 273, 5, 11, 0, 0, 248, 249, 
		    5, 38, 0, 0, 249, 273, 3, 42, 21, 10, 250, 251, 5, 30, 0, 0, 251, 
		    252, 3, 42, 21, 0, 252, 253, 5, 31, 0, 0, 253, 273, 1, 0, 0, 0, 254, 
		    255, 5, 11, 0, 0, 255, 256, 5, 39, 0, 0, 256, 273, 3, 40, 20, 0, 257, 
		    258, 5, 11, 0, 0, 258, 259, 5, 40, 0, 0, 259, 273, 3, 40, 20, 0, 260, 
		    261, 5, 11, 0, 0, 261, 262, 5, 41, 0, 0, 262, 273, 3, 40, 20, 0, 263, 
		    264, 5, 11, 0, 0, 264, 265, 5, 42, 0, 0, 265, 273, 3, 40, 20, 0, 266, 
		    267, 5, 11, 0, 0, 267, 268, 5, 43, 0, 0, 268, 273, 3, 40, 20, 0, 269, 
		    270, 5, 11, 0, 0, 270, 271, 5, 44, 0, 0, 271, 273, 3, 40, 20, 0, 272, 
		    244, 1, 0, 0, 0, 272, 246, 1, 0, 0, 0, 272, 247, 1, 0, 0, 0, 272, 
		    248, 1, 0, 0, 0, 272, 250, 1, 0, 0, 0, 272, 254, 1, 0, 0, 0, 272, 
		    257, 1, 0, 0, 0, 272, 260, 1, 0, 0, 0, 272, 263, 1, 0, 0, 0, 272, 
		    266, 1, 0, 0, 0, 272, 269, 1, 0, 0, 0, 273, 282, 1, 0, 0, 0, 274, 
		    275, 10, 8, 0, 0, 275, 276, 5, 34, 0, 0, 276, 281, 3, 42, 21, 9, 277, 
		    278, 10, 7, 0, 0, 278, 279, 5, 35, 0, 0, 279, 281, 3, 42, 21, 8, 280, 
		    274, 1, 0, 0, 0, 280, 277, 1, 0, 0, 0, 281, 284, 1, 0, 0, 0, 282, 
		    280, 1, 0, 0, 0, 282, 283, 1, 0, 0, 0, 283, 43, 1, 0, 0, 0, 284, 282, 
		    1, 0, 0, 0, 30, 47, 50, 57, 62, 64, 75, 78, 92, 101, 104, 115, 122, 
		    130, 137, 147, 154, 165, 177, 180, 191, 194, 199, 204, 211, 225, 239, 
		    241, 272, 280, 282];
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
		        $this->setState(45); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(44);
		        	$this->character();
		        	$this->setState(47); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::SPRITE);
		        $this->setState(50);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::NEWLINE) {
		        	$this->setState(49);
		        	$this->match(self::NEWLINE);
		        }
		        $this->setState(52);
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
		        $this->setState(54);
		        $this->match(self::SPRITE);
		        $this->setState(55);
		        $this->match(self::ID);
		        $this->setState(57);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__0) {
		        	$this->setState(56);
		        	$this->parameters();
		        }
		        $this->setState(59);
		        $this->match(self::NEWLINE);
		        $this->setState(64);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 35184375434048) !== 0)) {
		        	$this->setState(62);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::T__5:
		        	    case self::T__7:
		        	    case self::ID:
		        	    case self::DO:
		        	    case self::IF:
		        	    case self::WHILE:
		        	    case self::CONSOLE:
		        	    case self::NEWLINE:
		        	    	$this->setState(60);
		        	    	$this->statement();
		        	    	break;

		        	    case self::T__8:
		        	    	$this->setState(61);
		        	    	$this->functionDef();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(66);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(67);
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
		        $this->setState(69);
		        $this->match(self::T__0);
		        $this->setState(78);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		            case 1:
		        	    $this->setState(70);
		        	    $this->match(self::ID);
		        	    $this->setState(75);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__1) {
		        	    	$this->setState(71);
		        	    	$this->match(self::T__1);
		        	    	$this->setState(72);
		        	    	$this->match(self::ID);
		        	    	$this->setState(77);
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
		        $this->setState(80);

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
		public function emptyNewLine(): Context\EmptyNewLineContext
		{
		    $localContext = new Context\EmptyNewLineContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_emptyNewLine);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(82);
		        $this->match(self::NEWLINE);
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

		    $this->enterRule($localContext, 10, self::RULE_statement);

		    try {
		        $this->setState(92);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::WHILE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(84);
		            	$this->whileStatement();
		            	break;

		            case self::IF:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(85);
		            	$this->ifStatement();
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(86);
		            	$this->assignment();
		            	break;

		            case self::DO:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(87);
		            	$this->lineFunctionCall();
		            	break;

		            case self::T__5:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(88);
		            	$this->afterTimer();
		            	break;

		            case self::T__7:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(89);
		            	$this->everyTimer();
		            	break;

		            case self::CONSOLE:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(90);
		            	$this->consoleStatement();
		            	break;

		            case self::NEWLINE:
		            	$this->enterOuterAlt($localContext, 8);
		            	$this->setState(91);
		            	$this->emptyNewLine();
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

		    $this->enterRule($localContext, 12, self::RULE_printable);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(94);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 50341888) !== 0))) {
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

		    $this->enterRule($localContext, 14, self::RULE_consoleStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(96);
		        $this->match(self::CONSOLE);
		        $this->setState(104);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
		            case 1:
		        	    $this->setState(97);
		        	    $this->printable();
		        	    $this->setState(101);
		        	    $this->errorHandler->sync($this);

		        	    $alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);

		        	    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	    	if ($alt === 1) {
		        	    		$this->setState(98);
		        	    		$this->printable(); 
		        	    	}

		        	    	$this->setState(103);
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx);
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

		    $this->enterRule($localContext, 16, self::RULE_whileStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(106);
		        $this->match(self::WHILE);
		        $this->setState(107);
		        $this->recursiveLogicExpression(0);
		        $this->setState(108);
		        $this->doStatement();
		        $this->setState(109);
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

		    $this->enterRule($localContext, 18, self::RULE_doStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(111);
		        $this->match(self::DO);
		        $this->setState(115);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 35184375433536) !== 0)) {
		        	$this->setState(112);
		        	$this->statement();
		        	$this->setState(117);
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

		    $this->enterRule($localContext, 20, self::RULE_ifStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(118);
		        $this->match(self::IF);
		        $this->setState(119);
		        $this->recursiveLogicExpression(0);
		        $this->setState(120);
		        $this->thenStatement();
		        $this->setState(122);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(121);
		        	$this->elseStatement();
		        }
		        $this->setState(124);
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

		    $this->enterRule($localContext, 22, self::RULE_thenStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(126);
		        $this->match(self::THEN);
		        $this->setState(130);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 35184375433536) !== 0)) {
		        	$this->setState(127);
		        	$this->statement();
		        	$this->setState(132);
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

		    $this->enterRule($localContext, 24, self::RULE_elseStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(133);
		        $this->match(self::ELSE);
		        $this->setState(137);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 35184375433536) !== 0)) {
		        	$this->setState(134);
		        	$this->statement();
		        	$this->setState(139);
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

		    $this->enterRule($localContext, 26, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(140);
		        $this->match(self::ID);
		        $this->setState(141);
		        $this->match(self::EQUAL);
		        $this->setState(142);
		        $this->recursiveExpression(0);
		        $this->setState(143);
		        $this->match(self::NEWLINE);
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

		    $this->enterRule($localContext, 28, self::RULE_afterTimer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(145);
		        $this->match(self::T__5);
		        $this->setState(147);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__6) {
		        	$this->setState(146);
		        	$this->match(self::T__6);
		        }
		        $this->setState(149);
		        $this->recursiveExpression(0);
		        $this->setState(150);
		        $this->timeUnit();
		        $this->setState(154);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 35184375433536) !== 0)) {
		        	$this->setState(151);
		        	$this->statement();
		        	$this->setState(156);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(157);
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

		    $this->enterRule($localContext, 30, self::RULE_everyTimer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(159);
		        $this->match(self::T__7);
		        $this->setState(160);
		        $this->recursiveExpression(0);
		        $this->setState(161);
		        $this->timeUnit();
		        $this->setState(165);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 35184375433536) !== 0)) {
		        	$this->setState(162);
		        	$this->statement();
		        	$this->setState(167);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(168);
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

		    $this->enterRule($localContext, 32, self::RULE_functionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(170);
		        $this->match(self::ID);
		        $this->setState(171);
		        $this->match(self::LPAREN);
		        $this->setState(180);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1208014848) !== 0)) {
		        	$this->setState(172);
		        	$this->recursiveExpression(0);
		        	$this->setState(177);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__1) {
		        		$this->setState(173);
		        		$this->match(self::T__1);
		        		$this->setState(174);
		        		$this->recursiveExpression(0);
		        		$this->setState(179);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(182);
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

		    $this->enterRule($localContext, 34, self::RULE_lineFunctionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(184);
		        $this->match(self::DO);
		        $this->setState(185);
		        $this->match(self::ID);
		        $this->setState(194);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx)) {
		            case 1:
		        	    $this->setState(186);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(191);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__1) {
		        	    	$this->setState(187);
		        	    	$this->match(self::T__1);
		        	    	$this->setState(188);
		        	    	$this->recursiveExpression(0);
		        	    	$this->setState(193);
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

		    $this->enterRule($localContext, 36, self::RULE_functionDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(196);
		        $this->match(self::T__8);
		        $this->setState(197);
		        $this->match(self::ID);
		        $this->setState(199);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__0) {
		        	$this->setState(198);
		        	$this->parameters();
		        }
		        $this->setState(204);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 35184375433536) !== 0)) {
		        	$this->setState(201);
		        	$this->statement();
		        	$this->setState(206);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(207);
		        $this->match(self::T__9);
		        $this->setState(208);
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

		    $this->enterRule($localContext, 38, self::RULE_num);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(211);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::MINUS) {
		        	$this->setState(210);
		        	$this->match(self::MINUS);
		        }
		        $this->setState(213);
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
			$startState = 40;
			$this->enterRecursionRule($localContext, 40, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(225);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx)) {
					case 1:
					    $this->setState(216);
					    $this->match(self::ID);
					break;

					case 2:
					    $this->setState(217);
					    $this->match(self::NULL);
					break;

					case 3:
					    $this->setState(218);
					    $this->match(self::DELTA);
					break;

					case 4:
					    $this->setState(219);
					    $this->functionCall();
					break;

					case 5:
					    $this->setState(220);
					    $this->match(self::LPAREN);
					    $this->setState(221);
					    $this->recursiveExpression(0);
					    $this->setState(222);
					    $this->match(self::RPAREN);
					break;

					case 6:
					    $this->setState(224);
					    $this->num();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(241);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(239);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(227);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(228);
							    $this->match(self::MULTIPLY);
							    $this->setState(229);
							    $this->recursiveExpression(6);
							break;

							case 2:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(230);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(231);
							    $this->match(self::DIVIDE);
							    $this->setState(232);
							    $this->recursiveExpression(5);
							break;

							case 3:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(233);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(234);
							    $this->match(self::PLUS);
							    $this->setState(235);
							    $this->recursiveExpression(4);
							break;

							case 4:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(236);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(237);
							    $this->match(self::MINUS);
							    $this->setState(238);
							    $this->recursiveExpression(3);
							break;
						} 
					}

					$this->setState(243);
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
			$startState = 42;
			$this->enterRecursionRule($localContext, 42, self::RULE_logicExpression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(272);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
					case 1:
					    $this->setState(245);
					    $this->match(self::TRUE);
					break;

					case 2:
					    $this->setState(246);
					    $this->match(self::FALSE);
					break;

					case 3:
					    $this->setState(247);
					    $this->match(self::ID);
					break;

					case 4:
					    $this->setState(248);
					    $this->match(self::NOT);
					    $this->setState(249);
					    $this->recursiveLogicExpression(10);
					break;

					case 5:
					    $this->setState(250);
					    $this->match(self::LPAREN);
					    $this->setState(251);
					    $this->recursiveLogicExpression(0);
					    $this->setState(252);
					    $this->match(self::RPAREN);
					break;

					case 6:
					    $this->setState(254);
					    $this->match(self::ID);
					    $this->setState(255);
					    $this->match(self::EQL);
					    $this->setState(256);
					    $this->recursiveExpression(0);
					break;

					case 7:
					    $this->setState(257);
					    $this->match(self::ID);
					    $this->setState(258);
					    $this->match(self::NEQ);
					    $this->setState(259);
					    $this->recursiveExpression(0);
					break;

					case 8:
					    $this->setState(260);
					    $this->match(self::ID);
					    $this->setState(261);
					    $this->match(self::LST);
					    $this->setState(262);
					    $this->recursiveExpression(0);
					break;

					case 9:
					    $this->setState(263);
					    $this->match(self::ID);
					    $this->setState(264);
					    $this->match(self::LTE);
					    $this->setState(265);
					    $this->recursiveExpression(0);
					break;

					case 10:
					    $this->setState(266);
					    $this->match(self::ID);
					    $this->setState(267);
					    $this->match(self::GRT);
					    $this->setState(268);
					    $this->recursiveExpression(0);
					break;

					case 11:
					    $this->setState(269);
					    $this->match(self::ID);
					    $this->setState(270);
					    $this->match(self::GTE);
					    $this->setState(271);
					    $this->recursiveExpression(0);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(282);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(280);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
							case 1:
							    $localContext = new Context\LogicExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_logicExpression);
							    $this->setState(274);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(275);
							    $this->match(self::AND);
							    $this->setState(276);
							    $this->recursiveLogicExpression(9);
							break;

							case 2:
							    $localContext = new Context\LogicExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_logicExpression);
							    $this->setState(277);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(278);
							    $this->match(self::LOR);
							    $this->setState(279);
							    $this->recursiveLogicExpression(8);
							break;
						} 
					}

					$this->setState(284);
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
					case 20:
						return $this->sempredExpression($localContext, $predicateIndex);

					case 21:
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
	use App\Parsers\GameLang\GameLangVisitor;
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

	    public function NEWLINE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NEWLINE, 0);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitProgram($this);
		    }

			return $visitor->visitChildren($this);
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

	    public function NEWLINE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NEWLINE, 0);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitCharacter($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitParameters($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitTimeUnit($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EmptyNewLineContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_emptyNewLine;
	    }

	    public function NEWLINE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NEWLINE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterEmptyNewLine($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitEmptyNewLine($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitEmptyNewLine($this);
		    }

			return $visitor->visitChildren($this);
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

	    public function emptyNewLine(): ?EmptyNewLineContext
	    {
	    	return $this->getTypedRuleContext(EmptyNewLineContext::class, 0);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitStatement($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitPrintable($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitConsoleStatement($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitWhileStatement($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitDoStatement($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitIfStatement($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitThenStatement($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitElseStatement($this);
		    }

			return $visitor->visitChildren($this);
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

	    public function NEWLINE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NEWLINE, 0);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitAssignment($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitAfterTimer($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitEveryTimer($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitFunctionCall($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitLineFunctionCall($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitFunctionDef($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitNum($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitExpression($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitLogicExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}