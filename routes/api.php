<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminApi\AuthControllerApi;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

/**
 * Admin API Routes
 */

Route::name('api.admin')->prefix('admin')->group(function() {
    Route::post('login',[AuthControllerApi::class,'login']);
    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::post('logout',[AuthControllerApi::class,'logout']);
    });
});