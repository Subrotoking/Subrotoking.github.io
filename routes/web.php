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
    return view('home');
});
Route::get('/prosiding', function () {
    return view('prosiding/index');
});

Auth::routes();
Route::resource('user', 'UserController');
Route::resource('jurnal', 'PostController');
Route::resource('prosiding', 'PostsController');
Route::resource('pengesahan', 'PengesahanController');
Route::post('file/upload2', 'PostController@upload2')->name('file.upload');

Route::resource('pengindex', 'PengindexController');


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/post', 'AdminController@index');
Route::get('admin/post/edit/{id}', 'AdminController@edit')->name('admin.edit');
Route::put('admin/post/update/{id}', 'AdminController@store')->name('admin.update');

Route::get('file/upload', 'FileController@form')->name('file.form');
Route::get('file/index', 'FileController@index')->name('file.index');
Route::post('file/upload', 'FileController@upload')->name('file.upload');
