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

Route::get('/hello', function () {
    return 'Hello laravel 6';
});

Route::get('articles', 'ArticleController@index')->name('articles');
Route::get('article/add', 'ArticleController@create')->name('article.add');
Route::post('articles', 'ArticleController@store')->name('article.store');
Route::get('article/edit/{id}', 'ArticleController@edit')->name('article.edit');
Route::put('article/edit/{id}', 'ArticleController@update')->name('article.update');
Route::delete('article/destroy/{id}', 'ArticleController@destroy')->name('article.destroy');
Route::get('article/show/{id}', 'ArticleController@show')->name('article.show');