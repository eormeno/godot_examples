<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BackendController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/rooms', [RoomController::class, 'index']);
Route::post('/rooms', [RoomController::class, 'store']);
Route::get('/rooms/{room:name}', [RoomController::class, 'show']);
Route::put('/rooms/{room:name}', [RoomController::class, 'update']);
Route::get('/rooms/{room:name}/image', [RoomController::class, 'image'])->name('room.image');
Route::delete('/rooms/{room:name}', [RoomController::class, 'destroy']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/ping', [BackendController::class, 'ping']);
Route::get('/server-time', [BackendController::class, 'serverTime']);
