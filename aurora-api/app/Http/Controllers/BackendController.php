<?php
namespace App\Http\Controllers;

class BackendController extends Controller
{
    public function ping()
    {
        $request_id = request()->header('Request-ID');
        return response()->json([
            'pong' => true
        ])->withHeaders([
            'Request-ID' => $request_id,
        ]);
    }

    public function serverTime()
    {
        $request_id = request()->header('Request-ID');
        return response()->json([
            'server_time' => now()
        ])->withHeaders([
            'Request-ID' => $request_id,
        ]);
    }
}
