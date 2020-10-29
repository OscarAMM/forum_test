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
