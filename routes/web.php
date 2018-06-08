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

Route::get('/', 'HomeController@index');

Route::get('login', function(){
    return view('auth.login');
});
Route::post('logout', function(){
    return redirect()->action('CatalogController@index');
});

Route::group(['middleware' => 'auth'],function(){
    Route::get('catalog', 'CatalogController@index');
    Route::get('catalog/show/{id}', 'CatalogController@show');
    Route::get('catalog/create', 'CatalogController@create');
    Route::get('catalog/{id}/edit', 'CatalogController@edit');
    Route::get('catalog/{id}/delete', 'CatalogController@delete');
    Route::put('catalog/save', 'CatalogController@save');
    Route::post('catalog/save', 'CatalogController@save');
    Route::get('catalog/{id}/{type}','CatalogController@rented');
    Route::get('/home', 'HomeController@index')->name('home');
});
Auth::routes();
