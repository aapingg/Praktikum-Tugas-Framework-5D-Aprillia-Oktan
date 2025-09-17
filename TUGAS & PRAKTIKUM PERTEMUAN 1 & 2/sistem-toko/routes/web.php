<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Route about
Route::get('/about', function () {
    return 'Ini halaman About';
})->name('about');

// Route contact
Route::get('/contact', function () {
    return 'Ini halaman Contact';
})->name('contact');

// Route users (dengan parameter id)
Route::get('/users/{id}', function ($id) {
    return "Ini halaman user dengan ID: ".$id;
})->name('users');

// Group route manage
Route::prefix('manage')->group(function () {
    Route::get('/edit', function () {
        return 'Ini halaman Edit';
    })->name('edit');

    Route::get('/barang', function () {
        return 'Ini halaman Barang';
    })->name('barang');
});