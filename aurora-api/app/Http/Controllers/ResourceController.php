<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Resource;
use Illuminate\Http\Request;
use Antlr\Antlr4\Runtime\InputStream;
use App\Parsers\GameLang\GameLangLexer;
use App\Parsers\GameLang\GameLangParser;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use App\Http\Requests\ResourceRenameRequest;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use App\Parsers\GameLang\GameLangErrorListener;
use App\Parsers\GameLang\GameLangSpecificListener;

class ResourceController extends Controller
{
    public function index()
    {
        $request_id = request()->header('Request-ID');
        $user = User::with('userFolder')->where('id', '=', auth()->user()->id)->first();
        $folderTree = $this->getFolderTree($user->userFolder, $user->player_level);
        return response()->json([
            'folder' => $folderTree
        ])->withHeaders(['Request-ID' => $request_id]);
    }

    private function getFolderTree($folder, $player_level)
    {
        $folderTree = [];
        $folderTree['id'] = $folder->id;
        $folderTree['type'] = $folder->type;
        if ($folder->type !== 'folder') {
            $folderTree['content'] = $folder->content;
            $folderTree['comment'] = $folder->comment;
            $folderTree['extension'] = $folder->extension;
            $folderTree['mime_type'] = $folder->mime_type;
        } else {
            foreach ($folder->children as $child) {
                if ($child->minimum_player_level > $player_level) {
                    continue;
                }
                $folderTree[$child->name] = $this->getFolderTree($child, $player_level);
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
        $resource->update($request->all());
        return response()->json([
            'resource' => $resource
        ])->withHeaders(['Request-ID' => $request_id,]);
    }

    public function compile(Request $request, Resource $resource)
    {
        $request_id = request()->header('Request-ID');
        if ($resource->type !== 'file' || $resource->extension !== 'script') {
            return response([
                'errors' => [["line" => 0, "char" => 0, "message" => "El archivo $resource->name no es un script"]]
            ], 422)->withHeaders(['Request-ID' => $request_id]);
        }
        $script = $resource->content;
        $res = $this->compileScript($script);
        return response()->json($res)->withHeaders(['Request-ID' => $request_id]);
    }

    public function rename(ResourceRenameRequest $request, Resource $resource)
    {
        $request_id = request()->header('Request-ID');
        $resource->update($request->only('name'));
        return response()->json([
            'resource' => [
                'name' => $resource->name
            ]
        ])->withHeaders(['Request-ID' => $request_id,]);
    }

    private function compileScript(string $script)
    {
        $script .= "\n";
        $input = InputStream::fromString($script);
        $lexer = new GameLangLexer($input);
        $tokens = new CommonTokenStream($lexer);
        $parser = new GameLangParser($tokens);
        $errorListener = new GameLangErrorListener();
        $parser->addErrorListener($errorListener);
        $tree = $parser->program();
        $errors = $errorListener->getErrors();
        if (count($errors) > 0) {
            return ["errors" => $errors];
        }
        $listener = new GameLangSpecificListener();
        ParseTreeWalker::default()->walk($listener, $tree);
        return ["compiled" => $listener->getCode()];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
