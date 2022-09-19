<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('auth');

Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('auth');
Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('auth');
Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('auth');
Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('auth');

