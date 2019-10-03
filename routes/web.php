<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::group(['prefix'=>'customers'],function(){
    Route::get('/index','CustomersController@index')->name('customers.index');
    Route::get('/create','CustomersController@create')->name('customers.create');
    Route::post('/store','CustomersController@store')->name('customers.store');
    Route::get('/{id}/edit','CustomersController@edit')->name('customers.edit');
    Route::post('/{id}/update','CustomersController@update')->name('customers.update');
    Route::get('/{id}/destroy','CustomersController@destroy')->name('customers.destroy');
});


