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
        // create the folder tree each user will have
        User::all()->each(function (User $user) {
            Resource::factory()->userResourceTree($user);

            // $folder = Resource::factory()->folder()->ownedBy($user->id)->create();
            // $user->update(['resource_id' => $folder->id]);

            // // create a subfolder resource for each folder
            // $child = Resource::factory()->folder()->childOf($folder)->named('tutorial')->create();
            // // create a file resource for each folder
            // Resource::factory()->file("move_to(\"red\")")->childOf($child)->named('red.scr')->create();
            // Resource::factory()->file("move_to(\"green\")")->childOf($child)->named('green.scr')->create();
            // Resource::factory()->file("move_to(\"blue\")")->childOf($child)->named('blue.scr')->create();
            // Resource::factory()->file("move_to(\"yellow\")")->childOf($child)->named('yellow.scr')->create();
            // Resource::factory()->file("move_to(\"back\")")->childOf($child)->named('back.scr')->create();
        });
    }
}
