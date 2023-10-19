<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Resource;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResourceTest extends TestCase
{
    use RefreshDatabase;

    public function testGetUserResourceTree()
    {
        $loginResponse = $this->getLoginResponse();
        $headers = [
            'Authorization' => 'Bearer ' . $loginResponse['token'],
            'Accept' => 'application/json'
        ];
        $resourcesResponse = $this->withHeaders($headers)->get('/api/resources');
        // echo(json_encode($resourcesResponse['folder'], JSON_PRETTY_PRINT));
        $resourcesResponse->assertStatus(200)->assertJson(['folder' => true]);
    }

    public function testGetOneResource() {
        $loginResponse = $this->getLoginResponse();
        $headers = [
            'Authorization' => 'Bearer ' . $loginResponse['token'],
            'Accept' => 'application/json'
        ];
        $resourcesResponse = $this->withHeaders($headers)->get('/api/resources/3');
        $resourcesResponse->assertStatus(200)->assertJson(['resource' => true]);
    }

    public function testUpdateOneResource() {
        $loginResponse = $this->getLoginResponse();
        $headers = [
            'Authorization' => 'Bearer ' . $loginResponse['token'],
            'Accept' => 'application/json'
        ];
        $resourcesResponse = $this->withHeaders($headers)->put('/api/resources/3', [
            'name' => 'other_name',
            'content' => "other content",
        ]);
        // echo(json_encode($resourcesResponse, JSON_PRETTY_PRINT));
        $resourcesResponse->assertStatus(200)->assertJson(['resource' => true]);
        // assert that the resource was updated in the database
        $this->assertDatabaseHas('resources', [
            'id' => 3,
            'name' => 'other_name',
            'content' => 'other content',
        ]);
    }

    public function testCompileScript() {
        $loginResponse = $this->getLoginResponse();
        $headers = [
            'Authorization' => 'Bearer ' . $loginResponse['token'],
            'Accept' => 'application/json'
        ];
        $resourcesResponse = $this->withHeaders($headers)->get('/api/resources/3/compiled');
        echo(json_encode($resourcesResponse['compiled'], JSON_PRETTY_PRINT));
        $resourcesResponse->assertStatus(200)->assertJson(['compiled' => true]);
    }

    public function getLoginResponse()
    {
        $user = User::factory()->testAdmin()->create();
        Resource::factory()->userResourceTree($user);

        $response = $this->post('/api/login', [
            'email' => env('TEST_ADMIN_USER_EMAIL'),
            'password' => env('TEST_ADMIN_USER_PASSWORD')
        ]);
        return $response;
    }
}
