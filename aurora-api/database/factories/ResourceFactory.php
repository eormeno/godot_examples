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
    const TEMPLATE_FOLDER_TREE = [
        'children' => [
            [
                'name' => 'tutorial',
                'type' => 'folder',
                'children' => [
                    [
                        'name' => '01-introduction',
                        'type' => 'folder',
                        'children' => [
                            [
                                'name' => '01-01-introduction',
                                'type' => 'file',
                                'content' => 'This is the first file in the tutorial.',
                            ],
                            [
                                'name' => '01-02-introduction',
                                'type' => 'file',
                                'content' => 'This is the second file in the tutorial.',
                            ],
                        ],
                    ],
                    [
                        'name' => '02-advanced',
                        'type' => 'folder',
                        'children' => [
                            [
                                'name' => '02-01-advanced',
                                'type' => 'file',
                                'content' => 'This is the first file in the advanced section of the tutorial.',
                            ],
                            [
                                'name' => '02-02-advanced',
                                'type' => 'file',
                                'content' => 'This is the second file in the advanced section of the tutorial.',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ];

    /**
     * Create a resource tree for a user.
     */
    public function userResourceTree(User $user): static
    {
        $folder = Resource::factory()->folder()->named($user->user_name)->ownedBy($user->id)->create();
        $user->update(['resource_id' => $folder->id]);
        $user->save();
        $this->createResourceTree($folder, self::TEMPLATE_FOLDER_TREE);
        return $this;
    }

    /**
     * Create a resource tree.
     */
    public function createResourceTree(Resource $parent, array $tree): void
    {
        foreach ($tree['children'] as $child) {
            if ($child['type'] === 'file') {
                Resource::factory()->file($child['content'])->named($child['name'])->childOf($parent)->create();
                continue;
            }
            $resource = Resource::factory()->{$child['type']}()->named($child['name'])->childOf($parent)->create();
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
