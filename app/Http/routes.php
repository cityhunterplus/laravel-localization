<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('langs/{locale}', function ($locale) {
   App::setLocale($locale);
    return view('welcome');
});
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::get('articles', 'ArticlesController@index')->name('articles.index');
Route::get('articles/create', 'ArticlesController@create')->name('articles.create');
//Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store')->name('articles.store');