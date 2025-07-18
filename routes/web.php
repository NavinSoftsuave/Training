<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[AuthController::class,'login_form']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register_form']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/home',[AuthController::class,'home']);

Route::get('/logout', function () {
    session()->forget('user_id'); // Remove user ID from session
    return redirect('/login');    // Redirect to login page
});