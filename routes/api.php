<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminApi\AuthController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

/**
 * Admin API Routes
 */

Route::name('api.admin')->prefix('admin')->group(function() {
    Route::post('login',[AuthController::class,'login']);
    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::post('logout',[AuthController::class,'logout']);
    });
});