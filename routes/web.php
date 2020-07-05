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

Route::get('/', 'HomeController@home');
Route::get('/artikel', 'HomeController@article_list');
Route::get('/artikel/create', 'HomeController@create_article');
Route::post('/artikel', 'HomeController@submit_article');
Route::get('/artikel/{id}', 'HomeController@show');
Route::put('/artikel/{id}', 'HomeController@update_article');
Route::get('/artikel/{id}/edit', 'HomeController@edit_article');
Route::delete('/artikel/{id}', 'HomeController@delete_article');

//Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
//Route::post('/items', 'ItemController@store'); // menyimpan data
//Route::get('/items', 'ItemController@index'); // menampilkan semua
//Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
//Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
//Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
//Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id

