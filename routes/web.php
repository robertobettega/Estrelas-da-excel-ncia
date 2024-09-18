<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return Auth::check() ? redirect('/home') : redirect('/login');
})->name('home');


// Redirecionamento para o dashboard
Route::get('/dashboard', function () {
    return redirect('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas protegidas por autenticação
Route::middleware('auth')->group(function () {
    // Perfil do usuário
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Home (acesso permitido a todos os usuários autenticados)
    Route::get('/home', [HomeController::class, 'HomePage'])
        ->middleware(['verified']) // Apenas o middleware de verificação de email
        ->name('home');

    // Estatísticas RH (acesso restrito a administradores)
    Route::get('/estatisticas-rh', [AdminController::class, 'RHPage'])
        ->middleware(['verified', 'admin']) // Middleware admin
        ->name('estatisticas.rh');

    // Aprovação RH (acesso restrito a administradores)
    Route::get('/aprovacaorh', [AdminController::class, 'index'])
        ->middleware(['verified', 'admin']) // Middleware admin
        ->name('aprovacao.rh');

    // Minhas estatísticas
    Route::get('/minhasestatisticas', [AdminController::class, 'HomePage'])
        ->middleware(['verified'])
        ->name('minhasestatisticas');

    // Aguardando aprovação
    Route::get('/aguardandoaprovacao', function () {
        return view('aguardandoaprovacao'); // Certifique-se de que a view existe
    })->middleware(['verified'])->name('aguardando.aprovacao');
});

// Login
Route::get('/login', function () {
    return view('login');
})->middleware(['auth', 'verified'])->name('login');

// Cadastro
Route::get('/Cadastro', function () {
    return view('Cadastro');
})->middleware(['auth', 'verified'])->name('cadastro');

// Outras rotas
Route::post('/insert', [HomeController::class, 'insertDados'])
    ->middleware(['auth', 'verified'])->name('insert.dados');
Route::get('/teste', [HomeController::class, 'renderCardExcelencias'])
    ->middleware(['auth', 'verified'])->name('teste');

// Rota de autenticação
require __DIR__.'/auth.php';
