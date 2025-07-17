<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;


Route::get('/',[PageController::class,'home']);
Route::get('/about',[PageController::class,'about']);
Route::get('/user/{id}',[PageController::class,'user']);
Route::get('/profile',[PageController::class,'profile'])->name('Profile');

Route::prefix('admin')->group (function(){
    Route::get('/dashboard',[PageController::class,'dashboard']);
});

Route::middleware(['block.user'])->prefix('admin')->group(function() {

    Route::get('/user1',[AdminController::class,'user1']);
    Route::get('/user2',[AdminController::class,'user2']);
});

//Route::post('/submit-form', [FormController::class, 'submit']);