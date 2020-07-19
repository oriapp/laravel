<?php

namespace App\Http\Middleware;

use Closure, Session;

class UserAuth
{
    public function handle($request, Closure $next)
    {
        if(Session::has('user_id')) return redirect('');
        return $next($request);
    }
}
