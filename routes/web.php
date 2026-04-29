<!-- cara buat ROUTER -->
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// cara menyambukan agar link bisa di buka
Route::get('list-fakultas', function () {
    return view('fakultas.list-fakultas');
});

Route::get('add-fakultas', function () {
    return view('fakultas.add-fakultas');
});

Route::get('edit-fakultas', function () {
    return view('fakultas.edit-fakultas');
});
