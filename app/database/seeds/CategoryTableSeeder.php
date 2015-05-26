<?php
/**
 * Created by PhpStorm.
 * User: neoway
 * Date: 2015/5/26
 * Time: 16:22
 */

class CategoryTableSeeder extends Seeder {

    public function run() {

        $categories = array('Linux', 'Android', 'MIUI', 'WEB', '生活');

        for ($i=0; $i<5; $i++) {

            Category::create(array(
                'article_id'  => ($i + 1),
                'category_name' => $categories[$i]
            ));
        }

    }
}