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


Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
  Route::get('index', 'contactFormController@index')->name('contact.index');
  Route::get('create', 'contactFormController@create')->name('contact.create');
  Route::post('store', 'contactFormController@store')->name('contact.store');
  Route::get('show/{id}', 'contactFormController@show')->name('contact.show');
  Route::get('edit/{id}', 'contactFormController@edit')->name('contact.edit');
  Route::post('update/{id}', 'contactFormController@update')->name('contact.update');
  Route::post('destroy/{id}', 'contactFormController@destroy')->name('contact.destroy');
});
// Route::resource('contacts', 'contactFormController')->only([
// ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
