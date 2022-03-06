<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminPasswordValidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        // dd($request);
        if ($request->input('admin_password') == '1234') {
            return redirect('dashboard');
        }
        return $next($request);
    }
}
