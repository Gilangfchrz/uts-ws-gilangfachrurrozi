<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class NpmMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $npm = '197006048';

        if (
            !$request->header('npm') ||
             $request->header('npm') != $npm
        ) return Response()->json([
            'code' => 1,
            'message' => 'error'
        ], status : Response::HTTP_UNAUTHORIZED);
        return $next($request);
    }
}
