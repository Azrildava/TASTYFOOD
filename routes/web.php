<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function (){
        return view('admin.index');
    });
    //untuk route beckend lainnya
    Route::resource('galeri', App\Http\Controllers\GaleryController::class);
    Route::resource('tentang', App\Http\Controllers\TentangController::class);
    Route::resource('berita', App\Http\Controllers\BeritaController::class);
    Route::resource('contact', App\Http\Controllers\ContactController::class);
});

// Route::get('/', [FrontController::class, 'home']);
Route::get('galeri', [FrontController::class, 'galerii'])->name('galeri');
Route::get('tentang', [FrontController::class, 'tentang'])->name('tentang');
Route::get('berita', [FrontController::class, 'berita'])->name('berita');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
