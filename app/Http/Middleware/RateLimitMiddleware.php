<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RateLimitMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    	$ip = $request->ip();
        $sessionIp = 'session_' . $ip;
         // Check if session exists for the IP, if not, set the session
	    session()->has($sessionIp) 
	    	? (session()->get($sessionIp) !== $request->session()->getId() 
	    		? redirect()->back()->withError(__('Sessions in progress and does not allow new sessions.')) 
	    		: null) 
	    	: session()->put($sessionIp, $request->session()->getId());

	    return $next($request);
    }
}

