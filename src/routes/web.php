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

Route::get('/', 'App\Http\Controllers\AssetController@dashboard_view');
Route::get('daftar-aset', 'App\Http\Controllers\AssetController@asset_view');
Route::post('jenis-asset/create', 'App\Http\Controllers\AssetController@jenis_asset_create');
Route::post('asset/create', 'App\Http\Controllers\AssetController@asset_create');
Route::post('asset/get', 'App\Http\Controllers\AssetController@asset_get');
Route::post('asset/delete', 'App\Http\Controllers\AssetController@asset_delete');
Route::get('asset/code/{id}', 'App\Http\Controllers\AssetController@asset_qrcode');
Route::get('peminjaman', 'App\Http\Controllers\PeminjamanController@peminjaman_view');

Route::get('beranda', 'App\Http\Controllers\BerandaController@beranda_view');
Route::get('scan', 'App\Http\Controllers\ScanController@scan_view');
Route::get('report', 'App\Http\Controllers\ReportController@report_view');
Route::get('profile', 'App\Http\Controllers\ProfileController@profile_view');
Route::get('data-aset', 'App\Http\Controllers\DataAssetController@dataasset_view');

Route::get('detail-asset', 'App\Http\Controllers\DetailAssetController@detail_asset_view');
Route::get('detail-peminjaman', 'App\Http\Controllers\DetailAssetPeminjamanController@detail_asset_peminjaman_view');
Route::get('detail-pengembalian', 'App\Http\Controllers\DetailAssetPengembalianController@detail_asset_pengembalian_view');