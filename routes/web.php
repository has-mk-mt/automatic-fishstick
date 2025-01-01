<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::resource('posts',PostController::class)->except(['index']);
Route::resource('posts.comments',CommentController::class)->only('store', 'destroy');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin', [DashboardController::class, 'show'])
->name('admin.dashboard')
->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});
Route::get('/admin', [DashboardController::class, 'show'])
    ->name('admin.dashboard')
    ->middleware('auth');
