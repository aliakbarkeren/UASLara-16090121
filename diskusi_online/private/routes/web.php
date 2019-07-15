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
    return view('auth.login');
});

Route::get('kategori', function () {
    return view('pages.kategori');
});

Route::get('postingan', function () {
    return view('pages.kelola-postingan');
});

Route::get('komen', function () {
    return view('pages.kelola-komentar');
});

Route::get('profile', function () {
    return view('pages.profile');
});



Route::get('komentar', function () {
    return view('frontend.komen');
});

Route::get('post', function () {
    return view('frontend.post');
});

Route::get('register', function () {
    return view('frontend.register');
});

Route::get('login', function () {
    return view('frontend.login');
});


Route::get('/user/create', 'UsersControllers@create')->name('frontend.register');
Route::post('/user/createuser', 'UsersControllers@store')->name('frontend.registerpost');
Route::get('/user/post', 'PostinganControllers@create')->name('frontend.post');
Route::post('/user/createpost', 'UsersControllers@store')->name('frontend.posting');
Route::get('/user/post', 'PostinganController@create')->name('frontend.post');
Route::post('/user/createpost', 'PostinganController@post')->name('frontend.posting');

Route::get('/user/createpost/{id}', 'PostinganController@edit')->name('edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kelola-postingan', 'HomeController@show')->name('kelola-postingan');
Route::get('/kelola-komentar', 'HomeController@view')->name('kelola-komentar');
Route::get('/komen/{id}/', 'HomeController@komen')->name('komentar');
Route::post('/komen/create/', 'KomenController@komentar')->name('komentar-create');
Route::get('/kelola-postingan/delete/{id}/', 'PostinganController@delete')->name('kelola-postingan-delete');
Route::get('/kelola-komentar/delete/{id}/', 'KomenController@delete')->name('kelola-komentar-delete');
