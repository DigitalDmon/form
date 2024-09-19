<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserFormController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'posts.index')->name('home');

Route::view('register', 'auth.register')->name('register');

Route::get('register', [UserFormController::class, 'create'])->name('auth.register');

Route::post('register', [UserFormController::class, 'store'])->name('auth.store');

Route::view('login', 'auth.login')->name('login');

