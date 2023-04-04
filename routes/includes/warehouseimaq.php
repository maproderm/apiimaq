<?php

use App\Http\Controllers\Warehouseimaq\Order\OrderController;
use App\Http\Controllers\Warehouseimaq\Form\FormimaqController;
use App\Http\Controllers\Warehouseimaq\Form\FormlineController;
use App\Http\Controllers\Warehouseimaq\Catalog\CatalogController;
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
    Route::get('/marcas',[CatalogController::class,'indexbrand'])->middleware(['auth'])->name('catalogimaq.indexbrand');
    Route::get('/brands/get-general-all', [CatalogController::class, 'getBrandsImaq'])->middleware(['auth'])->name('catalogimaq.getbrandimaq'); // TO: GENERAL
    Route::post('/storebrandimaq',[CatalogController::class,'storeBrandImaq'])->middleware(['auth'])->name('catalogimaq.storebrandimaq');
    //Category
    Route::get('/categorias-imaq',[CatalogController::class,'indexcategory'])->middleware(['auth'])->name('catalogimaq.indexcategory');
    Route::get('/categories/get-imaq-all', [CatalogController::class, 'getCategoriesImaq'])->middleware(['auth'])->name('catalogimaq.getcategoryimaq'); // TO: GENERAL
    Route::post('/storecategoryimaq',[CatalogController::class,'storeCategoryImaq'])->middleware(['auth'])->name('catalogimaq.storecategoryimaq');
    //Division
    Route::get('/divisiones-imaq',[CatalogController::class,'indexdivision'])->middleware(['auth'])->name('catalogimaq.indexdivision');
    Route::get('/divisiones/get-imaq-all', [CatalogController::class, 'getDivisionesImaq'])->middleware(['auth'])->name('catalogimaq.getdivisionimaq'); // TO: GENERAL
    Route::post('/storedivisionimaq',[CatalogController::class,'storeDivisionImaq'])->middleware(['auth'])->name('catalogimaq.storedivisionimaq');
    //Providers
    Route::get('/providers',[CatalogController::class,'indexprovider'])->middleware(['auth'])->name('catalogimaq.indexprovider');
    Route::get('/providers/get-imaq-all', [CatalogController::class, 'getProvidersImaq'])->middleware(['auth'])->name('catalogimaq.getproviderimaq'); // TO: GENERAL
    Route::post('/save-provider-imaq',[CatalogController::class,'storeProviderImaq'])->middleware(['auth'])->name('catalogimaq.storeproviderimaq');
    //U-medida
    Route::get('/unidad-de-medida',[CatalogController::class,'indexmeasurement'])->middleware(['auth'])->name('catalogimaq.indexmeasurement'); //measurement
    Route::get('/measurement/get-imaq-all', [CatalogController::class, 'getMeasurementImaq'])->middleware(['auth'])->name('catalogimaq.getmeasurementimaq'); // TO: GENERAL
    Route::post('/save-measurement-imaq',[CatalogController::class,'storeMeasurementImaq'])->middleware(['auth'])->name('catalogimaq.storemeasurementimaq');
    //Type-material
    Route::get('/tipo-de-material',[CatalogController::class,'indextypematerial'])->middleware(['auth'])->name('catalogimaq.indexmaterial'); //medida
    Route::get('/material/get-imaq-all', [CatalogController::class, 'getMaterialImaq'])->middleware(['auth'])->name('catalogimaq.getmaterialimaq'); // TO: GENERAL
    Route::post('/save-material-imaq',[CatalogController::class,'storeMaterialImaq'])->middleware(['auth'])->name('catalogimaq.storematerialimaq');

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
    Route::resource('servicios-mi-marca', FormserviceController::class)->middleware(['auth'])->names('formservices')->except(['destroy']);

    Route::get('/lineas-mi-marca',[FormlineController::class,'index'])->middleware(['auth'])->name('formlines.index');
    Route::get('/lineasmimarca/get-imaq-all', [FormlineController::class, 'get'])->middleware(['auth'])->name('formlines.get'); // TO: GENERAL
    Route::resource('lineas-mi-marca', FormlineController::class)->middleware(['auth'])->names('formlines')->except(['destroy']);

});
