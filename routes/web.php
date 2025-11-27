<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/register', [AuthController::class, 'registerPage']);
Route::get('/auth/login', [AuthController::class, 'loginPage']);
