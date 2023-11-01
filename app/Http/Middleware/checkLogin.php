<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkLogin
{

    public function handle(Request $request, Closure $next)
    {
        if (session()->has('admin')) {
            return $next($request);
        } else {
            return redirect("/admin/login");
        }
    }
}
