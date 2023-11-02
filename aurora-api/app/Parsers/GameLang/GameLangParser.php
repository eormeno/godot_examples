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
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, ID = 21, NUMBER = 22, 
               STRING = 23, NL = 24, TB = 25, PLUS = 26, MINUS = 27, MULTIPLY = 28, 
               DIVIDE = 29, LPAREN = 30, RPAREN = 31, DOT = 32, EQUAL = 33, 
               AND = 34, LOR = 35, TRUE = 36, FALSE = 37, NOT = 38, EQL = 39, 
               NEQ = 40, LST = 41, LTE = 42, GRT = 43, GTE = 44, WS = 45, 
               COMMENT = 46;

		public const RULE_program = 0, RULE_character = 1, RULE_parameters = 2, 
               RULE_timeUnit = 3, RULE_statement = 4, RULE_printable = 5, 
               RULE_consoleStatement = 6, RULE_whileStatement = 7, RULE_doStatement = 8, 
               RULE_ifStatement = 9, RULE_thenStatement = 10, RULE_elseStatement = 11, 
               RULE_assignment = 12, RULE_attributeCall = 13, RULE_afterTimer = 14, 
               RULE_everyTimer = 15, RULE_methodCall = 16, RULE_functionDef = 17, 
               RULE_num = 18, RULE_expression = 19, RULE_logicExpression = 20;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'character', 'parameters', 'timeUnit', 'statement', 'printable', 
			'consoleStatement', 'whileStatement', 'doStatement', 'ifStatement', 'thenStatement', 
			'elseStatement', 'assignment', 'attributeCall', 'afterTimer', 'everyTimer', 
			'methodCall', 'functionDef', 'num', 'expression', 'logicExpression'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PERSONAJE'", "'FIN'", "'PARAMETROS'", "','", "'SEGUNDOS'", 
		    "'MILISEGUNDOS'", "'MINUTOS'", "'CONSOLA'", "'MIENTRAS'", "'HAZ'", 
		    "'SI'", "'ENTONCES'", "'SINO'", "'LUEGO'", "'DE'", "'CADA'", "'FUNCION'", 
		    "'RETORNAR'", "'NULO'", "'NULA'", null, null, null, "'NL'", "'TB'", 
		    "'+'", "'-'", "'*'", "'/'", "'('", "')'", "'.'", "'='", "'Y'", "'O'", 
		    "'V'", "'F'", "'NO'", "'=='", "'!='", "'<'", "'<='", "'>'", "'>='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, "ID", 
		    "NUMBER", "STRING", "NL", "TB", "PLUS", "MINUS", "MULTIPLY", "DIVIDE", 
		    "LPAREN", "RPAREN", "DOT", "EQUAL", "AND", "LOR", "TRUE", "FALSE", 
		    "NOT", "EQL", "NEQ", "LST", "LTE", "GRT", "GTE", "WS", "COMMENT"
		];

		private const SERIALIZED_ATN =
			[4, 1, 46, 288, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 1, 0, 4, 0, 44, 8, 0, 11, 0, 12, 0, 45, 1, 0, 
		    1, 0, 1, 1, 1, 1, 1, 1, 3, 1, 53, 8, 1, 1, 1, 5, 1, 56, 8, 1, 10, 
		    1, 12, 1, 59, 9, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 5, 2, 67, 
		    8, 2, 10, 2, 12, 2, 70, 9, 2, 3, 2, 72, 8, 2, 1, 3, 1, 3, 1, 4, 1, 
		    4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 3, 4, 83, 8, 4, 1, 5, 1, 5, 1, 6, 
		    1, 6, 1, 6, 5, 6, 90, 8, 6, 10, 6, 12, 6, 93, 9, 6, 3, 6, 95, 8, 6, 
		    1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 5, 8, 104, 8, 8, 10, 8, 
		    12, 8, 107, 9, 8, 1, 9, 1, 9, 1, 9, 1, 9, 3, 9, 113, 8, 9, 1, 9, 1, 
		    9, 1, 10, 1, 10, 5, 10, 119, 8, 10, 10, 10, 12, 10, 122, 9, 10, 1, 
		    11, 1, 11, 5, 11, 126, 8, 11, 10, 11, 12, 11, 129, 9, 11, 1, 12, 1, 
		    12, 3, 12, 133, 8, 12, 1, 12, 1, 12, 1, 12, 3, 12, 138, 8, 12, 1, 
		    13, 1, 13, 1, 13, 1, 13, 1, 14, 1, 14, 3, 14, 146, 8, 14, 1, 14, 1, 
		    14, 1, 14, 5, 14, 151, 8, 14, 10, 14, 12, 14, 154, 9, 14, 1, 14, 1, 
		    14, 1, 15, 1, 15, 1, 15, 1, 15, 5, 15, 162, 8, 15, 10, 15, 12, 15, 
		    165, 9, 15, 1, 15, 1, 15, 1, 16, 1, 16, 3, 16, 171, 8, 16, 1, 16, 
		    1, 16, 1, 16, 1, 16, 1, 16, 5, 16, 178, 8, 16, 10, 16, 12, 16, 181, 
		    9, 16, 3, 16, 183, 8, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 
		    1, 17, 1, 17, 5, 17, 193, 8, 17, 10, 17, 12, 17, 196, 9, 17, 3, 17, 
		    198, 8, 17, 1, 17, 1, 17, 5, 17, 202, 8, 17, 10, 17, 12, 17, 205, 
		    9, 17, 1, 17, 1, 17, 3, 17, 209, 8, 17, 1, 18, 3, 18, 212, 8, 18, 
		    1, 18, 1, 18, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 
		    19, 1, 19, 1, 19, 1, 19, 1, 19, 3, 19, 228, 8, 19, 1, 19, 1, 19, 1, 
		    19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 
		    5, 19, 242, 8, 19, 10, 19, 12, 19, 245, 9, 19, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 
		    20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 3, 20, 275, 8, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 5, 20, 283, 8, 20, 10, 20, 12, 
		    20, 286, 9, 20, 1, 20, 0, 2, 38, 40, 21, 0, 2, 4, 6, 8, 10, 12, 14, 
		    16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 0, 2, 1, 0, 5, 
		    7, 2, 0, 21, 21, 23, 25, 319, 0, 43, 1, 0, 0, 0, 2, 49, 1, 0, 0, 0, 
		    4, 62, 1, 0, 0, 0, 6, 73, 1, 0, 0, 0, 8, 82, 1, 0, 0, 0, 10, 84, 1, 
		    0, 0, 0, 12, 86, 1, 0, 0, 0, 14, 96, 1, 0, 0, 0, 16, 101, 1, 0, 0, 
		    0, 18, 108, 1, 0, 0, 0, 20, 116, 1, 0, 0, 0, 22, 123, 1, 0, 0, 0, 
		    24, 132, 1, 0, 0, 0, 26, 139, 1, 0, 0, 0, 28, 143, 1, 0, 0, 0, 30, 
		    157, 1, 0, 0, 0, 32, 170, 1, 0, 0, 0, 34, 186, 1, 0, 0, 0, 36, 211, 
		    1, 0, 0, 0, 38, 227, 1, 0, 0, 0, 40, 274, 1, 0, 0, 0, 42, 44, 3, 2, 
		    1, 0, 43, 42, 1, 0, 0, 0, 44, 45, 1, 0, 0, 0, 45, 43, 1, 0, 0, 0, 
		    45, 46, 1, 0, 0, 0, 46, 47, 1, 0, 0, 0, 47, 48, 5, 0, 0, 1, 48, 1, 
		    1, 0, 0, 0, 49, 50, 5, 1, 0, 0, 50, 52, 5, 21, 0, 0, 51, 53, 3, 4, 
		    2, 0, 52, 51, 1, 0, 0, 0, 52, 53, 1, 0, 0, 0, 53, 57, 1, 0, 0, 0, 
		    54, 56, 3, 8, 4, 0, 55, 54, 1, 0, 0, 0, 56, 59, 1, 0, 0, 0, 57, 55, 
		    1, 0, 0, 0, 57, 58, 1, 0, 0, 0, 58, 60, 1, 0, 0, 0, 59, 57, 1, 0, 
		    0, 0, 60, 61, 5, 2, 0, 0, 61, 3, 1, 0, 0, 0, 62, 71, 5, 3, 0, 0, 63, 
		    68, 5, 21, 0, 0, 64, 65, 5, 4, 0, 0, 65, 67, 5, 21, 0, 0, 66, 64, 
		    1, 0, 0, 0, 67, 70, 1, 0, 0, 0, 68, 66, 1, 0, 0, 0, 68, 69, 1, 0, 
		    0, 0, 69, 72, 1, 0, 0, 0, 70, 68, 1, 0, 0, 0, 71, 63, 1, 0, 0, 0, 
		    71, 72, 1, 0, 0, 0, 72, 5, 1, 0, 0, 0, 73, 74, 7, 0, 0, 0, 74, 7, 
		    1, 0, 0, 0, 75, 83, 3, 14, 7, 0, 76, 83, 3, 18, 9, 0, 77, 83, 3, 24, 
		    12, 0, 78, 83, 3, 32, 16, 0, 79, 83, 3, 28, 14, 0, 80, 83, 3, 30, 
		    15, 0, 81, 83, 3, 12, 6, 0, 82, 75, 1, 0, 0, 0, 82, 76, 1, 0, 0, 0, 
		    82, 77, 1, 0, 0, 0, 82, 78, 1, 0, 0, 0, 82, 79, 1, 0, 0, 0, 82, 80, 
		    1, 0, 0, 0, 82, 81, 1, 0, 0, 0, 83, 9, 1, 0, 0, 0, 84, 85, 7, 1, 0, 
		    0, 85, 11, 1, 0, 0, 0, 86, 94, 5, 8, 0, 0, 87, 91, 3, 10, 5, 0, 88, 
		    90, 3, 10, 5, 0, 89, 88, 1, 0, 0, 0, 90, 93, 1, 0, 0, 0, 91, 89, 1, 
		    0, 0, 0, 91, 92, 1, 0, 0, 0, 92, 95, 1, 0, 0, 0, 93, 91, 1, 0, 0, 
		    0, 94, 87, 1, 0, 0, 0, 94, 95, 1, 0, 0, 0, 95, 13, 1, 0, 0, 0, 96, 
		    97, 5, 9, 0, 0, 97, 98, 3, 40, 20, 0, 98, 99, 3, 16, 8, 0, 99, 100, 
		    5, 2, 0, 0, 100, 15, 1, 0, 0, 0, 101, 105, 5, 10, 0, 0, 102, 104, 
		    3, 8, 4, 0, 103, 102, 1, 0, 0, 0, 104, 107, 1, 0, 0, 0, 105, 103, 
		    1, 0, 0, 0, 105, 106, 1, 0, 0, 0, 106, 17, 1, 0, 0, 0, 107, 105, 1, 
		    0, 0, 0, 108, 109, 5, 11, 0, 0, 109, 110, 3, 40, 20, 0, 110, 112, 
		    3, 20, 10, 0, 111, 113, 3, 22, 11, 0, 112, 111, 1, 0, 0, 0, 112, 113, 
		    1, 0, 0, 0, 113, 114, 1, 0, 0, 0, 114, 115, 5, 2, 0, 0, 115, 19, 1, 
		    0, 0, 0, 116, 120, 5, 12, 0, 0, 117, 119, 3, 8, 4, 0, 118, 117, 1, 
		    0, 0, 0, 119, 122, 1, 0, 0, 0, 120, 118, 1, 0, 0, 0, 120, 121, 1, 
		    0, 0, 0, 121, 21, 1, 0, 0, 0, 122, 120, 1, 0, 0, 0, 123, 127, 5, 13, 
		    0, 0, 124, 126, 3, 8, 4, 0, 125, 124, 1, 0, 0, 0, 126, 129, 1, 0, 
		    0, 0, 127, 125, 1, 0, 0, 0, 127, 128, 1, 0, 0, 0, 128, 23, 1, 0, 0, 
		    0, 129, 127, 1, 0, 0, 0, 130, 133, 5, 21, 0, 0, 131, 133, 3, 26, 13, 
		    0, 132, 130, 1, 0, 0, 0, 132, 131, 1, 0, 0, 0, 133, 134, 1, 0, 0, 
		    0, 134, 137, 5, 33, 0, 0, 135, 138, 3, 38, 19, 0, 136, 138, 3, 40, 
		    20, 0, 137, 135, 1, 0, 0, 0, 137, 136, 1, 0, 0, 0, 138, 25, 1, 0, 
		    0, 0, 139, 140, 5, 21, 0, 0, 140, 141, 5, 32, 0, 0, 141, 142, 5, 21, 
		    0, 0, 142, 27, 1, 0, 0, 0, 143, 145, 5, 14, 0, 0, 144, 146, 5, 15, 
		    0, 0, 145, 144, 1, 0, 0, 0, 145, 146, 1, 0, 0, 0, 146, 147, 1, 0, 
		    0, 0, 147, 148, 3, 38, 19, 0, 148, 152, 3, 6, 3, 0, 149, 151, 3, 8, 
		    4, 0, 150, 149, 1, 0, 0, 0, 151, 154, 1, 0, 0, 0, 152, 150, 1, 0, 
		    0, 0, 152, 153, 1, 0, 0, 0, 153, 155, 1, 0, 0, 0, 154, 152, 1, 0, 
		    0, 0, 155, 156, 5, 2, 0, 0, 156, 29, 1, 0, 0, 0, 157, 158, 5, 16, 
		    0, 0, 158, 159, 3, 38, 19, 0, 159, 163, 3, 6, 3, 0, 160, 162, 3, 8, 
		    4, 0, 161, 160, 1, 0, 0, 0, 162, 165, 1, 0, 0, 0, 163, 161, 1, 0, 
		    0, 0, 163, 164, 1, 0, 0, 0, 164, 166, 1, 0, 0, 0, 165, 163, 1, 0, 
		    0, 0, 166, 167, 5, 2, 0, 0, 167, 31, 1, 0, 0, 0, 168, 169, 5, 21, 
		    0, 0, 169, 171, 5, 32, 0, 0, 170, 168, 1, 0, 0, 0, 170, 171, 1, 0, 
		    0, 0, 171, 172, 1, 0, 0, 0, 172, 173, 5, 21, 0, 0, 173, 182, 5, 30, 
		    0, 0, 174, 179, 3, 38, 19, 0, 175, 176, 5, 4, 0, 0, 176, 178, 3, 38, 
		    19, 0, 177, 175, 1, 0, 0, 0, 178, 181, 1, 0, 0, 0, 179, 177, 1, 0, 
		    0, 0, 179, 180, 1, 0, 0, 0, 180, 183, 1, 0, 0, 0, 181, 179, 1, 0, 
		    0, 0, 182, 174, 1, 0, 0, 0, 182, 183, 1, 0, 0, 0, 183, 184, 1, 0, 
		    0, 0, 184, 185, 5, 31, 0, 0, 185, 33, 1, 0, 0, 0, 186, 187, 5, 17, 
		    0, 0, 187, 188, 5, 21, 0, 0, 188, 197, 5, 30, 0, 0, 189, 194, 5, 21, 
		    0, 0, 190, 191, 5, 4, 0, 0, 191, 193, 5, 21, 0, 0, 192, 190, 1, 0, 
		    0, 0, 193, 196, 1, 0, 0, 0, 194, 192, 1, 0, 0, 0, 194, 195, 1, 0, 
		    0, 0, 195, 198, 1, 0, 0, 0, 196, 194, 1, 0, 0, 0, 197, 189, 1, 0, 
		    0, 0, 197, 198, 1, 0, 0, 0, 198, 199, 1, 0, 0, 0, 199, 203, 5, 31, 
		    0, 0, 200, 202, 3, 8, 4, 0, 201, 200, 1, 0, 0, 0, 202, 205, 1, 0, 
		    0, 0, 203, 201, 1, 0, 0, 0, 203, 204, 1, 0, 0, 0, 204, 206, 1, 0, 
		    0, 0, 205, 203, 1, 0, 0, 0, 206, 208, 5, 18, 0, 0, 207, 209, 5, 21, 
		    0, 0, 208, 207, 1, 0, 0, 0, 208, 209, 1, 0, 0, 0, 209, 35, 1, 0, 0, 
		    0, 210, 212, 5, 27, 0, 0, 211, 210, 1, 0, 0, 0, 211, 212, 1, 0, 0, 
		    0, 212, 213, 1, 0, 0, 0, 213, 214, 5, 22, 0, 0, 214, 37, 1, 0, 0, 
		    0, 215, 216, 6, 19, -1, 0, 216, 228, 5, 23, 0, 0, 217, 228, 5, 21, 
		    0, 0, 218, 228, 5, 19, 0, 0, 219, 228, 5, 20, 0, 0, 220, 228, 3, 26, 
		    13, 0, 221, 228, 3, 32, 16, 0, 222, 223, 5, 30, 0, 0, 223, 224, 3, 
		    38, 19, 0, 224, 225, 5, 31, 0, 0, 225, 228, 1, 0, 0, 0, 226, 228, 
		    3, 36, 18, 0, 227, 215, 1, 0, 0, 0, 227, 217, 1, 0, 0, 0, 227, 218, 
		    1, 0, 0, 0, 227, 219, 1, 0, 0, 0, 227, 220, 1, 0, 0, 0, 227, 221, 
		    1, 0, 0, 0, 227, 222, 1, 0, 0, 0, 227, 226, 1, 0, 0, 0, 228, 243, 
		    1, 0, 0, 0, 229, 230, 10, 5, 0, 0, 230, 231, 5, 28, 0, 0, 231, 242, 
		    3, 38, 19, 6, 232, 233, 10, 4, 0, 0, 233, 234, 5, 29, 0, 0, 234, 242, 
		    3, 38, 19, 5, 235, 236, 10, 3, 0, 0, 236, 237, 5, 26, 0, 0, 237, 242, 
		    3, 38, 19, 4, 238, 239, 10, 2, 0, 0, 239, 240, 5, 27, 0, 0, 240, 242, 
		    3, 38, 19, 3, 241, 229, 1, 0, 0, 0, 241, 232, 1, 0, 0, 0, 241, 235, 
		    1, 0, 0, 0, 241, 238, 1, 0, 0, 0, 242, 245, 1, 0, 0, 0, 243, 241, 
		    1, 0, 0, 0, 243, 244, 1, 0, 0, 0, 244, 39, 1, 0, 0, 0, 245, 243, 1, 
		    0, 0, 0, 246, 247, 6, 20, -1, 0, 247, 275, 5, 36, 0, 0, 248, 275, 
		    5, 37, 0, 0, 249, 275, 5, 21, 0, 0, 250, 251, 5, 38, 0, 0, 251, 275, 
		    3, 40, 20, 10, 252, 253, 5, 30, 0, 0, 253, 254, 3, 40, 20, 0, 254, 
		    255, 5, 31, 0, 0, 255, 275, 1, 0, 0, 0, 256, 257, 5, 21, 0, 0, 257, 
		    258, 5, 39, 0, 0, 258, 275, 3, 38, 19, 0, 259, 260, 5, 21, 0, 0, 260, 
		    261, 5, 40, 0, 0, 261, 275, 3, 38, 19, 0, 262, 263, 5, 21, 0, 0, 263, 
		    264, 5, 41, 0, 0, 264, 275, 3, 38, 19, 0, 265, 266, 5, 21, 0, 0, 266, 
		    267, 5, 42, 0, 0, 267, 275, 3, 38, 19, 0, 268, 269, 5, 21, 0, 0, 269, 
		    270, 5, 43, 0, 0, 270, 275, 3, 38, 19, 0, 271, 272, 5, 21, 0, 0, 272, 
		    273, 5, 44, 0, 0, 273, 275, 3, 38, 19, 0, 274, 246, 1, 0, 0, 0, 274, 
		    248, 1, 0, 0, 0, 274, 249, 1, 0, 0, 0, 274, 250, 1, 0, 0, 0, 274, 
		    252, 1, 0, 0, 0, 274, 256, 1, 0, 0, 0, 274, 259, 1, 0, 0, 0, 274, 
		    262, 1, 0, 0, 0, 274, 265, 1, 0, 0, 0, 274, 268, 1, 0, 0, 0, 274, 
		    271, 1, 0, 0, 0, 275, 284, 1, 0, 0, 0, 276, 277, 10, 8, 0, 0, 277, 
		    278, 5, 34, 0, 0, 278, 283, 3, 40, 20, 9, 279, 280, 10, 7, 0, 0, 280, 
		    281, 5, 35, 0, 0, 281, 283, 3, 40, 20, 8, 282, 276, 1, 0, 0, 0, 282, 
		    279, 1, 0, 0, 0, 283, 286, 1, 0, 0, 0, 284, 282, 1, 0, 0, 0, 284, 
		    285, 1, 0, 0, 0, 285, 41, 1, 0, 0, 0, 286, 284, 1, 0, 0, 0, 31, 45, 
		    52, 57, 68, 71, 82, 91, 94, 105, 112, 120, 127, 132, 137, 145, 152, 
		    163, 170, 179, 182, 194, 197, 203, 208, 211, 227, 241, 243, 274, 282, 
		    284];
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
		        } while ($_la === self::T__0);
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
		        $this->match(self::T__0);
		        $this->setState(50);
		        $this->match(self::ID);
		        $this->setState(52);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__2) {
		        	$this->setState(51);
		        	$this->parameters();
		        }
		        $this->setState(57);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2181888) !== 0)) {
		        	$this->setState(54);
		        	$this->statement();
		        	$this->setState(59);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(60);
		        $this->match(self::T__1);
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
		        $this->setState(62);
		        $this->match(self::T__2);
		        $this->setState(71);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		            case 1:
		        	    $this->setState(63);
		        	    $this->match(self::ID);
		        	    $this->setState(68);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__3) {
		        	    	$this->setState(64);
		        	    	$this->match(self::T__3);
		        	    	$this->setState(65);
		        	    	$this->match(self::ID);
		        	    	$this->setState(70);
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
		        $this->setState(73);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 224) !== 0))) {
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
		        $this->setState(82);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(75);
		        	    $this->whileStatement();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(76);
		        	    $this->ifStatement();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(77);
		        	    $this->assignment();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(78);
		        	    $this->methodCall();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(79);
		        	    $this->afterTimer();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(80);
		        	    $this->everyTimer();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(81);
		        	    $this->consoleStatement();
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
		public function printable(): Context\PrintableContext
		{
		    $localContext = new Context\PrintableContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_printable);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(84);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 60817408) !== 0))) {
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
		        $this->setState(86);
		        $this->match(self::T__7);
		        $this->setState(94);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
		            case 1:
		        	    $this->setState(87);
		        	    $this->printable();
		        	    $this->setState(91);
		        	    $this->errorHandler->sync($this);

		        	    $alt = $this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx);

		        	    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	    	if ($alt === 1) {
		        	    		$this->setState(88);
		        	    		$this->printable(); 
		        	    	}

		        	    	$this->setState(93);
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx);
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
		        $this->setState(96);
		        $this->match(self::T__8);
		        $this->setState(97);
		        $this->recursiveLogicExpression(0);
		        $this->setState(98);
		        $this->doStatement();
		        $this->setState(99);
		        $this->match(self::T__1);
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
		        $this->setState(101);
		        $this->match(self::T__9);
		        $this->setState(105);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2181888) !== 0)) {
		        	$this->setState(102);
		        	$this->statement();
		        	$this->setState(107);
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
		        $this->setState(108);
		        $this->match(self::T__10);
		        $this->setState(109);
		        $this->recursiveLogicExpression(0);
		        $this->setState(110);
		        $this->thenStatement();
		        $this->setState(112);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__12) {
		        	$this->setState(111);
		        	$this->elseStatement();
		        }
		        $this->setState(114);
		        $this->match(self::T__1);
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
		        $this->setState(116);
		        $this->match(self::T__11);
		        $this->setState(120);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2181888) !== 0)) {
		        	$this->setState(117);
		        	$this->statement();
		        	$this->setState(122);
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
		        $this->setState(123);
		        $this->match(self::T__12);
		        $this->setState(127);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2181888) !== 0)) {
		        	$this->setState(124);
		        	$this->statement();
		        	$this->setState(129);
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
		        $this->setState(132);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx)) {
		        	case 1:
		        	    $this->setState(130);
		        	    $this->match(self::ID);
		        	break;

		        	case 2:
		        	    $this->setState(131);
		        	    $this->attributeCall();
		        	break;
		        }
		        $this->setState(134);
		        $this->match(self::EQUAL);
		        $this->setState(137);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	case 1:
		        	    $this->setState(135);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 2:
		        	    $this->setState(136);
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
		public function attributeCall(): Context\AttributeCallContext
		{
		    $localContext = new Context\AttributeCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_attributeCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(139);
		        $this->match(self::ID);
		        $this->setState(140);
		        $this->match(self::DOT);
		        $this->setState(141);
		        $this->match(self::ID);
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
		        $this->setState(143);
		        $this->match(self::T__13);
		        $this->setState(145);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__14) {
		        	$this->setState(144);
		        	$this->match(self::T__14);
		        }
		        $this->setState(147);
		        $this->recursiveExpression(0);
		        $this->setState(148);
		        $this->timeUnit();
		        $this->setState(152);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2181888) !== 0)) {
		        	$this->setState(149);
		        	$this->statement();
		        	$this->setState(154);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(155);
		        $this->match(self::T__1);
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
		        $this->setState(157);
		        $this->match(self::T__15);
		        $this->setState(158);
		        $this->recursiveExpression(0);
		        $this->setState(159);
		        $this->timeUnit();
		        $this->setState(163);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2181888) !== 0)) {
		        	$this->setState(160);
		        	$this->statement();
		        	$this->setState(165);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(166);
		        $this->match(self::T__1);
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
		public function methodCall(): Context\MethodCallContext
		{
		    $localContext = new Context\MethodCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_methodCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(170);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx)) {
		            case 1:
		        	    $this->setState(168);
		        	    $this->match(self::ID);
		        	    $this->setState(169);
		        	    $this->match(self::DOT);
		        	break;
		        }
		        $this->setState(172);
		        $this->match(self::ID);
		        $this->setState(173);
		        $this->match(self::LPAREN);
		        $this->setState(182);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1224212480) !== 0)) {
		        	$this->setState(174);
		        	$this->recursiveExpression(0);
		        	$this->setState(179);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__3) {
		        		$this->setState(175);
		        		$this->match(self::T__3);
		        		$this->setState(176);
		        		$this->recursiveExpression(0);
		        		$this->setState(181);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(184);
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
		public function functionDef(): Context\FunctionDefContext
		{
		    $localContext = new Context\FunctionDefContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_functionDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(186);
		        $this->match(self::T__16);
		        $this->setState(187);
		        $this->match(self::ID);
		        $this->setState(188);
		        $this->match(self::LPAREN);
		        $this->setState(197);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(189);
		        	$this->match(self::ID);
		        	$this->setState(194);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__3) {
		        		$this->setState(190);
		        		$this->match(self::T__3);
		        		$this->setState(191);
		        		$this->match(self::ID);
		        		$this->setState(196);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(199);
		        $this->match(self::RPAREN);
		        $this->setState(203);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2181888) !== 0)) {
		        	$this->setState(200);
		        	$this->statement();
		        	$this->setState(205);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(206);
		        $this->match(self::T__17);
		        $this->setState(208);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(207);
		        	$this->match(self::ID);
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
		public function num(): Context\NumContext
		{
		    $localContext = new Context\NumContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_num);

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
			$startState = 38;
			$this->enterRecursionRule($localContext, 38, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(227);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx)) {
					case 1:
					    $this->setState(216);
					    $this->match(self::STRING);
					break;

					case 2:
					    $this->setState(217);
					    $this->match(self::ID);
					break;

					case 3:
					    $this->setState(218);
					    $this->match(self::T__18);
					break;

					case 4:
					    $this->setState(219);
					    $this->match(self::T__19);
					break;

					case 5:
					    $this->setState(220);
					    $this->attributeCall();
					break;

					case 6:
					    $this->setState(221);
					    $this->methodCall();
					break;

					case 7:
					    $this->setState(222);
					    $this->match(self::LPAREN);
					    $this->setState(223);
					    $this->recursiveExpression(0);
					    $this->setState(224);
					    $this->match(self::RPAREN);
					break;

					case 8:
					    $this->setState(226);
					    $this->num();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(243);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(241);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(229);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(230);
							    $this->match(self::MULTIPLY);
							    $this->setState(231);
							    $this->recursiveExpression(6);
							break;

							case 2:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(232);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(233);
							    $this->match(self::DIVIDE);
							    $this->setState(234);
							    $this->recursiveExpression(5);
							break;

							case 3:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(235);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(236);
							    $this->match(self::PLUS);
							    $this->setState(237);
							    $this->recursiveExpression(4);
							break;

							case 4:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(238);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(239);
							    $this->match(self::MINUS);
							    $this->setState(240);
							    $this->recursiveExpression(3);
							break;
						} 
					}

					$this->setState(245);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx);
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
				$this->setState(274);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
					case 1:
					    $this->setState(247);
					    $this->match(self::TRUE);
					break;

					case 2:
					    $this->setState(248);
					    $this->match(self::FALSE);
					break;

					case 3:
					    $this->setState(249);
					    $this->match(self::ID);
					break;

					case 4:
					    $this->setState(250);
					    $this->match(self::NOT);
					    $this->setState(251);
					    $this->recursiveLogicExpression(10);
					break;

					case 5:
					    $this->setState(252);
					    $this->match(self::LPAREN);
					    $this->setState(253);
					    $this->recursiveLogicExpression(0);
					    $this->setState(254);
					    $this->match(self::RPAREN);
					break;

					case 6:
					    $this->setState(256);
					    $this->match(self::ID);
					    $this->setState(257);
					    $this->match(self::EQL);
					    $this->setState(258);
					    $this->recursiveExpression(0);
					break;

					case 7:
					    $this->setState(259);
					    $this->match(self::ID);
					    $this->setState(260);
					    $this->match(self::NEQ);
					    $this->setState(261);
					    $this->recursiveExpression(0);
					break;

					case 8:
					    $this->setState(262);
					    $this->match(self::ID);
					    $this->setState(263);
					    $this->match(self::LST);
					    $this->setState(264);
					    $this->recursiveExpression(0);
					break;

					case 9:
					    $this->setState(265);
					    $this->match(self::ID);
					    $this->setState(266);
					    $this->match(self::LTE);
					    $this->setState(267);
					    $this->recursiveExpression(0);
					break;

					case 10:
					    $this->setState(268);
					    $this->match(self::ID);
					    $this->setState(269);
					    $this->match(self::GRT);
					    $this->setState(270);
					    $this->recursiveExpression(0);
					break;

					case 11:
					    $this->setState(271);
					    $this->match(self::ID);
					    $this->setState(272);
					    $this->match(self::GTE);
					    $this->setState(273);
					    $this->recursiveExpression(0);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(284);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(282);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx)) {
							case 1:
							    $localContext = new Context\LogicExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_logicExpression);
							    $this->setState(276);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(277);
							    $this->match(self::AND);
							    $this->setState(278);
							    $this->recursiveLogicExpression(9);
							break;

							case 2:
							    $localContext = new Context\LogicExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_logicExpression);
							    $this->setState(279);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(280);
							    $this->match(self::LOR);
							    $this->setState(281);
							    $this->recursiveLogicExpression(8);
							break;
						} 
					}

					$this->setState(286);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx);
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

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
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

	    public function methodCall(): ?MethodCallContext
	    {
	    	return $this->getTypedRuleContext(MethodCallContext::class, 0);
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

	    public function logicExpression(): ?LogicExpressionContext
	    {
	    	return $this->getTypedRuleContext(LogicExpressionContext::class, 0);
	    }

	    public function doStatement(): ?DoStatementContext
	    {
	    	return $this->getTypedRuleContext(DoStatementContext::class, 0);
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

	    public function logicExpression(): ?LogicExpressionContext
	    {
	    	return $this->getTypedRuleContext(LogicExpressionContext::class, 0);
	    }

	    public function thenStatement(): ?ThenStatementContext
	    {
	    	return $this->getTypedRuleContext(ThenStatementContext::class, 0);
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

	    public function EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::EQUAL, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

	    public function attributeCall(): ?AttributeCallContext
	    {
	    	return $this->getTypedRuleContext(AttributeCallContext::class, 0);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AttributeCallContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_attributeCall;
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

	    public function DOT(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::DOT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterAttributeCall($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitAttributeCall($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitAttributeCall($this);
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

	class MethodCallContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_methodCall;
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

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::RPAREN, 0);
	    }

	    public function DOT(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::DOT, 0);
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
			    $listener->enterMethodCall($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitMethodCall($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitMethodCall($this);
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

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::RPAREN, 0);
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

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::STRING, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

	    public function attributeCall(): ?AttributeCallContext
	    {
	    	return $this->getTypedRuleContext(AttributeCallContext::class, 0);
	    }

	    public function methodCall(): ?MethodCallContext
	    {
	    	return $this->getTypedRuleContext(MethodCallContext::class, 0);
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