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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::group(['middleware' => 'cors', function() {
//     Route::get('/', function () {
//         return view('welcome');
//     });
//     Route::get('/products', 'ProductController@index');
//     Route::get('/{id}', 'ProductController@get');
//     Route::get('/category/{category}', 'ProductController@getByCategory');
// }]);

Route::middleware(['cors'])->group(function() {
    Route::group(['prefix' => 'products'], function() {
        Route::get('/', 'ProductController@index');
        Route::get('/{id}', 'ProductController@get');
        Route::get('/category/{category}', 'ProductController@getByCategory');
    });
});