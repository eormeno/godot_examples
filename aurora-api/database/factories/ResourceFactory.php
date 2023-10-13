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
        "tutorial" => [
            "type"      => "folder",
            "red"       => [ "type" => "script", "content" => "move_to(\"red\")"    ],
            "green"     => [ "type" => "script", "content" => "move_to(\"green\")"  ],
            "blue"      => [ "type" => "script", "content" => "move_to(\"blue\")"   ],
            "yellow"    => [ "type" => "script", "content" => "move_to(\"yellow\")" ],
            "back"      => [ "type" => "script", "content" => "move_to(\"back\")"   ],
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
            if ($child['type'] === 'script') {
                Resource::factory()->file($child['content'])->named($name)->childOf($parent)->create();
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

    public function file(string $content = 'test'): static
    {
        return $this->state(fn(array $attributes) => [
            'type' => 'file',
            'content' => $content,
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
