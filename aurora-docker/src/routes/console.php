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

Artisan::command('users', function () {
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

