<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::resource('pets', PetController::class);
Route::resource('tags', TagController::class);
Route::resource('breeds', BreedController::class);