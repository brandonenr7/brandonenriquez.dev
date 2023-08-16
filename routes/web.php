<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowPostController;

Route::get('/posts/{post:slug}', ShowPostController::class)->name('posts.show');
Route::get('/', HomeController::class)->name('home');
