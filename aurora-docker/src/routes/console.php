<?php

use App\Models\User;
use Illuminate\Support\Facades\Artisan;

Artisan::command('fresh', function () {
    $this->call('migrate:fresh', ['--force' => true]);
    $this->call('db:seed', ['--force' => true]);
})->describe('Fresh database');

Artisan::command('users', function () {
    $users = User::with('userFolder')->get();
    $this->table(['ID', 'Username', 'Email', 'First', 'Last', 'Folder Id', 'Folder Name'], $users->map(function ($user) {
        return [
            $user->id,
            $user->user_name,
            $user->email,
            $user->first_name,
            $user->last_name,
            $user->userFolder->id,
            $user->userFolder->name
        ];
    }));
})->purpose('Display users');

