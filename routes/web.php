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

//Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerAutologinController@index');

Route::get('/', function () {
    return view('home.home');
});

//Route::get('contact', 'ContactFormController@create')->name('contact.create');
//Route::post('contact', 'ContactFormController@store')->name('contact.store');

Route::get('about', function () {
    return view('about.about');
});
Route::get('contact', function () {
    return view('contact.contact');
});

//Route::get('customers', 'CustomersController@index');
//Route::get('customers/create', 'CustomersController@create');
//Route::post('customers', 'CustomersController@store');
//Route::get('customers/{customer}', 'CustomersController@show');
//Route::get('customers/{customer}/edit', 'CustomersController@edit');
//Route::put('customers/{customer}', 'CustomersController@update');
//Route::delete('customers/{customer}', 'CustomersController@destroy');

Route::resource('customers', 'CustomersController');



