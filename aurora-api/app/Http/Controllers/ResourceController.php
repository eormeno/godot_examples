<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Resource;
use Illuminate\Http\Request;
use App\Parser\AdventureLexer;
use App\Parser\AdventureParser;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

class ResourceController extends Controller
{
    public function index()
    {
        $request_id = request()->header('Request-ID');
        $user = User::with('userFolder')->where('id', '=', auth()->user()->id)->first();
        $folderTree = $this->getFolderTree($user->userFolder);
        return response()->json([
            'folder' => $folderTree
        ])->withHeaders(['Request-ID' => $request_id,]);
    }

    private function getFolderTree($folder)
    {
        $folderTree = [];
        $folderTree['id'] = $folder->id;
        $folderTree['type'] = $folder->type;
        if ($folder->type !== 'folder') {
            $folderTree['content'] = $folder->content;
        } else {
            foreach ($folder->children as $child) {
                $folderTree[$child->name] = $this->getFolderTree($child);
            }
        }
        return $folderTree;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resource $resource)
    {
        $request_id = request()->header('Request-ID');
        return response()->json([
            'resource' => $resource
        ])->withHeaders(['Request-ID' => $request_id,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resource $resource)
    {
        $request_id = request()->header('Request-ID');
        $script = $request->input('content');
        $code = $this->parseScript($script);
        $resource->update($request->all());
        return response()->json([
            'resource' => $resource,
            'code' => $code
        ])->withHeaders(['Request-ID' => $request_id,]);
    }

    private function parseScript(string $script)
    {
        $input = InputStream::fromString($script);
        $lexer = new AdventureLexer($input);
        $tokens = new CommonTokenStream($lexer);
        $parser = new AdventureParser($tokens);
        $parser->addErrorListener(new DiagnosticErrorListener());
        $tree = $parser->program();
        $treeListener = new TreeShapeListener();
        ParseTreeWalker::default()->walk($treeListener, $tree);
        return $treeListener->getGeneratedCode();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

final class TreeShapeListener implements ParseTreeListener {

    private $vars = [];
    private $code = [];

    public function __construct($code = []) {
        $this->code = $code;
    }

    public function getGeneratedCode() {
        return $this->code;
    }

    public function visitTerminal(TerminalNode $node) : void {
    }
    public function visitErrorNode(ErrorNode $node) : void {
        $line = $node->getSymbol()->getLine();
        $msg = $node->getSymbol()->getText();
        echo "Error on line " . $line . ": " . $msg . "\n";

    }
    public function exitEveryRule(ParserRuleContext $ctx) : void {
    }

    public function enterEveryRule(ParserRuleContext $ctx) : void {
        if ($ctx instanceof Context\AssignmentContext) {
            $id = $ctx->ID()->getText();
            $expr = $ctx->expression()->getText();
            $this->code[] = $id . " = " . $expr;
            $this->vars[$id] = $expr;
        }
        if ($ctx instanceof Context\Move_statementContext) {
            $id_expr = $ctx->expression()->ID();
            $str_expr = $ctx->expression()->STRING();
            $value = null;
            if ($id_expr != null) {
                $id = $id_expr->getText();
                $value = $this->vars[$id];
            } else if ($str_expr != null) {
                $value = $str_expr->getText();
            } else {
                $value = $ctx->expression()->getText();
            }
            $this->code[] = "move " . $value;
        }

        if ($ctx instanceof Context\Take_statementContext) {
            $id_expr = $ctx->expression()->ID();
            $str_expr = $ctx->expression()->STRING();
            $value = null;
            if ($id_expr != null) {
                $id = $id_expr->getText();
                $value = $this->vars[$id];
            } else if ($str_expr != null) {
                $value = $str_expr->getText();
            } else {
                $value = $ctx->expression()->getText();
            }
            $this->code[] = "take " . $value;
        }
    }
}
