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
Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/klien', function () {
    return view('klien');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/artikel', function () {
    return view('artikel');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/produk', function () {
        return view('produk');
    });
});