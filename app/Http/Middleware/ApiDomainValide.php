<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiDomainValide
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $res = [
            'host' => $request->host(),
            'http_host' => $request->httpHost(),
            'schemeAndHttpHost' => $request->schemeAndHttpHost(),
        ];

        return response()->json($res);


        return $next($request);
    }
}
