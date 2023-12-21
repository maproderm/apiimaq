<?php

use App\Http\Controllers\User\UserController;

Route::group(['middleware' => ['role:developer|superadmin']], function () {
    //

    Route::get('/user/perfil/{id}', [UserController::class, 'show'])->middleware(['auth'])->name('all.users.getIndividual'); //TO: VER PERFIL DEL USUARIO

    Route::get('/users',[UserController::class,'index'])->middleware(['auth'])->name('all.users.index');
    Route::get('/users/get-general-all', [UserController::class, 'get'])->middleware(['auth'])->name('all.users.get'); // TO: GENERAL
    Route::get('/users-imaq/{id}/edit',[UserController::class,'edit'])->middleware(['auth'])->name('all.users.edit');
    Route::get('/users-imaq/delete/{id}',[UserController::class,'delete'])->middleware(['auth'])->name('all.users.destroy');
    Route::resource('users', UserController::class)->middleware(['auth'])->names('all.users')->except(['destroy']);

    Route::resource('users', UserController::class)->middleware(['auth'])->names('all.users')->except(['destroy']);

});
