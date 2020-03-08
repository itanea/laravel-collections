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

Route::get('/home', 'HomeController@index');

Route::get('/home/all', 'HomeController@all');
Route::get('/home/average', 'HomeController@average');
Route::get('/home/avg', 'HomeController@avg');
Route::get('/home/chunk', 'HomeController@chunk');
Route::get('/home/collapse', 'HomeController@collapse');
Route::get('/home/collect', 'HomeController@collect');
Route::get('/home/combine', 'HomeController@combine');
Route::get('/home/concat', 'HomeController@concat');
route::get('/home/contains', 'HomeController@contains');
route::get('/home/containsStrict', 'HomeController@containsStrict');
route::get('/home/count', 'HomeController@count');
Route::get('/home/countby', 'HomeController@countby');
Route::get('/home/crossjoin', 'HomeController@crossjoin');
Route::get('/home/dd', 'HomeController@dd');
Route::get('/home/dump', 'HomeController@dump');
Route::get('/home/duplicates', 'HomeController@duplicates');
Route::get('/home/duplicatesStrict', 'HomeController@duplicatesStrict');
Route::get('/home/each', 'HomeController@each');
Route::get('/home/eachSpread', 'HomeController@eachSpread');
Route::get('/home/every', 'HomeController@every');
Route::get('/home/last', 'HomeController@last');
Route::get('/home/reject', 'HomeController@reject');
Route::get('/home/unique', 'HomeController@unique');
Route::get('/home/uniqueStrict', 'HomeController@uniquestrict');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/methods', 'MethodController');
