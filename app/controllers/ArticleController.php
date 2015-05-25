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
        return View::make('index')->with(compact('articles'));
    }

}