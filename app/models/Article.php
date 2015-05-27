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

    protected $fillable = ['article_name', 'article_time', 'article_content', 'article_author', 'category_id'];


    public function category() {

        return $this->belongsTo('Category', 'category_id');
    }

    public function comment() {

        return $this->hasMany('Comment', 'article_id');
    }
}