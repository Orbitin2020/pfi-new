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


Route::get('/','User\HomeController@index')->name('user.home');
Route::get('/home','User\HomeController@index')->name('user.home');
Route::get('/about','User\AboutController@index')->name('user.about');
Route::get('/gallery','User\GalleryController@index')->name('user.gallery');
Route::get('/contact','User\ContactController@index')->name('user.contact');

// Consulting
Route::group(['prefix' => 'consulting'],function(){
    Route::get('/', 'User\ConsultingController@index')->name('user.consulting');
    Route::get('/organizational', 'User\ConsultingController@organizational')->name('user.consulting.organizational');
    Route::get('/performance', 'User\ConsultingController@performance')->name('user.consulting.performance');
});

// News
Route::get('/news','User\NewsController@index')->name('user.news');
// End News

// Blog
Route::get('/blog','User\NewsController@blog')->name('user.blog');
// End Blog
