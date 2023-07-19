<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DistributorController;

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

//Admin

// Akun
Route::get('/admin/akun', [App\Http\Controllers\AkunController::class, 'index']);
Route::get('/admin/akun/create', [App\Http\Controllers\AkunController::class, 'create']);
Route::post('/admin/akun/store', [App\Http\Controllers\AkunController::class, 'store']);
Route::get('/admin/akun/edit/{id}', [App\Http\Controllers\AkunController::class, 'edit']);
Route::patch('/admin/akun/update/{id}', [App\Http\Controllers\AkunController::class, 'update']);
Route::delete('/admin/akun/delete/{id}', [App\Http\Controllers\AkunController::class, 'delete']);

// Distributor
Route::get('/admin/distributor', [App\Http\Controllers\DistributorController::class, 'index']);
Route::get('/admin/distributor/create', [App\Http\Controllers\DistributorController::class, 'create']);
Route::post('/admin/distributor/store', [App\Http\Controllers\DistributorController::class, 'store']);
Route::get('/admin/distributor/edit/{id}', [App\Http\Controllers\DistributorController::class, 'edit']);
Route::patch('/admin/distributor/update/{id}', [App\Http\Controllers\DistributorController::class, 'update']);
Route::delete('/admin/distributor/delete/{id}', [App\Http\Controllers\DistributorController::class, 'delete']);


// Barang
Route::get('/admin/barang', [App\Http\Controllers\BarangController::class, 'index']);
Route::get('/admin/barang/create', [App\Http\Controllers\BarangController::class, 'create']);
Route::post('/admin/barang/store', [App\Http\Controllers\BarangController::class, 'store']);
Route::get('/admin/barang/edit/{id}', [App\Http\Controllers\BarangController::class, 'edit']);
Route::patch('/admin/barang/update/{id}', [App\Http\Controllers\BarangController::class, 'update']);
Route::delete('/admin/barang/delete/{id}', [App\Http\Controllers\BarangController::class, 'delete']);

// Penjualan
Route::get('/admin/penjualan', [App\Http\Controllers\PenjualanController::class, 'index']);
Route::get('/admin/penjualan/create', [App\Http\Controllers\PenjualanController::class, 'create']);
Route::post('/admin/penjualan/store', [App\Http\Controllers\PenjualanController::class, 'store']);
Route::get('/admin/penjualan/edit/{id}', [App\Http\Controllers\PenjualanController::class, 'edit']);
Route::patch('/admin/penjualan/update/{id}', [App\Http\Controllers\PenjualanController::class, 'update']);
Route::delete('/admin/penjualan/delete/{id}', [App\Http\Controllers\PenjualanController::class, 'delete']);

//Pembelian
Route::get('/admin/pembelian', [App\Http\Controllers\PembelianController::class, 'index']);
Route::get('/admin/pembelian/create', [App\Http\Controllers\PembelianController::class, 'create']);
Route::post('/admin/pembelian/store', [App\Http\Controllers\PembelianController::class, 'store']);
Route::get('/admin/pembelian/edit/{id}', [App\Http\Controllers\PembelianController::class, 'edit']);
Route::patch('/admin/pembelian/update/{id}', [App\Http\Controllers\PembelianController::class, 'update']);
Route::delete('/admin/pembelian/delete/{id}', [App\Http\Controllers\PembelianController::class, 'delete']);

// Retur
Route::get('/admin/retur', [App\Http\Controllers\ReturController::class, 'index']);
Route::get('/admin/retur/create', [App\Http\Controllers\ReturController::class, 'create']);
Route::post('/admin/retur/store', [App\Http\Controllers\ReturController::class, 'store']);
Route::get('/admin/retur/edit/{id}', [App\Http\Controllers\ReturController::class, 'edit']);
Route::patch('/admin/retur/update/{id}', [App\Http\Controllers\ReturController::class, 'update']);
Route::delete('/admin/retur/delete/{id}', [App\Http\Controllers\ReturController::class, 'delete']);

// Pengiriman
Route::get('/admin/pengiriman', [App\Http\Controllers\PengirimanController::class, 'index']);
Route::get('/admin/pengiriman/create', [App\Http\Controllers\PengirimanController::class, 'create']);
Route::post('/admin/pengiriman/store', [App\Http\Controllers\PengirimanController::class, 'store']);
Route::get('/admin/pengiriman/edit/{id}', [App\Http\Controllers\PengirimanController::class, 'edit']);
Route::patch('/admin/pengiriman/update/{id}', [App\Http\Controllers\PengirimanController::class, 'update']);
Route::delete('/admin/pengiriman/delete/{id}', [App\Http\Controllers\PengirimanController::class, 'delete']);
