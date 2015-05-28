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
        $categories = Category::all();

        //return View::make('admin.edit')->with(array(compact('articles'), compact('categories')));
        return View::make('admin.edit')->with(array('articles' => $articles, 'categories' => $categories));
    }

    public function getEditArticle($category_id, $article_id) {

        $articles = Article::all();
        $categories = Category::all();

        return View::make('admin.editArticle')->with(array('articles' => $articles, 'categories' => $categories, 'category_id' => $category_id, 'article_id' => $article_id));
    }

    public function postEditArticle() {

        $article = new Article();

        $article_title = Input::get('article_title');
        $article_content = Input::get('article_content');

        $article->article_title = $article_title;
        $article->article_content = $article_content;

        $article->article_click = 200;
        $article->article_author = 'admin';
        $article->category_id = 2;

        $article->save();

        URL::route('admin');
    }

}