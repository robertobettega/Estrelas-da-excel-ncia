<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'HomePage']);

Route::get('/rank', [HomeController::class, 'Usersexceleciasall']);

Route::get('/insert/{usuario}/{excelencia}', [HomeController::class, 'processarDados']);

// route::get('/insert/{pedido}/{excelencia}', function ($pedido, $excelencia) {
    
//     return $pedido.$excelencia;
// });



Route::get('/login', function () {
    return view('login');
});
Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/aguardandoaprovacao', function () {
    return view('aguardandoaprovacao'); // Certifique-se de que a view existe
})->name('aguardando.aprovacao');

Route::get('/minhasestatisticas', function () {
    return view('minhasestatisticas');
});


Route::get('/insert', [HomeController::class, 'atribuirGamificacao']);
