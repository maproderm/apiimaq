<?php


use App\Http\Controllers\Security\BusinessController;


Route::group(['middleware' => ['role:developer|superadmin']], function () {

    Route::get('/divisiones-imaq',[BusinessController::class,'index'])->middleware(['auth'])->name('business.index');
    Route::get('/business/get-imaq-all', [BusinessController::class, 'get'])->middleware(['auth'])->name('business.index'); // TO: GENERAL
    Route::get('/business-imaq/{id}/edit',[BusinessController::class,'edit'])->middleware(['auth'])->name('business.edit');
    Route::get('/business-imaq/delete/{id}',[BusinessController::class,'delete'])->middleware(['auth'])->name('business.destroy');
    Route::resource('empresa', BusinessController::class)->middleware(['auth'])->names('business')->except(['destroy']);

});
