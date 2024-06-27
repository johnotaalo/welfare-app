<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
Use Stancl\Tenancy\Facades\Tenancy;

class SetSanctumTenant
{
    public function handle($request, Closure $next)
    {
        if (Tenancy::initialized()){
            config(['sanctum.guard' => 'api']);
            Log::info('Tenant initialized for Sanctum');
        }else {
            Log::info('Tenant not initialized');
        }
        return $next($request);
    }
}
