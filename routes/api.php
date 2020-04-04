<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['cors'])->group(function() {
    Route::group(['prefix' => 'products'], function() {
        Route::get('/', 'ProductController@index');
        Route::get('/{id}', 'ProductController@get');
        Route::get('/category/{category}', 'ProductController@getByCategory');
    });
    Route::get('/shipping/{size}', 'FormsController@getShipping');
    Route::post('/confirm', 'TransactionController@confirm');
});