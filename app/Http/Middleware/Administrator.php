<?php

namespace App\Http\Middleware;

use Closure;

class Administrator
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
        $token = $request->input('key') ?: $request->header('KEY');

        if ($token != env('ADMIN_PASSWORD', null)) {
            return redirect('/');
        }

        return $next($request);
    }
}
