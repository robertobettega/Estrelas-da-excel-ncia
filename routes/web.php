<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\Models\home;

// ROTAS DE USUÁRIOS COMUNS
Route::get('/login', function () { return view('login'); })->middleware(['auth', 'verified'])->name('login');
Route::get('/Cadastro', function () { return view('Cadastro'); })->middleware(['auth', 'verified'])->name('cadastro');

// Redirecionamento inicial
Route::get('/', function () { return Auth::check() ? redirect('/home') : redirect('/login'); });

// Rota home com middleware de verificação de status
Route::get('/home', [HomeController::class, 'HomePage'])
    ->middleware(['auth', 'verified', 'status']) // Verifica se o usuário está autenticado, se o email foi verificado e se o status é 1
    ->name('dashboard');

// Rotas específicas que precisam do middleware de status
Route::middleware(['auth', 'verified', 'status'])->group(function () {
    Route::get('/minhasestatisticas', [AdminController::class, 'HomePage']);
    Route::get('/verificados', [HomeController::class, 'index']);
    Route::post('/insert', [HomeController::class, 'insertDados']);
    Route::get('/teste', [HomeController::class, 'renderCardExcelencias']);
    Route::get('/teste', [HomeController::class, 'imprimirUser'])->name('dashboard');
});

// ROTA QUE VERIFICA A CONEXÃO DOS BANCOS
Route::get('/dados', function () {
    $query = "SELECT * FROM l_breeze.users";
    
    $dadosMySql = DB::select($query);
    $dadosOtherDb = DB::connection('other_db')->select($query); // Especifique a conexão

    return response()->json([
        'dadosMySql' => $dadosMySql,
        'dadosOtherDb' => $dadosOtherDb,
    ]);
});

// Rota aguardando aprovação
Route::get('/aguardandoaprovacao', function () { return view('aguardandoaprovacao'); })->middleware(['verified']);

// Route::post('aprovar/{id}', [home::class, 'updateAcessUser']);
Route::post('/acesso/{id}', [home::class, 'updateAcessUser']);

// ROTAS APENAS PARA ADMINISTRADORES
Route::middleware('auth', 'verified', 'status')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Estatísticas RH (acesso restrito a administradores)
    Route::get('/estatisticas-rh', [AdminController::class, 'RHPage'])->middleware(['verified', 'admin']);
    Route::get('/aprovacaorh', [AdminController::class, 'aprovarUser'])->middleware(['verified', 'admin']);
});

// Rota de autenticação
require __DIR__.'/auth.php';
