<?php

namespace Database\Factories;

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
        return [
            'user_name' => fake()->unique()->userName(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make(env('FAKE_USERS_PASSWORD')),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
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
