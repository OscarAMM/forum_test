<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',['middleware' => 'guest', function () {
    return view('auth/login');
}]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//forum routes
Route::get('/forum/index', 'ForumController@index')->name('forum_index');
Route::get('/forum/create', 'ForumController@create')->name('forum_create');
Route::post('/forum/store', 'ForumController@store')->name('forum_store');
Route::get('/forum/comments', 'CommentController@index')->name('forum_comments');
Route::get('/forum/show/{id}', 'ForumController@show')->name('forum_show');
Route::get('/forum/edit/{id}', 'ForumController@edit')->name('forum_edit');
Route::put('/forum/update/{id}', 'ForumController@update')->name('forum_update');

//comment routes
Route::post('/comment/store', 'CommentController@store')->name('comment_store');

//User routes
Route::get('/register/index', 'UserController@index')->name('user_index');
Route::get('/register/create', 'UserController@create')->name('user_create');
Route::get('/register/edit/{id}', 'UserController@edit')->name('user_edit');
Route::get('/register/show/{id}', 'UserController@show')->name('user_show');
Route::post('/register/store', 'UserController@store')->name('user_store');
Route::put('/register/update/{id}', 'UserController@update')->name('user_update');