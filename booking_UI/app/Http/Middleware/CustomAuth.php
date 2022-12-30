<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(request $request, Closure $next)
    {
        $path=$request->path();
        
      
      
         if($path=="login" && Session::get('name'))
         {
             return redirect('name');
         }
 
         else if($path!="login" && !Session::get('name'))
         {
            return redirect('/login');
         }
     
         return $next($request);
      
    }

}
