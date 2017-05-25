<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{

    public function handle($request, Closure $next)
    {

        $headers = [
            'Access-Control-Allow-Origin'=> '*',
            'Access-Control-Allow-Methods' => 'HEAD, GET, PUT, PATCH, POST',
            'Access-Control-Allow-Headers' => 'Content-Type'
        ];

        if ($request->getMethod() === 'OPTIONS') {
            return response(null, 200, $headers);
        }

        $response = $next($request);

        foreach ($headers as $key => $value) {
            $response->header($key, $value);
        }

        return $response;
    }
}
