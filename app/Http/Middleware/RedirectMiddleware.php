<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if (auth()->check())
        {
            $role = auth()->user()->role;
            switch ($role){
                case 'admin':
                    return redirect()->route('admin.index')->with([
                        'message' => 'welcome to admin dashboard',
                        'classes' => 'green rounded'
                    ]);
                    break;
            }
            return $next($request);

        }else{
            return redirect()->route('login')->with([
                'message' => 'Please Login',
                'classes' => 'red rounded'
            ]);
        }
    }
}
