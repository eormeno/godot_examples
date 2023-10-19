<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Resource;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Resource::count() > 0) {
            return;
        }
        User::all()->each(function (User $user) {
            Resource::factory()->userResourceTree($user);
        });
    }
}
