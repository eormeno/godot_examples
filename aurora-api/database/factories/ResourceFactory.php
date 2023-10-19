<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    const TEMPLATE_ALT = [
        "type" => "folder",
        "tutorial" => [ "type" => "folder",
            "mover-a-luz-roja" => [
                "type" => "file",
                "extension" => "script",
                "mime_type" => "text/plain",
                "content" => "move to \"red\"",
                "comment" => "Mueve el bot a la próxima luz roja",
                "minimum_player_level" => 1,
            ],
            "recorrer-luces-rojas" => [
                "type" => "file",
                "extension" => "script",
                "mime_type" => "text/plain",
                "content" => "move to \"red\"\nmove to \"red\"\nmove to \"red\"\nmove to \"red\"\nmove to \"red\"\nmove to \"red\"\nmove to \"red\"\nmove to \"red\"\nmove to \"red\"\nmove to \"red\"\n",
                "comment" => "Hace que el bot recorra todas las luces rojas",
                "minimum_player_level" => 2,
            ],
        ]
    ];

    /**
     * Create a resource tree for a user.
     */
    public function userResourceTree(User $user): static
    {
        $folder = Resource::factory()->folder()->named($user->user_name)->ownedBy($user->id)->create();
        $user->update(['resource_id' => $folder->id]);
        $user->save();
        $this->createResourceTree($folder, self::TEMPLATE_ALT);
        return $this;
    }

    /**
     * Create a resource tree.
     */
    public function createResourceTree(Resource $parent, array $tree): void
    {
        foreach ($tree as $name => $child) {
            if ($name === 'type') {
                continue;
            }
            if ($child['type'] === 'file') {
                Resource::factory()->file($child)->named($name)->childOf($parent)->create();
                continue;
            }
            $resource = Resource::factory()->{$child['type']}()->named($name)->childOf($parent)->create();
            $this->createResourceTree($resource, $child);
        }
    }

    /**
     * Given a resource name, create it with that name.
     */
    public function named(string $name): static
    {
        return $this->state(fn(array $attributes) => [
            'name' => $name,
        ]);
    }

    public function folder(): static
    {
        return $this->state(fn(array $attributes) => [
            'type' => 'folder',
        ]);
    }

    public function file(Array $file): static
    {
        $content = $file['content'];
        $comment = $file['comment'];
        $extension = $file['extension'];
        $mime_type = $file['mime_type'] ?? 'text/plain';
        $minimum_player_level = $file['minimum_player_level'];
        return $this->state(fn(array $attributes) => [
            'type' => 'file',
            'mime_type' => $mime_type,
            'extension' => $extension,
            'content' => $content,
            'comment' => $comment,
            'minimum_player_level' => $minimum_player_level,
        ]);
    }

    public function ownedBy(int $userId): static
    {
        $user = User::find($userId);
        return $this->state(fn(array $attributes) => [
            'name' => $user->user_name,
        ]);
    }

    public function childOf(Resource $folder): static
    {
        return $this->state(fn(array $attributes) => [
            'parent_id' => $folder->id,
        ]);
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        fake()->seed(0);
        return [
            'name' => $this->faker->word(),
        ];
    }
}
