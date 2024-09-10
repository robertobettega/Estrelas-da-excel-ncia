<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'HomePage']);


Route::get('/login', function () {
    return view('login');
});
