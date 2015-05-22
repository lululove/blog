<?php
/**
 * Created by PhpStorm.
 * User: neoway
 * Date: 2015/5/20
 * Time: 16:17
 */

class Article extends Eloquent {

    protected $table = "article";

    protected $primaryKey = "article_id";

    protected $fillable = ['article_name', 'article_time', 'article_content'];

}