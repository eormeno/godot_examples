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

    public function file(string $content): static
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
