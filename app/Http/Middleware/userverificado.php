<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserVerificado
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            \Log::info('Usuário autenticado: ' . Auth::id());
    
            if (Auth::user()->status == 1) {
                \Log::info('Usuário com status 1, acesso permitido.');
                return $next($request);
            } else {
                \Log::info('Usuário com status 0, redirecionando.');
                return response()->view('aguardandoaprovacao');
            }
        }
    
        \Log::info('Usuário não autenticado, redirecionando.');
        return redirect('/')->with('error', 'Acesso negado.');
    }
    
}
