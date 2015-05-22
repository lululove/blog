<?php
/**
 * Created by PhpStorm.
 * User: Lulu
 * Date: 2015/5/22
 * Time: 22:12
 */
class UserTableSeeder extends Seeder {

    public function run() {

        User::create(array(
            'user_name'    => 'lulu',
            'user_email'   => 'admin@lulu-love.cc',
            'user_passwd'  => Hash::make('123456'),
            'is_admin'     => true
        ));
    }
}