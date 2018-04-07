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

//Frontend Routes
Route::get('/', 'Frontend@index')->name('home');
Route::get('/home', 'Frontend@index');
Route::get('/Events', 'Frontend@Event')->name('event');
Route::get('/Gallery', 'Frontend@Gallery')->name('gallery');
Route::post('/Search', 'Frontend@Search')->name('search');