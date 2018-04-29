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
Route::get('/Details/Event/{slug}', 'Frontend@DetailEvent');
Route::get('/Details/Image/{slug}', 'Frontend@DetailImage');
Route::get('/Details/Video/{slug}', 'Frontend@DetailVideo');
Route::get('/Gallery', 'Frontend@Gallery')->name('gallery');
Route::post('/Search', 'Frontend@Search')->name('search');
Route::get('/Company/{slug}', 'Frontend@Company')->name('company');
Route::get('/Contact', 'Frontend@Contact')->name('contact');


/**************Backend Routes**************/
Route::group(['prefix' => '@admin@'], function () {
    Route::get('/', 'Backend@index')->name('admin-dashboard');
    Route::get('/add-event', 'Backend@addEvent')->name('add-event');
    Route::post('/add-event', 'Backend@addEventAction');
    Route::get('/view-event', 'Backend@viewEvent')->name('view-event');
    Route::get('/delete-event/{id}','Backend@deleteEvent')->name('delete-event');
    Route::get('/add-image', 'Backend@addImage')->name('add-image');
    Route::post('/add-image', 'Backend@addImageAction');
});