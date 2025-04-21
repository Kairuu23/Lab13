<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;


use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); // Add ->name('login')
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function () {
    if (!Auth::check()) {
        return redirect('/login');
    }
    return view('auth.dashboard');
})->middleware('auth');
