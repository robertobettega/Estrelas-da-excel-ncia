<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'HomePage']);

Route::get('/rank', [HomeController::class, 'Usersexceleciasall']);

Route::get('/insert/{usuario}/{excelencia}', [HomeController::class, 'insertDados']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/Cadastro', function () {
    return view('cadastro');
});

Route::get('/aguardandoaprovacao', function () {
    return view('aguardandoaprovacao'); // Certifique-se de que a view existe
})->name('aguardando.aprovacao');

Route::get('/insert', [HomeController::class, 'atribuirGamificacao']);

// Nova controller Admin caso o RH solicite ações que só eles podem vizualizar ou realizar
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/minhasestatisticas', [AdminController::class, 'index']);

