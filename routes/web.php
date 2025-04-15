<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


Route::get('/', function () {
    return view('welcome');
});

 
 
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
 
 
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
 
 
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
 
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
 
Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware('auth');
