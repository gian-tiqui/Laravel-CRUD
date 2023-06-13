<?php

use App\Http\Controllers\ToyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Toy;

Route::get('/', [ToyController::class, 'homepage'])->name('landing');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('signin');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('reg');
Route::post('register', [RegisterController::class, 'register'])->name('signup');
Route::get('landingpage', [ToyController::class, 'landingpage'])->name('main');
Route::get('create', [ToyController::class, 'create'])->name('addtoy');
Route::post('create', [ToyController::class, 'store'])->name('createtoy');
Route::get('/{item}/show', [ToyController::class, 'show'])->name('showtoy');
Route::get('logout', [LoginController::class, 'logout'])->name('signout');
Route::get('/{item}/edit', [ToyController::class, 'edit'])->name('edits');
Route::delete('/{item}', [ToyController::class, 'destroy'])->name('delete');
Route::patch('/{item}', [ToyController::class, 'update'])->name('updates');