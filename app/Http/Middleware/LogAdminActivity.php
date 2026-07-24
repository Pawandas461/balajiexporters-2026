<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class LogAdminActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // We only want to log non-GET requests (e.g. POST, PUT, DELETE, PATCH)
        // because GET requests are usually just page views
        $method = $request->method();
        if (in_array($method, ['POST', 'PUT', 'PATCH', 'DELETE'])) {
            $user = Auth::user();
            if ($user) {
                // Try to get a meaningful activity description from the route
                $routeName = $request->route() ? $request->route()->getName() : null;
                $activity = $routeName ? "Triggered route: " . $routeName : "Action performed on " . $request->path();

                ActivityLog::create([
                    'user_id' => $user->id,
                    'user_name' => $user->name,
                    'user_email' => $user->email,
                    'activity' => $activity,
                    'url' => $request->fullUrl(),
                    'method' => $method,
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                ]);
            }
        }

        return $response;
    }
}
