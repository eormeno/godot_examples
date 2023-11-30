<?php

namespace App\Parsers\GameLang;

use Antlr\Antlr4\Runtime\Recognizer;
use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;

class GameLangErrorListener extends DiagnosticErrorListener
{
    private $errors = [];

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $e
    ): void {
        $this->errors[] = [
            'line' => $line,
            'char' => $charPositionInLine,
            'message' => $msg
        ];
    }
}
