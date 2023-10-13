<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::with('userFolder')->where('id', '=', auth()->user()->id)->first();
        $folderTree = $this->getFolderTree($user->userFolder);

        return response()->json([
            'folder' => $folderTree
        ]);
    }

    private function getFolderTree($folder)
    {
        $folderTree = [];
        $folderTree['name'] = $folder->name;
        $folderTree['type'] = $folder->type;
        $folderTree['children'] = [];

        foreach ($folder->children as $child) {
            if ($child->type === 'folder') {
                $folderTree['children'][] = $this->getFolderTree($child);
            } else {
                $folderTree['children'][] = [
                    'name' => $child->name,
                    'type' => $child->type,
                    'content' => $child->content
                ];
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
