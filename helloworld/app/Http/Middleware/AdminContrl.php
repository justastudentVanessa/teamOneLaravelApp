<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class AdminContrl
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
       $user =	$request->user(); //$user 
	if($user && $user->isAdmin){ 
	 return $next($request);
	}
	return Redirect:: to('/home');
 // 403 display view redirect   
}
}
