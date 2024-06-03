<?php

use App\Models\Conf;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'confs' => Conf::all(),
    ]);
})->name('home');

Route::namespace('App\\Http\\Controllers')->group(function() {
    Route::get('/conf', 'ConfController@index')->name('conf');
    Route::post('/conf', 'ConfController@store');

    Route::get('/gallery','GalleryController@index')->name('gallery');
    Route::post('/gallery','GalleryController@store');
});
