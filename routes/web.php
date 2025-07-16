<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class,'home']);
Route::get('/about',[PageController::class,'about']);
Route::get('/user/{id}',[PageController::class,'user']);
Route::get('/profile',[PageController::class,'profile'])->name('Profile');

Route::prefix('admin')->group (function(){
    Route::get('/dashboard',[PageController::class,'dashboard']);
});

Route::get('/checkuser',[PageController::class,'checkuser'])->middleware('block.user');