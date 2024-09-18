<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/dashboard', function () {
    return redirect('/dashboard');
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

Route::get('/rank', [HomeController::class, 'Usersexceleciasall'])->middleware(['auth', 'verified'])->name('dashboard');

route::post('/insert', [HomeController::class, 'insertDados'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/teste', [HomeController::class, 'renderCardExcelencias'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/estatisticas-rh', [AdminController::class, 'RHPage'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', function () {
    return view('login');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Cadastro', function () {
    return view('Cadastro');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ajuda', function () {
    return view('ajuda');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/minhasestatisticas', function () {
//     return view('minhasestatisticas');
// });

Route::get('/aguardandoaprovacao', function () {
    return view('aguardandoaprovacao'); // Certifique-se de que a view existe
})->name('aguardando.aprovacao')->middleware(['auth', 'verified'])->name('dashboard');


// Nova controller Admin caso o RH solicite ações que só eles podem vizualizar ou realizar

// Route::get('/admin', [AdminController::class, 'index']);
Route::get('/minhasestatisticas', [AdminController::class, 'HomePage'])->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
