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

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('services', 'PagesController@services');
Route::get('user/posts', 'UsersController@showPosts');
Route::get('ogs/saved', 'OgsController@showSavedOgs');
Route::get('massiva', 'MassivasController@tela');
Route::get('search', 'OgsController@search');
Route::get('find', 'OgsController@findOg');


Route::resources([
    'ogs' => 'OgsController',
    'posts' => 'PostsController',
    'links' => 'UsefulLinksController'
]);



Auth::routes();

