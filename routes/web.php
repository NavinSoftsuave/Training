<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'Welcome to Laravel Routing!';
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/user/{id}', function ($id) {
    return "User ID is: " . $id;
});

Route::get('/profile', function () {
    return 'This is your profile.';
})->name('profile');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Welcome to Admin Dashboard';
    });
});