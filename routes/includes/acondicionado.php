<?php

use App\Http\Controllers\Warehousemapro\Order\OrderController;
use App\Http\Controllers\Warehousemapro\Entraysale\EntradasController;
use App\Http\Controllers\Acondicionado\Inventory\ProductsaconController;


Route::group(['middleware' => ['role:developer|superadmin|acondicionado']], function () {
    //products
    Route::get('/productos-acondicionado',[ProductsaconController::class,'index'])->middleware(['auth'])->name('productosacondicionado.index');
    Route::get('/productos-acondicionado/get-all', [ProductsaconController::class, 'get'])->middleware(['auth'])->name('productosacondicionado.get'); // TO: INVENTARIO VISTA ALMACEN STATUS 1
    Route::get('/productos-acon/{id}/edit',[ProductsaconController::class,'edit'])->middleware(['auth'])->name('productosacondicionado.edit');
    Route::get('/productos-acon/delete/{id}',[ProductsaconController::class,'delete'])->middleware(['auth'])->name('productosacondicionado.destroy');
    Route::resource('productos-acondicionado', ProductsaconController::class)->middleware(['auth'])->names('productosacondicionado')->except(['destroy']);

    // //Orders
    // Route::get('/pedidos-maproderm',[OrderController::class,'index'])->middleware(['auth'])->name('ordersmapro.index');
    // Route::get('/pedidos-completados',[OrderController::class,'orderscompleted'])->middleware(['auth'])->name('ordersmapro.completed');
    // Route::get('/pedidos-maproderm/create',[OrderController::class,'create'])->middleware(['auth'])->name('ordersmapro.create');
    // Route::resource('pedidos-maproderm', OrderController::class)->middleware(['auth'])->names('ordersmapro')->except(['destroy']);

    // //Entradas y Salidas
    // Route::get('/entradas-productos-maproderm',[EntradasController::class,'entradas'])->middleware(['auth'])->name('entraysaleproducts.index');
    // Route::get('/salidas-productos-maproderm',[EntradasController::class,'salidas'])->middleware(['auth'])->name('entraysaleproducts.index');
    // Route::resource('entradas-productos-maproderm', EntradasController::class)->middleware(['auth'])->names('entraysaleproducts')->except(['destroy']);

});
