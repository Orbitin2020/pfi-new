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
| Digital Marketing
*/



Route::get('/', 'User\HomeController@index')->name('user.home');
Route::get('/home','User\HomeController@index')->name('user.home');
Route::get('/about','User\AboutController@index')->name('user.about');
Route::get('/gallery','User\GalleryController@index')->name('user.gallery');
Route::get('/contact','User\ContactController@index')->name('user.contact');

Route::post('/contactUs', 'User\ContactController@store')->name('user.sendContact');

// Consulting
Route::group(['prefix' => 'consulting'],function(){
    Route::get('/', 'User\ConsultingController@index')->name('user.consulting');
    Route::get('/organizational', 'User\ConsultingController@organizational')->name('user.consulting.organizational');
    Route::get('/performance', 'User\ConsultingController@performance')->name('user.consulting.performance');
    Route::get('/management', 'User\ConsultingController@management')->name('user.consulting.management');
    Route::get('/lean', 'User\ConsultingController@lean')->name('user.consulting.lean');
    Route::get('/digital', 'User\ConsultingController@digital')->name('user.consulting.digital');
});

// Manpower Outsourcing
Route::group(['prefix' => 'manpower'],function(){
    Route::get('/', 'User\ManpowerController@index')->name('user.manpower');
    Route::get('/ousourcing', 'User\ManpowerController@outsourcing')->name('user.manpower.outsourcing');
});


// Training & Development
Route::group(['prefix' => 'training'],function(){
    Route::get('/', 'User\TrainingController@index')->name('user.training');
    Route::get('/in-house-training-program', 'User\TrainingController@inhouse')->name('user.training.inhouse');
    Route::get('/productivity-talent-management', 'User\TrainingController@productivity')->name('user.training.productivity');
    Route::get('/outbound-training', 'User\TrainingController@outbound')->name('user.training.outbound');
    Route::get('/public-training', 'User\TrainingController@public_training')->name('user.training.public');
});

// Energy Efficiency
Route::group(['prefix' => 'energy'],function(){
    Route::get('/', 'User\EnergyController@index')->name('user.energy');
    // Route::get('/ousourcing', 'User\TrainingController@outsourcing')->name('user.manpower.outsourcing');
});

// News
Route::get('/news','User\NewsController@index')->name('user.news');
Route::get('/news/{slug}','User\NewsController@detail')->name('user.news.detail');
// End News

// Blog
Route::get('/blog','User\NewsController@blog')->name('user.blog');
Route::get('/blog/{slug}','User\NewsController@blog_detail')->name('user.blog.detail');
// End Blog
