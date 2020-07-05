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

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/', 'ArtikelController@erd');

Route::get('/artikel', 'ArtikelController@artikels'); // menampilkan semua

Route::get('/artikel/create', 'ArtikelController@create'); // menampilkan utk membuat artikel baru

Route::post('/artikel', 'ArtikelController@store'); // menyimpan data artikel baru

Route::get('/artikel/{id}', 'ArtikelController@detail'); // menampilkan detail item dengan id 

Route::get('/artikel/{id}/edit', 'ArtikelController@edit'); // menampilkan form untuk edit item

Route::put('/artikel/{id}', 'ArtikelController@update'); // menyimpan perubahan dari form edit

Route::delete('/artikel/{id}', 'ArtikelController@destroy'); // menghapus data dengan id