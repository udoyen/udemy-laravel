<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleWare
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
        if($request->input('age') < 21){
          return redirect('restricted');
        }
        return $next($request);
    }
}
