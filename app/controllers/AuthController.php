<?php
/**
 * Created by PhpStorm.
 * User: Lulu
 * Date: 2015/5/22
 * Time: 22:56
 */

class AuthController extends BaseController {

    public function getLogin() {

        return View::make('admin.login');
    }

    public function postLogin() {

        $user_nmae = Input::get('user_name');
        $user_passwd = Input::get('user_passwd');

        if ( Auth::attempt(array('user_name' => $user_nmae, 'password' => $user_passwd))) {

            return Redirect::to('admin');

        }

        return Redirect::to('login');
    }

    public function getLogout() {
        if (Auth::check()) {

            Auth::logout();
        }

        return Redirect::to('/');
    }

    public function getAdmin() {

        if (Auth::check())
        {
            $articles = Article::where('is_draft', '!= ', 2)->get();
            $categories = Category::all();

            return View::make('admin.edit')->with(array('articles' => $articles, 'categories' => $categories));

        } else {

            return Redirect::to('login');
        }

    }
}