<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


// ROTAS DE USUÁRIOS COMUNS
Route::get('/login', function () { return view('login'); })->middleware(['auth', 'verified'])->name('login');
Route::get('/Cadastro', function () { return view('Cadastro');})->middleware(['auth', 'verified'])->name('cadastro');

Route::get('/', function () { return Auth::check() ? redirect('/home') : redirect('/login'); });

Route::get('/home', [HomeController::class, 'HomePage'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/minhasestatisticas', [AdminController::class, 'HomePage'])->middleware(['verified']);

// Redirecionamento para o dashboard
Route::get('/dashboard', function () {return redirect('/dashboard');})->middleware(['auth', 'verified'])->name('dashboard');



// ROTAS QUE SÃO FUNÇÕES IMPORTANTES
Route::post('/insert', [HomeController::class, 'insertDados'])->middleware(['auth', 'verified']);
Route::get('/teste', [HomeController::class, 'renderCardExcelencias'])->middleware(['auth', 'verified']);

// ROTA QUE VERIFICA A CONEXÃO DOS BANCOS
Route::get('/dados', function () {
    $query = "SELECT * FROM l_breeze.users";
    
    $dadosMySql = DB::select($query);

    $dadosOtherDb = DB::connection('')->select($query);

    return response()->json([
        'dadosMySql' => $dadosMySql,
        'dadosOtherDb' => $dadosOtherDb,
    ]);
});

// ROTA QUE VERIFICA AS INFORMAÇÕES DO USUÁRIO LOGADO
Route::get('/teste', [HomeController::class, 'imprimirUser'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/aguardandoaprovacao', function () { return view('aguardandoaprovacao'); });


// ROTAS APENAS PARA ADMINSITRADORES ///////////////////////////////////////////////////////////////

Route::middleware('auth')->group(function () {

    // Perfil do usuário
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Home (acesso permitido a todos os usuários autenticados)
    Route::get('/home', [HomeController::class, 'HomePage'])->middleware(['verified']);

    // Estatísticas RH (acesso restrito a administradores)
    Route::get('/estatisticas-rh', [AdminController::class, 'RHPage'])->middleware(['verified', 'admin']);
    Route::get('/aprovacaorh', [AdminController::class, 'index'])->middleware(['verified', 'admin']);

});

// Rota de autenticação
require __DIR__.'/auth.php';
