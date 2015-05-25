<?php
/**
 * Created by PhpStorm.
 * User: neoway
 * Date: 2015/5/25
 * Time: 20:16
 */
class ArticleController extends BaseController {

    public function getEdit()
    {
        //$articles   = Article::find('article_id');
        // $articles = DB::select('SELECT * FROM article');
        // $articles = DB::table('article')->get();

        $articles = Article::all();
        $categories = Article::get(array('category_id'));

        //return View::make('admin.edit')->with(array(compact('articles'), compact('categories')));
        return View::make('admin.edit')->with(array('articles' => $articles, 'categories' => $categories));
    }

}