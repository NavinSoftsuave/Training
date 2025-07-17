<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;

Route::get('/greet', function () {
    return response()->json(['message' => 'Hello from API Route!']);
});


Route::get('/user/{id}', function ($id) {
    return response()->json(['user_id' => $id]);
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return response()->json(['message' => 'Admin API Dashboard']);
    });
});



Route::post('/submit-form', [FormController::class, 'submit']);

Route::apiResource('posts', PostController::class);
