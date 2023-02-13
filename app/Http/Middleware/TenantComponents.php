<?php

namespace App\Http\Middleware;

use App\Models\Footer;
use App\Models\Header;
use Closure;
use Illuminate\Http\Request;

class TenantComponents
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        view()->share([
            'header' => Header::firstOrFail(),
            'footer' => Footer::firstOrFail(),
        ]);

        return $next($request);
    }
}
