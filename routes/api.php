<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\User\UserController;
use App\Http\Controllers\Api\V1\Warehousemapro\Order\OrdersController;
use App\Http\Controllers\Api\V1\Warehousemapro\Inventory\ProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// AUTHENTICATION ROUTES


Route::prefix('v1')->group(function () {
    Route::post('/signup', [AuthController::class, 'signup'])->name('api.user.create');
    Route::post('/login', [AuthController::class, 'login'])->name('api.user.login');
    Route::post('/token/delete', [AuthController::class, 'deleteDevice'])->name('api.token.destroy');
});

// ROUTES PROTECTED BY AUTH:SANCTUM
Route::group(['middleware' => 'auth:sanctum'], function() {

    //  USERS
    Route::apiResource('users', UserController::class);

    //CUSTOMER
    Route::get('/customer/get-all', [UserController::class, 'getClients'])->name('api.clients.get');

    // Route::apiResource('products', ProductsController::class);
    Route::get('/get-products', [ProductsController::class, 'getProducts'])->name('api.products.get');



});

Route::apiResource('orders', OrdersController::class);


