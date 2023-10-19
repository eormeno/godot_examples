<?php

use App\Models\User;
use Illuminate\Support\Facades\Artisan;

Artisan::command('fresh', function () {
    if (config('database.default') === 'sqlite') {
        if (file_exists(database_path('database.sqlite'))) {
            unlink(database_path('database.sqlite'));
        }
        $this->call('migrate', ['--force' => true]);
        $this->call('db:seed');
    }
})->describe('Fresh database');

// an artisan command that receves a resource id and returns it's children
Artisan::command('resource {id}', function ($id) {
    $user = User::find($id);
    if ($user === null) {
        $this->error('User not found');
        return;
    }
    $resource = $user->userFolder;
    $tree = getFolderTree($resource,$user->player_level);
    $this->info(json_encode($tree, JSON_PRETTY_PRINT));
})->purpose('Display resource children');

Artisan::command('users', function () {
    // get all users including the user's resource folder name
    $users = User::with('userFolder')->get();
    $this->table(['ID', 'Email', 'Folder Id', 'Folder Name'], $users->map(function ($user) {
        return [
            $user->id,
            $user->email,
            $user->userFolder->id,
            $user->userFolder->name
        ];
    }));
})->purpose('Display users');

function getFolderTree($folder, $player_level)
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
            $folderTree[$child->name] = getFolderTree($child, $player_level);
        }
    }
    return $folderTree;
}
