<?php
/**
 * Created by PhpStorm.
 * User: neoway
 * Date: 2015/5/27
 * Time: 16:11
 */

class CommentTableSeeder extends Seeder {

    public function run() {

        for ($i=0; $i<10; $i++) {
            Comment::create(array(

                'author_name'     => 'lulu',
                'author_email'    => 'admin@lulu-love.cc',
                'author_web'      => 'www.lulu-love.cc',
                'comment_content' => 'This blog is my first web project, I will show u some good things, let us to see it.',
                'article_id'      => ($i+1)
            ));
        }
    }
}