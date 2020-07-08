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
Route::get('/admin/pesan/destroy/{pesan}', 'ChatsController@destroy');
Route::get('/admin/transaksi', 'HomeController@transaksi');
Route::get('/admin/{result}', 'CompanyController@update');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/admin/expedisi', 'ExpeditionController@store');
Route::post('/admin/layanan', 'ServiceController@store');
Route::post('/admin/{layanan}', 'ServiceController@destroy');
Route::post('/updateLayanan', 'ServiceController@updateLayanan');
Route::post('/GantiNama', 'CompanyController@GantiNama');
Route::post('/GantiAlamat', 'CompanyController@GantiAlamat');
Route::post('/GantiNomor', 'CompanyController@GantiNomor');
Route::post('/GantiIcon', 'CompanyController@GantiIcon');
Route::post('/GantiIconOwner', 'OwnerController@GantiIconOwner');
Route::post('/GantiNomorOwner', 'OwnerController@GantiNomorOwner');
Route::post('/GantiUsernameOwner', 'OwnerController@GantiUsernameOwner');
Route::post('/GantiPasswordOwner', 'OwnerController@GantiPasswordOwner');

