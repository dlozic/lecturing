<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::resource('pets', PetController::class);
Route::resource('tags', TagController::class);
Route::resource('breeds', BreedController::class);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('users.create');
Route::post('register', [AuthController::class, 'create'])->name('users.store');