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
    return view('layout.app');
});

Route::get('/home', function () {
    return view('layout.app');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/shop', function () {
    return view('pages.create');
});

Route::get('/women_product', function () {
    return view('products.home_women_product');
});

Route::get('/men_product', function () {
    return view('products.home_men_product');
});

Route::get('/home_product', function () {
    return view('products.home_product');
});

Route::get('/manage_product', function () {
    return view('products.manage_product');
});

Route::get('/view_product', function () {
    return view('products.view_product');
});

Route::get('/edit_product/{id}', function () {
    return view('products.edit_product');
});




//Student routs
Route::post('/store','StudentController@store');
Route::resource('student','StudentController');


//product routes
Route::post('/product_store','ProductController@product_store');
Route::get('/edit_product/{id}','ProductController@product_edit');
Route::get('/get_product_details','ProductController@product_view');


