<?php

namespace App\Parsers\GameLang;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use App\Parsers\GameLang\GameLangErrorListener;
use App\Parsers\GameLang\GameLangSpecificListener;

$input = InputStream::fromPath("example-1.gl");
$lexer = new GameLangLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new GameLangParser($tokens);
$errorListener = new GameLangErrorListener();
$parser->addErrorListener($errorListener);
$tree = $parser->program();
// $visitor = new GameLangSpecificVisitor();
// $visitor->visit($tree);
$listener = new GameLangSpecificListener();
ParseTreeWalker::default()->walk($listener, $tree);
$vm = new GameLangVM($listener->getCode());
$vm->run();
