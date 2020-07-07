<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return redirect('login');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/admin/perusahaan', 'HomeController@perusahaan');
Route::get('/admin/layanan', 'HomeController@layanan');
Route::get('/admin/owner', 'HomeController@owner');
Route::get('/admin/expedisi', 'HomeController@expedisi');
Route::get('/admin/pesan', 'HomeController@pesan');
Route::get('/admin/transaksi', 'HomeController@transaksi');
Route::post('/admin/expedisi', 'ExpeditionController@store');
Route::post('/admin/layanan', 'ServiceController@store');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
