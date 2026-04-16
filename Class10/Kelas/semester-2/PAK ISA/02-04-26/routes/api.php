<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CareerController;

// Test endpoint
Route::get('/test', function () {
    return response()->json(['message' => 'API working']);
});

// Debug endpoint
Route::post('/debug', function (Request $request) {
    return response()->json([
        'method' => $request->getMethod(),
        'content_type' => $request->header('Content-Type'),
        'body' => $request->getContent(),
        'parsed' => $request->all(),
        'json' => $request->json()->all(),
    ]);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('careers', CareerController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');