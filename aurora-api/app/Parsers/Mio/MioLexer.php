<?php

/*
 * Generated from Mio.g4 by ANTLR 4.13.1
 */

namespace App\Parsers\Mio {
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

	final class MioLexer extends Lexer
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, ID = 17, 
               STRING = 18, INT = 19, PLUS = 20, MINUS = 21, MULTIPLY = 22, 
               DIVIDE = 23, LPAREN = 24, RPAREN = 25, WS = 26;

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
			'T__0', 'T__1', 'T__2', 'T__3', 'T__4', 'T__5', 'T__6', 'T__7', 'T__8', 
			'T__9', 'T__10', 'T__11', 'T__12', 'T__13', 'T__14', 'T__15', 'ID', 'STRING', 
			'INT', 'PLUS', 'MINUS', 'MULTIPLY', 'DIVIDE', 'LPAREN', 'RPAREN', 'WS'
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
			[4, 0, 26, 160, 6, -1, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 
		    2, 4, 7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 
		    7, 9, 2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 
		    7, 14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 
		    19, 7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 
		    2, 24, 7, 24, 2, 25, 7, 25, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 
		    1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 
		    3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 
		    5, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 
		    7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 9, 1, 
		    9, 1, 10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 11, 1, 12, 1, 12, 1, 13, 
		    1, 13, 1, 13, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 16, 1, 16, 5, 
		    16, 123, 8, 16, 10, 16, 12, 16, 126, 9, 16, 1, 17, 1, 17, 5, 17, 130, 
		    8, 17, 10, 17, 12, 17, 133, 9, 17, 1, 17, 1, 17, 1, 18, 4, 18, 138, 
		    8, 18, 11, 18, 12, 18, 139, 1, 19, 1, 19, 1, 20, 1, 20, 1, 21, 1, 
		    21, 1, 22, 1, 22, 1, 23, 1, 23, 1, 24, 1, 24, 1, 25, 4, 25, 155, 8, 
		    25, 11, 25, 12, 25, 156, 1, 25, 1, 25, 0, 0, 26, 1, 1, 3, 2, 5, 3, 
		    7, 4, 9, 5, 11, 6, 13, 7, 15, 8, 17, 9, 19, 10, 21, 11, 23, 12, 25, 
		    13, 27, 14, 29, 15, 31, 16, 33, 17, 35, 18, 37, 19, 39, 20, 41, 21, 
		    43, 22, 45, 23, 47, 24, 49, 25, 51, 26, 1, 0, 5, 3, 0, 65, 90, 95, 
		    95, 97, 122, 4, 0, 48, 57, 65, 90, 95, 95, 97, 122, 1, 0, 34, 34, 
		    1, 0, 48, 57, 3, 0, 9, 10, 13, 13, 32, 32, 163, 0, 1, 1, 0, 0, 0, 
		    0, 3, 1, 0, 0, 0, 0, 5, 1, 0, 0, 0, 0, 7, 1, 0, 0, 0, 0, 9, 1, 0, 
		    0, 0, 0, 11, 1, 0, 0, 0, 0, 13, 1, 0, 0, 0, 0, 15, 1, 0, 0, 0, 0, 
		    17, 1, 0, 0, 0, 0, 19, 1, 0, 0, 0, 0, 21, 1, 0, 0, 0, 0, 23, 1, 0, 
		    0, 0, 0, 25, 1, 0, 0, 0, 0, 27, 1, 0, 0, 0, 0, 29, 1, 0, 0, 0, 0, 
		    31, 1, 0, 0, 0, 0, 33, 1, 0, 0, 0, 0, 35, 1, 0, 0, 0, 0, 37, 1, 0, 
		    0, 0, 0, 39, 1, 0, 0, 0, 0, 41, 1, 0, 0, 0, 0, 43, 1, 0, 0, 0, 0, 
		    45, 1, 0, 0, 0, 0, 47, 1, 0, 0, 0, 0, 49, 1, 0, 0, 0, 0, 51, 1, 0, 
		    0, 0, 1, 53, 1, 0, 0, 0, 3, 59, 1, 0, 0, 0, 5, 61, 1, 0, 0, 0, 7, 
		    67, 1, 0, 0, 0, 9, 75, 1, 0, 0, 0, 11, 81, 1, 0, 0, 0, 13, 85, 1, 
		    0, 0, 0, 15, 88, 1, 0, 0, 0, 17, 97, 1, 0, 0, 0, 19, 102, 1, 0, 0, 
		    0, 21, 104, 1, 0, 0, 0, 23, 107, 1, 0, 0, 0, 25, 110, 1, 0, 0, 0, 
		    27, 112, 1, 0, 0, 0, 29, 115, 1, 0, 0, 0, 31, 117, 1, 0, 0, 0, 33, 
		    120, 1, 0, 0, 0, 35, 127, 1, 0, 0, 0, 37, 137, 1, 0, 0, 0, 39, 141, 
		    1, 0, 0, 0, 41, 143, 1, 0, 0, 0, 43, 145, 1, 0, 0, 0, 45, 147, 1, 
		    0, 0, 0, 47, 149, 1, 0, 0, 0, 49, 151, 1, 0, 0, 0, 51, 154, 1, 0, 
		    0, 0, 53, 54, 5, 109, 0, 0, 54, 55, 5, 111, 0, 0, 55, 56, 5, 118, 
		    0, 0, 56, 57, 5, 101, 0, 0, 57, 58, 5, 114, 0, 0, 58, 2, 1, 0, 0, 
		    0, 59, 60, 5, 97, 0, 0, 60, 4, 1, 0, 0, 0, 61, 62, 5, 116, 0, 0, 62, 
		    63, 5, 111, 0, 0, 63, 64, 5, 109, 0, 0, 64, 65, 5, 97, 0, 0, 65, 66, 
		    5, 114, 0, 0, 66, 6, 1, 0, 0, 0, 67, 68, 5, 114, 0, 0, 68, 69, 5, 
		    101, 0, 0, 69, 70, 5, 112, 0, 0, 70, 71, 5, 101, 0, 0, 71, 72, 5, 
		    116, 0, 0, 72, 73, 5, 105, 0, 0, 73, 74, 5, 114, 0, 0, 74, 8, 1, 0, 
		    0, 0, 75, 76, 5, 118, 0, 0, 76, 77, 5, 101, 0, 0, 77, 78, 5, 99, 0, 
		    0, 78, 79, 5, 101, 0, 0, 79, 80, 5, 115, 0, 0, 80, 10, 1, 0, 0, 0, 
		    81, 82, 5, 102, 0, 0, 82, 83, 5, 105, 0, 0, 83, 84, 5, 110, 0, 0, 
		    84, 12, 1, 0, 0, 0, 85, 86, 5, 115, 0, 0, 86, 87, 5, 105, 0, 0, 87, 
		    14, 1, 0, 0, 0, 88, 89, 5, 101, 0, 0, 89, 90, 5, 110, 0, 0, 90, 91, 
		    5, 116, 0, 0, 91, 92, 5, 111, 0, 0, 92, 93, 5, 110, 0, 0, 93, 94, 
		    5, 99, 0, 0, 94, 95, 5, 101, 0, 0, 95, 96, 5, 115, 0, 0, 96, 16, 1, 
		    0, 0, 0, 97, 98, 5, 115, 0, 0, 98, 99, 5, 105, 0, 0, 99, 100, 5, 110, 
		    0, 0, 100, 101, 5, 111, 0, 0, 101, 18, 1, 0, 0, 0, 102, 103, 5, 61, 
		    0, 0, 103, 20, 1, 0, 0, 0, 104, 105, 5, 61, 0, 0, 105, 106, 5, 61, 
		    0, 0, 106, 22, 1, 0, 0, 0, 107, 108, 5, 33, 0, 0, 108, 109, 5, 61, 
		    0, 0, 109, 24, 1, 0, 0, 0, 110, 111, 5, 60, 0, 0, 111, 26, 1, 0, 0, 
		    0, 112, 113, 5, 60, 0, 0, 113, 114, 5, 61, 0, 0, 114, 28, 1, 0, 0, 
		    0, 115, 116, 5, 62, 0, 0, 116, 30, 1, 0, 0, 0, 117, 118, 5, 62, 0, 
		    0, 118, 119, 5, 61, 0, 0, 119, 32, 1, 0, 0, 0, 120, 124, 7, 0, 0, 
		    0, 121, 123, 7, 1, 0, 0, 122, 121, 1, 0, 0, 0, 123, 126, 1, 0, 0, 
		    0, 124, 122, 1, 0, 0, 0, 124, 125, 1, 0, 0, 0, 125, 34, 1, 0, 0, 0, 
		    126, 124, 1, 0, 0, 0, 127, 131, 5, 34, 0, 0, 128, 130, 8, 2, 0, 0, 
		    129, 128, 1, 0, 0, 0, 130, 133, 1, 0, 0, 0, 131, 129, 1, 0, 0, 0, 
		    131, 132, 1, 0, 0, 0, 132, 134, 1, 0, 0, 0, 133, 131, 1, 0, 0, 0, 
		    134, 135, 5, 34, 0, 0, 135, 36, 1, 0, 0, 0, 136, 138, 7, 3, 0, 0, 
		    137, 136, 1, 0, 0, 0, 138, 139, 1, 0, 0, 0, 139, 137, 1, 0, 0, 0, 
		    139, 140, 1, 0, 0, 0, 140, 38, 1, 0, 0, 0, 141, 142, 5, 43, 0, 0, 
		    142, 40, 1, 0, 0, 0, 143, 144, 5, 45, 0, 0, 144, 42, 1, 0, 0, 0, 145, 
		    146, 5, 42, 0, 0, 146, 44, 1, 0, 0, 0, 147, 148, 5, 47, 0, 0, 148, 
		    46, 1, 0, 0, 0, 149, 150, 5, 40, 0, 0, 150, 48, 1, 0, 0, 0, 151, 152, 
		    5, 41, 0, 0, 152, 50, 1, 0, 0, 0, 153, 155, 7, 4, 0, 0, 154, 153, 
		    1, 0, 0, 0, 155, 156, 1, 0, 0, 0, 156, 154, 1, 0, 0, 0, 156, 157, 
		    1, 0, 0, 0, 157, 158, 1, 0, 0, 0, 158, 159, 6, 25, 0, 0, 159, 52, 
		    1, 0, 0, 0, 5, 0, 124, 131, 139, 156, 1, 6, 0, 0];
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
			return 'Mio.g4';
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