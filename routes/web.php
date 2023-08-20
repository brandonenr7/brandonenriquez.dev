<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowPostController;
use Illuminate\Support\Facades\Route;

Route::get('/blog/{post:slug}', ShowPostController::class)->name('posts.show');
Route::get('/', HomeController::class)->name('home');
