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
    $resource = User::find($id)->userFolder;
    $this->table(['ID', 'Name', 'Type'], $resource->children->map(function ($child) {
        return [
            $child->id,
            $child->name,
            $child->type
        ];
    }));
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
