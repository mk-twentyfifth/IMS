<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'doLogin'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/logout', [AuthController::class, 'logout']);
});
