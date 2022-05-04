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

    Route::group(['middleware' => ['role:super-admin|admin', 'auth'], 'prefix' => 'dashboard'], function() {
        Route::get('/', 'Admin\DashboardController@index');
    });

    Route::group(['middleware' => ['role:super-admin', 'auth'], 'prefix' => 'client'], function() {
        Route::get('/', 'Admin\ClientController@index');
        Route::get('/getData', 'Admin\ClientController@getData');
        Route::get('/edit/{id}', 'Admin\ClientController@edit');
        Route::post('/add', 'Admin\ClientController@store');
        Route::post('/update/{id}', 'Admin\ClientController@update');
        Route::delete('/delete/{id}', 'Admin\ClientController@delete');
    });

    Route::group(['middleware' => ['role:super-admin', 'auth'], 'prefix' => 'clientCategory'], function() {
        Route::get('/', 'Admin\ClientCategoryController@index');
        Route::get('/getData', 'Admin\ClientCategoryController@getData');
        Route::get('/edit/{id}', 'Admin\ClientCategoryController@edit');
        Route::post('/add', 'Admin\ClientCategoryController@store');
        Route::put('/update/{id}', 'Admin\ClientCategoryController@update');
        Route::delete('/delete/{id}', 'Admin\ClientCategoryController@destroy');
    });
    
    Route::group(['middleware' => ['role:super-admin|admin'],'prefix' => 'artikel'],function(){
        Route::get('/', 'Admin\ArtikelController@index')->name('admin.artikel.index');
        Route::get('/getData', 'Admin\ArtikelController@getData')->name('admin.artikel.data');
        Route::post('/store', 'Admin\ArtikelController@store')->name('admin.artikel.store');
        Route::get('/edit/{id}', 'Admin\ArtikelController@edit')->name('admin.artikel.edit');
        Route::put('/update/{id}', 'Admin\ArtikelController@update')->name('admin.artikel.update');
        Route::delete('/delete/{id}', 'Admin\ArtikelController@delete')->name('admin.artikel.delete');
    });

    Route::group(['middleware' => ['role:super-admin|admin'],'prefix' => 'galeri/kategori'],function(){
        Route::get('/', 'Admin\GaleriCategoryController@index')->name('admin.katgale.index');
        Route::get('/getData', 'Admin\GaleriCategoryController@getData')->name('admin.katgale.data');
        Route::post('/store', 'Admin\GaleriCategoryController@store')->name('admin.katgale.store');
        Route::get('/edit/{id}', 'Admin\GaleriCategoryController@edit')->name('admin.katgale.edit');
        Route::put('/update/{id}', 'Admin\GaleriCategoryController@update')->name('admin.katgale.update');
        Route::delete('/delete/{id}', 'Admin\GaleriCategoryController@delete')->name('admin.katgale.delete');
    });

    Route::group(['middleware' => ['role:super-admin|admin'],'prefix' => 'galeri'],function(){
        Route::get('/', 'Admin\GaleriController@index')->name('admin.galeri.index');
        Route::get('/getData', 'Admin\GaleriController@getData')->name('admin.galeri.data');
        Route::get('/getKategori', 'Admin\GaleriController@getKategori')->name('admin.galeri.kategori.data');
        Route::post('/store', 'Admin\GaleriController@store')->name('admin.galeri.store');
        Route::get('/edit/{id}', 'Admin\GaleriController@edit')->name('admin.galeri.edit');
        Route::put('/update/{id}', 'Admin\GaleriController@update')->name('admin.galeri.update');
        Route::delete('/delete/{id}', 'Admin\GaleriController@delete')->name('admin.galeri.delete');
    });

    Route::group(['middleware' => ['role:super-admin'],'prefix' => 'provenadmin'],function(){
        Route::get('/user','Admin\UserController@index')->name('user.index');
        Route::get('/getData', 'Admin\UserController@getData')->name('user.getData');
        Route::post('/store', 'Admin\UserController@store')->name('user.store');
        Route::get('/edit/{id}', 'Admin\UserController@edit');
        Route::post('/update/{id}', 'Admin\UserController@update');
        Route::delete('/delete/{id}', 'Admin\UserController@delete');
    });
    
});


