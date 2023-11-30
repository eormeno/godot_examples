<?php

namespace App\Parsers\Vba;

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

final class TreeShapeListener extends VbaTreeListenerBase {
    public function visitTerminal(TerminalNode $node) : void {
    }
}

class MyErrorListener extends DiagnosticErrorListener {
    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $e
    ) : void {
        // echo the error and the line
        echo "Error: " . $msg . " on line " . $line . "\n";
        // throw new ParseCancellationException($msg, 0, $e);
    }
}

$input = InputStream::fromPath("example1.bas");
$lexer = new vbaLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new vbaParser($tokens);
$parser->addErrorListener(new MyErrorListener());
$tree = $parser->startRule();
$ruleNames = $parser->getRuleNames();
// foreach ($ruleNames as $ruleName) {
//     echo $ruleName . "\n";
// }

ParseTreeWalker::default()->walk(new TreeShapeListener(), $tree);
