<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class Actividad 
{
    public function handle(Request $request, Closure $next): Response
    {
        
        $visitas = session('visitas', 0);
        $visitas++;
        session(['visitas' => $visitas]);

        
        Log::info("Se ha visitado index. Número de visitas: $visitas");

        return $next($request);
    }
}