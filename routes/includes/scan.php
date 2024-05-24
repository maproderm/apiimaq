<?php

use App\Http\Controllers\Scan\ProductscanController;


Route::group(['middleware' => ['role:developer|superadmin|acondicionado']], function () {
    //products
    // Route::get('/productos-acondicionado',[ProductsaconController::class,'index'])->middleware(['auth'])->name('productosacondicionado.index');
    // Route::get('/productos-acondicionado/get-all', [ProductsaconController::class, 'get'])->middleware(['auth'])->name('productosacondicionado.get'); // TO: INVENTARIO VISTA ALMACEN STATUS 1
    // Route::get('/productos-acon/{id}/edit',[ProductsaconController::class,'edit'])->middleware(['auth'])->name('productosacondicionado.edit');
    // Route::get('/productos-acon/delete/{id}',[ProductsaconController::class,'delete'])->middleware(['auth'])->name('productosacondicionado.destroy');
    // Route::resource('productos-acondicionado', ProductsaconController::class)->middleware(['auth'])->names('productosacondicionado')->except(['destroy']);



    Route::get('/scan', [ProductscanController::class, 'showScanForm']);
    Route::post('/scan', [ProductscanController::class, 'searchProduct']);


});
