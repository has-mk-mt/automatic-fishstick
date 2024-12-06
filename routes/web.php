<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;


Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::resource('posts',PostController::class)->except(['index']);
Route::resource('posts.comments',CommentController::class)->only('store', 'destroy');
Route::get('login', 'AuthController@showLoginForm')->name('login');
Route::post('login', 'AuthController@login');

