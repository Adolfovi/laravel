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

Route::get('/admin-panel', function () {
    return view('admin.pages.admin-panel-home.index');
});

Route::get('/admin-panel-home', function () {
    return view('admin.pages.admin-panel-home.index');
});


Route::get('/admin-panel-merchandising', function () {
    return view('admin.pages.admin-panel-merchandising.index');
});

Route::get('/admin-panel-faq', function () {
    return view('admin.pages.admin-panel-faq.index');
});

Route::get('/admin-panel-contacto', function () {
    return view('admin.pages.admin-panel-contacto.index');
});

Route::get('/admin-panel-merchan-product', function () {
    return view('admin.pages.admin-panel-merchan-product.index');
});

Route::get('/admin-panel-checking', function () {
    return view('admin.pages.admin-panel-checking.index');
});