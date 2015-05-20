<?php
/**
 * Created by PhpStorm.
 * User: neoway
 * Date: 2015/5/20
 * Time: 16:17
 */

class Article extends Eloquent {

    protected $table = "articles";

    protected $primaryKey = "article_id";

    public $article_name;
    public $article_time;
    public $article_content;

}