<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route admin (backend)
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('berita', App\Http\Controllers\BeritaController::class);
    Route::resource('galeri', App\Http\Controllers\GaleryController::class);
    Route::resource('tentang', App\Http\Controllers\TentangController::class);
    Route::resource('contact', App\Http\Controllers\ContactController::class);
    // untuk route admin lainnya

});

// Route user (Frontend)

// Route::get('/',[App\Http\Controllers\FrontController::class,'index'])->name('');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
