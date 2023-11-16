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
               T__6 = 7, ID = 8, NUMBER = 9, STRING = 10, DELTA = 11, NULL = 12, 
               DO = 13, IF = 14, THEN = 15, ELSE = 16, WHILE = 17, CONSOLE = 18, 
               SPRITE = 19, MOVE = 20, ROTATE = 21, TO = 22, END = 23, NL = 24, 
               TB = 25, PLUS = 26, MINUS = 27, MULTIPLY = 28, DIVIDE = 29, 
               LPAREN = 30, RPAREN = 31, DOT = 32, EQUAL = 33, AND = 34, 
               LOR = 35, TRUE = 36, FALSE = 37, NOT = 38, EQL = 39, NEQ = 40, 
               LST = 41, LTE = 42, GRT = 43, GTE = 44, WS = 45, COMMENT = 46;

		public const RULE_program = 0, RULE_character = 1, RULE_parameters = 2, 
               RULE_timeUnit = 3, RULE_statement = 4, RULE_printable = 5, 
               RULE_consoleStatement = 6, RULE_whileStatement = 7, RULE_doStatement = 8, 
               RULE_ifStatement = 9, RULE_thenStatement = 10, RULE_elseStatement = 11, 
               RULE_assignment = 12, RULE_functionCall = 13, RULE_lineFunctionCall = 14, 
               RULE_functionDef = 15, RULE_num = 16, RULE_expression = 17, 
               RULE_logicExpression = 18, RULE_moveStatement = 19;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'character', 'parameters', 'timeUnit', 'statement', 'printable', 
			'consoleStatement', 'whileStatement', 'doStatement', 'ifStatement', 'thenStatement', 
			'elseStatement', 'assignment', 'functionCall', 'lineFunctionCall', 'functionDef', 
			'num', 'expression', 'logicExpression', 'moveStatement'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PARAM'", "','", "'SEG'", "'MIL'", "'MIN'", "'FUNC'", "'RET'", 
		    null, null, null, "'DELTA'", null, null, null, null, null, null, null, 
		    null, null, null, null, null, "'NL'", "'TB'", "'+'", "'-'", "'*'", 
		    "'/'", "'('", "')'", "'.'", "'='", "'Y'", "'O'", "'V'", "'F'", "'NO'", 
		    "'=='", "'!='", "'<'", "'<='", "'>'", "'>='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, "ID", "NUMBER", "STRING", 
		    "DELTA", "NULL", "DO", "IF", "THEN", "ELSE", "WHILE", "CONSOLE", "SPRITE", 
		    "MOVE", "ROTATE", "TO", "END", "NL", "TB", "PLUS", "MINUS", "MULTIPLY", 
		    "DIVIDE", "LPAREN", "RPAREN", "DOT", "EQUAL", "AND", "LOR", "TRUE", 
		    "FALSE", "NOT", "EQL", "NEQ", "LST", "LTE", "GRT", "GTE", "WS", "COMMENT"
		];

		private const SERIALIZED_ATN =
			[4, 1, 46, 255, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 1, 0, 4, 0, 42, 8, 0, 11, 0, 12, 0, 43, 1, 0, 1, 0, 1, 1, 1, 
		    1, 1, 1, 3, 1, 51, 8, 1, 1, 1, 1, 1, 5, 1, 55, 8, 1, 10, 1, 12, 1, 
		    58, 9, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 5, 2, 66, 8, 2, 10, 
		    2, 12, 2, 69, 9, 2, 3, 2, 71, 8, 2, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 
		    1, 4, 1, 4, 1, 4, 3, 4, 81, 8, 4, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 5, 
		    6, 88, 8, 6, 10, 6, 12, 6, 91, 9, 6, 3, 6, 93, 8, 6, 1, 7, 1, 7, 1, 
		    7, 1, 7, 1, 7, 1, 8, 1, 8, 5, 8, 102, 8, 8, 10, 8, 12, 8, 105, 9, 
		    8, 1, 9, 1, 9, 1, 9, 1, 9, 3, 9, 111, 8, 9, 1, 9, 1, 9, 1, 10, 1, 
		    10, 5, 10, 117, 8, 10, 10, 10, 12, 10, 120, 9, 10, 1, 11, 1, 11, 5, 
		    11, 124, 8, 11, 10, 11, 12, 11, 127, 9, 11, 1, 12, 1, 12, 1, 12, 1, 
		    12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 5, 13, 138, 8, 13, 10, 13, 
		    12, 13, 141, 9, 13, 3, 13, 143, 8, 13, 1, 13, 1, 13, 1, 14, 1, 14, 
		    1, 14, 1, 14, 1, 14, 5, 14, 152, 8, 14, 10, 14, 12, 14, 155, 9, 14, 
		    3, 14, 157, 8, 14, 1, 15, 1, 15, 1, 15, 3, 15, 162, 8, 15, 1, 15, 
		    5, 15, 165, 8, 15, 10, 15, 12, 15, 168, 9, 15, 1, 15, 1, 15, 1, 15, 
		    1, 16, 3, 16, 174, 8, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 
		    1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 3, 17, 189, 8, 17, 
		    1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 
		    17, 1, 17, 1, 17, 5, 17, 203, 8, 17, 10, 17, 12, 17, 206, 9, 17, 1, 
		    18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 
		    1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 
		    18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 3, 18, 
		    236, 8, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 5, 18, 244, 
		    8, 18, 10, 18, 12, 18, 247, 9, 18, 1, 19, 1, 19, 3, 19, 251, 8, 19, 
		    1, 19, 1, 19, 1, 19, 0, 2, 34, 36, 20, 0, 2, 4, 6, 8, 10, 12, 14, 
		    16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 0, 2, 1, 0, 3, 5, 
		    3, 0, 8, 8, 10, 10, 24, 25, 281, 0, 41, 1, 0, 0, 0, 2, 47, 1, 0, 0, 
		    0, 4, 61, 1, 0, 0, 0, 6, 72, 1, 0, 0, 0, 8, 80, 1, 0, 0, 0, 10, 82, 
		    1, 0, 0, 0, 12, 84, 1, 0, 0, 0, 14, 94, 1, 0, 0, 0, 16, 99, 1, 0, 
		    0, 0, 18, 106, 1, 0, 0, 0, 20, 114, 1, 0, 0, 0, 22, 121, 1, 0, 0, 
		    0, 24, 128, 1, 0, 0, 0, 26, 132, 1, 0, 0, 0, 28, 146, 1, 0, 0, 0, 
		    30, 158, 1, 0, 0, 0, 32, 173, 1, 0, 0, 0, 34, 188, 1, 0, 0, 0, 36, 
		    235, 1, 0, 0, 0, 38, 248, 1, 0, 0, 0, 40, 42, 3, 2, 1, 0, 41, 40, 
		    1, 0, 0, 0, 42, 43, 1, 0, 0, 0, 43, 41, 1, 0, 0, 0, 43, 44, 1, 0, 
		    0, 0, 44, 45, 1, 0, 0, 0, 45, 46, 5, 0, 0, 1, 46, 1, 1, 0, 0, 0, 47, 
		    48, 5, 19, 0, 0, 48, 50, 5, 8, 0, 0, 49, 51, 3, 4, 2, 0, 50, 49, 1, 
		    0, 0, 0, 50, 51, 1, 0, 0, 0, 51, 56, 1, 0, 0, 0, 52, 55, 3, 8, 4, 
		    0, 53, 55, 3, 30, 15, 0, 54, 52, 1, 0, 0, 0, 54, 53, 1, 0, 0, 0, 55, 
		    58, 1, 0, 0, 0, 56, 54, 1, 0, 0, 0, 56, 57, 1, 0, 0, 0, 57, 59, 1, 
		    0, 0, 0, 58, 56, 1, 0, 0, 0, 59, 60, 5, 23, 0, 0, 60, 3, 1, 0, 0, 
		    0, 61, 70, 5, 1, 0, 0, 62, 67, 5, 8, 0, 0, 63, 64, 5, 2, 0, 0, 64, 
		    66, 5, 8, 0, 0, 65, 63, 1, 0, 0, 0, 66, 69, 1, 0, 0, 0, 67, 65, 1, 
		    0, 0, 0, 67, 68, 1, 0, 0, 0, 68, 71, 1, 0, 0, 0, 69, 67, 1, 0, 0, 
		    0, 70, 62, 1, 0, 0, 0, 70, 71, 1, 0, 0, 0, 71, 5, 1, 0, 0, 0, 72, 
		    73, 7, 0, 0, 0, 73, 7, 1, 0, 0, 0, 74, 81, 3, 14, 7, 0, 75, 81, 3, 
		    18, 9, 0, 76, 81, 3, 24, 12, 0, 77, 81, 3, 28, 14, 0, 78, 81, 3, 12, 
		    6, 0, 79, 81, 3, 38, 19, 0, 80, 74, 1, 0, 0, 0, 80, 75, 1, 0, 0, 0, 
		    80, 76, 1, 0, 0, 0, 80, 77, 1, 0, 0, 0, 80, 78, 1, 0, 0, 0, 80, 79, 
		    1, 0, 0, 0, 81, 9, 1, 0, 0, 0, 82, 83, 7, 1, 0, 0, 83, 11, 1, 0, 0, 
		    0, 84, 92, 5, 18, 0, 0, 85, 89, 3, 10, 5, 0, 86, 88, 3, 10, 5, 0, 
		    87, 86, 1, 0, 0, 0, 88, 91, 1, 0, 0, 0, 89, 87, 1, 0, 0, 0, 89, 90, 
		    1, 0, 0, 0, 90, 93, 1, 0, 0, 0, 91, 89, 1, 0, 0, 0, 92, 85, 1, 0, 
		    0, 0, 92, 93, 1, 0, 0, 0, 93, 13, 1, 0, 0, 0, 94, 95, 5, 17, 0, 0, 
		    95, 96, 3, 36, 18, 0, 96, 97, 3, 16, 8, 0, 97, 98, 5, 23, 0, 0, 98, 
		    15, 1, 0, 0, 0, 99, 103, 5, 13, 0, 0, 100, 102, 3, 8, 4, 0, 101, 100, 
		    1, 0, 0, 0, 102, 105, 1, 0, 0, 0, 103, 101, 1, 0, 0, 0, 103, 104, 
		    1, 0, 0, 0, 104, 17, 1, 0, 0, 0, 105, 103, 1, 0, 0, 0, 106, 107, 5, 
		    14, 0, 0, 107, 108, 3, 36, 18, 0, 108, 110, 3, 20, 10, 0, 109, 111, 
		    3, 22, 11, 0, 110, 109, 1, 0, 0, 0, 110, 111, 1, 0, 0, 0, 111, 112, 
		    1, 0, 0, 0, 112, 113, 5, 23, 0, 0, 113, 19, 1, 0, 0, 0, 114, 118, 
		    5, 15, 0, 0, 115, 117, 3, 8, 4, 0, 116, 115, 1, 0, 0, 0, 117, 120, 
		    1, 0, 0, 0, 118, 116, 1, 0, 0, 0, 118, 119, 1, 0, 0, 0, 119, 21, 1, 
		    0, 0, 0, 120, 118, 1, 0, 0, 0, 121, 125, 5, 16, 0, 0, 122, 124, 3, 
		    8, 4, 0, 123, 122, 1, 0, 0, 0, 124, 127, 1, 0, 0, 0, 125, 123, 1, 
		    0, 0, 0, 125, 126, 1, 0, 0, 0, 126, 23, 1, 0, 0, 0, 127, 125, 1, 0, 
		    0, 0, 128, 129, 5, 8, 0, 0, 129, 130, 5, 33, 0, 0, 130, 131, 3, 34, 
		    17, 0, 131, 25, 1, 0, 0, 0, 132, 133, 5, 8, 0, 0, 133, 142, 5, 30, 
		    0, 0, 134, 139, 3, 34, 17, 0, 135, 136, 5, 2, 0, 0, 136, 138, 3, 34, 
		    17, 0, 137, 135, 1, 0, 0, 0, 138, 141, 1, 0, 0, 0, 139, 137, 1, 0, 
		    0, 0, 139, 140, 1, 0, 0, 0, 140, 143, 1, 0, 0, 0, 141, 139, 1, 0, 
		    0, 0, 142, 134, 1, 0, 0, 0, 142, 143, 1, 0, 0, 0, 143, 144, 1, 0, 
		    0, 0, 144, 145, 5, 31, 0, 0, 145, 27, 1, 0, 0, 0, 146, 147, 5, 13, 
		    0, 0, 147, 156, 5, 8, 0, 0, 148, 153, 3, 34, 17, 0, 149, 150, 5, 2, 
		    0, 0, 150, 152, 3, 34, 17, 0, 151, 149, 1, 0, 0, 0, 152, 155, 1, 0, 
		    0, 0, 153, 151, 1, 0, 0, 0, 153, 154, 1, 0, 0, 0, 154, 157, 1, 0, 
		    0, 0, 155, 153, 1, 0, 0, 0, 156, 148, 1, 0, 0, 0, 156, 157, 1, 0, 
		    0, 0, 157, 29, 1, 0, 0, 0, 158, 159, 5, 6, 0, 0, 159, 161, 5, 8, 0, 
		    0, 160, 162, 3, 4, 2, 0, 161, 160, 1, 0, 0, 0, 161, 162, 1, 0, 0, 
		    0, 162, 166, 1, 0, 0, 0, 163, 165, 3, 8, 4, 0, 164, 163, 1, 0, 0, 
		    0, 165, 168, 1, 0, 0, 0, 166, 164, 1, 0, 0, 0, 166, 167, 1, 0, 0, 
		    0, 167, 169, 1, 0, 0, 0, 168, 166, 1, 0, 0, 0, 169, 170, 5, 7, 0, 
		    0, 170, 171, 3, 34, 17, 0, 171, 31, 1, 0, 0, 0, 172, 174, 5, 27, 0, 
		    0, 173, 172, 1, 0, 0, 0, 173, 174, 1, 0, 0, 0, 174, 175, 1, 0, 0, 
		    0, 175, 176, 5, 9, 0, 0, 176, 33, 1, 0, 0, 0, 177, 178, 6, 17, -1, 
		    0, 178, 189, 5, 8, 0, 0, 179, 189, 5, 12, 0, 0, 180, 189, 5, 11, 0, 
		    0, 181, 189, 3, 26, 13, 0, 182, 183, 5, 30, 0, 0, 183, 184, 3, 34, 
		    17, 0, 184, 185, 5, 31, 0, 0, 185, 189, 1, 0, 0, 0, 186, 189, 3, 32, 
		    16, 0, 187, 189, 5, 10, 0, 0, 188, 177, 1, 0, 0, 0, 188, 179, 1, 0, 
		    0, 0, 188, 180, 1, 0, 0, 0, 188, 181, 1, 0, 0, 0, 188, 182, 1, 0, 
		    0, 0, 188, 186, 1, 0, 0, 0, 188, 187, 1, 0, 0, 0, 189, 204, 1, 0, 
		    0, 0, 190, 191, 10, 6, 0, 0, 191, 192, 5, 28, 0, 0, 192, 203, 3, 34, 
		    17, 7, 193, 194, 10, 5, 0, 0, 194, 195, 5, 29, 0, 0, 195, 203, 3, 
		    34, 17, 6, 196, 197, 10, 4, 0, 0, 197, 198, 5, 26, 0, 0, 198, 203, 
		    3, 34, 17, 5, 199, 200, 10, 3, 0, 0, 200, 201, 5, 27, 0, 0, 201, 203, 
		    3, 34, 17, 4, 202, 190, 1, 0, 0, 0, 202, 193, 1, 0, 0, 0, 202, 196, 
		    1, 0, 0, 0, 202, 199, 1, 0, 0, 0, 203, 206, 1, 0, 0, 0, 204, 202, 
		    1, 0, 0, 0, 204, 205, 1, 0, 0, 0, 205, 35, 1, 0, 0, 0, 206, 204, 1, 
		    0, 0, 0, 207, 208, 6, 18, -1, 0, 208, 236, 5, 36, 0, 0, 209, 236, 
		    5, 37, 0, 0, 210, 236, 5, 8, 0, 0, 211, 212, 5, 38, 0, 0, 212, 236, 
		    3, 36, 18, 10, 213, 214, 5, 30, 0, 0, 214, 215, 3, 36, 18, 0, 215, 
		    216, 5, 31, 0, 0, 216, 236, 1, 0, 0, 0, 217, 218, 5, 8, 0, 0, 218, 
		    219, 5, 39, 0, 0, 219, 236, 3, 34, 17, 0, 220, 221, 5, 8, 0, 0, 221, 
		    222, 5, 40, 0, 0, 222, 236, 3, 34, 17, 0, 223, 224, 5, 8, 0, 0, 224, 
		    225, 5, 41, 0, 0, 225, 236, 3, 34, 17, 0, 226, 227, 5, 8, 0, 0, 227, 
		    228, 5, 42, 0, 0, 228, 236, 3, 34, 17, 0, 229, 230, 5, 8, 0, 0, 230, 
		    231, 5, 43, 0, 0, 231, 236, 3, 34, 17, 0, 232, 233, 5, 8, 0, 0, 233, 
		    234, 5, 44, 0, 0, 234, 236, 3, 34, 17, 0, 235, 207, 1, 0, 0, 0, 235, 
		    209, 1, 0, 0, 0, 235, 210, 1, 0, 0, 0, 235, 211, 1, 0, 0, 0, 235, 
		    213, 1, 0, 0, 0, 235, 217, 1, 0, 0, 0, 235, 220, 1, 0, 0, 0, 235, 
		    223, 1, 0, 0, 0, 235, 226, 1, 0, 0, 0, 235, 229, 1, 0, 0, 0, 235, 
		    232, 1, 0, 0, 0, 236, 245, 1, 0, 0, 0, 237, 238, 10, 8, 0, 0, 238, 
		    239, 5, 34, 0, 0, 239, 244, 3, 36, 18, 9, 240, 241, 10, 7, 0, 0, 241, 
		    242, 5, 35, 0, 0, 242, 244, 3, 36, 18, 8, 243, 237, 1, 0, 0, 0, 243, 
		    240, 1, 0, 0, 0, 244, 247, 1, 0, 0, 0, 245, 243, 1, 0, 0, 0, 245, 
		    246, 1, 0, 0, 0, 246, 37, 1, 0, 0, 0, 247, 245, 1, 0, 0, 0, 248, 250, 
		    5, 20, 0, 0, 249, 251, 5, 22, 0, 0, 250, 249, 1, 0, 0, 0, 250, 251, 
		    1, 0, 0, 0, 251, 252, 1, 0, 0, 0, 252, 253, 3, 34, 17, 0, 253, 39, 
		    1, 0, 0, 0, 27, 43, 50, 54, 56, 67, 70, 80, 89, 92, 103, 110, 118, 
		    125, 139, 142, 153, 156, 161, 166, 173, 188, 202, 204, 235, 243, 245, 
		    250];
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
		        $this->setState(41); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(40);
		        	$this->character();
		        	$this->setState(43); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::SPRITE);
		        $this->setState(45);
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
		        $this->setState(47);
		        $this->match(self::SPRITE);
		        $this->setState(48);
		        $this->match(self::ID);
		        $this->setState(50);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__0) {
		        	$this->setState(49);
		        	$this->parameters();
		        }
		        $this->setState(56);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1466688) !== 0)) {
		        	$this->setState(54);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::ID:
		        	    case self::DO:
		        	    case self::IF:
		        	    case self::WHILE:
		        	    case self::CONSOLE:
		        	    case self::MOVE:
		        	    	$this->setState(52);
		        	    	$this->statement();
		        	    	break;

		        	    case self::T__5:
		        	    	$this->setState(53);
		        	    	$this->functionDef();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(58);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(59);
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
		        $this->setState(61);
		        $this->match(self::T__0);
		        $this->setState(70);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		            case 1:
		        	    $this->setState(62);
		        	    $this->match(self::ID);
		        	    $this->setState(67);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__1) {
		        	    	$this->setState(63);
		        	    	$this->match(self::T__1);
		        	    	$this->setState(64);
		        	    	$this->match(self::ID);
		        	    	$this->setState(69);
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
		        $this->setState(72);

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
		        $this->setState(80);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::WHILE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(74);
		            	$this->whileStatement();
		            	break;

		            case self::IF:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(75);
		            	$this->ifStatement();
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(76);
		            	$this->assignment();
		            	break;

		            case self::DO:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(77);
		            	$this->lineFunctionCall();
		            	break;

		            case self::CONSOLE:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(78);
		            	$this->consoleStatement();
		            	break;

		            case self::MOVE:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(79);
		            	$this->moveStatement();
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
		        $this->setState(82);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 50332928) !== 0))) {
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
		        $this->setState(84);
		        $this->match(self::CONSOLE);
		        $this->setState(92);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
		            case 1:
		        	    $this->setState(85);
		        	    $this->printable();
		        	    $this->setState(89);
		        	    $this->errorHandler->sync($this);

		        	    $alt = $this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx);

		        	    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	    	if ($alt === 1) {
		        	    		$this->setState(86);
		        	    		$this->printable(); 
		        	    	}

		        	    	$this->setState(91);
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
		        $this->setState(94);
		        $this->match(self::WHILE);
		        $this->setState(95);
		        $this->recursiveLogicExpression(0);
		        $this->setState(96);
		        $this->doStatement();
		        $this->setState(97);
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
		        $this->setState(99);
		        $this->match(self::DO);
		        $this->setState(103);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1466624) !== 0)) {
		        	$this->setState(100);
		        	$this->statement();
		        	$this->setState(105);
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
		        $this->setState(106);
		        $this->match(self::IF);
		        $this->setState(107);
		        $this->recursiveLogicExpression(0);
		        $this->setState(108);
		        $this->thenStatement();
		        $this->setState(110);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(109);
		        	$this->elseStatement();
		        }
		        $this->setState(112);
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
		        $this->setState(114);
		        $this->match(self::THEN);
		        $this->setState(118);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1466624) !== 0)) {
		        	$this->setState(115);
		        	$this->statement();
		        	$this->setState(120);
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
		        $this->setState(121);
		        $this->match(self::ELSE);
		        $this->setState(125);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1466624) !== 0)) {
		        	$this->setState(122);
		        	$this->statement();
		        	$this->setState(127);
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
		        $this->setState(128);
		        $this->match(self::ID);
		        $this->setState(129);
		        $this->match(self::EQUAL);
		        $this->setState(130);
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
		public function functionCall(): Context\FunctionCallContext
		{
		    $localContext = new Context\FunctionCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_functionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(132);
		        $this->match(self::ID);
		        $this->setState(133);
		        $this->match(self::LPAREN);
		        $this->setState(142);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1207967488) !== 0)) {
		        	$this->setState(134);
		        	$this->recursiveExpression(0);
		        	$this->setState(139);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__1) {
		        		$this->setState(135);
		        		$this->match(self::T__1);
		        		$this->setState(136);
		        		$this->recursiveExpression(0);
		        		$this->setState(141);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(144);
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

		    $this->enterRule($localContext, 28, self::RULE_lineFunctionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(146);
		        $this->match(self::DO);
		        $this->setState(147);
		        $this->match(self::ID);
		        $this->setState(156);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		            case 1:
		        	    $this->setState(148);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(153);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__1) {
		        	    	$this->setState(149);
		        	    	$this->match(self::T__1);
		        	    	$this->setState(150);
		        	    	$this->recursiveExpression(0);
		        	    	$this->setState(155);
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

		    $this->enterRule($localContext, 30, self::RULE_functionDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(158);
		        $this->match(self::T__5);
		        $this->setState(159);
		        $this->match(self::ID);
		        $this->setState(161);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__0) {
		        	$this->setState(160);
		        	$this->parameters();
		        }
		        $this->setState(166);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1466624) !== 0)) {
		        	$this->setState(163);
		        	$this->statement();
		        	$this->setState(168);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(169);
		        $this->match(self::T__6);
		        $this->setState(170);
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

		    $this->enterRule($localContext, 32, self::RULE_num);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(173);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::MINUS) {
		        	$this->setState(172);
		        	$this->match(self::MINUS);
		        }
		        $this->setState(175);
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
			$startState = 34;
			$this->enterRecursionRule($localContext, 34, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(188);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx)) {
					case 1:
					    $this->setState(178);
					    $this->match(self::ID);
					break;

					case 2:
					    $this->setState(179);
					    $this->match(self::NULL);
					break;

					case 3:
					    $this->setState(180);
					    $this->match(self::DELTA);
					break;

					case 4:
					    $this->setState(181);
					    $this->functionCall();
					break;

					case 5:
					    $this->setState(182);
					    $this->match(self::LPAREN);
					    $this->setState(183);
					    $this->recursiveExpression(0);
					    $this->setState(184);
					    $this->match(self::RPAREN);
					break;

					case 6:
					    $this->setState(186);
					    $this->num();
					break;

					case 7:
					    $this->setState(187);
					    $this->match(self::STRING);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(204);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 22, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(202);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(190);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(191);
							    $this->match(self::MULTIPLY);
							    $this->setState(192);
							    $this->recursiveExpression(7);
							break;

							case 2:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(193);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(194);
							    $this->match(self::DIVIDE);
							    $this->setState(195);
							    $this->recursiveExpression(6);
							break;

							case 3:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(196);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(197);
							    $this->match(self::PLUS);
							    $this->setState(198);
							    $this->recursiveExpression(5);
							break;

							case 4:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(199);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(200);
							    $this->match(self::MINUS);
							    $this->setState(201);
							    $this->recursiveExpression(4);
							break;
						} 
					}

					$this->setState(206);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 22, $this->ctx);
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
			$startState = 36;
			$this->enterRecursionRule($localContext, 36, self::RULE_logicExpression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(235);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx)) {
					case 1:
					    $this->setState(208);
					    $this->match(self::TRUE);
					break;

					case 2:
					    $this->setState(209);
					    $this->match(self::FALSE);
					break;

					case 3:
					    $this->setState(210);
					    $this->match(self::ID);
					break;

					case 4:
					    $this->setState(211);
					    $this->match(self::NOT);
					    $this->setState(212);
					    $this->recursiveLogicExpression(10);
					break;

					case 5:
					    $this->setState(213);
					    $this->match(self::LPAREN);
					    $this->setState(214);
					    $this->recursiveLogicExpression(0);
					    $this->setState(215);
					    $this->match(self::RPAREN);
					break;

					case 6:
					    $this->setState(217);
					    $this->match(self::ID);
					    $this->setState(218);
					    $this->match(self::EQL);
					    $this->setState(219);
					    $this->recursiveExpression(0);
					break;

					case 7:
					    $this->setState(220);
					    $this->match(self::ID);
					    $this->setState(221);
					    $this->match(self::NEQ);
					    $this->setState(222);
					    $this->recursiveExpression(0);
					break;

					case 8:
					    $this->setState(223);
					    $this->match(self::ID);
					    $this->setState(224);
					    $this->match(self::LST);
					    $this->setState(225);
					    $this->recursiveExpression(0);
					break;

					case 9:
					    $this->setState(226);
					    $this->match(self::ID);
					    $this->setState(227);
					    $this->match(self::LTE);
					    $this->setState(228);
					    $this->recursiveExpression(0);
					break;

					case 10:
					    $this->setState(229);
					    $this->match(self::ID);
					    $this->setState(230);
					    $this->match(self::GRT);
					    $this->setState(231);
					    $this->recursiveExpression(0);
					break;

					case 11:
					    $this->setState(232);
					    $this->match(self::ID);
					    $this->setState(233);
					    $this->match(self::GTE);
					    $this->setState(234);
					    $this->recursiveExpression(0);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(245);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(243);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx)) {
							case 1:
							    $localContext = new Context\LogicExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_logicExpression);
							    $this->setState(237);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(238);
							    $this->match(self::AND);
							    $this->setState(239);
							    $this->recursiveLogicExpression(9);
							break;

							case 2:
							    $localContext = new Context\LogicExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_logicExpression);
							    $this->setState(240);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(241);
							    $this->match(self::LOR);
							    $this->setState(242);
							    $this->recursiveLogicExpression(8);
							break;
						} 
					}

					$this->setState(247);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx);
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
		public function moveStatement(): Context\MoveStatementContext
		{
		    $localContext = new Context\MoveStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_moveStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(248);
		        $this->match(self::MOVE);
		        $this->setState(250);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::TO) {
		        	$this->setState(249);
		        	$this->match(self::TO);
		        }
		        $this->setState(252);
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
					case 17:
						return $this->sempredExpression($localContext, $predicateIndex);

					case 18:
						return $this->sempredLogicExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 6);

			    case 1:
			        return $this->precpred($this->ctx, 5);

			    case 2:
			        return $this->precpred($this->ctx, 4);

			    case 3:
			        return $this->precpred($this->ctx, 3);
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

	    public function consoleStatement(): ?ConsoleStatementContext
	    {
	    	return $this->getTypedRuleContext(ConsoleStatementContext::class, 0);
	    }

	    public function moveStatement(): ?MoveStatementContext
	    {
	    	return $this->getTypedRuleContext(MoveStatementContext::class, 0);
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

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::STRING, 0);
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

	class MoveStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_moveStatement;
	    }

	    public function MOVE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::MOVE, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function TO(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::TO, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterMoveStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitMoveStatement($this);
		    }
		}
	} 
}