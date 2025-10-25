<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stevebauman\Location\Facades\Location;

class RestrictToUK
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        
        // Replace localhost for testing
        if ($ip === '127.0.0.1') {
            $ip = '8.8.8.8'; // Example public IP for testing
            Log::info("[RestrictToUK] Localhost detected, using test IP: $ip");
        }

        // Allow local development
        if (app()->environment('local')) {
            Log::info("[RestrictToUK] Local environment detected, skipping restriction for IP: $ip");
            return $next($request);
        }

        // Fetch location
        $location = Location::get($ip);

        if (!$location) {
            Log::warning("[RestrictToUK] Could not detect location for IP: $ip");
            abort(403, 'Access restricted to UK visitors only.');
        }

        Log::info("[RestrictToUK] IP: $ip, Country: {$location->countryName} ({$location->countryCode}), City: {$location->cityName}");

        // Block non-UK visitors
        if ($location->countryCode !== 'GB') {
            Log::warning("[RestrictToUK] Access blocked for non-UK visitor: IP $ip, Country {$location->countryName}");
            abort(403, 'Access restricted to UK visitors only.');
        }

        Log::info("[RestrictToUK] Access granted for UK visitor: IP $ip, City: {$location->cityName}");

        return $next($request);
    }
}
