<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::namespace('App\\Http\\Controllers')->group(function() {
    Route::get('/conf', 'ConfController@index')->name('conf');
    Route::post('/conf', 'ConfController@store');

});
