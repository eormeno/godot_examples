<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ResourceController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/resources', [ResourceController::class, 'index']);
    Route::post('/resources/{resource}', [ResourceController::class, 'store']);
    Route::get('/resources/{resource}', [ResourceController::class, 'show']);
    Route::put('/resources/{resource}', [ResourceController::class, 'update']);
    Route::delete('/resources/{resource}', [ResourceController::class, 'destroy']);
    Route::get('/resources/{resource}/compiled', [ResourceController::class, 'compile']);
    Route::patch('/resources/{resource}/rename', [ResourceController::class, 'rename']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/ping', [BackendController::class, 'ping']);
Route::get('/server-time', [BackendController::class, 'serverTime']);
