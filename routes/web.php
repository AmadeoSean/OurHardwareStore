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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/#/en/back', function () {
    return view('admin');
});
Route::get('/id', function () {
    return view('public');
});

#public

#https://www.mrdiy.com/id/page/tentang-kami/
Route::get('tentang-kami', function(){
    return 'ini halaman about us atau tentang kami';
});

#https://www.mrdiy.com/id/page/pencapaian-kami/
Route::get('pencapaian-kami/', function(){
    return 'ini halaman our achievements atau pencapaian kami';
});

#https://www.mrdiy.com/id/page/penghargaan/
Route::get('penghargaan', function(){
    return 'ini halaman award atau penghargaan';
});

#https://www.mrdiy.com/id/page/merek-mrdiy/
Route::get('merek-OurHardwareStore', function(){
    return 'ini halaman penjelasan merek OurHardwareStore';
});

#https://www.mrdiy.com/id/career/
Route::get('career', function(){
    return 'ini halaman lowongan kerja';
});

#https://www.mrdiy.com/id/page/kontak-kami/
Route::get('contact-us', function(){
    return 'ini halaman kontak kami';
});

#https://www.mrdiy.com/id/storeopenings/
Route::get('storeopenings', function(){
    return 'ini halaman berita toko OurHardwareStore yang baru dibuka';
});

#https://www.mrdiy.com/id/event/
Route::get('event', function(){
    return 'ini halaman acara yang dibuat OurHardwareStore';
});

#https://www.mrdiy.com/id/pressrelease/
Route::get('pressrelease', function(){
    return 'ini halaman berita siaran pers dari toko OurHardwareStore';
});

#https://www.mrdiy.com/id/promotion/
Route::get('promotion', function(){
    return 'ini halaman promosi yang berlangsung pada toko OurHardwareStore';
});

#https://www.mrdiy.com/id/page/produk-kami/
Route::get('produk', function(){
    return 'ini halaman kategori produk barang pada toko OurHardwareStore';
});

Route::get('kategori/{id}', function($id){
    return 'ini halaman produk barang yang berkategori '. $id. ' pada toko OurHardwareStore ';
});

Route::get('produk/{id}', function($id){
    return 'ini halaman produk barang '. $id. ' pada toko OurHardwareStore ';
});