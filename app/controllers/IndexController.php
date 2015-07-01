<?php
/**
 * Created by PhpStorm.
 * User: neoway
 * Date: 2015/5/21
 * Time: 13:45
 */
class IndexController extends BaseController {

    public function getIndex()
    {
        //$articles   = Article::find('article_id');
       // $articles = DB::select('SELECT * FROM article');
       // $articles = DB::table('article')->get();

        //$articles = Article::all();
        $categories = Category::all();

        $articles = Article::Paginate(2);
        return View::make('index')->with(array('articles' => $articles, 'categories' => $categories));
    }

}
