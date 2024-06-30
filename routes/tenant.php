<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
//    Route::get('/', function () {
//        return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
//    })->middleware("auth");
    Route::middleware(['auth:sanctum'])->prefix('api')->group(function () {
        //
        Route::get("/user-details", function (Request $request){
            return $request->user();
        });
        Route::get('/test-api', function (Request $request) {
            return $request->user();
        });
    });

    Auth::routes();

    Route::get('/{any}', [\App\Http\Controllers\Tenants\AppController::class, 'index'])
        ->where('any', '.*')
        ->name('default')->middleware("auth");

    Route::get("/home", function(){
        return "This is the home for: " . tenant("name");
    })->middleware("auth");
});


