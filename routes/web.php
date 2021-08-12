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

Route::get('/login', 'AuthController@getLogin');
Route::post('/login', 'AuthController@login')->name('login');

Route::resource('card', 'CardController');
Route::resource('scan', 'ScanController');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard', 'DashboardController');
    Route::group(['prefix' => 'saldo', 'as' => 'saldo.', 'namespace' => 'Saldo'], function () {
        Route::resource('hutang', 'SaldoHutangController');
        Route::resource('simpanan', 'SaldoSimpananController');
        Route::resource('ekop', 'SaldoEkopController');
    });

    Route::group(['prefix' => 'total_belanja', 'as' => 'total_belanja.', 'namespace' => 'TotalBelanja'], function () {
        Route::resource('kredit', 'KreditController');
        Route::resource('tunai', 'TunaiController');
        Route::resource('nontunai', 'EkopController');
    });

    Route::post('/logout', 'AuthController@logout')->name('logout');
});
