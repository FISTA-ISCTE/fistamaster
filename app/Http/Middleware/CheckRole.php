<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles){
        if (!Auth::check()) // Se o usuário não estiver autenticado
            return redirect('entrar');
        $user = Auth::user();
        foreach ($roles as $role) {
            if($user->hasRole($role)) // Verifique se o usuário tem a role permitida
                return $next($request);
        }
        return redirect('error')->with('error', 'Não tem permissão para aceder a esta página! Contacte o Administrador!');
    }
}
