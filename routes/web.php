<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('apropos', [HomeController::class,'apropos'])->name('apropos');
Route::get('Contact', [HomeController::class,'Contact'])->name('Contact');
Route::get('services', [HomeController::class,'services'])->name('services');

Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('posts', PostController::class)->names("posts");


