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

// Route::get('/', function () {
//     return view('welcome');
// });
// https://demo.prestashop.com/#/en/back

// https://www.mrdiy.com/id/
Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/back')->group(function(){
    Route::get('/', function () {
        return view('admin');
    });

    #PrestaShop
    #Admin

    Route::get('orders/orders', function(){
        return 'ini halaman pesanan pada sisi admin ';
    });

    Route::get('/orders/invoices', function(){
        return 'ini halaman faktur pada sisi admin ';
    });


    Route::get('orders/shopping-Cart', function(){
        return 'ini halaman keranjang pada sisi admin ';
    });

    Route::get('catalog/products', function(){
        return 'ini halaman produk pada sisi admin ';
    });

    Route::get('catalog/categories', function(){
        return 'ini halaman kategori pada sisi admin ';
    });

    Route::get('catalog/attributes-features', function(){
        return 'ini halaman atribut dan features pada sisi admin ';
    });

    Route::get('catalog/brands-suppliers', function(){
        return 'ini halaman brands dan suppliers pada sisi admin ';
    });

    Route::get('customer-service/Merchandise-return', function(){
        return 'ini halaman pengembalian barang ';
    });
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
})->name('products');

// Route::get('kategori/{id?}', function($id = "default"){
//     return 'ini halaman produk barang yang berkategori '. $id. ' pada toko OurHardwareStore ';
// })->name('category');

Route::get('produk/{id}', function($id){
    return view('product', ['id' => $id]);
});


Route::get('kategori/{kode}', function($kode){
    return view('kategori', ['code'=> $kode]);
});

Route::get('detail-kategori/{kode}', function($kode){
    return view('detailKategori', ['code'=> $kode]);
})->name('detailKategori');

Route::get('detail-product/{id}', function($id){
    return view('detailProduct', ['id'=> $id]);
})->name('detailProduct');


