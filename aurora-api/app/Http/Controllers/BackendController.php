<?php
namespace App\Http\Controllers;

class BackendController extends Controller
{
    public function ping()
    {
        return [
            'message' => 'pong'
        ];
    }

    public function serverTime()
    {
        return [
            'server_time' => now()
        ];
    }
}
