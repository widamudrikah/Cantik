<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DokterController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\TransaksiController;
use App\Http\Controllers\Api\TreatmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->group(function(){
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

Route::controller(KategoriController::class)->group(function(){
    Route::get('/kategori', 'index');
});

Route::controller(TreatmentController::class)->group(function(){
    Route::get('/treatment', 'index');
    Route::get('/treatment/{id}', 'detail');
    Route::post('/treatment/tambah', 'tambahTreatment');
    Route::put('/treatment/update/{id}', 'updateTreatment');
    Route::delete('/treatment/hapus/{id}', 'hapusTreatment');
});

Route::controller(DokterController::class)->group(function(){
    Route::get('/dokter', 'index');
});

Route::controller(TransaksiController::class)->group(function(){
    Route::get('/transaksi', 'index');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
