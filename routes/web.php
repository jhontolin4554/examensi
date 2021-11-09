<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();
Route::get('logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::get('home',[\App\Http\Controllers\HomeController::class,'index'])->name('home');


Route::middleware(['auth'])->group(function() {

    Route::resource('expedientes',\App\Http\Controllers\expedienteController::class)->names('expedientes');
    Route::resource('user',\App\Http\Controllers\userController::class)->names('user');
    Route::resource('teams',\App\Http\Controllers\teamController::class)->names('teams');
    Route::resource('expedientes',\App\Http\Controllers\expedienteController::class)->names('expedientes');


    Route::group(['prefix' => 'carpetas'], function () {

        Route::get('/{id}', [\App\Http\Controllers\folderController::class,'ver'])->name('carpetas.ver');

    });

    Route::group(['prefix' => 'eliminar'], function () {

        Route::get('/{id}', [\App\Http\Controllers\expedienteController::class,'destroy'])->name('eliminar.destroy');

    });
    Route::group(['prefix' => 'download'], function () {

        Route::get('/{nombre}', [\App\Http\Controllers\HomeController::class,'getDownload'])->name('download.getDownload');

    });

    Route::group(['prefix' => 'eliminarimagen'], function () {

        Route::get('/{id}', [\App\Http\Controllers\imagenController::class,'destroy'])->name('eliminarimagen.destroy');

    });



    Route::group(['prefix' => 'subir'], function () {

        Route::post('/{id}', [\App\Http\Controllers\imagenController::class,'subir'])->name('subir.subir');


    });
    Route::group(['prefix' => 'imagen'], function () {

        Route::get('/{id}', [\App\Http\Controllers\imagenController::class,'create'])->name('imagen.create');

    });


    Route::resource('folders',\App\Http\Controllers\folderController::class)->names('folders');

    Route::resource('perfiles',\App\Http\Controllers\perfilController::class)->names('perfiles');

});
