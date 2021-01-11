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

Route::get('', 'App\Http\Controllers\AssetController@dashboard_view')->middleware('loggedIn');
Route::get('daftar-aset', 'App\Http\Controllers\AssetController@asset_view')->middleware('loggedIn');
Route::post('jenis-asset/create', 'App\Http\Controllers\AssetController@jenis_asset_create')->middleware('loggedIn');
Route::post('asset/create', 'App\Http\Controllers\AssetController@asset_create')->middleware('loggedIn');
Route::post('asset/pinjam', 'App\Http\Controllers\PeminjamanController@peminjaman_create')->middleware('loggedIn');
Route::post('asset/get', 'App\Http\Controllers\AssetController@asset_get')->middleware('loggedIn');
Route::post('asset/delete', 'App\Http\Controllers\AssetController@asset_delete')->middleware('loggedIn');
Route::get('asset/code/{id}', 'App\Http\Controllers\AssetController@asset_qrcode')->middleware('loggedIn');
Route::get('peminjaman', 'App\Http\Controllers\PeminjamanController@peminjaman_view')->middleware('loggedIn');
Route::get('user', 'App\Http\Controllers\UserController@user_manajemen_view')->middleware('loggedIn');
Route::get('user/populate-user', 'App\Http\Controllers\UserController@user_populate')->middleware('loggedIn');
Route::post('user/import', 'App\Http\Controllers\UserController@user_import')->middleware('loggedIn');
Route::get('user/import', 'App\Http\Controllers\UserController@user_import');
Route::post('user/tambah', 'App\Http\Controllers\UserController@user_create')->middleware('loggedIn');
Route::post('user/tambah', 'App\Http\Controllers\UserController@user_create')->middleware('loggedIn');
Route::get('login', 'App\Http\Controllers\UserController@login_view');
Route::post('login', 'App\Http\Controllers\UserController@authenticate');
Route::post('logout', 'App\Http\Controllers\UserController@logout')->middleware('loggedIn');
Route::get('profile', 'App\Http\Controllers\UserController@profile_view')->middleware('loggedIn');

Route::get('beranda', 'App\Http\Controllers\BerandaController@beranda_view')->middleware('loggedIn');
Route::get('scan', 'App\Http\Controllers\ScanController@scan_view')->middleware('loggedIn');
Route::get('report', 'App\Http\Controllers\ReportController@report_view')->middleware('loggedIn');
Route::get('data-aset', 'App\Http\Controllers\DataAssetController@dataasset_view')->middleware('loggedIn');

Route::get('detail-asset', 'App\Http\Controllers\DetailAssetController@detail_asset_view')->middleware('loggedIn');
Route::get('detail-peminjaman', 'App\Http\Controllers\DetailAssetPeminjamanController@detail_asset_peminjaman_view')->middleware('loggedIn');
Route::get('detail-pengembalian', 'App\Http\Controllers\DetailAssetPengembalianController@detail_asset_pengembalian_view')->middleware('loggedIn');