<?php

use App\Http\Controllers\Warehouseimaq\Order\OrderController;
use App\Http\Controllers\Warehouseimaq\Catalog\BrandController;
use App\Http\Controllers\Warehouseimaq\Form\FormimaqController;
use App\Http\Controllers\Warehouseimaq\Form\FormlineController;
use App\Http\Controllers\Warehouseimaq\Catalog\MedidaController;
use App\Http\Controllers\Warehouseimaq\Catalog\CatalogController;
use App\Http\Controllers\Warehouseimaq\Catalog\CategoryController;
use App\Http\Controllers\Warehouseimaq\Catalog\DivisionController;
use App\Http\Controllers\Warehouseimaq\Catalog\MaterialController;
use App\Http\Controllers\Warehouseimaq\Catalog\ProviderController;
use App\Http\Controllers\Warehouseimaq\Form\FormserviceController;
use App\Http\Controllers\Warehouseimaq\Inventory\InventoryController;
use App\Http\Controllers\Warehouseimaqone\Inventory\ImaqProductInventoryController;
use App\Http\Controllers\Warehouseimaqone\Inventory\ImaqInventoryMovementController;


Route::group(['middleware' => ['role:developer|superadmin|almacenimaq']], function () {
    //products



    Route::get('/imaq-products-inventory',[ImaqProductInventoryController::class,'index'])->middleware(['auth'])->name('imaq-products-inventory.index');
    Route::get('/imaq-products-inventory/create',[ImaqProductInventoryController::class,'create'])->middleware(['auth'])->name('imaq-products-inventory.create');
    Route::get('/imaq-products-inventory/get-all', [ImaqProductInventoryController::class, 'getAll'])->middleware(['auth'])->name('imaq-products-inventory.getAll'); //
    Route::get('/imaq-products-inventory/delete/{id}',[ImaqProductInventoryController::class,'destroy'])->middleware(['auth'])->name('imaq-products-inventory.destroy');
    Route::get('/imaq-products-inventory/editar/{id}', [ImaqProductInventoryController::class, 'edit'])->middleware(['auth'])->name('imaq-products-inventory.editproduct'); //TO: EDIT A USER
    Route::get('/imaq-products-inventory-eliminados',[ImaqProductInventoryController::class,'historial'])->middleware(['auth'])->name('imaq-products-inventory.historial');
    Route::get('/imaq-products-inventory/eliminados-get-all',[ImaqProductInventoryController::class,'productsEliminados'])->middleware(['auth'])->name('imaq-products-inventory.eliminados');
    Route::resource('/imaq-products-inventory',ImaqProductInventoryController::class)->middleware(['auth'])->names('imaq-products-inventory')->except(['destroy']);

    //Entrada
    Route::post('/imaq-inventory/in',  [ImaqInventoryMovementController::class, 'storeIn'])->middleware(['auth'])->name('imaq.inventory.in');
    //Salida
    Route::post('/imaq-inventory/out', [ImaqInventoryMovementController::class, 'storeOut'])->middleware(['auth'])->name('imaq.inventory.out');


    Route::prefix('imaq-inventory')->name('imaq.inventory.')
        ->group(function () {

            // Entrada
            Route::post(
                'in',
                [ImaqInventoryMovementController::class, 'storeIn']
            )->name('in');

            // Salida
            Route::post(
                'out',
                [ImaqInventoryMovementController::class, 'storeOut']
            )->name('out');

            // Transferencia (opcional)
            Route::post(
                'transfer',
                [ImaqInventoryMovementController::class, 'transfer']
            )->name('transfer');
        });

    /*
    |--------------------------------------------------------------------------
    | Consulta de stock
    |--------------------------------------------------------------------------
    */
    Route::get(
        'imaq-stock/{clave}',
        [ImaqInventoryMovementController::class, 'stockByClave']
    )->name('imaq.stock.byClave');



});
