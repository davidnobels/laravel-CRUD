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
    return redirect('/product');
});

Route::group(['prefix'=>'product'],function(){
    Route::get('/','ProductController@index');

    Route::get('/create','ProductController@create');

    Route::get('/store','ProductController@store');

    Route::get('/show/{id}','ProductController@show');

    Route::get('/edit/{id}','ProductController@edit');

    Route::get('/update/{id}','ProductController@update');

    Route::get('/delete/{id}','ProductController@destroy');
});


/*Route::group(['prefix'=>'product'],function(){
    Route::get('/', function(){
      return view('product.index');
    });
});*/
