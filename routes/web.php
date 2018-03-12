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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['isAnimeGod']], function () {
//    Route::get('admin/index', 'AnimeController@index')->name('admin');
//
//    Route::get('admin/add', 'AdminAnimeController@add')->name('add');

//    Route::post('admin/addAnime', 'AnimeController@add')->name('addAnime');

    Route::resource('admin', 'AdminAnimeController');


});
