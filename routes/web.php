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
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/gay', function () {
    return view('gay');
});

Route::get('/gay/muito/gay/mesmo', function () {
    return view('gay');
})->name('rodrigay');

Route::get('/gaye', function () {
    return redirect()->route('rodrigay');
});

Route::get('/gayi/', function () {
    return redirect('/gay/muito/gay/mesmo');
});

Route::match(['get', 'post'], '/match', function(){
	return 'rodrigo muito gay';
});


Route::any('/g', function () {
    return redirect()->route('rodrigay');
});
	
	
Route::any('hello', function () {
	return '<h1>hello world';
});


/* Route::get('about', function () {
	return view('pages.about');
}); */

Route::get('users', function () {
	return '<h1>put an id in the url dumb-shit';
});

Route::get('users/{id}', function ($id) {
	return 'this is user '. $id;
});

Route::get('users/{id}/{name}', function ($id, $name) {
	return 'The user is '.$name .' with an id of '.$id;
});