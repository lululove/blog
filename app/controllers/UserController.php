<?php
/**
 * Created by PhpStorm.
 * User: Lulu
 * Date: 2015/5/22
 * Time: 22:56
 */

class UserController extends BaseController {

    public function getAdmin() {


        echo "okokok111";
        return View::make('admin.admin');

    }

    public function postAdmin() {


        echo "okokok222";
        echo "okokok";
        $user_nmae = Input::get('user_name');
        $user_passwd = Input::get('user_passwd');

        if ( Auth::attempt(array('user_name' => $user_nmae, 'user_passwd' => $user_passwd))) {


            echo "okokok3333";
            return Redirect::to('/');

        }
        echo "okokok44444";
        return Redirect::to('admin');
    }
}