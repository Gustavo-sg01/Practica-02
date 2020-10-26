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
Route::get('/','PagesController@inicio')->name('inicio');

Route::get('Nosotros/{nombre?}','PagesController@nosotros' )->name('nosotros');

Route::get('/Blogs','PagesController@blogs' )->name('blogs');

Route::get('/Album','PagesController@album')->name('album');


Route::get('Notas','PagesController@nota')->name('notitas');

Route::get('/detalle/{id}','PagesController@detalle')->name('notas.detalle');


Route::post('/crear','PagesController@crear')->name('notas.crear');

Route::get('/editar/{id}','PagesController@editar')->name('notas.editar');

Route::put('/editar/{id}','PagesController@update')->name('notas.update');

Route::delete('/eliminar/{id}','PagesController@eliminar')->name('notas.eliminar');