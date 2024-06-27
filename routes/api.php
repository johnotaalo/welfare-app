<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['sanctum.tenant'])->get("/test-api", function (){
    dd("We are here");
});

Route::middleware(['sanctum.tenant', 'auth:sanctum'])->get('/user', function (Request $request) {
    dd("We are here");
    return $request->user();
});
