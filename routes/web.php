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
Route::get('/Details/Gallery/{slug}', 'Frontend@DetailGallery');
Route::get('/Gallery/{type}', 'Frontend@Gallery');
Route::get('/Search', 'Frontend@Search')->name('search');
Route::get('/Company/{slug}', 'Frontend@Company')->name('company');
Route::get('/Contact', 'Frontend@Contact')->name('contact');

//Send mail
Route::post('/send-mail', 'Frontend@send')->name('send-mail');


Route::get('@admin@/login','Backend@login')->name('admin-login');
Route::post('@admin@/login','Backend@loginAction');
Route::get('@admin@/add-admin','Backend@addAdmin')->name('add-admin');
Route::post('@admin@/add-admin','Backend@addAdminAction');
/**************Backend Routes**************/
Route::group(['prefix' => '@admin@','middleware' =>'auth:admin'], function () {
    Route::get('/', 'Backend@index')->name('admin-dashboard');


    Route::get('/logout','Backend@logout')->name('admin-logout');
    Route::get('/add-event', 'Backend@addEvent')->name('add-event');
    Route::post('/add-event', 'Backend@addEventAction');
    Route::get('/view-event', 'Backend@viewEvent')->name('view-event');
    Route::get('/update-event/{id}', 'Backend@updateEvent')->name('update-event');
    Route::post('/update-event/{id}', 'Backend@updateEventAction');
    Route::get('/delete-event/{id}', 'Backend@deleteEvent')->name('delete-event');
    Route::get('/add-image', 'Backend@addImage')->name('add-image');
    Route::post('/add-image', 'Backend@addImageAction');
    Route::get('/view-image', 'Backend@viewImage')->name('view-image');
    Route::get('/update-image/{id}', 'Backend@updateImage')->name('update-image')->where(['id' => '[0-9]+']);
    Route::post('/update-image/{id}', 'Backend@updateImageAction')->where(['id' => '[0-9]+']);
    Route::get('/delete-image/{id}', 'Backend@deleteImage')->name('delete-image');
    Route::get('/add-video', 'Backend@addVideo')->name('add-video');
    Route::post('/add-video', 'Backend@addVideoAction');
    Route::get('/view-video', 'Backend@viewVideo')->name('view-video');
    Route::get('/update-video/{id}', 'Backend@updateVideo')->name('update-video')->where(['id' => '[0-9]+']);
    Route::post('/update-video/{id}', 'Backend@updateVideoAction')->where(['id' => '[0-9]+']);
    Route::get('/delete-video/{id}', 'Backend@deleteVideo')->name('delete-video');
});