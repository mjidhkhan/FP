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
    return view('welcome');
});

//Route::get('contact', 'ContactFormController@create')->name('contact.create');
//Route::post('contact', 'ContactFormController@store')->name('contact.store');

Route::get('about', function () {
    return view('about.about');
});
Route::get('contact', function () {
    return view('contact.contact');
});

Route::get('customers', function () {
    return view('customers.customers');
});
