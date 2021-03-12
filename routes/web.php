<?php

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

Route::get('/','AuthController@index')->name('login');
Route::post('/','AuthController@login')->name('login');

Route::group(['middleware' => 'auth'], function() {
    //dashboard
    Route::get('/dashboard','DashboardController@index')->name('dashboard');    
    Route::resource('rencana','RencanaController');
    Route::resource('pembelian','PembelianController');
    Route::resource('pengeluaran','PengeluaranController');

    //print
    Route::get('laporan','LaporanController@index')->name('laporan');
    Route::get('laporan/l','LaporanController@print')->name('print');
    



    Route::get('logout','AuthController@logout')->name('logout');
});