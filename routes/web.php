<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', [HomeController::class, 'index'])->name('user.index');
Route::get('/home', [HomeController::class, 'HomePage']);

