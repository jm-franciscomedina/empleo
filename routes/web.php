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
Route::get('entrada/{post}',  'PostsController@show')->name('post'); 
Route::get('entrada/categoria/{slug}','PostsController@category')->name('category'); 
Route::get('entrada/etiqueta/{slug}', 'PostsController@tag')->name('tags');
Route::get('categoria/{slug}','PostsController@category')->name('category'); 
Route::get('etiqueta/{slug}', 'PostsController@tag')->name('tags'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('admin/posts','Posts\PostsController@index');

//rutas web 
Route::get('empresa', 'CompaniesController@index')->name('empresa');
Route::get('postulantes', function(){
	return view('postulant.postulant');

});
Route::get('preguntas', function(){
	return view('questions.questions');
	
});
Route::get('ofertas', 'PostsController@index');



//grupo de rutas adinistrativas 
Route::group([
'prefix'=> 'home',
'namespace'=>'Posts',
'middleware'=>'auth'],
function(){
	Route::get('posts','PostsController@index')->name('home.posts.index');
	Route::get('posts/create','PostsController@create')->name('home.posts.create');
	Route::POST('posts','PostsController@store')->name('home.posts.store');

});
