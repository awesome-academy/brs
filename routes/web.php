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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/{id}', [
    'as' => 'category',
    'uses' => 'PublicController@bookCategory'
]);

Route::get('/ajax', 'BookReviewController@ajax');

Route::resource('add', 'BookReviewController');

Route::post('/comment', 'CommentController@store')->name('comment.add');

Route::resource('suggest', 'RequestBookController');

Route::post('/send', 'RequestBookController@store')->name('mail.send');

Route::resource('/book', 'ReviewBookController');
