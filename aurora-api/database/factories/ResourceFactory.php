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
    const EXAMPLE_1 = "
    PERSONAJE bot PARAMETROS juego
        altura = 100.00
	    velocidad = 1
        velocidad = velocidad + 1

        SI velocidad > 0 ENTONCES
            CONSOLA \"Velocidad positiva. \" velocidad
        FIN

        SI velocidad < 0 ENTONCES
            CONSOLA \"Velocidad negativa. \" velocidad
        SINO
            CONSOLA \"Insisto! La velocidad es positiva. \" velocidad
        FIN

        i = 0
        MIENTRAS i < 5 HAZ
            CONSOLA \"Iteracion \" i
            i = i + 1
        FIN

        CONSOLA \"Llegamos al final. \" altura
    FIN";
    const EXAMPLE_2 = "
    PERSONAJE bot PARAMETROS juego
        CONSOLA \"Hola mundo\"
    FIN";
    const TEMPLATE_ALT = [
        "type" => "folder",
        "tutorial" => [
            "type" => "folder",
            "hola-mundo" => [
                "type" => "file",
                "extension" => "script",
                "mime_type" => "text/plain",
                "content" => self::EXAMPLE_2,
                "comment" => "Hace que el bot diga \"Hola mundo\"",
                "minimum_player_level" => 1,
            ],
            "estructuras-control" => [
                "type" => "file",
                "extension" => "script",
                "mime_type" => "text/plain",
                "content" => self::EXAMPLE_1,
                "comment" => "Muestra varios ejemplos de uso de la consola y de las estructuras de control",
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

    public function file(array $file): static
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
