
<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/fakultas',FakultasController::class);

//CARA MANUAL------------------------------
// cara menyambukan agar link bisa di buka
// Route::get('list-fakultas', function () {
//     return view('fakultas.list-fakultas');
// });

// Route::get('add-fakultas', function () {
//     return view('fakultas.add-fakultas');
// });

// Route::get('edit-fakultas', function () {
//     return view('fakultas.edit-fakultas');
// });
