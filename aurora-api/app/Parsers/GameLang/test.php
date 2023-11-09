<?php

namespace App\Parsers\GameLang;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use App\Parsers\GameLang\GameLangErrorListener;
use App\Parsers\GameLang\GameLangSpecificListener;

$input = InputStream::fromPath("example-35.gl");
$lexer = new GameLangLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new GameLangParser($tokens);
$errorListener = new GameLangErrorListener();
$parser->addErrorListener($errorListener);
$tree = $parser->program();
$errors = $errorListener->getErrors();
if (count($errors) > 0) {
    echo json_encode($errors, JSON_PRETTY_PRINT) . PHP_EOL;
    exit(1);
}
// $visitor = new GameLangSpecificVisitor();
// $visitor->visit($tree);
$listener = new GameLangSpecificListener();
ParseTreeWalker::default()->walk($listener, $tree);
$vm = new GameLangVM($listener->getCode());
$vm->saveHtmlFile('example-35.html');
$vm->run();
