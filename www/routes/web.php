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

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );


Route::get('/', 'pageController@index')->name('index');


Route::get('/page/{id}', 'pageController@page')->name('page');




Route::get('/kat/{id}', 'pageController@katview')->name('katview');

Route::Post('/search', 'pageController@search')->name('search');



Route::group(['prefix' => 'tovar'], function () {
    Route::Post('quick','pageController@quick');
    Route::get('/{id}', 'pageController@tovarview')->name('tovarview');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'pageController@index')->name('home');

