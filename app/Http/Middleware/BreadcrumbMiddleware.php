<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;

class BreadcrumbMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $segments = $request->segments();

        
        $breadCrumbs = [[ 'name' => 'Home', 'url' => url('/') ]];
        $url = url('/');

        foreach($segments as $segment)
        {
            $url .= '/' . $segment;
            $breadcrumbs[] = ['name' => ucfirst(str_replace('-', ' ', $segment)), 'url' => $url];
        }

        View::share('breadcrumbs', $breadcrumbs);
        return $next($request);
    }
}
