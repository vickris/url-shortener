<?php

namespace App\Http\Middleware;

use Closure;
use Validator;

class UrlSanitizerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->url) {
            return $next($request);
        }

        $validator = Validator::make($request->only('url'), [
            'url' => 'url'
        ]);


        if ($validator->fails()) {
            $request->merge([
                'url' => 'http://'.$request->url
            ]);
        }

        return $next($request);

    }
}
