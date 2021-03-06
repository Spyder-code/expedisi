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



Auth::routes(['register' => false, 'reset' => false]);
Route::get('/home', 'HomeController@index');
Route::get('/admin/perusahaan', 'HomeController@perusahaan');
Route::get('/admin/layanan', 'HomeController@layanan');
Route::get('/admin/tracking', 'HomeController@tracking');
Route::get('/admin/laporanTransaksi', 'HomeController@laporan');
Route::get('/admin/owner', 'HomeController@owner');
Route::get('/admin/expedisi', 'HomeController@expedisi');
Route::get('/admin/area', 'HomeController@area');
Route::get('/admin/gallery', 'HomeController@gallery');
Route::get('/admin/pesan', 'HomeController@pesan');
Route::get('/showMainDashboard', 'HomeController@showMainDashboard');
Route::get('/showMainDashboard2', 'HomeController@showMainDashboard2');
Route::get('/admin/transaksi', 'HomeController@transaksi');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/DetailLaporan', 'HomeController@detaillaporan');
Route::post('/admin/expedisi', 'ExpeditionController@store');
Route::post('/TambahGallery', 'GalleryController@store');
Route::post('/admin/layanan', 'ServiceController@store');
Route::post('/admin/area', 'AreaController@store');
Route::post('/HapusLayanan', 'ServiceController@HapusLayanan');
Route::post('/updateLayanan', 'ServiceController@updateLayanan');
Route::post('/GantiNama', 'CompanyController@GantiNama');
Route::post('/GantiAlamat', 'CompanyController@GantiAlamat');
Route::post('/GantiNomor', 'CompanyController@GantiNomor');
Route::post('/GantiIcon', 'CompanyController@GantiIcon');
Route::post('/GantiIconOwner', 'OwnerController@GantiIconOwner');
Route::post('/GantiNomorOwner', 'OwnerController@GantiNomorOwner');
Route::post('/GantiUsernameOwner', 'OwnerController@GantiUsernameOwner');
Route::post('/GantiPasswordOwner', 'OwnerController@GantiPasswordOwner');
Route::post('/InputTransaksi', 'TransactionController@InputTransaksi');
Route::post('/gantiStatus', 'TransactionController@gantiStatus');
Route::post('/HapusPesan', 'ChatsController@HapusPesan');
Route::post('/HapusGallery', 'GalleryController@HapusGallery');
Route::post('/UpdateGallery', 'GalleryController@UpdateGallery');
Route::post('/HapusExpedisi', 'ExpeditionController@HapusExpedisi');
Route::post('/UpdateExpedisi', 'ExpeditionController@UpdateExpedisi');
Route::post('/HapusArea', 'AreaController@HapusArea');
Route::post('/UpdateArea', 'AreaController@UpdateArea');
Route::post('/EditLaporan', 'HomeController@EditLaporan');
Route::post('/getExpedisi', 'AreaController@getExpedisi');

Route::get('/TampilLacak', 'UserController@tampillacak');






Route::get('/', ['middleware' => 'access-log', 'uses' => 'UserController@index']);
Route::get('/lacak', 'UserController@lacak');
Route::get('/tarif', 'UserController@tarif');
Route::get('galery', 'UserController@galery');
Route::get('/kontak', 'UserController@kontak');
Route::post('/MasukPesan', 'UserController@MasukPesan');
Route::post('/CekTarif', 'UserController@CekTarif');
