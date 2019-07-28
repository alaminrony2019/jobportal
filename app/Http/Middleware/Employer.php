<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class Employer
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
      if(empty(Session::has('employerSession'))){
          return redirect('/employer-login');
      }
        return $next($request);
    }
}
