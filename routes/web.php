<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

    Route::prefix('abrigo')->name('abrigos.')->group(function(){
    	Route::get('/',        'AbrigoController@index')->name('index');
    	Route::get('/create',  'AbrigoController@create')->name('create');
    	Route::post('/abrigo',  'AbrigoController@store')->name('store');
    	Route::get('/{abrigo}/edit',  'AbrigoController@edit')->name('edit');
    	Route::post('/update/{abrigo}',  'AbrigoController@update')->name('update');
    	Route::get('/destroy/{abrigo}',  'AbrigoController@destroy')->name('destroy');
    });



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
