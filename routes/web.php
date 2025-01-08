<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index']);

Route::get('/garanty', [MainController::class, 'garanty']);

Route::get('/installment', [MainController::class, 'installment']);

Route::get('/contacts', [MainController::class, 'contacts']);

Route::get('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'store'])->name('register');

