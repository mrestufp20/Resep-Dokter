<?php

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


Route::group(['middleware' => ['web']], function () {
    Route::resource('resep', 'ResepController');
    Route::resource('dokter', 'DokterController');
    Route::resource('obat', 'ObatController');
    Route::resource('detail', 'DetailController');

    Route::resource('pasien', 'PasienController');
    Route::resource('poliklinik', 'PoliklinikController');
    Route::resource('pembayaran', 'PembayaranController');
    Route::resource('pendaftaran', 'PendaftaranController');

    
});