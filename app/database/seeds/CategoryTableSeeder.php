<?php
/**
 * Created by PhpStorm.
 * User: neoway
 * Date: 2015/5/26
 * Time: 16:22
 */

class CategoryTableSeeder extends Seeder {

    public function run() {

        $categories = array('未分类','Linux', 'Android', 'MIUI', 'WEB', '生活');

        for ($i=0; $i<6; $i++) {

            Category::create(array(
                'category_name' => $categories[$i]
            ));
        }

    }
}