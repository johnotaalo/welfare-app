<?php

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/no-domain", function (){
    return 'The tenant could not be identified';
})->name("tenant_not_identified");

Auth::routes();

Route::prefix("api")->group(function(){
    Route::middleware(['auth:sanctum'])->group(function () {
        //
        Route::get('/test-api', function (Request $request) {
            return $request->user();
        });
    });

    Route::prefix("tenants")->group(function (){
        Route::get("/", [\App\Http\Controllers\TenantController::class, "index"]);
    });
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{any}', [App\Http\Controllers\AppController::class, 'index'])
    ->where('any', '.*')
    ->name('default');
