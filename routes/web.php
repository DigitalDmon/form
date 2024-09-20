<?php

use App\Http\Controllers\Api\CountriesController;
use App\Http\Controllers\UserFormController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'posts.index')->name('home');

Route::get('register', [UserFormController::class, 'create'])->name('auth.register');

Route::get('register', [CountriesController::class, 'index'])->name('auth.register');

Route::post('register', [UserFormController::class, 'store'])->name('auth.store');

Route::view('login', 'auth.login')->name('auth.login');

