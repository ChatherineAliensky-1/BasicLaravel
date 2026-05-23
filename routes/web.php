
<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {
    
    Route::get('/', function () {
    return view('welcome');
    });

    Route::resource('/fakultas',FakultasController::class);
    Route::resource('prodi', ProdiController::class);
});


// Note : 
// ->middleware('auth')->group(function() agar user harus login dulu baru bisa lihat data