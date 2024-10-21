<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;

Route::get('/', function () {
    return view('index');
});

Route::prefix('/gds')->name('gds.')->group(function(){
    Route::get('/', [AbsenController::class, 'index'])->name('home');
    Route::get('/buat', [AbsenController::class,'create'])->name('create');
    Route::post('/buat/tambah', [AbsenController::class,  'store'])->name('store');

});
