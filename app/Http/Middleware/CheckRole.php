<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role != $role) {
            // Reindirizza o mostra un messaggio di errore
            return redirect('/');
        }
        return $next($request);
    }
}
