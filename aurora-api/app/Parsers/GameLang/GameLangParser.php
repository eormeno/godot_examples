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
               T__27 = 28, T__28 = 29, T__29 = 30, T__30 = 31, ID = 32, 
               STRING = 33, INT = 34, PLUS = 35, MINUS = 36, MULTIPLY = 37, 
               DIVIDE = 38, LPAREN = 39, RPAREN = 40, DOT = 41, EQUAL = 42, 
               WS = 43;

		public const RULE_program = 0, RULE_character = 1, RULE_definitions = 2, 
               RULE_state = 3, RULE_transition = 4, RULE_timeUnit = 5, RULE_statement = 6, 
               RULE_whileStatement = 7, RULE_ifStatement = 8, RULE_assignment = 9, 
               RULE_animationDef = 10, RULE_soundDef = 11, RULE_attributeCall = 12, 
               RULE_entering = 13, RULE_exiting = 14, RULE_afterTimer = 15, 
               RULE_everyTimer = 16, RULE_methodCall = 17, RULE_functionDef = 18, 
               RULE_expression = 19, RULE_condition = 20;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'character', 'definitions', 'state', 'transition', 'timeUnit', 
			'statement', 'whileStatement', 'ifStatement', 'assignment', 'animationDef', 
			'soundDef', 'attributeCall', 'entering', 'exiting', 'afterTimer', 'everyTimer', 
			'methodCall', 'functionDef', 'expression', 'condition'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PERSONAJE'", "'FIN'", "'ESTA'", "'ESTARA'", "'SEGUNDOS'", 
		    "'MILISEGUNDOS'", "'MINUTOS'", "'MIENTRAS'", "'SI'", "'SINO'", "'ANIMACION'", 
		    "'ACTUAL'", "'REPRODUCIR'", "'DETENER'", "'SONIDO'", "'ENTRANDO'", 
		    "'SALIENDO'", "'LUEGO'", "'DE'", "'CADA'", "','", "'FUNCION'", "'RETORNAR'", 
		    "'NULO'", "'NULA'", "'=='", "'!='", "'<'", "'<='", "'>'", "'>='", 
		    null, null, null, "'+'", "'-'", "'*'", "'/'", "'('", "')'", "'.'", 
		    "'='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, "ID", 
		    "STRING", "INT", "PLUS", "MINUS", "MULTIPLY", "DIVIDE", "LPAREN", 
		    "RPAREN", "DOT", "EQUAL", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 43, 276, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 1, 0, 4, 0, 44, 8, 0, 11, 0, 12, 0, 45, 1, 1, 
		    1, 1, 1, 1, 1, 1, 5, 1, 52, 8, 1, 10, 1, 12, 1, 55, 9, 1, 1, 1, 5, 
		    1, 58, 8, 1, 10, 1, 12, 1, 61, 9, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 
		    5, 2, 68, 8, 2, 10, 2, 12, 2, 71, 9, 2, 1, 2, 3, 2, 74, 8, 2, 1, 3, 
		    1, 3, 1, 3, 3, 3, 79, 8, 3, 1, 3, 5, 3, 82, 8, 3, 10, 3, 12, 3, 85, 
		    9, 3, 1, 3, 3, 3, 88, 8, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 5, 1, 
		    5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 3, 6, 106, 
		    8, 6, 1, 7, 1, 7, 1, 7, 5, 7, 111, 8, 7, 10, 7, 12, 7, 114, 9, 7, 
		    1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 5, 8, 121, 8, 8, 10, 8, 12, 8, 124, 
		    9, 8, 1, 8, 1, 8, 5, 8, 128, 8, 8, 10, 8, 12, 8, 131, 9, 8, 3, 8, 
		    133, 8, 8, 1, 8, 1, 8, 1, 9, 1, 9, 3, 9, 139, 8, 9, 1, 9, 1, 9, 1, 
		    9, 1, 10, 1, 10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 12, 
		    1, 12, 1, 12, 1, 12, 1, 13, 1, 13, 5, 13, 158, 8, 13, 10, 13, 12, 
		    13, 161, 9, 13, 1, 13, 1, 13, 1, 14, 1, 14, 5, 14, 167, 8, 14, 10, 
		    14, 12, 14, 170, 9, 14, 1, 14, 1, 14, 1, 15, 1, 15, 3, 15, 176, 8, 
		    15, 1, 15, 1, 15, 1, 15, 5, 15, 181, 8, 15, 10, 15, 12, 15, 184, 9, 
		    15, 1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 1, 16, 5, 16, 192, 8, 16, 10, 
		    16, 12, 16, 195, 9, 16, 1, 16, 1, 16, 1, 17, 1, 17, 3, 17, 201, 8, 
		    17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 5, 17, 208, 8, 17, 10, 17, 
		    12, 17, 211, 9, 17, 3, 17, 213, 8, 17, 1, 17, 1, 17, 1, 18, 1, 18, 
		    1, 18, 1, 18, 1, 18, 1, 18, 5, 18, 223, 8, 18, 10, 18, 12, 18, 226, 
		    9, 18, 3, 18, 228, 8, 18, 1, 18, 1, 18, 5, 18, 232, 8, 18, 10, 18, 
		    12, 18, 235, 9, 18, 1, 18, 1, 18, 3, 18, 239, 8, 18, 1, 19, 1, 19, 
		    1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 
		    19, 3, 19, 253, 8, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 
		    19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 5, 19, 267, 8, 19, 10, 19, 
		    12, 19, 270, 9, 19, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 0, 1, 38, 21, 
		    0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 
		    36, 38, 40, 0, 4, 1, 0, 5, 7, 2, 0, 12, 12, 32, 32, 1, 0, 13, 14, 
		    1, 0, 26, 31, 300, 0, 43, 1, 0, 0, 0, 2, 47, 1, 0, 0, 0, 4, 69, 1, 
		    0, 0, 0, 6, 75, 1, 0, 0, 0, 8, 91, 1, 0, 0, 0, 10, 94, 1, 0, 0, 0, 
		    12, 105, 1, 0, 0, 0, 14, 107, 1, 0, 0, 0, 16, 117, 1, 0, 0, 0, 18, 
		    138, 1, 0, 0, 0, 20, 143, 1, 0, 0, 0, 22, 147, 1, 0, 0, 0, 24, 151, 
		    1, 0, 0, 0, 26, 155, 1, 0, 0, 0, 28, 164, 1, 0, 0, 0, 30, 173, 1, 
		    0, 0, 0, 32, 187, 1, 0, 0, 0, 34, 200, 1, 0, 0, 0, 36, 216, 1, 0, 
		    0, 0, 38, 252, 1, 0, 0, 0, 40, 271, 1, 0, 0, 0, 42, 44, 3, 2, 1, 0, 
		    43, 42, 1, 0, 0, 0, 44, 45, 1, 0, 0, 0, 45, 43, 1, 0, 0, 0, 45, 46, 
		    1, 0, 0, 0, 46, 1, 1, 0, 0, 0, 47, 48, 5, 1, 0, 0, 48, 49, 5, 32, 
		    0, 0, 49, 53, 3, 4, 2, 0, 50, 52, 3, 6, 3, 0, 51, 50, 1, 0, 0, 0, 
		    52, 55, 1, 0, 0, 0, 53, 51, 1, 0, 0, 0, 53, 54, 1, 0, 0, 0, 54, 59, 
		    1, 0, 0, 0, 55, 53, 1, 0, 0, 0, 56, 58, 3, 36, 18, 0, 57, 56, 1, 0, 
		    0, 0, 58, 61, 1, 0, 0, 0, 59, 57, 1, 0, 0, 0, 59, 60, 1, 0, 0, 0, 
		    60, 62, 1, 0, 0, 0, 61, 59, 1, 0, 0, 0, 62, 63, 5, 2, 0, 0, 63, 3, 
		    1, 0, 0, 0, 64, 68, 3, 18, 9, 0, 65, 68, 3, 20, 10, 0, 66, 68, 3, 
		    22, 11, 0, 67, 64, 1, 0, 0, 0, 67, 65, 1, 0, 0, 0, 67, 66, 1, 0, 0, 
		    0, 68, 71, 1, 0, 0, 0, 69, 67, 1, 0, 0, 0, 69, 70, 1, 0, 0, 0, 70, 
		    73, 1, 0, 0, 0, 71, 69, 1, 0, 0, 0, 72, 74, 3, 8, 4, 0, 73, 72, 1, 
		    0, 0, 0, 73, 74, 1, 0, 0, 0, 74, 5, 1, 0, 0, 0, 75, 76, 5, 3, 0, 0, 
		    76, 78, 5, 32, 0, 0, 77, 79, 3, 26, 13, 0, 78, 77, 1, 0, 0, 0, 78, 
		    79, 1, 0, 0, 0, 79, 83, 1, 0, 0, 0, 80, 82, 3, 12, 6, 0, 81, 80, 1, 
		    0, 0, 0, 82, 85, 1, 0, 0, 0, 83, 81, 1, 0, 0, 0, 83, 84, 1, 0, 0, 
		    0, 84, 87, 1, 0, 0, 0, 85, 83, 1, 0, 0, 0, 86, 88, 3, 28, 14, 0, 87, 
		    86, 1, 0, 0, 0, 87, 88, 1, 0, 0, 0, 88, 89, 1, 0, 0, 0, 89, 90, 5, 
		    2, 0, 0, 90, 7, 1, 0, 0, 0, 91, 92, 5, 4, 0, 0, 92, 93, 5, 32, 0, 
		    0, 93, 9, 1, 0, 0, 0, 94, 95, 7, 0, 0, 0, 95, 11, 1, 0, 0, 0, 96, 
		    106, 3, 14, 7, 0, 97, 106, 3, 16, 8, 0, 98, 106, 3, 18, 9, 0, 99, 
		    106, 3, 20, 10, 0, 100, 106, 3, 22, 11, 0, 101, 106, 3, 34, 17, 0, 
		    102, 106, 3, 30, 15, 0, 103, 106, 3, 32, 16, 0, 104, 106, 3, 8, 4, 
		    0, 105, 96, 1, 0, 0, 0, 105, 97, 1, 0, 0, 0, 105, 98, 1, 0, 0, 0, 
		    105, 99, 1, 0, 0, 0, 105, 100, 1, 0, 0, 0, 105, 101, 1, 0, 0, 0, 105, 
		    102, 1, 0, 0, 0, 105, 103, 1, 0, 0, 0, 105, 104, 1, 0, 0, 0, 106, 
		    13, 1, 0, 0, 0, 107, 108, 5, 8, 0, 0, 108, 112, 3, 40, 20, 0, 109, 
		    111, 3, 12, 6, 0, 110, 109, 1, 0, 0, 0, 111, 114, 1, 0, 0, 0, 112, 
		    110, 1, 0, 0, 0, 112, 113, 1, 0, 0, 0, 113, 115, 1, 0, 0, 0, 114, 
		    112, 1, 0, 0, 0, 115, 116, 5, 2, 0, 0, 116, 15, 1, 0, 0, 0, 117, 118, 
		    5, 9, 0, 0, 118, 122, 3, 40, 20, 0, 119, 121, 3, 12, 6, 0, 120, 119, 
		    1, 0, 0, 0, 121, 124, 1, 0, 0, 0, 122, 120, 1, 0, 0, 0, 122, 123, 
		    1, 0, 0, 0, 123, 132, 1, 0, 0, 0, 124, 122, 1, 0, 0, 0, 125, 129, 
		    5, 10, 0, 0, 126, 128, 3, 12, 6, 0, 127, 126, 1, 0, 0, 0, 128, 131, 
		    1, 0, 0, 0, 129, 127, 1, 0, 0, 0, 129, 130, 1, 0, 0, 0, 130, 133, 
		    1, 0, 0, 0, 131, 129, 1, 0, 0, 0, 132, 125, 1, 0, 0, 0, 132, 133, 
		    1, 0, 0, 0, 133, 134, 1, 0, 0, 0, 134, 135, 5, 2, 0, 0, 135, 17, 1, 
		    0, 0, 0, 136, 139, 5, 32, 0, 0, 137, 139, 3, 24, 12, 0, 138, 136, 
		    1, 0, 0, 0, 138, 137, 1, 0, 0, 0, 139, 140, 1, 0, 0, 0, 140, 141, 
		    5, 42, 0, 0, 141, 142, 3, 38, 19, 0, 142, 19, 1, 0, 0, 0, 143, 144, 
		    5, 11, 0, 0, 144, 145, 7, 1, 0, 0, 145, 146, 7, 2, 0, 0, 146, 21, 
		    1, 0, 0, 0, 147, 148, 5, 15, 0, 0, 148, 149, 7, 1, 0, 0, 149, 150, 
		    7, 2, 0, 0, 150, 23, 1, 0, 0, 0, 151, 152, 5, 32, 0, 0, 152, 153, 
		    5, 41, 0, 0, 153, 154, 5, 32, 0, 0, 154, 25, 1, 0, 0, 0, 155, 159, 
		    5, 16, 0, 0, 156, 158, 3, 12, 6, 0, 157, 156, 1, 0, 0, 0, 158, 161, 
		    1, 0, 0, 0, 159, 157, 1, 0, 0, 0, 159, 160, 1, 0, 0, 0, 160, 162, 
		    1, 0, 0, 0, 161, 159, 1, 0, 0, 0, 162, 163, 5, 2, 0, 0, 163, 27, 1, 
		    0, 0, 0, 164, 168, 5, 17, 0, 0, 165, 167, 3, 12, 6, 0, 166, 165, 1, 
		    0, 0, 0, 167, 170, 1, 0, 0, 0, 168, 166, 1, 0, 0, 0, 168, 169, 1, 
		    0, 0, 0, 169, 171, 1, 0, 0, 0, 170, 168, 1, 0, 0, 0, 171, 172, 5, 
		    2, 0, 0, 172, 29, 1, 0, 0, 0, 173, 175, 5, 18, 0, 0, 174, 176, 5, 
		    19, 0, 0, 175, 174, 1, 0, 0, 0, 175, 176, 1, 0, 0, 0, 176, 177, 1, 
		    0, 0, 0, 177, 178, 3, 38, 19, 0, 178, 182, 3, 10, 5, 0, 179, 181, 
		    3, 12, 6, 0, 180, 179, 1, 0, 0, 0, 181, 184, 1, 0, 0, 0, 182, 180, 
		    1, 0, 0, 0, 182, 183, 1, 0, 0, 0, 183, 185, 1, 0, 0, 0, 184, 182, 
		    1, 0, 0, 0, 185, 186, 5, 2, 0, 0, 186, 31, 1, 0, 0, 0, 187, 188, 5, 
		    20, 0, 0, 188, 189, 3, 38, 19, 0, 189, 193, 3, 10, 5, 0, 190, 192, 
		    3, 12, 6, 0, 191, 190, 1, 0, 0, 0, 192, 195, 1, 0, 0, 0, 193, 191, 
		    1, 0, 0, 0, 193, 194, 1, 0, 0, 0, 194, 196, 1, 0, 0, 0, 195, 193, 
		    1, 0, 0, 0, 196, 197, 5, 2, 0, 0, 197, 33, 1, 0, 0, 0, 198, 199, 5, 
		    32, 0, 0, 199, 201, 5, 41, 0, 0, 200, 198, 1, 0, 0, 0, 200, 201, 1, 
		    0, 0, 0, 201, 202, 1, 0, 0, 0, 202, 203, 5, 32, 0, 0, 203, 212, 5, 
		    39, 0, 0, 204, 209, 3, 38, 19, 0, 205, 206, 5, 21, 0, 0, 206, 208, 
		    3, 38, 19, 0, 207, 205, 1, 0, 0, 0, 208, 211, 1, 0, 0, 0, 209, 207, 
		    1, 0, 0, 0, 209, 210, 1, 0, 0, 0, 210, 213, 1, 0, 0, 0, 211, 209, 
		    1, 0, 0, 0, 212, 204, 1, 0, 0, 0, 212, 213, 1, 0, 0, 0, 213, 214, 
		    1, 0, 0, 0, 214, 215, 5, 40, 0, 0, 215, 35, 1, 0, 0, 0, 216, 217, 
		    5, 22, 0, 0, 217, 218, 5, 32, 0, 0, 218, 227, 5, 39, 0, 0, 219, 224, 
		    5, 32, 0, 0, 220, 221, 5, 21, 0, 0, 221, 223, 5, 32, 0, 0, 222, 220, 
		    1, 0, 0, 0, 223, 226, 1, 0, 0, 0, 224, 222, 1, 0, 0, 0, 224, 225, 
		    1, 0, 0, 0, 225, 228, 1, 0, 0, 0, 226, 224, 1, 0, 0, 0, 227, 219, 
		    1, 0, 0, 0, 227, 228, 1, 0, 0, 0, 228, 229, 1, 0, 0, 0, 229, 233, 
		    5, 40, 0, 0, 230, 232, 3, 12, 6, 0, 231, 230, 1, 0, 0, 0, 232, 235, 
		    1, 0, 0, 0, 233, 231, 1, 0, 0, 0, 233, 234, 1, 0, 0, 0, 234, 236, 
		    1, 0, 0, 0, 235, 233, 1, 0, 0, 0, 236, 238, 5, 23, 0, 0, 237, 239, 
		    5, 32, 0, 0, 238, 237, 1, 0, 0, 0, 238, 239, 1, 0, 0, 0, 239, 37, 
		    1, 0, 0, 0, 240, 241, 6, 19, -1, 0, 241, 253, 5, 34, 0, 0, 242, 253, 
		    5, 33, 0, 0, 243, 253, 5, 32, 0, 0, 244, 253, 5, 24, 0, 0, 245, 253, 
		    5, 25, 0, 0, 246, 253, 3, 24, 12, 0, 247, 253, 3, 34, 17, 0, 248, 
		    249, 5, 39, 0, 0, 249, 250, 3, 38, 19, 0, 250, 251, 5, 40, 0, 0, 251, 
		    253, 1, 0, 0, 0, 252, 240, 1, 0, 0, 0, 252, 242, 1, 0, 0, 0, 252, 
		    243, 1, 0, 0, 0, 252, 244, 1, 0, 0, 0, 252, 245, 1, 0, 0, 0, 252, 
		    246, 1, 0, 0, 0, 252, 247, 1, 0, 0, 0, 252, 248, 1, 0, 0, 0, 253, 
		    268, 1, 0, 0, 0, 254, 255, 10, 5, 0, 0, 255, 256, 5, 35, 0, 0, 256, 
		    267, 3, 38, 19, 6, 257, 258, 10, 4, 0, 0, 258, 259, 5, 36, 0, 0, 259, 
		    267, 3, 38, 19, 5, 260, 261, 10, 3, 0, 0, 261, 262, 5, 37, 0, 0, 262, 
		    267, 3, 38, 19, 4, 263, 264, 10, 2, 0, 0, 264, 265, 5, 38, 0, 0, 265, 
		    267, 3, 38, 19, 3, 266, 254, 1, 0, 0, 0, 266, 257, 1, 0, 0, 0, 266, 
		    260, 1, 0, 0, 0, 266, 263, 1, 0, 0, 0, 267, 270, 1, 0, 0, 0, 268, 
		    266, 1, 0, 0, 0, 268, 269, 1, 0, 0, 0, 269, 39, 1, 0, 0, 0, 270, 268, 
		    1, 0, 0, 0, 271, 272, 3, 38, 19, 0, 272, 273, 7, 3, 0, 0, 273, 274, 
		    3, 38, 19, 0, 274, 41, 1, 0, 0, 0, 30, 45, 53, 59, 67, 69, 73, 78, 
		    83, 87, 105, 112, 122, 129, 132, 138, 159, 168, 175, 182, 193, 200, 
		    209, 212, 224, 227, 233, 238, 252, 266, 268];
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
		        $this->match(self::T__0);
		        $this->setState(48);
		        $this->match(self::ID);

		        $this->setState(49);
		        $this->definitions();
		        $this->setState(53);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(50);
		        	$this->state();
		        	$this->setState(55);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(59);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__21) {
		        	$this->setState(56);
		        	$this->functionDef();
		        	$this->setState(61);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(62);
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
		        $this->setState(69);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4295002112) !== 0)) {
		        	$this->setState(67);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::ID:
		        	    	$this->setState(64);
		        	    	$this->assignment();
		        	    	break;

		        	    case self::T__10:
		        	    	$this->setState(65);
		        	    	$this->animationDef();
		        	    	break;

		        	    case self::T__14:
		        	    	$this->setState(66);
		        	    	$this->soundDef();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(71);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(73);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__3) {
		        	$this->setState(72);
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
		public function state(): Context\StateContext
		{
		    $localContext = new Context\StateContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_state);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(75);
		        $this->match(self::T__2);
		        $this->setState(76);
		        $this->match(self::ID);
		        $this->setState(78);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__15) {
		        	$this->setState(77);
		        	$this->entering();
		        }
		        $this->setState(83);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4296313616) !== 0)) {
		        	$this->setState(80);
		        	$this->statement();
		        	$this->setState(85);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(87);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__16) {
		        	$this->setState(86);
		        	$this->exiting();
		        }
		        $this->setState(89);
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

		    $this->enterRule($localContext, 8, self::RULE_transition);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(91);
		        $this->match(self::T__3);
		        $this->setState(92);
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

		    $this->enterRule($localContext, 10, self::RULE_timeUnit);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(94);

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

		    $this->enterRule($localContext, 12, self::RULE_statement);

		    try {
		        $this->setState(105);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(96);
		        	    $this->whileStatement();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(97);
		        	    $this->ifStatement();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(98);
		        	    $this->assignment();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(99);
		        	    $this->animationDef();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(100);
		        	    $this->soundDef();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(101);
		        	    $this->methodCall();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(102);
		        	    $this->afterTimer();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(103);
		        	    $this->everyTimer();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(104);
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

		    $this->enterRule($localContext, 14, self::RULE_whileStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(107);
		        $this->match(self::T__7);
		        $this->setState(108);
		        $this->condition();
		        $this->setState(112);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4296313616) !== 0)) {
		        	$this->setState(109);
		        	$this->statement();
		        	$this->setState(114);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(115);
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

		    $this->enterRule($localContext, 16, self::RULE_ifStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(117);
		        $this->match(self::T__8);
		        $this->setState(118);
		        $this->condition();
		        $this->setState(122);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4296313616) !== 0)) {
		        	$this->setState(119);
		        	$this->statement();
		        	$this->setState(124);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(132);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__9) {
		        	$this->setState(125);
		        	$this->match(self::T__9);
		        	$this->setState(129);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4296313616) !== 0)) {
		        		$this->setState(126);
		        		$this->statement();
		        		$this->setState(131);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(134);
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

		    $this->enterRule($localContext, 18, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(138);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx)) {
		        	case 1:
		        	    $this->setState(136);
		        	    $this->match(self::ID);
		        	break;

		        	case 2:
		        	    $this->setState(137);
		        	    $this->attributeCall();
		        	break;
		        }
		        $this->setState(140);
		        $this->match(self::EQUAL);
		        $this->setState(141);
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

		    $this->enterRule($localContext, 20, self::RULE_animationDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(143);
		        $this->match(self::T__10);
		        $this->setState(144);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__11 || $_la === self::ID)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(145);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__12 || $_la === self::T__13)) {
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

		    $this->enterRule($localContext, 22, self::RULE_soundDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(147);
		        $this->match(self::T__14);
		        $this->setState(148);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__11 || $_la === self::ID)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(149);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__12 || $_la === self::T__13)) {
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

		    $this->enterRule($localContext, 24, self::RULE_attributeCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(151);
		        $this->match(self::ID);
		        $this->setState(152);
		        $this->match(self::DOT);
		        $this->setState(153);
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

		    $this->enterRule($localContext, 26, self::RULE_entering);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(155);
		        $this->match(self::T__15);
		        $this->setState(159);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4296313616) !== 0)) {
		        	$this->setState(156);
		        	$this->statement();
		        	$this->setState(161);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(162);
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

		    $this->enterRule($localContext, 28, self::RULE_exiting);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(164);
		        $this->match(self::T__16);
		        $this->setState(168);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4296313616) !== 0)) {
		        	$this->setState(165);
		        	$this->statement();
		        	$this->setState(170);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(171);
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

		    $this->enterRule($localContext, 30, self::RULE_afterTimer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(173);
		        $this->match(self::T__17);
		        $this->setState(175);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__18) {
		        	$this->setState(174);
		        	$this->match(self::T__18);
		        }
		        $this->setState(177);
		        $this->recursiveExpression(0);
		        $this->setState(178);
		        $this->timeUnit();
		        $this->setState(182);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4296313616) !== 0)) {
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
		public function everyTimer(): Context\EveryTimerContext
		{
		    $localContext = new Context\EveryTimerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_everyTimer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(187);
		        $this->match(self::T__19);
		        $this->setState(188);
		        $this->recursiveExpression(0);
		        $this->setState(189);
		        $this->timeUnit();
		        $this->setState(193);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4296313616) !== 0)) {
		        	$this->setState(190);
		        	$this->statement();
		        	$this->setState(195);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(196);
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

		    $this->enterRule($localContext, 34, self::RULE_methodCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(200);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx)) {
		            case 1:
		        	    $this->setState(198);
		        	    $this->match(self::ID);
		        	    $this->setState(199);
		        	    $this->match(self::DOT);
		        	break;
		        }
		        $this->setState(202);
		        $this->match(self::ID);
		        $this->setState(203);
		        $this->match(self::LPAREN);
		        $this->setState(212);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 579870916608) !== 0)) {
		        	$this->setState(204);
		        	$this->recursiveExpression(0);
		        	$this->setState(209);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__20) {
		        		$this->setState(205);
		        		$this->match(self::T__20);
		        		$this->setState(206);
		        		$this->recursiveExpression(0);
		        		$this->setState(211);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(214);
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

		    $this->enterRule($localContext, 36, self::RULE_functionDef);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(216);
		        $this->match(self::T__21);
		        $this->setState(217);
		        $this->match(self::ID);
		        $this->setState(218);
		        $this->match(self::LPAREN);
		        $this->setState(227);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(219);
		        	$this->match(self::ID);
		        	$this->setState(224);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::T__20) {
		        		$this->setState(220);
		        		$this->match(self::T__20);
		        		$this->setState(221);
		        		$this->match(self::ID);
		        		$this->setState(226);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        }
		        $this->setState(229);
		        $this->match(self::RPAREN);
		        $this->setState(233);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4296313616) !== 0)) {
		        	$this->setState(230);
		        	$this->statement();
		        	$this->setState(235);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(236);
		        $this->match(self::T__22);
		        $this->setState(238);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(237);
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
			$startState = 38;
			$this->enterRecursionRule($localContext, 38, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(252);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
					case 1:
					    $this->setState(241);
					    $this->match(self::INT);
					break;

					case 2:
					    $this->setState(242);
					    $this->match(self::STRING);
					break;

					case 3:
					    $this->setState(243);
					    $this->match(self::ID);
					break;

					case 4:
					    $this->setState(244);
					    $this->match(self::T__23);
					break;

					case 5:
					    $this->setState(245);
					    $this->match(self::T__24);
					break;

					case 6:
					    $this->setState(246);
					    $this->attributeCall();
					break;

					case 7:
					    $this->setState(247);
					    $this->methodCall();
					break;

					case 8:
					    $this->setState(248);
					    $this->match(self::LPAREN);
					    $this->setState(249);
					    $this->recursiveExpression(0);
					    $this->setState(250);
					    $this->match(self::RPAREN);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(268);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(266);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(254);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(255);
							    $this->match(self::PLUS);
							    $this->setState(256);
							    $this->recursiveExpression(6);
							break;

							case 2:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(257);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(258);
							    $this->match(self::MINUS);
							    $this->setState(259);
							    $this->recursiveExpression(5);
							break;

							case 3:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(260);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(261);
							    $this->match(self::MULTIPLY);
							    $this->setState(262);
							    $this->recursiveExpression(4);
							break;

							case 4:
							    $localContext = new Context\ExpressionContext($parentContext, $parentState);
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(263);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(264);
							    $this->match(self::DIVIDE);
							    $this->setState(265);
							    $this->recursiveExpression(3);
							break;
						} 
					}

					$this->setState(270);
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

		/**
		 * @throws RecognitionException
		 */
		public function condition(): Context\ConditionContext
		{
		    $localContext = new Context\ConditionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_condition);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(271);
		        $this->recursiveExpression(0);
		        $this->setState(272);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4227858432) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(273);
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
					case 19:
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