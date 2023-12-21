<?php

use App\Http\Controllers\Sales\Sale\SaleController;
use App\Http\Controllers\Sales\Client\ClientController;
use App\Http\Controllers\Sales\Config\BrandsController;
use App\Http\Controllers\Sales\Config\EventsController;
use App\Http\Controllers\Sales\Dealer\DealerController;
use App\Http\Controllers\Sales\Pedido\PedidoController;
use App\Http\Controllers\Sales\Config\CategoriesController;
use App\Http\Controllers\Sales\Inventory\ProductController;
use App\Http\Controllers\Sales\Config\ConfigmaproController;


Route::group(['middleware' => ['role:developer|superadmin|sales']], function () {
    //products
    Route::get('/productos',[ProductController::class,'index'])->middleware(['auth'])->name('productos.mapro.index');
    Route::get('/productos/create',[ProductController::class,'create'])->middleware(['auth'])->name('productos.mapro.create');
    Route::get('/productos/get-maproderm-all', [ProductController::class, 'get'])->middleware(['auth'])->name('productosmapro.get'); // TO: INVENTARIO VISTA ALMACEN STATUS 1
    Route::get('/productos/delete/{id}',[ProductController::class,'destroy'])->middleware(['auth'])->name('products.destroy');
    Route::get('/productos/editar/{id}', [ProductController::class, 'edit'])->middleware(['auth'])->name('productos.editproduct'); //TO: EDIT A USER
    Route::get('/productos-eliminados',[ProductController::class,'historial'])->middleware(['auth'])->name('productos.mapro.historial');
    Route::get('/productos/eliminados-get-all',[ProductController::class,'productsEliminados'])->middleware(['auth'])->name('productos.mapro.eliminados');
    Route::resource('productos', ProductController::class)->middleware(['auth'])->names('productos.mapro')->except(['destroy']);

    //Clientes
    Route::get('/clientes',[ClientController::class,'index'])->middleware(['auth'])->name('clientes.index');
    Route::get('/clientes/get-clients-all',[ClientController::class,'getClients'])->middleware(['auth'])->name('clientes.get');
    Route::post('/storeclient',[ClientController::class,'storeClient'])->middleware(['auth'])->name('clientes.storeclient');
    Route::resource('clientes', ClientController::class)->middleware(['auth'])->names('clientes')->except(['destroy']);

    //Distribuidores
    Route::get('/distribuidores',[DealerController::class,'index'])->middleware(['auth'])->name('dealers.index');
    Route::get('/distribuidores/get-all',[DealerController::class,'getDealers'])->middleware(['auth'])->name('dealers.get');
    Route::resource('distribuidores', DealerController::class)->middleware(['auth'])->names('dealers')->except(['destroy']);

    //Ventas
    Route::get('/ventas',[SaleController::class,'index'])->middleware(['auth'])->name('ventas.index');
    Route::get('/ventas/create',[SaleController::class,'create'])->middleware(['auth'])->name('ventas.create');
    Route::resource('ventas', SaleController::class)->middleware(['auth'])->names('ventas')->except(['destroy']);

    //Orders
    Route::get('/pedidos',[PedidoController::class,'index'])->middleware(['auth'])->name('pedidos.index');
    Route::get('/cotizaciones',[PedidoController::class,'quotation'])->middleware(['auth'])->name('pedidos.quotation');
    Route::get('/pedidos/get-all',[PedidoController::class,'getOrdersMapro'])->middleware(['auth'])->name('pedidos.get');
    Route::resource('pedidos', PedidoController::class)->middleware(['auth'])->names('pedidos')->except(['destroy']);

    //Config
    //Categories
    Route::get('/categorias-maproderm',[CategoriesController::class,'index'])->middleware(['auth'])->name('catalogmpd.categories.index');
    Route::get('/categorias/get-maproderm-all',[CategoriesController::class,'get'])->middleware(['auth'])->name('catalogmpd.categories.get');
    Route::get('/categories-mpd/{id}/edit',[CategoriesController::class,'edit'])->middleware(['auth'])->name('catalogimaq.medida.edit');
    Route::get('/categories-mpd/delete/{id}',[CategoriesController::class,'delete'])->middleware(['auth'])->name('catalogimaq.medida.destroy');
    Route::resource('maproderm-categorias', CategoriesController::class)->middleware(['auth'])->names('catalogmpd.categories')->except(['destroy']);

    //Brand
    Route::get('/marcas-maproderm',[BrandsController::class,'index'])->middleware(['auth'])->name('catalogmpd.brands.index');
    Route::get('/marcas/get-maproderm-all',[BrandsController::class,'get'])->middleware(['auth'])->name('catalogmpd.brands.get');
    Route::get('/brands-mpd/{id}/edit',[BrandsController::class,'edit'])->middleware(['auth'])->name('catalogmpd.brands.edit');
    Route::get('/brands-mpd/delete/{id}',[BrandsController::class,'delete'])->middleware(['auth'])->name('catalogmpd.brands.destroy');
    Route::resource('maproderm-marcas', BrandsController::class)->middleware(['auth'])->names('catalogmpd.brands')->except(['destroy']);

    Route::get('/maproderm-eventos',[EventsController::class,'index'])->middleware(['auth'])->name('catalogmpd.events.index');
    Route::get('/events/get-maproderm-all',[EventsController::class,'get'])->middleware(['auth'])->name('catalogmpd.events.get');
    Route::get('/events-mpd/{id}/edit',[EventsController::class,'edit'])->middleware(['auth'])->name('catalogmpd.events.edit');
    Route::get('/events-mpd/delete/{id}',[EventsController::class,'delete'])->middleware(['auth'])->name('catalogmpd.events.destroy');
    Route::resource('maproderm-eventos', EventsController::class)->middleware(['auth'])->names('catalogmpd.events')->except(['destroy']);

    Route::resource('configuracionesmapro', ConfigmaproController::class)->middleware(['auth'])->names('catalogmpd')->except(['destroy']);
});
