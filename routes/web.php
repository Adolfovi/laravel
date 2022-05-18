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
    return view('front.pages.home.home');
});

Route::get('/contacto', function () {
    return view('front.pages.contact.contact');
});

Route::get('/carro', function () {
    return view('front.pages.cart.cart');
});

Route::get('/checking', function () {
    return view('front.pages.checkout.checkout');
});

Route::get('/faqs', function () {
    return view('front.pages.faq.faq');
});

Route::get('/merchan', function () {
    return view('front.pages.merchan.merchan-product');
});

Route::get('/merchandising', function () {
    return view('front.pages.merchandising.merchandising');
});