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
/*
Route::get('/', function()
{
	return View::make('index');
});
*/
Route::get('/', 'IndexController@getIndex');

Route::get('test', function()
{
    return View::make('test');
});

Route::get('login', 'AuthController@getLogin');

Route::post('login', 'AuthController@postLogin');

Route::get('admin', function() {

    return View::make('admin.admin');

});

Route::get('edit', 'ArticleController@getEdit');

Route::get('article/{article_id}', 'ArticleController@getArticle');
Route::post('article/{article_id}', 'ArticleController@postComment');

Route::get('edit/new', 'ArticleController@getEditArticleNew');

Route::post('edit/new', 'ArticleController@postEditArticleNew');


Route::get('edit/{category_id}/{article_id}', 'ArticleController@getEditArticle')
    ->where(array('category_id' => '[0-9]+', 'article_id' => '[0-9]+'));

Route::post('edit/{category_id}/{article_id}', 'ArticleController@postEditArticle');


