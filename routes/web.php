<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
	// Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	// Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	// Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	// Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	// Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	// Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	// Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	// Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');