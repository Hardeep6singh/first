<?php

namespace App\Http\Middleware;

use Closure;

class checkage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$age)
    {
       if($age<=60){
        return redirect('About');
       }
        return $next($request);
    }
}
