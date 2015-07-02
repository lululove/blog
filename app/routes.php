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
Route::get('/', array('as' => 'home', 'uses' => 'IndexController@getIndex'));

Route::get('test', function()
{
    return View::make('test');
});

Route::get('about', function()
{
    $categories = Category::all();
    return View::make('about')->with(array('categories' => $categories));
});

Route::get('login', 'AuthController@getLogin');

Route::post('login', 'AuthController@postLogin');

Route::get('logout', 'AuthController@getLogout');

Route::get('admin', 'AuthController@getAdmin');

Route::get('edit', array('as' => 'edit', 'uses' => 'ArticleController@getEdit'));

Route::get('article/{article_id}', 'ArticleController@getArticle');

Route::get('category/{category_id}', 'ArticleController@getCategory');

Route::post('article/{article_id}', 'ArticleController@postComment');

Route::get('edit/new', 'ArticleController@getEditArticleNew');

Route::post('edit/new', 'ArticleController@postEditArticleNew');

Route::post('edit/filter', 'ArticleController@postFilterCategory');

Route::get('edit/{category_id}/{article_id}', 'ArticleController@getEditArticle')
    ->where(array('category_id' => '[0-9]+', 'article_id' => '[0-9]+'));

Route::post('edit/{category_id}/{article_id}', 'ArticleController@postEditArticle');

Route::post('ajax/post', 'ArticleController@ajaxTest');

Route::get('articleAll', 'ArticleController@getArticleAll');

Route::get('articleSubmit', 'ArticleController@getArticleSubmit');

Route::get('articleDraft', 'ArticleController@getArticleDraft');

