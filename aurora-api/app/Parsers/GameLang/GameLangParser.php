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
               T__17 = 18, ID = 19, NUMBER = 20, STRING = 21, PLUS = 22, 
               MINUS = 23, MULTIPLY = 24, DIVIDE = 25, LPAREN = 26, RPAREN = 27, 
               DOT = 28, EQUAL = 29, AND = 30, OR = 31, TRUE = 32, FALSE = 33, 
               NOT = 34, EQUALS = 35, NOTEQUALS = 36, LT = 37, LTE = 38, 
               GT = 39, GTE = 40, WS = 41, COMMENT = 42;

		public const RULE_program = 0, RULE_character = 1, RULE_parameters = 2, 
               RULE_timeUnit = 3, RULE_statement = 4, RULE_consoleStatement = 5, 
               RULE_whileStatement = 6, RULE_ifStatement = 7, RULE_assignment = 8, 
               RULE_attributeCall = 9, RULE_afterTimer = 10, RULE_everyTimer = 11, 
               RULE_methodCall = 12, RULE_functionDef = 13, RULE_num = 14, 
               RULE_expression = 15, RULE_logicExpression = 16;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'character', 'parameters', 'timeUnit', 'statement', 'consoleStatement', 
			'whileStatement', 'ifStatement', 'assignment', 'attributeCall', 'afterTimer', 
			'everyTimer', 'methodCall', 'functionDef', 'num', 'expression', 'logicExpression'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PERSONAJE'", "'FIN'", "'PARAMETROS'", "','", "'SEGUNDOS'", 
		    "'MILISEGUNDOS'", "'MINUTOS'", "'CONSOLA'", "'MIENTRAS'", "'SI'", 
		    "'SINO'", "'LUEGO'", "'DE'", "'CADA'", "'FUNCION'", "'RETORNAR'", 
		    "'NULO'", "'NULA'", null, null, null, "'+'", "'-'", "'*'", "'/'", 
		    "'('", "')'", "'.'", "'='", "'Y'", "'O'", "'V'", "'F'", "'NO'", "'=='", 
		    "'!='", "'<'", "'<='", "'>'", "'>='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, "ID", "NUMBER", "STRING", 
		    "PLUS", "MINUS", "MULTIPLY", "DIVIDE", "LPAREN", "RPAREN", "DOT", 
		    "EQUAL", "AND", "OR", "TRUE", "FALSE", "NOT", "EQUALS", "NOTEQUALS", 
		    "LT", "LTE", "GT", "GTE", "WS", "COMMENT"
		];

		private const SERIALIZED_ATN =
			[4, 1, 42, 271, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 1, 0, 4, 0, 36, 8, 0, 11, 0, 12, 0, 
		    37, 1, 1, 1, 1, 1, 1, 3, 1, 43, 8, 1, 1, 1, 5, 1, 46, 8, 1, 10, 1, 
		    12, 1, 49, 9, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 5, 2, 57, 8, 
		    2, 10, 2, 12, 2, 60, 9, 2, 3, 2, 62, 8, 2, 1, 3, 1, 3, 1, 4, 1, 4, 
		    1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 3, 4, 73, 8, 4, 1, 5, 1, 5, 1, 5, 1, 
		    5, 5, 5, 79, 8, 5, 10, 5, 12, 5, 82, 9, 5, 3, 5, 84, 8, 5, 1, 6, 1, 
		    6, 1, 6, 5, 6, 89, 8, 6, 10, 6, 12, 6, 92, 9, 6, 1, 6, 1, 6, 1, 7, 
		    1, 7, 1, 7, 5, 7, 99, 8, 7, 10, 7, 12, 7, 102, 9, 7, 1, 7, 1, 7, 5, 
		    7, 106, 8, 7, 10, 7, 12, 7, 109, 9, 7, 3, 7, 111, 8, 7, 1, 7, 1, 7, 
		    1, 8, 1, 8, 3, 8, 117, 8, 8, 1, 8, 1, 8, 1, 8, 1, 9, 1, 9, 1, 9, 1, 
		    9, 1, 10, 1, 10, 3, 10, 128, 8, 10, 1, 10, 1, 10, 1, 10, 5, 10, 133, 
		    8, 10, 10, 10, 12, 10, 136, 9, 10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 
		    11, 1, 11, 5, 11, 144, 8, 11, 10, 11, 12, 11, 147, 9, 11, 1, 11, 1, 
		    11, 1, 12, 1, 12, 3, 12, 153, 8, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 
		    12, 5, 12, 160, 8, 12, 10, 12, 12, 12, 163, 9, 12, 3, 12, 165, 8, 
		    12, 1, 12, 1, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 5, 13, 
		    175, 8, 13, 10, 13, 12, 13, 178, 9, 13, 3, 13, 180, 8, 13, 1, 13, 
		    1, 13, 5, 13, 184, 8, 13, 10, 13, 12, 13, 187, 9, 13, 1, 13, 1, 13, 
		    3, 13, 191, 8, 13, 1, 14, 3, 14, 194, 8, 14, 1, 14, 1, 14, 1, 15, 
		    1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 
		    15, 1, 15, 3, 15, 210, 8, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 
		    15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 5, 15, 224, 8, 15, 10, 
		    15, 12, 15, 227, 9, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 
		    16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 
		    16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 3, 16, 269, 8, 16, 1, 16, 0, 
		    1, 30, 17, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 
		    30, 32, 0, 2, 1, 0, 5, 7, 2, 0, 19, 19, 21, 21, 304, 0, 35, 1, 0, 
		    0, 0, 2, 39, 1, 0, 0, 0, 4, 52, 1, 0, 0, 0, 6, 63, 1, 0, 0, 0, 8, 
		    72, 1, 0, 0, 0, 10, 74, 1, 0, 0, 0, 12, 85, 1, 0, 0, 0, 14, 95, 1, 
		    0, 0, 0, 16, 116, 1, 0, 0, 0, 18, 121, 1, 0, 0, 0, 20, 125, 1, 0, 
		    0, 0, 22, 139, 1, 0, 0, 0, 24, 152, 1, 0, 0, 0, 26, 168, 1, 0, 0, 
		    0, 28, 193, 1, 0, 0, 0, 30, 209, 1, 0, 0, 0, 32, 268, 1, 0, 0, 0, 
		    34, 36, 3, 2, 1, 0, 35, 34, 1, 0, 0, 0, 36, 37, 1, 0, 0, 0, 37, 35, 
		    1, 0, 0, 0, 37, 38, 1, 0, 0, 0, 38, 1, 1, 0, 0, 0, 39, 40, 5, 1, 0, 
		    0, 40, 42, 5, 19, 0, 0, 41, 43, 3, 4, 2, 0, 42, 41, 1, 0, 0, 0, 42, 
		    43, 1, 0, 0, 0, 43, 47, 1, 0, 0, 0, 44, 46, 3, 8, 4, 0, 45, 44, 1, 
		    0, 0, 0, 46, 49, 1, 0, 0, 0, 47, 45, 1, 0, 0, 0, 47, 48, 1, 0, 0, 
		    0, 48, 50, 1, 0, 0, 0, 49, 47, 1, 0, 0, 0, 50, 51, 5, 2, 0, 0, 51, 
		    3, 1, 0, 0, 0, 52, 61, 5, 3, 0, 0, 53, 58, 5, 19, 0, 0, 54, 55, 5, 
		    4, 0, 0, 55, 57, 5, 19, 0, 0, 56, 54, 1, 0, 0, 0, 57, 60, 1, 0, 0, 
		    0, 58, 56, 1, 0, 0, 0, 58, 59, 1, 0, 0, 0, 59, 62, 1, 0, 0, 0, 60, 
		    58, 1, 0, 0, 0, 61, 53, 1, 0, 0, 0, 61, 62, 1, 0, 0, 0, 62, 5, 1, 
		    0, 0, 0, 63, 64, 7, 0, 0, 0, 64, 7, 1, 0, 0, 0, 65, 73, 3, 12, 6, 
		    0, 66, 73, 3, 14, 7, 0, 67, 73, 3, 16, 8, 0, 68, 73, 3, 24, 12, 0, 
		    69, 73, 3, 20, 10, 0, 70, 73, 3, 22, 11, 0, 71, 73, 3, 10, 5, 0, 72, 
		    65, 1, 0, 0, 0, 72, 66, 1, 0, 0, 0, 72, 67, 1, 0, 0, 0, 72, 68, 1, 
		    0, 0, 0, 72, 69, 1, 0, 0, 0, 72, 70, 1, 0, 0, 0, 72, 71, 1, 0, 0, 
		    0, 73, 9, 1, 0, 0, 0, 74, 83, 5, 8, 0, 0, 75, 80, 7, 1, 0, 0, 76, 
		    77, 5, 4, 0, 0, 77, 79, 7, 1, 0, 0, 78, 76, 1, 0, 0, 0, 79, 82, 1, 
		    0, 0, 0, 80, 78, 1, 0, 0, 0, 80, 81, 1, 0, 0, 0, 81, 84, 1, 0, 0, 
		    0, 82, 80, 1, 0, 0, 0, 83, 75, 1, 0, 0, 0, 83, 84, 1, 0, 0, 0, 84, 
		    11, 1, 0, 0, 0, 85, 86, 5, 9, 0, 0, 86, 90, 3, 32, 16, 0, 87, 89, 
		    3, 8, 4, 0, 88, 87, 1, 0, 0, 0, 89, 92, 1, 0, 0, 0, 90, 88, 1, 0, 
		    0, 0, 90, 91, 1, 0, 0, 0, 91, 93, 1, 0, 0, 0, 92, 90, 1, 0, 0, 0, 
		    93, 94, 5, 2, 0, 0, 94, 13, 1, 0, 0, 0, 95, 96, 5, 10, 0, 0, 96, 100, 
		    3, 32, 16, 0, 97, 99, 3, 8, 4, 0, 98, 97, 1, 0, 0, 0, 99, 102, 1, 
		    0, 0, 0, 100, 98, 1, 0, 0, 0, 100, 101, 1, 0, 0, 0, 101, 110, 1, 0, 
		    0, 0, 102, 100, 1, 0, 0, 0, 103, 107, 5, 11, 0, 0, 104, 106, 3, 8, 
		    4, 0, 105, 104, 1, 0, 0, 0, 106, 109, 1, 0, 0, 0, 107, 105, 1, 0, 
		    0, 0, 107, 108, 1, 0, 0, 0, 108, 111, 1, 0, 0, 0, 109, 107, 1, 0, 
		    0, 0, 110, 103, 1, 0, 0, 0, 110, 111, 1, 0, 0, 0, 111, 112, 1, 0, 
		    0, 0, 112, 113, 5, 2, 0, 0, 113, 15, 1, 0, 0, 0, 114, 117, 5, 19, 
		    0, 0, 115, 117, 3, 18, 9, 0, 116, 114, 1, 0, 0, 0, 116, 115, 1, 0, 
		    0, 0, 117, 118, 1, 0, 0, 0, 118, 119, 5, 29, 0, 0, 119, 120, 3, 30, 
		    15, 0, 120, 17, 1, 0, 0, 0, 121, 122, 5, 19, 0, 0, 122, 123, 5, 28, 
		    0, 0, 123, 124, 5, 19, 0, 0, 124, 19, 1, 0, 0, 0, 125, 127, 5, 12, 
		    0, 0, 126, 128, 5, 13, 0, 0, 127, 126, 1, 0, 0, 0, 127, 128, 1, 0, 
		    0, 0, 128, 129, 1, 0, 0, 0, 129, 130, 3, 30, 15, 0, 130, 134, 3, 6, 
		    3, 0, 131, 133, 3, 8, 4, 0, 132, 131, 1, 0, 0, 0, 133, 136, 1, 0, 
		    0, 0, 134, 132, 1, 0, 0, 0, 134, 135, 1, 0, 0, 0, 135, 137, 1, 0, 
		    0, 0, 136, 134, 1, 0, 0, 0, 137, 138, 5, 2, 0, 0, 138, 21, 1, 0, 0, 
		    0, 139, 140, 5, 14, 0, 0, 140, 141, 3, 30, 15, 0, 141, 145, 3, 6, 
		    3, 0, 142, 144, 3, 8, 4, 0, 143, 142, 1, 0, 0, 0, 144, 147, 1, 0, 
		    0, 0, 145, 143, 1, 0, 0, 0, 145, 146, 1, 0, 0, 0, 146, 148, 1, 0, 
		    0, 0, 147, 145, 1, 0, 0, 0, 148, 149, 5, 2, 0, 0, 149, 23, 1, 0, 0, 
		    0, 150, 151, 5, 19, 0, 0, 151, 153, 5, 28, 0, 0, 152, 150, 1, 0, 0, 
		    0, 152, 153, 1, 0, 0, 0, 153, 154, 1, 0, 0, 0, 154, 155, 5, 19, 0, 
		    0, 155, 164, 5, 26, 0, 0, 156, 161, 3, 30, 15, 0, 157, 158, 5, 4, 
		    0, 0, 158, 160, 3, 30, 15, 0, 159, 157, 1, 0, 0, 0, 160, 163, 1, 0, 
		    0, 0, 161, 159, 1, 0, 0, 0, 161, 162, 1, 0, 0, 0, 162, 165, 1, 0, 
		    0, 0, 163, 161, 1, 0, 0, 0, 164, 156, 1, 0, 0, 0, 164, 165, 1, 0, 
		    0, 0, 165, 166, 1, 0, 0, 0, 166, 167, 5, 27, 0, 0, 167, 25, 1, 0, 
		    0, 0, 168, 169, 5, 15, 0, 0, 169, 170, 5, 19, 0, 0, 170, 179, 5, 26, 
		    0, 0, 171, 176, 5, 19, 0, 0, 172, 173, 5, 4, 0, 0, 173, 175, 5, 19, 
		    0, 0, 174, 172, 1, 0, 0, 0, 175, 178, 1, 0, 0, 0, 176, 174, 1, 0, 
		    0, 0, 176, 177, 1, 0, 0, 0, 177, 180, 1, 0, 0, 0, 178, 176, 1, 0, 
		    0, 0, 179, 171, 1, 0, 0, 0, 179, 180, 1, 0, 0, 0, 180, 181, 1, 0, 
		    0, 0, 181, 185, 5, 27, 0, 0, 182, 184, 3, 8, 4, 0, 183, 182, 1, 0, 
		    0, 0, 184, 187, 1, 0, 0, 0, 185, 183, 1, 0, 0, 0, 185, 186, 1, 0, 
		    0, 0, 186, 188, 1, 0, 0, 0, 187, 185, 1, 0, 0, 0, 188, 190, 5, 16, 
		    0, 0, 189, 191, 5, 19, 0, 0, 190, 189, 1, 0, 0, 0, 190, 191, 1, 0, 
		    0, 0, 191, 27, 1, 0, 0, 0, 192, 194, 5, 23, 0, 0, 193, 192, 1, 0, 
		    0, 0, 193, 194, 1, 0, 0, 0, 194, 195, 1, 0, 0, 0, 195, 196, 5, 20, 
		    0, 0, 196, 29, 1, 0, 0, 0, 197, 198, 6, 15, -1, 0, 198, 210, 5, 21, 
		    0, 0, 199, 210, 5, 19, 0, 0, 200, 210, 5, 17, 0, 0, 201, 210, 5, 18, 
		    0, 0, 202, 210, 3, 18, 9, 0, 203, 210, 3, 24, 12, 0, 204, 205, 5, 
		    26, 0, 0, 205, 206, 3, 30, 15, 0, 206, 207, 5, 27, 0, 0, 207, 210, 
		    1, 0, 0, 0, 208, 210, 3, 28, 14, 0, 209, 197, 1, 0, 0, 0, 209, 199, 
		    1, 0, 0, 0, 209, 200, 1, 0, 0, 0, 209, 201, 1, 0, 0, 0, 209, 202, 
		    1, 0, 0, 0, 209, 203, 1, 0, 0, 0, 209, 204, 1, 0, 0, 0, 209, 208, 
		    1, 0, 0, 0, 210, 225, 1, 0, 0, 0, 211, 212, 10, 5, 0, 0, 212, 213, 
		    5, 24, 0, 0, 213, 224, 3, 30, 15, 6, 214, 215, 10, 4, 0, 0, 215, 216, 
		    5, 25, 0, 0, 216, 224, 3, 30, 15, 5, 217, 218, 10, 3, 0, 0, 218, 219, 
		    5, 22, 0, 0, 219, 224, 3, 30, 15, 4, 220, 221, 10, 2, 0, 0, 221, 222, 
		    5, 23, 0, 0, 222, 224, 3, 30, 15, 3, 223, 211, 1, 0, 0, 0, 223, 214, 
		    1, 0, 0, 0, 223, 217, 1, 0, 0, 0, 223, 220, 1, 0, 0, 0, 224, 227, 
		    1, 0, 0, 0, 225, 223, 1, 0, 0, 0, 225, 226, 1, 0, 0, 0, 226, 31, 1, 
		    0, 0, 0, 227, 225, 1, 0, 0, 0, 228, 269, 5, 32, 0, 0, 229, 269, 5, 
		    33, 0, 0, 230, 231, 5, 34, 0, 0, 231, 269, 3, 32, 16, 0, 232, 233, 
		    5, 26, 0, 0, 233, 234, 3, 32, 16, 0, 234, 235, 5, 27, 0, 0, 235, 269, 
		    1, 0, 0, 0, 236, 237, 3, 30, 15, 0, 237, 238, 5, 30, 0, 0, 238, 239, 
		    3, 30, 15, 0, 239, 269, 1, 0, 0, 0, 240, 241, 3, 30, 15, 0, 241, 242, 
		    5, 31, 0, 0, 242, 243, 3, 30, 15, 0, 243, 269, 1, 0, 0, 0, 244, 245, 
		    3, 30, 15, 0, 245, 246, 5, 35, 0, 0, 246, 247, 3, 30, 15, 0, 247, 
		    269, 1, 0, 0, 0, 248, 249, 3, 30, 15, 0, 249, 250, 5, 36, 0, 0, 250, 
		    251, 3, 30, 15, 0, 251, 269, 1, 0, 0, 0, 252, 253, 3, 30, 15, 0, 253, 
		    254, 5, 37, 0, 0, 254, 255, 3, 30, 15, 0, 255, 269, 1, 0, 0, 0, 256, 
		    257, 3, 30, 15, 0, 257, 258, 5, 38, 0, 0, 258, 259, 3, 30, 15, 0, 
		    259, 269, 1, 0, 0, 0, 260, 261, 3, 30, 15, 0, 261, 262, 5, 39, 0, 
		    0, 262, 263, 3, 30, 15, 0, 263, 269, 1, 0, 0, 0, 264, 265, 3, 30, 
		    15, 0, 265, 266, 5, 40, 0, 0, 266, 267, 3, 30, 15, 0, 267, 269, 1, 
		    0, 0, 0, 268, 228, 1, 0, 0, 0, 268, 229, 1, 0, 0, 0, 268, 230, 1, 
		    0, 0, 0, 268, 232, 1, 0, 0, 0, 268, 236, 1, 0, 0, 0, 268, 240, 1, 
		    0, 0, 0, 268, 244, 1, 0, 0, 0, 268, 248, 1, 0, 0, 0, 268, 252, 1, 
		    0, 0, 0, 268, 256, 1, 0, 0, 0, 268, 260, 1, 0, 0, 0, 268, 264, 1, 
		    0, 0, 0, 269, 33, 1, 0, 0, 0, 28, 37, 42, 47, 58, 61, 72, 80, 83, 
		    90, 100, 107, 110, 116, 127, 134, 145, 152, 161, 164, 176, 179, 185, 
		    190, 193, 209, 223, 225, 268];
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
		        $this->setState(35); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(34);
		        	$this->character();
		        	$this->setState(37); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__0);
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
		        $this->setState(39);
		        $this->match(self::T__0);
		        $this->setState(40);
		        $this->match(self::ID);
		        $this->setState(42);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__2) {
		        	$this->setState(41);
		        	$this->parameters();
		        }
		        $this->setState(47);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 546560) !== 0)) {
		        	$this->setState(44);
		        	$this->statement();
		        	$this->setState(49);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(50);
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
		        $this->setState(52);
		        $this->match(self::T__2);
		        $this->setState(61);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		            case 1:
		        	    $this->setState(53);
		        	    $this->match(self::ID);
		        	    $this->setState(58);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__3) {
		        	    	$this->setState(54);
		        	    	$this->match(self::T__3);
		        	    	$this->setState(55);
		        	    	$this->match(self::ID);
		        	    	$this->setState(60);
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
		        $this->setState(63);

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
		        $this->setState(72);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(65);
		        	    $this->whileStatement();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(66);
		        	    $this->ifStatement();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(67);
		        	    $this->assignment();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(68);
		        	    $this->methodCall();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(69);
		        	    $this->afterTimer();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(70);
		        	    $this->everyTimer();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(71);
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
		public function consoleStatement(): Context\ConsoleStatementContext
		{
		    $localContext = new Context\ConsoleStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_consoleStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(74);
		        $this->match(self::T__7);
		        $this->setState(83);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
		            case 1:
		        	    $this->setState(75);

		        	    $_la = $this->input->LA(1);

		        	    if (!($_la === self::ID || $_la === self::STRING)) {
		        	    $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(80);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__3) {
		        	    	$this->setState(76);
		        	    	$this->match(self::T__3);
		        	    	$this->setState(77);

		        	    	$_la = $this->input->LA(1);

		        	    	if (!($_la === self::ID || $_la === self::STRING)) {
		        	    	$this->errorHandler->recoverInline($this);
		        	    	} else {
		        	    		if ($this->input->LA(1) === Token::EOF) {
		        	    		    $this->matchedEOF = true;
		        	    	    }

		        	    		$this->errorHandler->reportMatch($this);
		        	    		$this->consume();
		        	    	}
		        	    	$this->setState(82);
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
		public function whileStatement(): Context\WhileStatementContext
		{
		    $localContext = new Context\WhileStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_whileStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(85);
		        $this->match(self::T__8);
		        $this->setState(86);
		        $this->logicExpression();
		        $this->setState(90);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 546560) !== 0)) {
		        	$this->setState(87);
		        	$this->statement();
		        	$this->setState(92);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(93);
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
		public function ifStatement(): Context\IfStatementContext
		{
		    $localContext = new Context\IfStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_ifStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(95);
		        $this->match(self::T__9);
		        $this->setState(96);
		        $this->logicExpression();
		        $this->setState(100);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 546560) !== 0)) {
		        	$this->setState(97);
		        	$this->statement();
		        	$this->setState(102);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(110);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__10) {
		        	$this->setState(103);
		        	$this->match(self::T__10);
		        	$this->setState(107);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 546560) !== 0)) {
		        		$this->setState(104);
		        		$this->statement();
		        		$this->setState(109);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(112);
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
		public function assignment(): Context\AssignmentContext
		{
		    $localContext = new Context\AssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(116);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx)) {
		        	case 1:
		        	    $this->setState(114);
		        	    $this->match(self::ID);
		        	break;

		        	case 2:
		        	    $this->setState(115);
		        	    $this->attributeCall();
		        	break;
		        }
		        $this->setState(118);
		        $this->match(self::EQUAL);
		        $this->setState(119);
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
		public function attributeCall(): Context\AttributeCallContext
		{
		    $localContext = new Context\AttributeCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_attributeCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(121);
		        $this->match(self::ID);
		        $this->setState(122);
		        $this->match(self::DOT);
		        $this->setState(123);
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

		    $this->enterRule($localContext, 20, self::RULE_afterTimer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(125);
		        $this->match(self::T__11);
		        $this->setState(127);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__12) {
		        	$this->setState(126);
		        	$this->match(self::T__12);
		        }
		        $this->setState(129);
		        $this->recursiveExpression(0);
		        $this->setState(130);
		        $this->timeUnit();
		        $this->setState(134);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 546560) !== 0)) {
		        	$this->setState(131);
		        	$this->statement();
		        	$this->setState(136);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(137);
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

		    $this->enterRule($localContext, 22, self::RULE_everyTimer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(139);
		        $this->match(self::T__13);
		        $this->setState(140);
		        $this->recursiveExpression(0);
		        $this->setState(141);
		        $this->timeUnit();
		        $this->setState(145);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 546560) !== 0)) {
		        	$this->setState(142);
		        	$this->statement();
		        	$this->setState(147);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(148);
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

		    $this->enterRule($localContext, 24, self::RULE_methodCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(152);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		            case 1:
		        	    $this->setState(150);
		        	    $this->match(self::ID);
		        	    $this->setState(151);
		        	    $this->match(self::DOT);
		        	break;
		        }
		        $this->setState(154);
		        $this->match(self::ID);
		        $this->setState(155);
		        $this->match(self::LPAREN);
		        $this->setState(164);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 79560704) !== 0)) {
		        	$this->setState(156);
		        	$this->recursiveExpression(0);
		        	$this->setState(161);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__3) {
		        		$this->setState(157);
		        		$this->match(self::T__3);
		        		$this->setState(158);
		        		$this->recursiveExpression(0);
		        		$this->setState(163);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(166);
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

		    $this->enterRule($localContext, 26, self::RULE_functionDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(168);
		        $this->match(self::T__14);
		        $this->setState(169);
		        $this->match(self::ID);
		        $this->setState(170);
		        $this->match(self::LPAREN);
		        $this->setState(179);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(171);
		        	$this->match(self::ID);
		        	$this->setState(176);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__3) {
		        		$this->setState(172);
		        		$this->match(self::T__3);
		        		$this->setState(173);
		        		$this->match(self::ID);
		        		$this->setState(178);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(181);
		        $this->match(self::RPAREN);
		        $this->setState(185);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 546560) !== 0)) {
		        	$this->setState(182);
		        	$this->statement();
		        	$this->setState(187);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(188);
		        $this->match(self::T__15);
		        $this->setState(190);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(189);
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

		    $this->enterRule($localContext, 28, self::RULE_num);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(193);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::MINUS) {
		        	$this->setState(192);
		        	$this->match(self::MINUS);
		        }
		        $this->setState(195);
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
			$startState = 30;
			$this->enterRecursionRule($localContext, 30, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(209);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx)) {
					case 1:
					    $this->setState(198);
					    $this->match(self::STRING);
					break;

					case 2:
					    $this->setState(199);
					    $this->match(self::ID);
					break;

					case 3:
					    $this->setState(200);
					    $this->match(self::T__16);
					break;

					case 4:
					    $this->setState(201);
					    $this->match(self::T__17);
					break;

					case 5:
					    $this->setState(202);
					    $this->attributeCall();
					break;

					case 6:
					    $this->setState(203);
					    $this->methodCall();
					break;

					case 7:
					    $this->setState(204);
					    $this->match(self::LPAREN);
					    $this->setState(205);
					    $this->recursiveExpression(0);
					    $this->setState(206);
					    $this->match(self::RPAREN);
					break;

					case 8:
					    $this->setState(208);
					    $this->num();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(225);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(223);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(211);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(212);
							    $this->match(self::MULTIPLY);
							    $this->setState(213);
							    $this->recursiveExpression(6);
							break;

							case 2:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(214);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(215);
							    $this->match(self::DIVIDE);
							    $this->setState(216);
							    $this->recursiveExpression(5);
							break;

							case 3:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(217);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(218);
							    $this->match(self::PLUS);
							    $this->setState(219);
							    $this->recursiveExpression(4);
							break;

							case 4:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(220);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(221);
							    $this->match(self::MINUS);
							    $this->setState(222);
							    $this->recursiveExpression(3);
							break;
						} 
					}

					$this->setState(227);
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
		    $localContext = new Context\LogicExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_logicExpression);

		    try {
		        $this->setState(268);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(228);
		        	    $this->match(self::TRUE);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(229);
		        	    $this->match(self::FALSE);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(230);
		        	    $this->match(self::NOT);
		        	    $this->setState(231);
		        	    $this->logicExpression();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(232);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(233);
		        	    $this->logicExpression();
		        	    $this->setState(234);
		        	    $this->match(self::RPAREN);
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(236);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(237);
		        	    $this->match(self::AND);
		        	    $this->setState(238);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(240);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(241);
		        	    $this->match(self::OR);
		        	    $this->setState(242);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(244);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(245);
		        	    $this->match(self::EQUALS);
		        	    $this->setState(246);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(248);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(249);
		        	    $this->match(self::NOTEQUALS);
		        	    $this->setState(250);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(252);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(253);
		        	    $this->match(self::LT);
		        	    $this->setState(254);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(256);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(257);
		        	    $this->match(self::LTE);
		        	    $this->setState(258);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(260);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(261);
		        	    $this->match(self::GT);
		        	    $this->setState(262);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(264);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(265);
		        	    $this->match(self::GTE);
		        	    $this->setState(266);
		        	    $this->recursiveExpression(0);
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

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 15:
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
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function STRING(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GameLangParser::STRING);
	    	}

	        return $this->getToken(GameLangParser::STRING, $index);
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

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

	    public function attributeCall(): ?AttributeCallContext
	    {
	    	return $this->getTypedRuleContext(AttributeCallContext::class, 0);
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

	    public function NOT(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NOT, 0);
	    }

	    public function logicExpression(): ?LogicExpressionContext
	    {
	    	return $this->getTypedRuleContext(LogicExpressionContext::class, 0);
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

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::AND, 0);
	    }

	    public function OR(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::OR, 0);
	    }

	    public function EQUALS(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::EQUALS, 0);
	    }

	    public function NOTEQUALS(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::NOTEQUALS, 0);
	    }

	    public function LT(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::LT, 0);
	    }

	    public function LTE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::LTE, 0);
	    }

	    public function GT(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::GT, 0);
	    }

	    public function GTE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::GTE, 0);
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