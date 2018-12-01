<?php

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
    return view('home');
});

Route::get('/login', function () {
    return view('login_view');
});

Route::get('/register', function () {
    return view('register_view');
});

Route::get('/products', function () {
    return view('products_view');
});

Route::get('/detail products', function () {
    return view('detail_products_view');
});

Route::get('/cart', function () {
    return view('cart_view');
});

Route::get('/checkout', function () {
    return view('checkout_view');
});

Route::get('/info pembayaran', function () {
    return view('info_pembayaran');
});

Route::get('/upload bukti pembayaran', function () {
    return view('form_upload_buktitransfer');
});

Route::get('/belanjaanku', function () {
    return view('belanjaan');
});

// Route::get('/rincian pesanan', function () {
//     return view('rincian_pesanan');
// });

Route::prefix('admin')->group(function(){
    Route::get('login', function(){
        return view('views_admin.login_form');
    });

    Route::get('dashboard', function(){
        return view('views_admin.dashboard');
    });

    Route::get('tabel kategori', function(){
        return view('views_admin.kategori_tabel');
    });

    Route::get('tambah kategori', function(){
        return view('views_admin.kategori_tambah');
    });

    Route::get('edit kategori', function(){
        return view('views_admin.kategori_edit');
    });

    Route::get('tabel barang', function(){
        return view('views_admin.barang_tabel');
    });

    Route::get('tambah barang', function(){
        return view('views_admin.barang_tambah');
    });

    Route::get('edit barang', function(){
        return view('views_admin.barang_edit');
    });

});