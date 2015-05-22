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
        for ($i=0; $i<5; $i++) {
            Article::create(array(
                'article_title' => 'lulu',
                'article_content' => '在编译OpenWrt固件时，稍微加点东西就报空间不足，为了这单独买个路由感觉有点不值得，于是就想着将其改造下，换个闪存和内存，顺便加个USB接口出来。 我这个WR841N路由硬件是V7，直接taobao搜内存型号现代HY5DU121622DTP-D43 64M，闪存是华邦W25Q128FVSG 16M，DC-DC降压给USB供电的我是买的现成的模块，本想自己接个7905，',
                'article_click' => '200',
                'user_id' => '1',
                'category_id' => '1'
            ));
        }
    }

}