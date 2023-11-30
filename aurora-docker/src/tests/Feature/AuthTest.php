<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Resource;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanRegister()
    {
        $response = $this->post('/api/register', [
            'user_name' => env('TEST_USER_NAME'),
            'first_name' => env('TEST_USER_FIRST_NAME'),
            'last_name' => env('TEST_USER_LAST_NAME'),
            'email' => env('TEST_USER_EMAIL'),
            'password' => env('TEST_USER_PASSWORD'),
            'password_confirmation' => env('TEST_USER_PASSWORD')
        ]);
        $response->assertStatus(200)->assertJson(['user' => true, 'folder' => true, 'token' => true]);
    }

    public function testUserCanLogin()
    {
        $loginResponse = $this->getLoginResponse();
        $loginResponse->assertStatus(200)->assertJson(['token' => true]);
    }

    public function testUserCanLogout()
    {
        $loginResponse = $this->getLoginResponse();
        $headers = [
            'Authorization' => 'Bearer ' . $loginResponse['token'],
            'Accept' => 'application/json'
        ];
        $logoutResponse = $this->withHeaders($headers)->post('/api/logout');
        $logoutResponse->assertStatus(200)->assertJson(['user' => null]);
    }

    public function getLoginResponse()
    {
        $user = User::factory()->testAdmin()->create();
        $folder = Resource::factory()->folder()->ownedBy($user->id)->create();
        $user->update(['resource_id' => $folder->id]);
        $user->save();

        $response = $this->post('/api/login', [
            'email' => env('TEST_ADMIN_USER_EMAIL'),
            'password' => env('TEST_ADMIN_USER_PASSWORD')
        ]);
        return $response;
    }
}
