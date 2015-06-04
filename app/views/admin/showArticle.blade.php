<!doctype html>
<html lang="zh">
<head>
    <title>Lulu</title>

    {{HTML::style('styles/reset.css')}}
    {{HTML::style('bootstrap-3.3.4/css/bootstrap.css')}}
    {{HTML::style('styles/styles.css')}}
    {{HTML::style('styles/getArticle.css')}}

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3" id="left-nav">
            <div id="left-margin">
                <h1><a href="{{URL::route('home')}}">Lulu爱</a></h1>
                <p>Sharing technology and life</p>
                <ul>
                    <li><a href="{{URL::route('home')}}" title="Blog">Blog</a></li>
                    <li id="category_show"><a href="#" title="Gategory">Gategory</a>
                        <span id="show_test">
                             @foreach($categories as $category)
                                {{HTML::link('category/'.$category->category_id, $category->category_name)}}<br>
                            @endforeach
                        </span>
                    </li>
                    <li><a href="https://github.com/lululove" title="lulu github" target="_blank" title="Github">Github</a></li>
                    <li>{{HTML::link('about', 'About me')}}<br></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-9 col-xs-offset-3" id="right-content">
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
                                <label for="comment_author" class="control-label">作者</label>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10">
                                <input name="comment_email" type="email" class="form-control" id="comment_email" placeholder="邮箱">
                                    </div>
                                <label for="comment_email" class="control-label">邮箱</label>
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
        </div>
    </div>
</div>

{{HTML::script('jquery-1.11.3/jquery-1.11.3.js')}}
{{HTML::script('bootstrap-3.3.4/js/bootstrap.js')}}
{{HTML::script('js/main.js')}}

</body>
</html>