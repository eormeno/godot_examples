<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SystemTest extends TestCase
{
    public function testPing()
    {
        $response = $this->get('/api/ping');
        $response->assertStatus(200)->assertJson(['message' => 'pong']);
    }

    public function testServerTime()
    {
        $response = $this->get('/api/server-time');
        $response->assertStatus(200)->assertJsonStructure(['server_time']);
    }
}
