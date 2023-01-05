<?php

use App\Http\Controllers\CrudDokterController;
use App\Http\Controllers\CustemorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataCustemorController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TreatmentController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/welcome_admin', 'index')->name('dashboard');
    });

    Route::controller(KategoriController::class)->group(function(){
        Route::get('/kategori', 'index')->name('kategori');
        Route::get('/kategori_tambah', 'tambah')->name('kategori.tambah');
        Route::post('/kategori_store', 'store')->name('kategori.store');
        Route::get('/kategori_edit/{id}', 'edit')->name('kategori.edit');
        Route::put('/kategori_update/{id}', 'update')->name('kategori.update');
        Route::get('/kategori_destroy/{id}', 'destroy')->name('kategori.destroy');
    });

    Route::controller(CrudDokterController::class)->group(function(){
        Route::get('/data-dokter', 'index')->name('data-dokter');
        Route::get('/tambah-dokter', 'tambah')->name('tambah-dokter');
        Route::post('/store-dokter', 'store')->name('store-dokter');
        Route::get('/edit-dokter/{id}', 'edit')->name('edit-dokter');
        Route::put('/update-dokter/{id}', 'update')->name('update-dokter');
        Route::get('/destroy-dokter/{id}', 'destroy')->name('destroy-dokter');
    });

    Route::controller(DataCustemorController::class)->group(function(){
        Route::get('/data-custemor', 'index')->name('data.custemor');
    });

    Route::controller(TreatmentController::class)->group(function(){
        Route::get('/data-treatment', 'index')->name('data.treatment');
        Route::get('/tambah-treatment', 'tambah')->name('tambah.treatment');
        Route::post('/store-treatment', 'store')->name('store.treatment');
    });
});



Route::prefix('dokter')->middleware(['auth','isDokter'])->group(function(){
    Route::controller(DokterController::class)->group(function(){
        Route::get('/welcome_dokter','index')->name('dashboard.dokter');  
    });
});



Route::prefix('custemor')->middleware(['auth', 'isCustemor'])->group(function(){
    Route::controller(CustemorController::class)->group(function(){
        Route::get('/welcome_custemor', 'index')->name('dashboard.custemor');
    });

    Route::controller(TransaksiController::class)->group(function(){
        Route::get('/transaksi', 'index')->name('transaksi.saya');
        Route::get('/checkout-treatment', 'treatment')->name('treatment.custemor');
        Route::post('/checkout-treatment-fix', 'checkout')->name('checkout.custemor');
        Route::get('/berhasil-checkout', 'berhasil')->name('checkout.berhasil');
    });
});