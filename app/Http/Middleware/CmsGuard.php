<?php

namespace App\Http\Middleware;

use Closure, Session;

class CmsGuard
{
    public function handle($request, Closure $next)
    {
        if(!Session::get('is_admin')) return redirect('user/signin');
        return $next($request);
    }
}