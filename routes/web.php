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
// Route::get('/Hello', function () {
//     return 'Hello Laravel 6';
// });
 
//Controller Member
Route::get('members','MemberController@index' );
Route::get('member/add','MemberController@add');

//Controller Article
Route::get('Articles','ArticleController@index') -> name('Article.index');
Route::get('Article/add','ArticleController@create') -> name('Article.add');
Route::get('Article/edit{id}','ArticleController@edit') -> name('Article.edit');
Route::get('Article/delete{id}','ArticleController@destroy') ->name('Article.delete');
Route::get('Article/show{id}','ArticleController@show') ->name('Article.show');


//สร้างรันหน้า view
Route::get('/Customers', function () {
    return view('customer.index');
});
Route::get('/Customer/add', function () {
    return view('customer.add');
});
Route::get('/Customer/edit', function () {
    return view('customer.edit');
});
