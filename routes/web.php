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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'QuestionsController@index')->name('questions-index');
Route::post('/user-profile', 'UsersController@index')->name('user-profile');
Route::post('/view-question', 'QuestionsController@show')->name('view-question');
Route::post('/add-comment', 'CommentsController@index')->name('add-comment');


/*

Route::resource('questions', QuestionsController);
Route::resource('comments', CommentsController);
Route::resource('roles', RolesController);
Route::resource('users', UsersController);
*/

//Route::resource('questions', 'QuestionsController');

