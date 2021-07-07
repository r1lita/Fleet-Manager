<?php

use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\ConstructorController;
use App\Http\Controllers\Api\AuthController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['jwt.verify']], function() {
    // Route::get('logout', [ApiController::class, 'logout']);
    // Route::get('get_user', [ApiController::class, 'get_user']);
    // Route::get('products', [ProductController::class, 'index']);
    // Route::get('products/{id}', [ProductController::class, 'show']);
    // Route::post('create', [ProductController::class, 'store']);
    // Route::put('update/{product}',  [ProductController::class, 'update']);
    // Route::delete('delete/{product}',  [ProductController::class, 'destroy']);

    Route::apiResource('vehicles', VehicleController::class);
    Route::apiResource('constructors', ConstructorController::class);
});