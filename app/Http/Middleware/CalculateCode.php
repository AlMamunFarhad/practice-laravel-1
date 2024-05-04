<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalculateCode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

//        if ($request->query('code') !== '200') {
//            return redirect('error.page');
//        }

        if (1 === 1){
            return response('Farhad');
        }else{
            return response('false');
        }

        return $next($request);
    }
}
