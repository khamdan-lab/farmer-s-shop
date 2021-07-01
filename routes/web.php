<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', 'LandingController@index');

Auth::routes();

// Admin
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products','ProductController');

Route::resource('categories','CategoryController');

// Route::get('/categories','CategoryController@index_admin');

// User

Route::get('/history', 'PesananController@history')->name('pesanan.history');

Route::view('/latihan', 'layout.customer.latihan')->name('latihan');

Route::get('/kategori/{id}','KategoriController@productByKategori')->name('customer.kategori');
Route::get('/DetailProduk/{id}','KategoriController@productByDetail')->name('produk.detail');
Route::post('/pesan/{id}','PesananController@pesan')->name('produk.pesan');
Route::get('checkout', 'PesananController@checkout')->name('produk.checkout');
Route::delete('/checkout/{id}', 'PesananController@delete')->name('produk.delete');

Route::get('konfirmasi-checkout', 'PesananController@konfirmasi')->name('konfirmasi.checkout');

Route::get('/historyadmin', 'HistoryController@invoice')->name('history');
Route::get('/pembayaran', 'PembayaranController@index')->name('pembayaran');
Route::post('/kirim', 'PembayaranController@pembayaran')->name('kirim');

Route::post('/bayar', 'HistoryController@bukti')->name('bayar');

Route::post('/approve', 'HistoryController@approve')->name('approve');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
