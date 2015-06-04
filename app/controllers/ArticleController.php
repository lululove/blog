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

        $articles = Article::all();
        $categories = Category::all();

        return View::make('admin.edit')->with(array('articles' => $articles, 'categories' => $categories));
    }

    public function getEditArticle($category_id, $article_id) {

        $categories = Category::all();
        $article = Article::find($article_id);


        return View::make('admin.editArticle')->with(array('article' => $article, 'categories' => $categories, 'category_id' => $category_id, 'article_id' => $article_id));
    }

    public function getArticle($article_id) {

        $article = Article::find($article_id);
        $categories = Category::all();

        return View::make('admin.showArticle')->with(array('article' => $article, 'categories' => $categories));
    }

    public function postComment($article_id) {

        $comment = new Comment();

        $comment->author_name = Input::get('comment_author');
        $comment->author_email = Input::get('comment_email');
        $comment->author_web = Input::get('comment_website');
        $comment->comment_content = Input::get('comment_content');
        $comment->article_id = $article_id;

        $comment->save();

        return Redirect::to('article/'.$article_id);
    }

    public function postEditArticle($category_id, $article_id) {

        $article = Article::find($article_id);

        $article_title = Input::get('article_title');
        $article_content = Input::get('article_content');
        $category_id_new = Input::get('categoryRadios');

        $article->article_title = $article_title;
        $article->article_content = $article_content;

        $article->article_author = 'admin';
        $article->category_id = $category_id_new;

        $article->save();

        return View::make('test');
    }

    public function getEditArticleNew() {

        $categories = Category::all();

        return View::make('admin.editArticle')->with(array('article' => null, 'categories' => $categories));
    }

    public function postEditArticleNew() {

        $article = new Article();
        $article->category_id = 2;//Input::get('category_id');
        $article->article_title = Input::get('article_title');
        $article->article_content = Input::get('article_content');
        $article->article_author = 'admin';

        $article->save();


        return View::make('test');
    }

    public function getCategory($category_id)
    {
        $articles = Article::where('category_id', '=', $category_id)->get();
        $categories = Category::all();

        return View::make('admin.showCategory')->with(array('articles' => $articles, 'categories' => $categories));
    }
    public function ajaxTest() {

        return Response::json(array(
            'status' => 1,
            'msg' => 'ok',
        ));
    }
}