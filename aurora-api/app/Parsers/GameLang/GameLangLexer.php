<?php

/*
 * Generated from GameLang.g4 by ANTLR 4.13.1
 */

namespace App\Parsers\GameLang {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class GameLangLexer extends Lexer
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, ID = 8, NUMBER = 9, STRING = 10, DELTA = 11, NULL = 12, 
               DO = 13, IF = 14, THEN = 15, ELSE = 16, WHILE = 17, CONSOLE = 18, 
               SPRITE = 19, MOVE = 20, ROTATE = 21, PLACE = 22, TO = 23, 
               AT = 24, END = 25, NL = 26, TB = 27, PLUS = 28, MINUS = 29, 
               MULTIPLY = 30, DIVIDE = 31, LPAREN = 32, RPAREN = 33, DOT = 34, 
               EQUAL = 35, AND = 36, LOR = 37, TRUE = 38, FALSE = 39, NOT = 40, 
               EQL = 41, NEQ = 42, LST = 43, LTE = 44, GRT = 45, GTE = 46, 
               WS = 47, COMMENT = 48;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'T__0', 'T__1', 'T__2', 'T__3', 'T__4', 'T__5', 'T__6', 'ID', 'NUMBER', 
			'STRING', 'DELTA', 'NULL', 'DO', 'IF', 'THEN', 'ELSE', 'WHILE', 'CONSOLE', 
			'SPRITE', 'MOVE', 'ROTATE', 'PLACE', 'TO', 'AT', 'END', 'NL', 'TB', 'PLUS', 
			'MINUS', 'MULTIPLY', 'DIVIDE', 'LPAREN', 'RPAREN', 'DOT', 'EQUAL', 'AND', 
			'LOR', 'TRUE', 'FALSE', 'NOT', 'EQL', 'NEQ', 'LST', 'LTE', 'GRT', 'GTE', 
			'WS', 'COMMENT'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PARAM'", "','", "'SEG'", "'MIL'", "'MIN'", "'FUNC'", "'RET'", 
		    null, null, null, "'DELTA'", null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, "'NL'", "'TB'", "'+'", "'-'", 
		    "'*'", "'/'", "'('", "')'", "'.'", "'='", "'Y'", "'O'", "'V'", "'F'", 
		    "'NO'", "'=='", "'!='", "'<'", "'<='", "'>'", "'>='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, "ID", "NUMBER", "STRING", 
		    "DELTA", "NULL", "DO", "IF", "THEN", "ELSE", "WHILE", "CONSOLE", "SPRITE", 
		    "MOVE", "ROTATE", "PLACE", "TO", "AT", "END", "NL", "TB", "PLUS", 
		    "MINUS", "MULTIPLY", "DIVIDE", "LPAREN", "RPAREN", "DOT", "EQUAL", 
		    "AND", "LOR", "TRUE", "FALSE", "NOT", "EQL", "NEQ", "LST", "LTE", 
		    "GRT", "GTE", "WS", "COMMENT"
		];

		private const SERIALIZED_ATN =
			[4, 0, 48, 408, 6, -1, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 
		    2, 4, 7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 
		    7, 9, 2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 
		    7, 14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 
		    19, 7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 
		    2, 24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 
		    28, 2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 
		    7, 33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 
		    38, 7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 
		    2, 43, 7, 43, 2, 44, 7, 44, 2, 45, 7, 45, 2, 46, 7, 46, 2, 47, 7, 
		    47, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 
		    2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 
		    5, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 5, 7, 129, 
		    8, 7, 10, 7, 12, 7, 132, 9, 7, 1, 8, 4, 8, 135, 8, 8, 11, 8, 12, 8, 
		    136, 1, 8, 1, 8, 4, 8, 141, 8, 8, 11, 8, 12, 8, 142, 3, 8, 145, 8, 
		    8, 1, 9, 1, 9, 5, 9, 149, 8, 9, 10, 9, 12, 9, 152, 9, 9, 1, 9, 1, 
		    9, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 11, 
		    1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 3, 11, 170, 8, 11, 1, 12, 1, 12, 
		    1, 12, 1, 12, 1, 12, 3, 12, 177, 8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 
		    3, 13, 183, 8, 13, 1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 
		    1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 3, 14, 197, 8, 14, 1, 15, 1, 15, 
		    1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 3, 15, 207, 8, 15, 1, 16, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 
		    16, 1, 16, 1, 16, 3, 16, 222, 8, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 
		    17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 
		    1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 
		    17, 1, 17, 1, 17, 3, 17, 250, 8, 17, 1, 18, 1, 18, 1, 18, 1, 18, 1, 
		    18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 
		    1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 
		    18, 1, 18, 1, 18, 1, 18, 3, 18, 279, 8, 18, 1, 19, 1, 19, 1, 19, 1, 
		    19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 3, 19, 290, 8, 19, 1, 20, 1, 
		    20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 
		    3, 20, 303, 8, 20, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 
		    1, 21, 1, 21, 1, 21, 1, 21, 3, 21, 316, 8, 21, 1, 22, 1, 22, 1, 22, 
		    1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 3, 22, 326, 8, 22, 1, 23, 1, 23, 
		    1, 23, 1, 23, 3, 23, 332, 8, 23, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 
		    1, 24, 3, 24, 340, 8, 24, 1, 25, 1, 25, 1, 25, 1, 26, 1, 26, 1, 26, 
		    1, 27, 1, 27, 1, 28, 1, 28, 1, 29, 1, 29, 1, 30, 1, 30, 1, 31, 1, 
		    31, 1, 32, 1, 32, 1, 33, 1, 33, 1, 34, 1, 34, 1, 35, 1, 35, 1, 36, 
		    1, 36, 1, 37, 1, 37, 1, 38, 1, 38, 1, 39, 1, 39, 1, 39, 1, 40, 1, 
		    40, 1, 40, 1, 41, 1, 41, 1, 41, 1, 42, 1, 42, 1, 43, 1, 43, 1, 43, 
		    1, 44, 1, 44, 1, 45, 1, 45, 1, 45, 1, 46, 4, 46, 392, 8, 46, 11, 46, 
		    12, 46, 393, 1, 46, 1, 46, 1, 47, 1, 47, 1, 47, 1, 47, 5, 47, 402, 
		    8, 47, 10, 47, 12, 47, 405, 9, 47, 1, 47, 1, 47, 0, 0, 48, 1, 1, 3, 
		    2, 5, 3, 7, 4, 9, 5, 11, 6, 13, 7, 15, 8, 17, 9, 19, 10, 21, 11, 23, 
		    12, 25, 13, 27, 14, 29, 15, 31, 16, 33, 17, 35, 18, 37, 19, 39, 20, 
		    41, 21, 43, 22, 45, 23, 47, 24, 49, 25, 51, 26, 53, 27, 55, 28, 57, 
		    29, 59, 30, 61, 31, 63, 32, 65, 33, 67, 34, 69, 35, 71, 36, 73, 37, 
		    75, 38, 77, 39, 79, 40, 81, 41, 83, 42, 85, 43, 87, 44, 89, 45, 91, 
		    46, 93, 47, 95, 48, 1, 0, 5, 2, 0, 95, 95, 97, 122, 3, 0, 48, 57, 
		    95, 95, 97, 122, 1, 0, 34, 34, 3, 0, 9, 10, 13, 13, 32, 32, 2, 0, 
		    10, 10, 13, 13, 433, 0, 1, 1, 0, 0, 0, 0, 3, 1, 0, 0, 0, 0, 5, 1, 
		    0, 0, 0, 0, 7, 1, 0, 0, 0, 0, 9, 1, 0, 0, 0, 0, 11, 1, 0, 0, 0, 0, 
		    13, 1, 0, 0, 0, 0, 15, 1, 0, 0, 0, 0, 17, 1, 0, 0, 0, 0, 19, 1, 0, 
		    0, 0, 0, 21, 1, 0, 0, 0, 0, 23, 1, 0, 0, 0, 0, 25, 1, 0, 0, 0, 0, 
		    27, 1, 0, 0, 0, 0, 29, 1, 0, 0, 0, 0, 31, 1, 0, 0, 0, 0, 33, 1, 0, 
		    0, 0, 0, 35, 1, 0, 0, 0, 0, 37, 1, 0, 0, 0, 0, 39, 1, 0, 0, 0, 0, 
		    41, 1, 0, 0, 0, 0, 43, 1, 0, 0, 0, 0, 45, 1, 0, 0, 0, 0, 47, 1, 0, 
		    0, 0, 0, 49, 1, 0, 0, 0, 0, 51, 1, 0, 0, 0, 0, 53, 1, 0, 0, 0, 0, 
		    55, 1, 0, 0, 0, 0, 57, 1, 0, 0, 0, 0, 59, 1, 0, 0, 0, 0, 61, 1, 0, 
		    0, 0, 0, 63, 1, 0, 0, 0, 0, 65, 1, 0, 0, 0, 0, 67, 1, 0, 0, 0, 0, 
		    69, 1, 0, 0, 0, 0, 71, 1, 0, 0, 0, 0, 73, 1, 0, 0, 0, 0, 75, 1, 0, 
		    0, 0, 0, 77, 1, 0, 0, 0, 0, 79, 1, 0, 0, 0, 0, 81, 1, 0, 0, 0, 0, 
		    83, 1, 0, 0, 0, 0, 85, 1, 0, 0, 0, 0, 87, 1, 0, 0, 0, 0, 89, 1, 0, 
		    0, 0, 0, 91, 1, 0, 0, 0, 0, 93, 1, 0, 0, 0, 0, 95, 1, 0, 0, 0, 1, 
		    97, 1, 0, 0, 0, 3, 103, 1, 0, 0, 0, 5, 105, 1, 0, 0, 0, 7, 109, 1, 
		    0, 0, 0, 9, 113, 1, 0, 0, 0, 11, 117, 1, 0, 0, 0, 13, 122, 1, 0, 0, 
		    0, 15, 126, 1, 0, 0, 0, 17, 134, 1, 0, 0, 0, 19, 146, 1, 0, 0, 0, 
		    21, 155, 1, 0, 0, 0, 23, 169, 1, 0, 0, 0, 25, 176, 1, 0, 0, 0, 27, 
		    182, 1, 0, 0, 0, 29, 196, 1, 0, 0, 0, 31, 206, 1, 0, 0, 0, 33, 221, 
		    1, 0, 0, 0, 35, 249, 1, 0, 0, 0, 37, 278, 1, 0, 0, 0, 39, 289, 1, 
		    0, 0, 0, 41, 302, 1, 0, 0, 0, 43, 315, 1, 0, 0, 0, 45, 325, 1, 0, 
		    0, 0, 47, 331, 1, 0, 0, 0, 49, 339, 1, 0, 0, 0, 51, 341, 1, 0, 0, 
		    0, 53, 344, 1, 0, 0, 0, 55, 347, 1, 0, 0, 0, 57, 349, 1, 0, 0, 0, 
		    59, 351, 1, 0, 0, 0, 61, 353, 1, 0, 0, 0, 63, 355, 1, 0, 0, 0, 65, 
		    357, 1, 0, 0, 0, 67, 359, 1, 0, 0, 0, 69, 361, 1, 0, 0, 0, 71, 363, 
		    1, 0, 0, 0, 73, 365, 1, 0, 0, 0, 75, 367, 1, 0, 0, 0, 77, 369, 1, 
		    0, 0, 0, 79, 371, 1, 0, 0, 0, 81, 374, 1, 0, 0, 0, 83, 377, 1, 0, 
		    0, 0, 85, 380, 1, 0, 0, 0, 87, 382, 1, 0, 0, 0, 89, 385, 1, 0, 0, 
		    0, 91, 387, 1, 0, 0, 0, 93, 391, 1, 0, 0, 0, 95, 397, 1, 0, 0, 0, 
		    97, 98, 5, 80, 0, 0, 98, 99, 5, 65, 0, 0, 99, 100, 5, 82, 0, 0, 100, 
		    101, 5, 65, 0, 0, 101, 102, 5, 77, 0, 0, 102, 2, 1, 0, 0, 0, 103, 
		    104, 5, 44, 0, 0, 104, 4, 1, 0, 0, 0, 105, 106, 5, 83, 0, 0, 106, 
		    107, 5, 69, 0, 0, 107, 108, 5, 71, 0, 0, 108, 6, 1, 0, 0, 0, 109, 
		    110, 5, 77, 0, 0, 110, 111, 5, 73, 0, 0, 111, 112, 5, 76, 0, 0, 112, 
		    8, 1, 0, 0, 0, 113, 114, 5, 77, 0, 0, 114, 115, 5, 73, 0, 0, 115, 
		    116, 5, 78, 0, 0, 116, 10, 1, 0, 0, 0, 117, 118, 5, 70, 0, 0, 118, 
		    119, 5, 85, 0, 0, 119, 120, 5, 78, 0, 0, 120, 121, 5, 67, 0, 0, 121, 
		    12, 1, 0, 0, 0, 122, 123, 5, 82, 0, 0, 123, 124, 5, 69, 0, 0, 124, 
		    125, 5, 84, 0, 0, 125, 14, 1, 0, 0, 0, 126, 130, 7, 0, 0, 0, 127, 
		    129, 7, 1, 0, 0, 128, 127, 1, 0, 0, 0, 129, 132, 1, 0, 0, 0, 130, 
		    128, 1, 0, 0, 0, 130, 131, 1, 0, 0, 0, 131, 16, 1, 0, 0, 0, 132, 130, 
		    1, 0, 0, 0, 133, 135, 2, 48, 57, 0, 134, 133, 1, 0, 0, 0, 135, 136, 
		    1, 0, 0, 0, 136, 134, 1, 0, 0, 0, 136, 137, 1, 0, 0, 0, 137, 144, 
		    1, 0, 0, 0, 138, 140, 5, 46, 0, 0, 139, 141, 2, 48, 57, 0, 140, 139, 
		    1, 0, 0, 0, 141, 142, 1, 0, 0, 0, 142, 140, 1, 0, 0, 0, 142, 143, 
		    1, 0, 0, 0, 143, 145, 1, 0, 0, 0, 144, 138, 1, 0, 0, 0, 144, 145, 
		    1, 0, 0, 0, 145, 18, 1, 0, 0, 0, 146, 150, 5, 34, 0, 0, 147, 149, 
		    8, 2, 0, 0, 148, 147, 1, 0, 0, 0, 149, 152, 1, 0, 0, 0, 150, 148, 
		    1, 0, 0, 0, 150, 151, 1, 0, 0, 0, 151, 153, 1, 0, 0, 0, 152, 150, 
		    1, 0, 0, 0, 153, 154, 5, 34, 0, 0, 154, 20, 1, 0, 0, 0, 155, 156, 
		    5, 68, 0, 0, 156, 157, 5, 69, 0, 0, 157, 158, 5, 76, 0, 0, 158, 159, 
		    5, 84, 0, 0, 159, 160, 5, 65, 0, 0, 160, 22, 1, 0, 0, 0, 161, 162, 
		    5, 78, 0, 0, 162, 163, 5, 85, 0, 0, 163, 164, 5, 76, 0, 0, 164, 170, 
		    5, 76, 0, 0, 165, 166, 5, 78, 0, 0, 166, 167, 5, 85, 0, 0, 167, 168, 
		    5, 76, 0, 0, 168, 170, 5, 79, 0, 0, 169, 161, 1, 0, 0, 0, 169, 165, 
		    1, 0, 0, 0, 170, 24, 1, 0, 0, 0, 171, 172, 5, 68, 0, 0, 172, 177, 
		    5, 79, 0, 0, 173, 174, 5, 72, 0, 0, 174, 175, 5, 65, 0, 0, 175, 177, 
		    5, 90, 0, 0, 176, 171, 1, 0, 0, 0, 176, 173, 1, 0, 0, 0, 177, 26, 
		    1, 0, 0, 0, 178, 179, 5, 73, 0, 0, 179, 183, 5, 70, 0, 0, 180, 181, 
		    5, 83, 0, 0, 181, 183, 5, 73, 0, 0, 182, 178, 1, 0, 0, 0, 182, 180, 
		    1, 0, 0, 0, 183, 28, 1, 0, 0, 0, 184, 185, 5, 84, 0, 0, 185, 186, 
		    5, 72, 0, 0, 186, 187, 5, 69, 0, 0, 187, 197, 5, 78, 0, 0, 188, 189, 
		    5, 69, 0, 0, 189, 190, 5, 78, 0, 0, 190, 191, 5, 84, 0, 0, 191, 192, 
		    5, 79, 0, 0, 192, 193, 5, 78, 0, 0, 193, 194, 5, 67, 0, 0, 194, 195, 
		    5, 69, 0, 0, 195, 197, 5, 83, 0, 0, 196, 184, 1, 0, 0, 0, 196, 188, 
		    1, 0, 0, 0, 197, 30, 1, 0, 0, 0, 198, 199, 5, 69, 0, 0, 199, 200, 
		    5, 76, 0, 0, 200, 201, 5, 83, 0, 0, 201, 207, 5, 69, 0, 0, 202, 203, 
		    5, 83, 0, 0, 203, 204, 5, 73, 0, 0, 204, 205, 5, 78, 0, 0, 205, 207, 
		    5, 79, 0, 0, 206, 198, 1, 0, 0, 0, 206, 202, 1, 0, 0, 0, 207, 32, 
		    1, 0, 0, 0, 208, 209, 5, 87, 0, 0, 209, 210, 5, 72, 0, 0, 210, 211, 
		    5, 73, 0, 0, 211, 212, 5, 76, 0, 0, 212, 222, 5, 69, 0, 0, 213, 214, 
		    5, 77, 0, 0, 214, 215, 5, 73, 0, 0, 215, 216, 5, 69, 0, 0, 216, 217, 
		    5, 78, 0, 0, 217, 218, 5, 84, 0, 0, 218, 219, 5, 82, 0, 0, 219, 220, 
		    5, 65, 0, 0, 220, 222, 5, 83, 0, 0, 221, 208, 1, 0, 0, 0, 221, 213, 
		    1, 0, 0, 0, 222, 34, 1, 0, 0, 0, 223, 224, 5, 67, 0, 0, 224, 225, 
		    5, 79, 0, 0, 225, 226, 5, 78, 0, 0, 226, 227, 5, 83, 0, 0, 227, 228, 
		    5, 79, 0, 0, 228, 229, 5, 76, 0, 0, 229, 250, 5, 69, 0, 0, 230, 231, 
		    5, 67, 0, 0, 231, 232, 5, 79, 0, 0, 232, 233, 5, 78, 0, 0, 233, 234, 
		    5, 83, 0, 0, 234, 235, 5, 79, 0, 0, 235, 236, 5, 76, 0, 0, 236, 250, 
		    5, 65, 0, 0, 237, 238, 5, 69, 0, 0, 238, 239, 5, 83, 0, 0, 239, 240, 
		    5, 67, 0, 0, 240, 241, 5, 82, 0, 0, 241, 242, 5, 73, 0, 0, 242, 243, 
		    5, 66, 0, 0, 243, 250, 5, 69, 0, 0, 244, 245, 5, 87, 0, 0, 245, 246, 
		    5, 82, 0, 0, 246, 247, 5, 73, 0, 0, 247, 248, 5, 84, 0, 0, 248, 250, 
		    5, 69, 0, 0, 249, 223, 1, 0, 0, 0, 249, 230, 1, 0, 0, 0, 249, 237, 
		    1, 0, 0, 0, 249, 244, 1, 0, 0, 0, 250, 36, 1, 0, 0, 0, 251, 252, 5, 
		    83, 0, 0, 252, 253, 5, 80, 0, 0, 253, 254, 5, 82, 0, 0, 254, 255, 
		    5, 73, 0, 0, 255, 256, 5, 84, 0, 0, 256, 279, 5, 69, 0, 0, 257, 258, 
		    5, 80, 0, 0, 258, 259, 5, 69, 0, 0, 259, 260, 5, 82, 0, 0, 260, 261, 
		    5, 83, 0, 0, 261, 262, 5, 79, 0, 0, 262, 263, 5, 78, 0, 0, 263, 264, 
		    5, 65, 0, 0, 264, 265, 5, 74, 0, 0, 265, 279, 5, 69, 0, 0, 266, 267, 
		    5, 79, 0, 0, 267, 268, 5, 66, 0, 0, 268, 269, 5, 74, 0, 0, 269, 270, 
		    5, 69, 0, 0, 270, 271, 5, 84, 0, 0, 271, 279, 5, 79, 0, 0, 272, 273, 
		    5, 79, 0, 0, 273, 274, 5, 66, 0, 0, 274, 275, 5, 74, 0, 0, 275, 276, 
		    5, 69, 0, 0, 276, 277, 5, 67, 0, 0, 277, 279, 5, 84, 0, 0, 278, 251, 
		    1, 0, 0, 0, 278, 257, 1, 0, 0, 0, 278, 266, 1, 0, 0, 0, 278, 272, 
		    1, 0, 0, 0, 279, 38, 1, 0, 0, 0, 280, 281, 5, 77, 0, 0, 281, 282, 
		    5, 79, 0, 0, 282, 283, 5, 86, 0, 0, 283, 290, 5, 69, 0, 0, 284, 285, 
		    5, 77, 0, 0, 285, 286, 5, 79, 0, 0, 286, 287, 5, 86, 0, 0, 287, 288, 
		    5, 69, 0, 0, 288, 290, 5, 82, 0, 0, 289, 280, 1, 0, 0, 0, 289, 284, 
		    1, 0, 0, 0, 290, 40, 1, 0, 0, 0, 291, 292, 5, 82, 0, 0, 292, 293, 
		    5, 79, 0, 0, 293, 294, 5, 84, 0, 0, 294, 295, 5, 65, 0, 0, 295, 296, 
		    5, 84, 0, 0, 296, 303, 5, 69, 0, 0, 297, 298, 5, 82, 0, 0, 298, 299, 
		    5, 79, 0, 0, 299, 300, 5, 84, 0, 0, 300, 301, 5, 65, 0, 0, 301, 303, 
		    5, 82, 0, 0, 302, 291, 1, 0, 0, 0, 302, 297, 1, 0, 0, 0, 303, 42, 
		    1, 0, 0, 0, 304, 305, 5, 80, 0, 0, 305, 306, 5, 76, 0, 0, 306, 307, 
		    5, 65, 0, 0, 307, 308, 5, 67, 0, 0, 308, 316, 5, 69, 0, 0, 309, 310, 
		    5, 85, 0, 0, 310, 311, 5, 66, 0, 0, 311, 312, 5, 73, 0, 0, 312, 313, 
		    5, 67, 0, 0, 313, 314, 5, 65, 0, 0, 314, 316, 5, 82, 0, 0, 315, 304, 
		    1, 0, 0, 0, 315, 309, 1, 0, 0, 0, 316, 44, 1, 0, 0, 0, 317, 318, 5, 
		    84, 0, 0, 318, 326, 5, 79, 0, 0, 319, 320, 5, 72, 0, 0, 320, 321, 
		    5, 65, 0, 0, 321, 322, 5, 83, 0, 0, 322, 323, 5, 84, 0, 0, 323, 326, 
		    5, 65, 0, 0, 324, 326, 5, 65, 0, 0, 325, 317, 1, 0, 0, 0, 325, 319, 
		    1, 0, 0, 0, 325, 324, 1, 0, 0, 0, 326, 46, 1, 0, 0, 0, 327, 328, 5, 
		    65, 0, 0, 328, 332, 5, 84, 0, 0, 329, 330, 5, 69, 0, 0, 330, 332, 
		    5, 78, 0, 0, 331, 327, 1, 0, 0, 0, 331, 329, 1, 0, 0, 0, 332, 48, 
		    1, 0, 0, 0, 333, 334, 5, 69, 0, 0, 334, 335, 5, 78, 0, 0, 335, 340, 
		    5, 68, 0, 0, 336, 337, 5, 70, 0, 0, 337, 338, 5, 73, 0, 0, 338, 340, 
		    5, 78, 0, 0, 339, 333, 1, 0, 0, 0, 339, 336, 1, 0, 0, 0, 340, 50, 
		    1, 0, 0, 0, 341, 342, 5, 78, 0, 0, 342, 343, 5, 76, 0, 0, 343, 52, 
		    1, 0, 0, 0, 344, 345, 5, 84, 0, 0, 345, 346, 5, 66, 0, 0, 346, 54, 
		    1, 0, 0, 0, 347, 348, 5, 43, 0, 0, 348, 56, 1, 0, 0, 0, 349, 350, 
		    5, 45, 0, 0, 350, 58, 1, 0, 0, 0, 351, 352, 5, 42, 0, 0, 352, 60, 
		    1, 0, 0, 0, 353, 354, 5, 47, 0, 0, 354, 62, 1, 0, 0, 0, 355, 356, 
		    5, 40, 0, 0, 356, 64, 1, 0, 0, 0, 357, 358, 5, 41, 0, 0, 358, 66, 
		    1, 0, 0, 0, 359, 360, 5, 46, 0, 0, 360, 68, 1, 0, 0, 0, 361, 362, 
		    5, 61, 0, 0, 362, 70, 1, 0, 0, 0, 363, 364, 5, 89, 0, 0, 364, 72, 
		    1, 0, 0, 0, 365, 366, 5, 79, 0, 0, 366, 74, 1, 0, 0, 0, 367, 368, 
		    5, 86, 0, 0, 368, 76, 1, 0, 0, 0, 369, 370, 5, 70, 0, 0, 370, 78, 
		    1, 0, 0, 0, 371, 372, 5, 78, 0, 0, 372, 373, 5, 79, 0, 0, 373, 80, 
		    1, 0, 0, 0, 374, 375, 5, 61, 0, 0, 375, 376, 5, 61, 0, 0, 376, 82, 
		    1, 0, 0, 0, 377, 378, 5, 33, 0, 0, 378, 379, 5, 61, 0, 0, 379, 84, 
		    1, 0, 0, 0, 380, 381, 5, 60, 0, 0, 381, 86, 1, 0, 0, 0, 382, 383, 
		    5, 60, 0, 0, 383, 384, 5, 61, 0, 0, 384, 88, 1, 0, 0, 0, 385, 386, 
		    5, 62, 0, 0, 386, 90, 1, 0, 0, 0, 387, 388, 5, 62, 0, 0, 388, 389, 
		    5, 61, 0, 0, 389, 92, 1, 0, 0, 0, 390, 392, 7, 3, 0, 0, 391, 390, 
		    1, 0, 0, 0, 392, 393, 1, 0, 0, 0, 393, 391, 1, 0, 0, 0, 393, 394, 
		    1, 0, 0, 0, 394, 395, 1, 0, 0, 0, 395, 396, 6, 46, 0, 0, 396, 94, 
		    1, 0, 0, 0, 397, 398, 5, 47, 0, 0, 398, 399, 5, 47, 0, 0, 399, 403, 
		    1, 0, 0, 0, 400, 402, 8, 4, 0, 0, 401, 400, 1, 0, 0, 0, 402, 405, 
		    1, 0, 0, 0, 403, 401, 1, 0, 0, 0, 403, 404, 1, 0, 0, 0, 404, 406, 
		    1, 0, 0, 0, 405, 403, 1, 0, 0, 0, 406, 407, 6, 47, 0, 0, 407, 96, 
		    1, 0, 0, 0, 22, 0, 130, 136, 142, 144, 150, 169, 176, 182, 196, 206, 
		    221, 249, 278, 289, 302, 315, 325, 331, 339, 393, 403, 1, 6, 0, 0];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
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

		public static function vocabulary(): Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName(): string
		{
			return 'GameLang.g4';
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames(): array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames(): array
		{
			return self::MODE_NAMES;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
		{
			return self::vocabulary();
		}
	}
}