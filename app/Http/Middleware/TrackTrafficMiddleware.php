<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Traffic;

class TrackTrafficMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Only track GET requests to public routes
        if ($request->isMethod('GET')) {
            $sessionId = $request->session()->getId();

            Traffic::create([
                'url' => $request->fullUrl(),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'session_id' => $sessionId,
            ]);
        }

        return $next($request);
    }
}
