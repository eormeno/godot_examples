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
               T__17 = 18, T__18 = 19, T__19 = 20, T__20 = 21, T__21 = 22, 
               T__22 = 23, T__23 = 24, T__24 = 25, T__25 = 26, T__26 = 27, 
               T__27 = 28, T__28 = 29, T__29 = 30, T__30 = 31, T__31 = 32, 
               ID = 33, STRING = 34, INT = 35, PLUS = 36, MINUS = 37, MULTIPLY = 38, 
               DIVIDE = 39, LPAREN = 40, RPAREN = 41, DOT = 42, EQUAL = 43, 
               WS = 44;

		public const RULE_program = 0, RULE_character = 1, RULE_definitions = 2, 
               RULE_parameters = 3, RULE_state = 4, RULE_transition = 5, 
               RULE_timeUnit = 6, RULE_statement = 7, RULE_whileStatement = 8, 
               RULE_ifStatement = 9, RULE_assignment = 10, RULE_animationDef = 11, 
               RULE_soundDef = 12, RULE_attributeCall = 13, RULE_entering = 14, 
               RULE_exiting = 15, RULE_afterTimer = 16, RULE_everyTimer = 17, 
               RULE_methodCall = 18, RULE_functionDef = 19, RULE_expression = 20, 
               RULE_condition = 21;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'character', 'definitions', 'parameters', 'state', 'transition', 
			'timeUnit', 'statement', 'whileStatement', 'ifStatement', 'assignment', 
			'animationDef', 'soundDef', 'attributeCall', 'entering', 'exiting', 'afterTimer', 
			'everyTimer', 'methodCall', 'functionDef', 'expression', 'condition'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PERSONAJE'", "'FIN'", "'PARAMETROS'", "','", "'ESTA'", "'ESTARA'", 
		    "'SEGUNDOS'", "'MILISEGUNDOS'", "'MINUTOS'", "'MIENTRAS'", "'SI'", 
		    "'SINO'", "'ANIMACION'", "'ACTUAL'", "'REPRODUCIR'", "'DETENER'", 
		    "'SONIDO'", "'ENTRANDO'", "'SALIENDO'", "'LUEGO'", "'DE'", "'CADA'", 
		    "'FUNCION'", "'RETORNAR'", "'NULO'", "'NULA'", "'=='", "'!='", "'<'", 
		    "'<='", "'>'", "'>='", null, null, null, "'+'", "'-'", "'*'", "'/'", 
		    "'('", "')'", "'.'", "'='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    "ID", "STRING", "INT", "PLUS", "MINUS", "MULTIPLY", "DIVIDE", "LPAREN", 
		    "RPAREN", "DOT", "EQUAL", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 44, 290, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 1, 0, 4, 0, 46, 8, 0, 11, 0, 12, 
		    0, 47, 1, 1, 1, 1, 1, 1, 1, 1, 5, 1, 54, 8, 1, 10, 1, 12, 1, 57, 9, 
		    1, 1, 1, 5, 1, 60, 8, 1, 10, 1, 12, 1, 63, 9, 1, 1, 1, 1, 1, 1, 2, 
		    1, 2, 1, 2, 1, 2, 5, 2, 71, 8, 2, 10, 2, 12, 2, 74, 9, 2, 1, 2, 3, 
		    2, 77, 8, 2, 1, 3, 1, 3, 1, 3, 1, 3, 5, 3, 83, 8, 3, 10, 3, 12, 3, 
		    86, 9, 3, 3, 3, 88, 8, 3, 1, 4, 1, 4, 1, 4, 3, 4, 93, 8, 4, 1, 4, 
		    5, 4, 96, 8, 4, 10, 4, 12, 4, 99, 9, 4, 1, 4, 3, 4, 102, 8, 4, 1, 
		    4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 
		    7, 1, 7, 1, 7, 1, 7, 1, 7, 3, 7, 120, 8, 7, 1, 8, 1, 8, 1, 8, 5, 8, 
		    125, 8, 8, 10, 8, 12, 8, 128, 9, 8, 1, 8, 1, 8, 1, 9, 1, 9, 1, 9, 
		    5, 9, 135, 8, 9, 10, 9, 12, 9, 138, 9, 9, 1, 9, 1, 9, 5, 9, 142, 8, 
		    9, 10, 9, 12, 9, 145, 9, 9, 3, 9, 147, 8, 9, 1, 9, 1, 9, 1, 10, 1, 
		    10, 3, 10, 153, 8, 10, 1, 10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 11, 1, 
		    11, 1, 12, 1, 12, 1, 12, 1, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 14, 
		    1, 14, 5, 14, 172, 8, 14, 10, 14, 12, 14, 175, 9, 14, 1, 14, 1, 14, 
		    1, 15, 1, 15, 5, 15, 181, 8, 15, 10, 15, 12, 15, 184, 9, 15, 1, 15, 
		    1, 15, 1, 16, 1, 16, 3, 16, 190, 8, 16, 1, 16, 1, 16, 1, 16, 5, 16, 
		    195, 8, 16, 10, 16, 12, 16, 198, 9, 16, 1, 16, 1, 16, 1, 17, 1, 17, 
		    1, 17, 1, 17, 5, 17, 206, 8, 17, 10, 17, 12, 17, 209, 9, 17, 1, 17, 
		    1, 17, 1, 18, 1, 18, 3, 18, 215, 8, 18, 1, 18, 1, 18, 1, 18, 1, 18, 
		    1, 18, 5, 18, 222, 8, 18, 10, 18, 12, 18, 225, 9, 18, 3, 18, 227, 
		    8, 18, 1, 18, 1, 18, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 5, 
		    19, 237, 8, 19, 10, 19, 12, 19, 240, 9, 19, 3, 19, 242, 8, 19, 1, 
		    19, 1, 19, 5, 19, 246, 8, 19, 10, 19, 12, 19, 249, 9, 19, 1, 19, 1, 
		    19, 3, 19, 253, 8, 19, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 
		    20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 3, 20, 267, 8, 20, 1, 20, 1, 
		    20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 
		    1, 20, 5, 20, 281, 8, 20, 10, 20, 12, 20, 284, 9, 20, 1, 21, 1, 21, 
		    1, 21, 1, 21, 1, 21, 0, 1, 40, 22, 0, 2, 4, 6, 8, 10, 12, 14, 16, 
		    18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 0, 4, 1, 0, 7, 
		    9, 2, 0, 14, 14, 33, 33, 1, 0, 15, 16, 1, 0, 27, 32, 316, 0, 45, 1, 
		    0, 0, 0, 2, 49, 1, 0, 0, 0, 4, 72, 1, 0, 0, 0, 6, 78, 1, 0, 0, 0, 
		    8, 89, 1, 0, 0, 0, 10, 105, 1, 0, 0, 0, 12, 108, 1, 0, 0, 0, 14, 119, 
		    1, 0, 0, 0, 16, 121, 1, 0, 0, 0, 18, 131, 1, 0, 0, 0, 20, 152, 1, 
		    0, 0, 0, 22, 157, 1, 0, 0, 0, 24, 161, 1, 0, 0, 0, 26, 165, 1, 0, 
		    0, 0, 28, 169, 1, 0, 0, 0, 30, 178, 1, 0, 0, 0, 32, 187, 1, 0, 0, 
		    0, 34, 201, 1, 0, 0, 0, 36, 214, 1, 0, 0, 0, 38, 230, 1, 0, 0, 0, 
		    40, 266, 1, 0, 0, 0, 42, 285, 1, 0, 0, 0, 44, 46, 3, 2, 1, 0, 45, 
		    44, 1, 0, 0, 0, 46, 47, 1, 0, 0, 0, 47, 45, 1, 0, 0, 0, 47, 48, 1, 
		    0, 0, 0, 48, 1, 1, 0, 0, 0, 49, 50, 5, 1, 0, 0, 50, 51, 5, 33, 0, 
		    0, 51, 55, 3, 4, 2, 0, 52, 54, 3, 8, 4, 0, 53, 52, 1, 0, 0, 0, 54, 
		    57, 1, 0, 0, 0, 55, 53, 1, 0, 0, 0, 55, 56, 1, 0, 0, 0, 56, 61, 1, 
		    0, 0, 0, 57, 55, 1, 0, 0, 0, 58, 60, 3, 38, 19, 0, 59, 58, 1, 0, 0, 
		    0, 60, 63, 1, 0, 0, 0, 61, 59, 1, 0, 0, 0, 61, 62, 1, 0, 0, 0, 62, 
		    64, 1, 0, 0, 0, 63, 61, 1, 0, 0, 0, 64, 65, 5, 2, 0, 0, 65, 3, 1, 
		    0, 0, 0, 66, 71, 3, 6, 3, 0, 67, 71, 3, 20, 10, 0, 68, 71, 3, 22, 
		    11, 0, 69, 71, 3, 24, 12, 0, 70, 66, 1, 0, 0, 0, 70, 67, 1, 0, 0, 
		    0, 70, 68, 1, 0, 0, 0, 70, 69, 1, 0, 0, 0, 71, 74, 1, 0, 0, 0, 72, 
		    70, 1, 0, 0, 0, 72, 73, 1, 0, 0, 0, 73, 76, 1, 0, 0, 0, 74, 72, 1, 
		    0, 0, 0, 75, 77, 3, 10, 5, 0, 76, 75, 1, 0, 0, 0, 76, 77, 1, 0, 0, 
		    0, 77, 5, 1, 0, 0, 0, 78, 87, 5, 3, 0, 0, 79, 84, 5, 33, 0, 0, 80, 
		    81, 5, 4, 0, 0, 81, 83, 5, 33, 0, 0, 82, 80, 1, 0, 0, 0, 83, 86, 1, 
		    0, 0, 0, 84, 82, 1, 0, 0, 0, 84, 85, 1, 0, 0, 0, 85, 88, 1, 0, 0, 
		    0, 86, 84, 1, 0, 0, 0, 87, 79, 1, 0, 0, 0, 87, 88, 1, 0, 0, 0, 88, 
		    7, 1, 0, 0, 0, 89, 90, 5, 5, 0, 0, 90, 92, 5, 33, 0, 0, 91, 93, 3, 
		    28, 14, 0, 92, 91, 1, 0, 0, 0, 92, 93, 1, 0, 0, 0, 93, 97, 1, 0, 0, 
		    0, 94, 96, 3, 14, 7, 0, 95, 94, 1, 0, 0, 0, 96, 99, 1, 0, 0, 0, 97, 
		    95, 1, 0, 0, 0, 97, 98, 1, 0, 0, 0, 98, 101, 1, 0, 0, 0, 99, 97, 1, 
		    0, 0, 0, 100, 102, 3, 30, 15, 0, 101, 100, 1, 0, 0, 0, 101, 102, 1, 
		    0, 0, 0, 102, 103, 1, 0, 0, 0, 103, 104, 5, 2, 0, 0, 104, 9, 1, 0, 
		    0, 0, 105, 106, 5, 6, 0, 0, 106, 107, 5, 33, 0, 0, 107, 11, 1, 0, 
		    0, 0, 108, 109, 7, 0, 0, 0, 109, 13, 1, 0, 0, 0, 110, 120, 3, 16, 
		    8, 0, 111, 120, 3, 18, 9, 0, 112, 120, 3, 20, 10, 0, 113, 120, 3, 
		    22, 11, 0, 114, 120, 3, 24, 12, 0, 115, 120, 3, 36, 18, 0, 116, 120, 
		    3, 32, 16, 0, 117, 120, 3, 34, 17, 0, 118, 120, 3, 10, 5, 0, 119, 
		    110, 1, 0, 0, 0, 119, 111, 1, 0, 0, 0, 119, 112, 1, 0, 0, 0, 119, 
		    113, 1, 0, 0, 0, 119, 114, 1, 0, 0, 0, 119, 115, 1, 0, 0, 0, 119, 
		    116, 1, 0, 0, 0, 119, 117, 1, 0, 0, 0, 119, 118, 1, 0, 0, 0, 120, 
		    15, 1, 0, 0, 0, 121, 122, 5, 10, 0, 0, 122, 126, 3, 42, 21, 0, 123, 
		    125, 3, 14, 7, 0, 124, 123, 1, 0, 0, 0, 125, 128, 1, 0, 0, 0, 126, 
		    124, 1, 0, 0, 0, 126, 127, 1, 0, 0, 0, 127, 129, 1, 0, 0, 0, 128, 
		    126, 1, 0, 0, 0, 129, 130, 5, 2, 0, 0, 130, 17, 1, 0, 0, 0, 131, 132, 
		    5, 11, 0, 0, 132, 136, 3, 42, 21, 0, 133, 135, 3, 14, 7, 0, 134, 133, 
		    1, 0, 0, 0, 135, 138, 1, 0, 0, 0, 136, 134, 1, 0, 0, 0, 136, 137, 
		    1, 0, 0, 0, 137, 146, 1, 0, 0, 0, 138, 136, 1, 0, 0, 0, 139, 143, 
		    5, 12, 0, 0, 140, 142, 3, 14, 7, 0, 141, 140, 1, 0, 0, 0, 142, 145, 
		    1, 0, 0, 0, 143, 141, 1, 0, 0, 0, 143, 144, 1, 0, 0, 0, 144, 147, 
		    1, 0, 0, 0, 145, 143, 1, 0, 0, 0, 146, 139, 1, 0, 0, 0, 146, 147, 
		    1, 0, 0, 0, 147, 148, 1, 0, 0, 0, 148, 149, 5, 2, 0, 0, 149, 19, 1, 
		    0, 0, 0, 150, 153, 5, 33, 0, 0, 151, 153, 3, 26, 13, 0, 152, 150, 
		    1, 0, 0, 0, 152, 151, 1, 0, 0, 0, 153, 154, 1, 0, 0, 0, 154, 155, 
		    5, 43, 0, 0, 155, 156, 3, 40, 20, 0, 156, 21, 1, 0, 0, 0, 157, 158, 
		    5, 13, 0, 0, 158, 159, 7, 1, 0, 0, 159, 160, 7, 2, 0, 0, 160, 23, 
		    1, 0, 0, 0, 161, 162, 5, 17, 0, 0, 162, 163, 7, 1, 0, 0, 163, 164, 
		    7, 2, 0, 0, 164, 25, 1, 0, 0, 0, 165, 166, 5, 33, 0, 0, 166, 167, 
		    5, 42, 0, 0, 167, 168, 5, 33, 0, 0, 168, 27, 1, 0, 0, 0, 169, 173, 
		    5, 18, 0, 0, 170, 172, 3, 14, 7, 0, 171, 170, 1, 0, 0, 0, 172, 175, 
		    1, 0, 0, 0, 173, 171, 1, 0, 0, 0, 173, 174, 1, 0, 0, 0, 174, 176, 
		    1, 0, 0, 0, 175, 173, 1, 0, 0, 0, 176, 177, 5, 2, 0, 0, 177, 29, 1, 
		    0, 0, 0, 178, 182, 5, 19, 0, 0, 179, 181, 3, 14, 7, 0, 180, 179, 1, 
		    0, 0, 0, 181, 184, 1, 0, 0, 0, 182, 180, 1, 0, 0, 0, 182, 183, 1, 
		    0, 0, 0, 183, 185, 1, 0, 0, 0, 184, 182, 1, 0, 0, 0, 185, 186, 5, 
		    2, 0, 0, 186, 31, 1, 0, 0, 0, 187, 189, 5, 20, 0, 0, 188, 190, 5, 
		    21, 0, 0, 189, 188, 1, 0, 0, 0, 189, 190, 1, 0, 0, 0, 190, 191, 1, 
		    0, 0, 0, 191, 192, 3, 40, 20, 0, 192, 196, 3, 12, 6, 0, 193, 195, 
		    3, 14, 7, 0, 194, 193, 1, 0, 0, 0, 195, 198, 1, 0, 0, 0, 196, 194, 
		    1, 0, 0, 0, 196, 197, 1, 0, 0, 0, 197, 199, 1, 0, 0, 0, 198, 196, 
		    1, 0, 0, 0, 199, 200, 5, 2, 0, 0, 200, 33, 1, 0, 0, 0, 201, 202, 5, 
		    22, 0, 0, 202, 203, 3, 40, 20, 0, 203, 207, 3, 12, 6, 0, 204, 206, 
		    3, 14, 7, 0, 205, 204, 1, 0, 0, 0, 206, 209, 1, 0, 0, 0, 207, 205, 
		    1, 0, 0, 0, 207, 208, 1, 0, 0, 0, 208, 210, 1, 0, 0, 0, 209, 207, 
		    1, 0, 0, 0, 210, 211, 5, 2, 0, 0, 211, 35, 1, 0, 0, 0, 212, 213, 5, 
		    33, 0, 0, 213, 215, 5, 42, 0, 0, 214, 212, 1, 0, 0, 0, 214, 215, 1, 
		    0, 0, 0, 215, 216, 1, 0, 0, 0, 216, 217, 5, 33, 0, 0, 217, 226, 5, 
		    40, 0, 0, 218, 223, 3, 40, 20, 0, 219, 220, 5, 4, 0, 0, 220, 222, 
		    3, 40, 20, 0, 221, 219, 1, 0, 0, 0, 222, 225, 1, 0, 0, 0, 223, 221, 
		    1, 0, 0, 0, 223, 224, 1, 0, 0, 0, 224, 227, 1, 0, 0, 0, 225, 223, 
		    1, 0, 0, 0, 226, 218, 1, 0, 0, 0, 226, 227, 1, 0, 0, 0, 227, 228, 
		    1, 0, 0, 0, 228, 229, 5, 41, 0, 0, 229, 37, 1, 0, 0, 0, 230, 231, 
		    5, 23, 0, 0, 231, 232, 5, 33, 0, 0, 232, 241, 5, 40, 0, 0, 233, 238, 
		    5, 33, 0, 0, 234, 235, 5, 4, 0, 0, 235, 237, 5, 33, 0, 0, 236, 234, 
		    1, 0, 0, 0, 237, 240, 1, 0, 0, 0, 238, 236, 1, 0, 0, 0, 238, 239, 
		    1, 0, 0, 0, 239, 242, 1, 0, 0, 0, 240, 238, 1, 0, 0, 0, 241, 233, 
		    1, 0, 0, 0, 241, 242, 1, 0, 0, 0, 242, 243, 1, 0, 0, 0, 243, 247, 
		    5, 41, 0, 0, 244, 246, 3, 14, 7, 0, 245, 244, 1, 0, 0, 0, 246, 249, 
		    1, 0, 0, 0, 247, 245, 1, 0, 0, 0, 247, 248, 1, 0, 0, 0, 248, 250, 
		    1, 0, 0, 0, 249, 247, 1, 0, 0, 0, 250, 252, 5, 24, 0, 0, 251, 253, 
		    5, 33, 0, 0, 252, 251, 1, 0, 0, 0, 252, 253, 1, 0, 0, 0, 253, 39, 
		    1, 0, 0, 0, 254, 255, 6, 20, -1, 0, 255, 267, 5, 35, 0, 0, 256, 267, 
		    5, 34, 0, 0, 257, 267, 5, 33, 0, 0, 258, 267, 5, 25, 0, 0, 259, 267, 
		    5, 26, 0, 0, 260, 267, 3, 26, 13, 0, 261, 267, 3, 36, 18, 0, 262, 
		    263, 5, 40, 0, 0, 263, 264, 3, 40, 20, 0, 264, 265, 5, 41, 0, 0, 265, 
		    267, 1, 0, 0, 0, 266, 254, 1, 0, 0, 0, 266, 256, 1, 0, 0, 0, 266, 
		    257, 1, 0, 0, 0, 266, 258, 1, 0, 0, 0, 266, 259, 1, 0, 0, 0, 266, 
		    260, 1, 0, 0, 0, 266, 261, 1, 0, 0, 0, 266, 262, 1, 0, 0, 0, 267, 
		    282, 1, 0, 0, 0, 268, 269, 10, 5, 0, 0, 269, 270, 5, 36, 0, 0, 270, 
		    281, 3, 40, 20, 6, 271, 272, 10, 4, 0, 0, 272, 273, 5, 37, 0, 0, 273, 
		    281, 3, 40, 20, 5, 274, 275, 10, 3, 0, 0, 275, 276, 5, 38, 0, 0, 276, 
		    281, 3, 40, 20, 4, 277, 278, 10, 2, 0, 0, 278, 279, 5, 39, 0, 0, 279, 
		    281, 3, 40, 20, 3, 280, 268, 1, 0, 0, 0, 280, 271, 1, 0, 0, 0, 280, 
		    274, 1, 0, 0, 0, 280, 277, 1, 0, 0, 0, 281, 284, 1, 0, 0, 0, 282, 
		    280, 1, 0, 0, 0, 282, 283, 1, 0, 0, 0, 283, 41, 1, 0, 0, 0, 284, 282, 
		    1, 0, 0, 0, 285, 286, 3, 40, 20, 0, 286, 287, 7, 3, 0, 0, 287, 288, 
		    3, 40, 20, 0, 288, 43, 1, 0, 0, 0, 32, 47, 55, 61, 70, 72, 76, 84, 
		    87, 92, 97, 101, 119, 126, 136, 143, 146, 152, 173, 182, 189, 196, 
		    207, 214, 223, 226, 238, 241, 247, 252, 266, 280, 282];
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
		        $this->setState(49);
		        $this->match(self::T__0);
		        $this->setState(50);
		        $this->match(self::ID);

		        $this->setState(51);
		        $this->definitions();
		        $this->setState(55);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(52);
		        	$this->state();
		        	$this->setState(57);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(61);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__22) {
		        	$this->setState(58);
		        	$this->functionDef();
		        	$this->setState(63);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(64);
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
		public function definitions(): Context\DefinitionsContext
		{
		    $localContext = new Context\DefinitionsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_definitions);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(72);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8590073864) !== 0)) {
		        	$this->setState(70);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::T__2:
		        	    	$this->setState(66);
		        	    	$this->parameters();
		        	    	break;

		        	    case self::ID:
		        	    	$this->setState(67);
		        	    	$this->assignment();
		        	    	break;

		        	    case self::T__12:
		        	    	$this->setState(68);
		        	    	$this->animationDef();
		        	    	break;

		        	    case self::T__16:
		        	    	$this->setState(69);
		        	    	$this->soundDef();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(74);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(76);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__5) {
		        	$this->setState(75);
		        	$this->transition();
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
		public function parameters(): Context\ParametersContext
		{
		    $localContext = new Context\ParametersContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_parameters);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(78);
		        $this->match(self::T__2);
		        $this->setState(87);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
		            case 1:
		        	    $this->setState(79);
		        	    $this->match(self::ID);
		        	    $this->setState(84);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__3) {
		        	    	$this->setState(80);
		        	    	$this->match(self::T__3);
		        	    	$this->setState(81);
		        	    	$this->match(self::ID);
		        	    	$this->setState(86);
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
		public function state(): Context\StateContext
		{
		    $localContext = new Context\StateContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_state);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(89);
		        $this->match(self::T__4);
		        $this->setState(90);
		        $this->match(self::ID);
		        $this->setState(92);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__17) {
		        	$this->setState(91);
		        	$this->entering();
		        }
		        $this->setState(97);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8595319872) !== 0)) {
		        	$this->setState(94);
		        	$this->statement();
		        	$this->setState(99);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(101);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__18) {
		        	$this->setState(100);
		        	$this->exiting();
		        }
		        $this->setState(103);
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
		public function transition(): Context\TransitionContext
		{
		    $localContext = new Context\TransitionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_transition);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(105);
		        $this->match(self::T__5);
		        $this->setState(106);
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
		public function timeUnit(): Context\TimeUnitContext
		{
		    $localContext = new Context\TimeUnitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_timeUnit);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(108);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 896) !== 0))) {
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

		    $this->enterRule($localContext, 14, self::RULE_statement);

		    try {
		        $this->setState(119);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(110);
		        	    $this->whileStatement();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(111);
		        	    $this->ifStatement();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(112);
		        	    $this->assignment();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(113);
		        	    $this->animationDef();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(114);
		        	    $this->soundDef();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(115);
		        	    $this->methodCall();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(116);
		        	    $this->afterTimer();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(117);
		        	    $this->everyTimer();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(118);
		        	    $this->transition();
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
		        $this->setState(121);
		        $this->match(self::T__9);
		        $this->setState(122);
		        $this->condition();
		        $this->setState(126);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8595319872) !== 0)) {
		        	$this->setState(123);
		        	$this->statement();
		        	$this->setState(128);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(129);
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

		    $this->enterRule($localContext, 18, self::RULE_ifStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(131);
		        $this->match(self::T__10);
		        $this->setState(132);
		        $this->condition();
		        $this->setState(136);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8595319872) !== 0)) {
		        	$this->setState(133);
		        	$this->statement();
		        	$this->setState(138);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(146);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__11) {
		        	$this->setState(139);
		        	$this->match(self::T__11);
		        	$this->setState(143);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8595319872) !== 0)) {
		        		$this->setState(140);
		        		$this->statement();
		        		$this->setState(145);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
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
		public function assignment(): Context\AssignmentContext
		{
		    $localContext = new Context\AssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(152);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		        	case 1:
		        	    $this->setState(150);
		        	    $this->match(self::ID);
		        	break;

		        	case 2:
		        	    $this->setState(151);
		        	    $this->attributeCall();
		        	break;
		        }
		        $this->setState(154);
		        $this->match(self::EQUAL);
		        $this->setState(155);
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
		public function animationDef(): Context\AnimationDefContext
		{
		    $localContext = new Context\AnimationDefContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_animationDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(157);
		        $this->match(self::T__12);
		        $this->setState(158);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__13 || $_la === self::ID)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(159);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__14 || $_la === self::T__15)) {
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
		public function soundDef(): Context\SoundDefContext
		{
		    $localContext = new Context\SoundDefContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_soundDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(161);
		        $this->match(self::T__16);
		        $this->setState(162);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__13 || $_la === self::ID)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(163);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__14 || $_la === self::T__15)) {
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
		public function attributeCall(): Context\AttributeCallContext
		{
		    $localContext = new Context\AttributeCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_attributeCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(165);
		        $this->match(self::ID);
		        $this->setState(166);
		        $this->match(self::DOT);
		        $this->setState(167);
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
		public function entering(): Context\EnteringContext
		{
		    $localContext = new Context\EnteringContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_entering);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(169);
		        $this->match(self::T__17);
		        $this->setState(173);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8595319872) !== 0)) {
		        	$this->setState(170);
		        	$this->statement();
		        	$this->setState(175);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(176);
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
		public function exiting(): Context\ExitingContext
		{
		    $localContext = new Context\ExitingContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_exiting);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(178);
		        $this->match(self::T__18);
		        $this->setState(182);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8595319872) !== 0)) {
		        	$this->setState(179);
		        	$this->statement();
		        	$this->setState(184);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(185);
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
		public function afterTimer(): Context\AfterTimerContext
		{
		    $localContext = new Context\AfterTimerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_afterTimer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(187);
		        $this->match(self::T__19);
		        $this->setState(189);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__20) {
		        	$this->setState(188);
		        	$this->match(self::T__20);
		        }
		        $this->setState(191);
		        $this->recursiveExpression(0);
		        $this->setState(192);
		        $this->timeUnit();
		        $this->setState(196);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8595319872) !== 0)) {
		        	$this->setState(193);
		        	$this->statement();
		        	$this->setState(198);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(199);
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

		    $this->enterRule($localContext, 34, self::RULE_everyTimer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(201);
		        $this->match(self::T__21);
		        $this->setState(202);
		        $this->recursiveExpression(0);
		        $this->setState(203);
		        $this->timeUnit();
		        $this->setState(207);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8595319872) !== 0)) {
		        	$this->setState(204);
		        	$this->statement();
		        	$this->setState(209);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(210);
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

		    $this->enterRule($localContext, 36, self::RULE_methodCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(214);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 22, $this->ctx)) {
		            case 1:
		        	    $this->setState(212);
		        	    $this->match(self::ID);
		        	    $this->setState(213);
		        	    $this->match(self::DOT);
		        	break;
		        }
		        $this->setState(216);
		        $this->match(self::ID);
		        $this->setState(217);
		        $this->match(self::LPAREN);
		        $this->setState(226);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1159741833216) !== 0)) {
		        	$this->setState(218);
		        	$this->recursiveExpression(0);
		        	$this->setState(223);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__3) {
		        		$this->setState(219);
		        		$this->match(self::T__3);
		        		$this->setState(220);
		        		$this->recursiveExpression(0);
		        		$this->setState(225);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(228);
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

		    $this->enterRule($localContext, 38, self::RULE_functionDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(230);
		        $this->match(self::T__22);
		        $this->setState(231);
		        $this->match(self::ID);
		        $this->setState(232);
		        $this->match(self::LPAREN);
		        $this->setState(241);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(233);
		        	$this->match(self::ID);
		        	$this->setState(238);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__3) {
		        		$this->setState(234);
		        		$this->match(self::T__3);
		        		$this->setState(235);
		        		$this->match(self::ID);
		        		$this->setState(240);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(243);
		        $this->match(self::RPAREN);
		        $this->setState(247);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8595319872) !== 0)) {
		        	$this->setState(244);
		        	$this->statement();
		        	$this->setState(249);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(250);
		        $this->match(self::T__23);
		        $this->setState(252);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(251);
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
				$this->setState(266);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx)) {
					case 1:
					    $this->setState(255);
					    $this->match(self::INT);
					break;

					case 2:
					    $this->setState(256);
					    $this->match(self::STRING);
					break;

					case 3:
					    $this->setState(257);
					    $this->match(self::ID);
					break;

					case 4:
					    $this->setState(258);
					    $this->match(self::T__24);
					break;

					case 5:
					    $this->setState(259);
					    $this->match(self::T__25);
					break;

					case 6:
					    $this->setState(260);
					    $this->attributeCall();
					break;

					case 7:
					    $this->setState(261);
					    $this->methodCall();
					break;

					case 8:
					    $this->setState(262);
					    $this->match(self::LPAREN);
					    $this->setState(263);
					    $this->recursiveExpression(0);
					    $this->setState(264);
					    $this->match(self::RPAREN);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(282);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(280);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(268);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(269);
							    $this->match(self::PLUS);
							    $this->setState(270);
							    $this->recursiveExpression(6);
							break;

							case 2:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(271);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(272);
							    $this->match(self::MINUS);
							    $this->setState(273);
							    $this->recursiveExpression(5);
							break;

							case 3:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(274);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(275);
							    $this->match(self::MULTIPLY);
							    $this->setState(276);
							    $this->recursiveExpression(4);
							break;

							case 4:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(277);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(278);
							    $this->match(self::DIVIDE);
							    $this->setState(279);
							    $this->recursiveExpression(3);
							break;
						} 
					}

					$this->setState(284);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx);
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

		    $this->enterRule($localContext, 42, self::RULE_condition);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(285);
		        $this->recursiveExpression(0);
		        $this->setState(286);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 8455716864) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(287);
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
					case 20:
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

	    public function definitions(): ?DefinitionsContext
	    {
	    	return $this->getTypedRuleContext(DefinitionsContext::class, 0);
	    }

	    /**
	     * @return array<StateContext>|StateContext|null
	     */
	    public function state(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StateContext::class);
	    	}

	        return $this->getTypedRuleContext(StateContext::class, $index);
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

	class DefinitionsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_definitions;
	    }

	    /**
	     * @return array<ParametersContext>|ParametersContext|null
	     */
	    public function parameters(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParametersContext::class);
	    	}

	        return $this->getTypedRuleContext(ParametersContext::class, $index);
	    }

	    /**
	     * @return array<AssignmentContext>|AssignmentContext|null
	     */
	    public function assignment(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AssignmentContext::class);
	    	}

	        return $this->getTypedRuleContext(AssignmentContext::class, $index);
	    }

	    /**
	     * @return array<AnimationDefContext>|AnimationDefContext|null
	     */
	    public function animationDef(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AnimationDefContext::class);
	    	}

	        return $this->getTypedRuleContext(AnimationDefContext::class, $index);
	    }

	    /**
	     * @return array<SoundDefContext>|SoundDefContext|null
	     */
	    public function soundDef(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SoundDefContext::class);
	    	}

	        return $this->getTypedRuleContext(SoundDefContext::class, $index);
	    }

	    public function transition(): ?TransitionContext
	    {
	    	return $this->getTypedRuleContext(TransitionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterDefinitions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitDefinitions($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitDefinitions($this);
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

	class StateContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_state;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

	    public function entering(): ?EnteringContext
	    {
	    	return $this->getTypedRuleContext(EnteringContext::class, 0);
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

	    public function exiting(): ?ExitingContext
	    {
	    	return $this->getTypedRuleContext(ExitingContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterState($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitState($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitState($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TransitionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_transition;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterTransition($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitTransition($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitTransition($this);
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

	    public function animationDef(): ?AnimationDefContext
	    {
	    	return $this->getTypedRuleContext(AnimationDefContext::class, 0);
	    }

	    public function soundDef(): ?SoundDefContext
	    {
	    	return $this->getTypedRuleContext(SoundDefContext::class, 0);
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

	    public function transition(): ?TransitionContext
	    {
	    	return $this->getTypedRuleContext(TransitionContext::class, 0);
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

	class AnimationDefContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_animationDef;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterAnimationDef($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitAnimationDef($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitAnimationDef($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SoundDefContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_soundDef;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->enterSoundDef($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitSoundDef($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitSoundDef($this);
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

	class EnteringContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_entering;
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
			    $listener->enterEntering($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitEntering($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitEntering($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExitingContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_exiting;
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
			    $listener->enterExiting($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitExiting($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitExiting($this);
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

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::INT, 0);
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

	    public function PLUS(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::PLUS, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::MINUS, 0);
	    }

	    public function MULTIPLY(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::MULTIPLY, 0);
	    }

	    public function DIVIDE(): ?TerminalNode
	    {
	        return $this->getToken(GameLangParser::DIVIDE, 0);
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

	class ConditionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GameLangParser::RULE_condition;
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
			    $listener->enterCondition($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GameLangListener) {
			    $listener->exitCondition($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GameLangVisitor) {
			    return $visitor->visitCondition($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}