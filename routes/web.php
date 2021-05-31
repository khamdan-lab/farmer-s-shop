<?php

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

Route::get('/history', function () {
    return view('layout.customer.histori');
});

Route::view('/latihan', 'layout.customer.latihan')->name('latihan');

Route::get('/kategori/{id}','KategoriController@productByKategori')->name('customer.kategori');
Route::get('/DetailProduk/{id}','KategoriController@productByDetail')->name('produk.detail');
Route::post('/pesan/{id}','PesananController@pesan')->name('produk.pesan');
