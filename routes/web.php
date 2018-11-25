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