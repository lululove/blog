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

        $articles = Article::where('is_draft', '!= ', 2)->get();
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
        $category_id_new = Input::get('category_id');

        $article->article_title = $article_title;
        $article->article_content = $article_content;

        $article->article_author = 'admin';
        $article->category_id = $category_id_new;

        $article->is_draft = 0;

        $article->save();

        return Redirect::to('article/'.$article->article_id);
    }

    public function getEditArticleNew() {

        $categories = Category::all();

        return View::make('admin.editArticle')->with(array('article' => null, 'categories' => $categories));
    }

    public function postEditArticleNew() {

        $article = new Article();
        $article->category_id = Input::get('category_id');
        $article->article_title = Input::get('article_title');
        $article->article_content = Input::get('article_content');
        $article->article_author = 'admin';
        $article->is_draft = 0;

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

        $msg_type = Input::get('msg_type');

        if ($msg_type == 0) {

            $category = new Category();
            $category->category_name = Input::get('category_name');
            $category->save();

            $category_div = "<div class='radio' id='edit_category_".$category->category_id."'><label><input type='radio' name='category_id' value='" . $category->category_id . "' checked>" . $category->category_name . "</label></div>";

            $category_opinion = "<option id='select_category_".$category->category_id."' value='".$category->category_id."'>".$category->category_name."</option>";

            return Response::json(array(
                'msg_type' => $msg_type,
                'category_div' => $category_div,
                'category_opinion' => $category_opinion,
            ));

        } else if ($msg_type == 1) {

            $category_id = Input::get('category_id');

            $articles = Article::where('category_id', '=', $category_id)->get();

            foreach($articles as $article) {
                $article->category_id = 1;
                $article->save();
            }

            Category::destroy($category_id);

            return Response::json(array(
                'msg_type' => $msg_type,
                'category_id' => $category_id,
            ));

        } else if ($msg_type == 2) {

            $article_id = Input::get('article_id');

            if ($article_id == null) {

                $article = new Article();
                $article->article_author = 'admin';

            } else {

                $article = Article::find($article_id);
            }
            $article->is_draft = 1;
            $article->article_title = Input::get('article_title');
            $article->article_content = Input::get('article_content');
            $article->category_id = Input::get('category_id');

            $article->save();

            return Response::json(array(
                'msg_type' => $msg_type,
                'article_id' => $article->article_id,
            ));

        } else if ($msg_type == 3) {   /*转成草稿*/

            $article_checked = Input::get('checked');

            for ($i=0; $i< count($article_checked); $i++) {

                $article = Article::find($article_checked[$i]);

                if ($article->is_draft == 0) {

                    $article->is_draft = 1;
                    $article->save();
                }
            }

            return Response::json(array(
                'msg_type' => $msg_type,
                'article_checked' => $article_checked,
            ));

        } else if ($msg_type == 4) { /*发布文章*/
            $article_checked = Input::get('checked');

            for ($i=0; $i< count($article_checked); $i++) {

                $article = Article::find($article_checked[$i]);

                if ($article->is_draft == 1) {

                    $article->is_draft = 0;
                    $article->save();
                }
            }

            return Response::json(array(
                'msg_type' => $msg_type,
                'article_checked' => $article_checked,
            ));
        } else if ($msg_type == 5) { /*回收站*/
            $article_checked = Input::get('checked');

            for ($i=0; $i< count($article_checked); $i++) {

                $article = Article::find($article_checked[$i]);

                if ($article->is_draft != 2) {

                    $article->is_draft = 2;
                    $article->save();
                }
            }

            return Response::json(array(
                'msg_type' => $msg_type,
                'article_checked' => $article_checked,
            ));
        }

    }

    public function postFilterCategory() {

        $category_id = Input::get('filter_category');

        if ($category_id == 0) {

            $articles = Article::all();
        } else {

            $articles = Article::where('category_id', '=', $category_id)->get();
        }

        $categories = Category::all();

        return View::make('admin.edit')->with(array('articles' => $articles, 'categories' => $categories));
    }

    public function getArticleAll() {

        $articles = Article::where('is_draft', '!=', 2)->get();
        $categories = Category::all();

        return View::make('admin.edit')->with(array('articles' => $articles, 'categories' => $categories));
    }

    public function getArticleSubmit() {

        $articles = Article::where('is_draft', '=', 0)->get();
        $categories = Category::all();

        return View::make('admin.edit')->with(array('articles' => $articles, 'categories' => $categories));
    }

    public function getArticleDraft() {

        $articles = Article::where('is_draft', '=', 1)->get();
        $categories = Category::all();

        return View::make('admin.edit')->with(array('articles' => $articles, 'categories' => $categories));
    }
}