<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// middleware can be applied to specific routes, group of routes and all routes too.

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "<pre>";
        // print_r($request->age);
        if($request->age < 18) {
            die('You cannot visit this site');
        }
        // echo "age check";
        return $next($request);
    }
}
