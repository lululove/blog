@extends('layout.FrontMaster')


@section('frontMasterContainer')
<div class="row">
    <div class="container-fluid">
        <h2 class="page-header">{{$article->article_title}}</h2>
        <ul id="getArticleUl" class="clearfix">
            <li class="pull-left">作者：{{$article->article_author}}</li>
            <li class="pull-left">发布时间：{{$article->created_at}}</li>
            <li class="pull-left">分类：{{$article->category->category_name}}</li>
            @if (Auth::check())
                <li>{{HTML::link('edit/'.$article->category_id.'/'.$article->article_id, '编辑')}}</li>
            @endif
        </ul>
        <div class="panel panel-default">
            <div class="panel-body">
                {{$article->article_content}}
            </div>
        </div>
        <h3 id="show_comment" class="page-header">评论列表({{$article->comment->count()}})</h3>

        @foreach($article->comment->all() as $comment)
            <div id="article_comment">
                <div>
                    <a href="http://{{$comment->author_web}}" target="_blank">{{$comment->author_name}}</a>
                    <span>发表于{{$comment->created_at}}</span>
                </div>
                <p>{{$comment->comment_content}}</p>
            </div>
        @endforeach

        <h4>发表评论</h4>
        <div class="col-md-5">
            <form method="post" class="form-horizontal">
                <div class="form-group">
                    <div class="col-md-10">
                        <input name="comment_author" type="text" class="form-control" id="comment_author" placeholder="评论作者">
                    </div>
                    <label for="comment_author" class="control-label">作者<span style="color: #F00;">&nbsp;*</span></label>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <input name="comment_email" type="email" class="form-control" id="comment_email" placeholder="邮箱">
                    </div>
                    <label for="comment_email" class="control-label">邮箱<span style="color: #F00;">&nbsp;*</span></label>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <input name="comment_website" type="text" class="form-control" id="comment_website" placeholder="站点">
                    </div>
                    <label for="comment_website" class="control-label">站点</label>
                </div>
                <textarea name="comment_content" class="form-control" rows="5"></textarea>

                <button style="margin-top: 10px" type="submit" class="btn btn-default">提交</button>
            </form>
        </div>
    </div>
</div>

<div class="center-block">
    <p class="center-block">&copy; 2013-2015 <b>Lulu爱</b>. <a href="http://www.miitbeian.gov.cn/" title="赣ICP备15000527号" target="_blank">赣ICP备15000527号</a></p>
</div>
@stop