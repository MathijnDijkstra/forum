<?php

Route::get('/', 'pagesController@home');

//Route::get('about', 'pagesController@about');
route::group(['middleware' => ['web']], function () {

route::get('cards', 'CardsController@index');
//route::get('cards/{card}', 'CardsController@show');
//route::get('cards/{card}/edit', 'CardsController@edit');
Route::get('cards/create' ,'CardsController@create')->name('create');
Route::post('cards/create','CardsController@store');
    
route::post('cards/{card}/notes', 'NotesController@store');

route::get('/notes/{note}/edit', 'NotesController@edit');
route::patch('notes/{note}', 'NotesController@update');
    
    route::get('/about', 'pagesController@about');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
