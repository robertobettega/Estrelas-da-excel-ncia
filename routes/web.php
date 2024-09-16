<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return redirect('/home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'HomePage'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/rank', [HomeController::class, 'Usersexceleciasall']);

route::post('/insert', [HomeController::class, 'insertDados']);

Route::get('/teste', [HomeController::class, 'renderCardExcelencias']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/Cadastro', function () {
    return view('Cadastro');
});

// Route::get('/minhasestatisticas', function () {
//     return view('minhasestatisticas');
// });

Route::get('/aguardandoaprovacao', function () {
    return view('aguardandoaprovacao'); // Certifique-se de que a view existe
})->name('aguardando.aprovacao');


// Nova controller Admin caso o RH solicite ações que só eles podem vizualizar ou realizar

// Route::get('/admin', [AdminController::class, 'index']);
Route::get('/minhasestatisticas', [AdminController::class, 'HomePage']);



require __DIR__.'/auth.php';
