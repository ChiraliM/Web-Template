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

Auth::routes();

Route::group([ 'namespace' => 'Web', 'middleware' => [ 'web' ] ], function()
{
    Route::get('/', 'HomeController@index')->name('web.home');
    Route::get('items', 'ItemController@index')->name('web.items');
    Route::get('items/{slug}', 'ItemController@index')->name('web.item');
});
