<?php
/**
 * Created by PhpStorm.
 * User: neoway
 * Date: 2015/5/27
 * Time: 15:45
 */
class Comment extends Eloquent {

    protected $table = 'comments';
    protected $primaryKey = 'comment_id';

    public function article() {

        return $this->belongsTo('Comment', 'article_id');
    }

}