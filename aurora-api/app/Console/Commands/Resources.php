<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Resources extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resources {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display resource children';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::find($this->argument('id'));
        if ($user === null) {
            $this->error('User not found');
            return;
        }
        $resource = $user->userFolder;
        $tree = $this->getResourcesTree($resource, $user->player_level);
        $this->info(json_encode($tree, JSON_PRETTY_PRINT));
    }

    function getResourcesTree($folder, $player_level)
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
                $folderTree[$child->name] = $this->getResourcesTree($child, $player_level);
            }
        }
        return $folderTree;
    }
}
