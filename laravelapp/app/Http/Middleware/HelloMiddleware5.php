<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware5
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
		$response = $next($request);
		$content = $response->content();

		$pattern = '/<middleware5>(.*)<\/middleware5>/i';
		$replace = '<a href="http://$1">$1</a>';
		$content = preg_replace($pattern, $replace, $content);
		
		$response->setContent($content);

        return $response;
    }
}
