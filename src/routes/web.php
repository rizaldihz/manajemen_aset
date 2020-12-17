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
