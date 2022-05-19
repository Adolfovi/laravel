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
    return view('front.pages.home.index');
});

Route::get('/contacto', function () {
    return view('front.pages.contact.index');
});

Route::get('/carro', function () {
    return view('front.pages.cart.index');
});

Route::get('/checking', function () {
    return view('front.pages.checkout.index');
});

Route::get('/faqs', function () {
    return view('front.pages.faq.index');
});

Route::get('/merchan-product', function () {
    return view('front.pages.merchan.index');
});

Route::get('/merchandising', function () {
    return view('front.pages.merchandising.index');
});

Route::get('/administrator', function () {
    return view('admin.pages.home.index');
});