<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class FrontMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard('front')->check()){
            return redirect('login');
        }
        return $next($request);
    }
}
