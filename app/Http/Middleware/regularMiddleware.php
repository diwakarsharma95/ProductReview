<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class regularMiddleware
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
        if ($request->user() && $request->user()->type == 'regular')
        {
            return new Response(view('unauthorized')->with('role', 'Moderate'));
        }
        return $next($request);
    }
}
