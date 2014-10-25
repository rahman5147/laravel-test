<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get("authors", array('as'=>'authors', 'uses'=>'AuthorsController@get_index'));
Route::get("author/{all}", array('as'=>'author', 'uses'=>'AuthorsController@view'));
Route::get("authors/new", array('as'=>'new_author', 'uses'=>'AuthorsController@new_author'));
Route::post("authors/create", array('as'=>'create', 'uses'=>'AuthorsController@create'));	//To create author
Route::get("authors/{all}/edit", array('as'=>'edit', 'uses'=>'AuthorsController@edit'));	//To update author
Route::put("authors/update", array('as'=>'update', 'uses'=>'AuthorsController@updates'));	//To update author
Route::delete("author/delete", array('uses'=>'AuthorsController@destroy'));	//To update author


// Below code will return JSON format page, for RESTful API
// Route::get("author/{all}", array('as'=>'author', function(){
// 	$author = Author::all();
// 	return $author;
// }));

// Route::get("author/{id}", function($id){
// 	$author = Author::where('id', $id)->first();

// 	dd($author);
// });