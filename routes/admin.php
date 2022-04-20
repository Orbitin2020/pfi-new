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

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    
    Route::group(['middleware' => ['role:super-admin|admin'],'prefix' => 'artikel'],function(){
        Route::get('/', 'Admin\ArtikelController@index')->name('admin.artikel.index');
        Route::get('/getData', 'Admin\ArtikelController@getData')->name('admin.artikel.data');
        Route::post('/store', 'Admin\ArtikelController@store')->name('admin.artikel.store');
        Route::get('/edit/{id}', 'Admin\ArtikelController@edit')->name('admin.artikel.edit');
        Route::put('/update/{id}', 'Admin\ArtikelController@update')->name('admin.artikel.update');
        Route::delete('/delete/{id}', 'Admin\ArtikelController@delete')->name('admin.artikel.delete');
    });

    Route::group(['middleware' => ['role:super-admin'],'prefix' => 'provenadmin'],function(){
        Route::get('/user','Admin\UserController@index')->name('user.index');
     
    });
    
});


