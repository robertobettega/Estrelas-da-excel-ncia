<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado e se é um administrador
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        }

        // Se não for admin, redireciona ou retorna um erro 403
        return redirect('/')->with('error', 'Acesso negado.');
    }
}
