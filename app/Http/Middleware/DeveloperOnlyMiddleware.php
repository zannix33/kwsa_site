<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DeveloperOnlyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        return ! app()->environment('local')
            ? redirect('/')
            : $next($request);
    }
}
