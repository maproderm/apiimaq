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


Route::group(['middleware' => ['role:developer|superadmin|almacenimaq']], function () {
    //products
    Route::get('/products',[InventoryController::class,'index'])->middleware(['auth'])->name('products.index');
    Route::get('/products/create',[InventoryController::class,'create'])->middleware(['auth'])->name('products.create');
    Route::post('/store',[InventoryController::class,'store'])->middleware(['auth'])->name('products.store');
    Route::get('/products/get-general-all', [InventoryController::class, 'getProducts'])->middleware(['auth'])->name('products.get'); // TO: INVENTARIO VISTA ALMACEN STATUS 1
    Route::get('/revisar-productos',[InventoryController::class,'revise'])->middleware(['auth'])->name('products.revise');
    Route::get('/products/get-revise-all', [InventoryController::class, 'getProductsRevision'])->middleware(['auth'])->name('productsrevision.get'); // TO: REVISION DE PRODUCTOS STATUS 0
    Route::resource('products', InventoryController::class)->middleware(['auth'])->names('products')->except(['destroy']);

    //Orders
    Route::get('/orders',[OrderController::class,'index'])->middleware(['auth'])->name('orders.index');
    Route::get('/orders/create',[OrderController::class,'create'])->middleware(['auth'])->name('orders.create');
    Route::resource('orders', OrderController::class)->middleware(['auth'])->names('orders')->except(['destroy']);

    //CATALOG
    //Brand
    Route::get('/marcas',[BrandController::class,'index'])->middleware(['auth'])->name('catalogimaq.brand.index');
    Route::get('/brands/get-general-all', [BrandController::class, 'getBrandsImaq'])->middleware(['auth'])->name('catalogimaq.brand.get'); // TO: GENERAL
    Route::get('/brands-imaq/{id}/edit',[BrandController::class,'edit'])->middleware(['auth'])->name('catalogimaq.brand.edit');
    Route::get('/brands-imaq/delete/{id}',[BrandController::class,'delete'])->middleware(['auth'])->name('catalogimaq.brand.destroy');
    Route::resource('imaq-marcas', BrandController::class)->middleware(['auth'])->names('catalogimaq.brand')->except(['destroy']);
    //Category
    Route::get('/categorias-imaq',[CategoryController::class,'index'])->middleware(['auth'])->name('catalogimaq.category.index');
    Route::get('/categories/get-imaq-all', [CategoryController::class, 'get'])->middleware(['auth'])->name('catalogimaq.category.get'); // TO: GENERAL
    Route::get('/categories-imaq/{id}/edit',[CategoryController::class,'edit'])->middleware(['auth'])->name('catalogimaq.category.edit');
    Route::get('/categories-imaq/delete/{id}',[CategoryController::class,'delete'])->middleware(['auth'])->name('catalogimaq.category.destroy');
    Route::resource('imaq-categorias', CategoryController::class)->middleware(['auth'])->names('catalogimaq.category')->except(['destroy']);
    //Division
    Route::get('/divisiones-imaq',[DivisionController::class,'index'])->middleware(['auth'])->name('catalogimaq.division.index');
    Route::get('/divisiones/get-imaq-all', [DivisionController::class, 'get'])->middleware(['auth'])->name('catalogimaq.division.index'); // TO: GENERAL
    Route::get('/division-imaq/{id}/edit',[DivisionController::class,'edit'])->middleware(['auth'])->name('catalogimaq.division.edit');
    Route::get('/division-imaq/delete/{id}',[DivisionController::class,'delete'])->middleware(['auth'])->name('catalogimaq.division.destroy');
    Route::resource('imaq-divisiones', DivisionController::class)->middleware(['auth'])->names('catalogimaq.division')->except(['destroy']);
    //Providers
    Route::get('/providers',[ProviderController::class,'index'])->middleware(['auth'])->name('catalogimaq.proveedor.index');
    Route::get('/providers/get-imaq-all', [ProviderController::class, 'get'])->middleware(['auth'])->name('catalogimaq.proveedor.get'); // TO: GENERAL
    Route::resource('imaq-proveedores', ProviderController::class)->middleware(['auth'])->names('catalogimaq.proveedor')->except(['destroy']);
    //U-medida
    Route::get('/unidad-de-medida',[MedidaController::class,'index'])->middleware(['auth'])->name('catalogimaq.medida.index'); //measurement
    Route::get('/measurement/get-imaq-all', [MedidaController::class, 'get'])->middleware(['auth'])->name('catalogimaq.medida.get'); // TO: GENERAL
    Route::get('/medida-imaq/{id}/edit',[MedidaController::class,'edit'])->middleware(['auth'])->name('catalogimaq.medida.edit');
    Route::get('/medida-imaq/delete/{id}',[MedidaController::class,'delete'])->middleware(['auth'])->name('catalogimaq.medida.destroy');
    Route::resource('imaq-unidades-de-medida', MedidaController::class)->middleware(['auth'])->names('catalogimaq.medida')->except(['destroy']);
    //Type-material
    Route::get('/tipo-de-material',[MaterialController::class,'index'])->middleware(['auth'])->name('catalogimaq.material.index'); //medida
    Route::get('/material/get-imaq-all', [MaterialController::class, 'get'])->middleware(['auth'])->name('catalogimaq.material.get'); // TO: GENERAL
    Route::get('/material-imaq/{id}/edit',[MaterialController::class,'edit'])->middleware(['auth'])->name('catalogimaq.material.edit');
    Route::get('/material-imaq/delete/{id}',[MaterialController::class,'delete'])->middleware(['auth'])->name('catalogimaq.material.destroy');
    Route::resource('imaq-tipo-de-material', MaterialController::class)->middleware(['auth'])->names('catalogimaq.material')->except(['destroy']);

    Route::resource('catalog', CatalogController::class)->middleware(['auth'])->names('catalogimaq')->except(['destroy']);

    //Formulario-Mi-Marca
    Route::get('/cotizacion-mi-marca',[FormimaqController::class,'index'])->middleware(['auth'])->name('formimaq.index');
    Route::get('/cotizacionmimarca/get-imaq-all', [FormimaqController::class, 'get'])->middleware(['auth'])->name('formimaq.get'); // TO: GENERAL
    Route::get('/status/editar/{id}', [FormimaqController::class, 'edit'])->middleware(['auth'])->name('formimaq.editstatus'); //TO: EDIT
    Route::get('/message/editar/{id}', [FormimaqController::class, 'viewmessage'])->middleware(['auth'])->name('formimaq.message'); //TO: EDIT
    Route::post('/storestatusform',[FormimaqController::class,'store'])->middleware(['auth'])->name('formimaq.store');
    Route::resource('cotizacion-mi-propia-marca', FormimaqController::class)->middleware(['auth'])->names('formimaq')->except(['destroy']);

    Route::get('/servicios-mi-marca',[FormserviceController::class,'index'])->middleware(['auth'])->name('formservices.index');
    Route::get('/serviciosmimarca/get-imaq-all', [FormserviceController::class, 'get'])->middleware(['auth'])->name('formservices.get'); // TO: GENERAL
    Route::get('/statusservice/editar/{id}', [FormserviceController::class, 'edit'])->middleware(['auth'])->name('formservices.edit'); //TO: EDIT
    Route::resource('servicios-mi-marca', FormserviceController::class)->middleware(['auth'])->names('formservices')->except(['destroy']);

    Route::get('/lineas-mi-marca',[FormlineController::class,'index'])->middleware(['auth'])->name('formlines.index');
    Route::get('/lineasmimarca/get-imaq-all', [FormlineController::class, 'get'])->middleware(['auth'])->name('formlines.get'); // TO: GENERAL
    Route::get('/statuslineas/editar/{id}', [FormlineController::class, 'edit'])->middleware(['auth'])->name('formlines.edit'); //TO: EDIT
    Route::resource('lineas-mi-marca', FormlineController::class)->middleware(['auth'])->names('formlines')->except(['destroy']);

});
