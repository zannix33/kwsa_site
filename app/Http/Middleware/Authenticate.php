<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if (!$request->expectsJson()) {
            return route('login');
        } else {
            return new JsonResponse([
                'status' => 'unauthorized',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }
}
