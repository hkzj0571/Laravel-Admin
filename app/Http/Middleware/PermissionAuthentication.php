<?php

namespace App\Http\Middleware;

use Closure;

class PermissionAuthentication
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
        if (!auth()->check()) return redirect()->route('admin.auth.login');

        return auth()->user()->can($request->route()->getName()) ? $next($request) : abort(401);
    }
}
