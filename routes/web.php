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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/topics', 'TopicController@index');
Route::get('/topics/{topic}', 'TopicController@show')->name('topics.show');

Route::get('/user/topics', 'UserTopicController@index');
Route::get('/user/topics/add', 'UserTopicController@store');
