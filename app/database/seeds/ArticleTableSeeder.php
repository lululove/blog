<?php
/**
 * Created by PhpStorm.
 * User: neoway
 * Date: 2015/5/20
 * Time: 11:10
 */
class ArticleTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(array(
            'article_name'        => 'lulu',
            'article_time'     => '2015-05-21',
            'article_content'     => 'asdlakldklahdkhlkhasdfasdfnamnflkash;dfkl;aslkdf;lashdf;lhkas;dfhashdfl;',
        ));
    }

}