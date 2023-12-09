<?php

namespace Database\Factories;

use App\Models\Resource;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        fake()->seed(0);
        $fake_first_name = Str::lower(fake()->unique()->firstName());
        $fake_last_name = Str::lower(fake()->unique()->lastName());
        $fake_user_name = $fake_first_name;
        $fake_email = $fake_user_name . '@' . fake()->safeEmailDomain();
        $fake_email = str_replace('example', 'damo', $fake_email);
        return [
            'user_name' => $fake_user_name,
            'first_name' => $fake_first_name,
            'last_name' => $fake_last_name,
            'email' => $fake_email,
            'email_verified_at' => now(),
            'password' => Hash::make($fake_last_name),
            'remember_token' => Str::random(10),
        ];
    }

    // create the admin user whose information is taken from the .env file
    public function admin(): static
    {
        return $this->state(fn(array $attributes) => [
            'user_name' => env('ADMIN_USER_NAME'),
            'first_name' => env('ADMIN_FIRST_NAME'),
            'last_name' => env('ADMIN_LAST_NAME'),
            'email' => env('ADMIN_EMAIL'),
            'password' => Hash::make(env('ADMIN_PASSWORD')),
            'is_admin' => true,
        ]);
    }

    public function teacher(): static
    {
        return $this->state(fn(array $attributes) => [
            'is_teacher' => true,
        ]);
    }

    public function student(): static
    {
        return $this->state(fn(array $attributes) => [
            'is_student' => true,
        ]);
    }

    public function fromArray(array $attributes): static
    {
        return $this->state(fn(array $attributes) => [
            'user_name' => $attributes['user_name'],
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'email' => $attributes['email'],
            'password' => Hash::make($attributes['password']),
        ]);
    }
    public function testAdmin(): static
    {
        return $this->state(
            fn(array $attributes) => [
                'user_name' => env('TEST_ADMIN_USER_NAME'),
                'first_name' => env('TEST_ADMIN_USER_FIRST_NAME'),
                'last_name' => env('TEST_ADMIN_USER_LAST_NAME'),
                'email' => env('TEST_ADMIN_USER_EMAIL'),
                'password' => Hash::make(env('TEST_ADMIN_USER_PASSWORD')),
            ]
        );
    }
    public function testUser(): static
    {
        return $this->state(
            fn(array $attributes) => [
                'user_name' => env('TEST_USER_NAME'),
                'first_name' => env('TEST_USER_FIRST_NAME'),
                'last_name' => env('TEST_USER_LAST_NAME'),
                'email' => env('TEST_USER_EMAIL'),
                'password' => Hash::make(env('TEST_USER_PASSWORD')),
            ]
        );
    }
}
