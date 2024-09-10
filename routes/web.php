<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'HomePage']);

Route::get('/rank', [HomeController::class, 'Usersexceleciasall']);

route::get('/login/{pedido}', function ($pedido) {
    return $pedido;
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/insert', [HomeController::class, 'atribuirGamificacao']);
