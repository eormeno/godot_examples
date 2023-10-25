<?php

namespace App\Parsers\GameLang;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Antlr\Antlr4\Runtime\Recognizer;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\Error\Exceptions\ParseCancellationException;

class MyErrorListener extends DiagnosticErrorListener
{
    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $e
    ): void {
        // echo the error and the line
        echo "Error: " . $msg . " on line " . $line . "\n";
        // throw new ParseCancellationException($msg, 0, $e);
    }
}

class GameLangSpecificVisitor extends GameLangBaseVisitor
{
    public function visitDefinitions(Context\DefinitionsContext $context)
    {
        echo "Definitions:\n";
        foreach ($context->children as $definition) {
            $childCount = $definition->getChildCount();
            if ($childCount == 1) {
                echo "\t" . $definition->getText() . "\n";
                continue;
            } elseif ($childCount == 2) {
                $name = $definition->getChild(0)->getText();
                $value = $definition->getChild(1)->getText();
                echo "\t" . $name . " " . $value . "\n";
                continue;
            } else {
                $name = $definition->getChild(0)->getText();
                $value = $definition->getChild(2)->getText();
                echo "\t" . $name . " = " . $value . "\n";
            }
        }
    }
}

$input = InputStream::fromPath("example.gl");
$lexer = new GameLangLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new GameLangParser($tokens);
$parser->addErrorListener(new MyErrorListener());
$tree = $parser->program();
$visitor = new GameLangSpecificVisitor();
$visitor->visit($tree);
