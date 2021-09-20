<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\RtController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\UserController;

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
Auth::routes();
Route::get('/', function () {
    return view('form/formguest');
})->name('welcome');


Route::middleware(['admin'])->group(function () {
	Route::resource('user', UserController::class);
	Route::resource('warga', WargaController::class);
});

Route::middleware(['rw'])->group(function () {
	Route::resource('rw', RwController::class);
	// Route::get('wargarw', [RwController::class, 'index'])->name('wargarw');
});

Route::middleware(['rt'])->group(function () {
	Route::resource('rt', RtController::class);
	// Route::get('rt', [RtController::class, 'index'])->name('rt');
	// Route::get('/create', [RtController::class, 'create'])->name('create');
	// Route::get('/show', [RtController::class, 'show'])->name('show');
	// Route::post('/store', [RtController::class, 'store'])->name('store');
	// Route::post('/destroy', [RtController::class, 'destroy'])->name('destroy');
	// Route::post('/update', [RtController::class, 'update'])->name('update');
});

Route::middleware(['guest'])->group(function () {
	Route::post('/storeGuest', [WargaController::class, 'storeGuest'])->name('storeGuest');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
