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
                <h1>Lulu爱</h1>
                <p>Sharing technology and life</p>
                <ul>
                    <li><a href="#" title="Blog">Blog</a></li>
                    <li><a href="#" title="Archives">Archives</a></li>
                    <li><a href="#" title="Gategory">Gategory</a></li>
                    <li><a href="https://github.com/lululove" title="lulu github" target="_blank" title="Github">Github</a></li>
                    <li><a href="#" title="About me">About me</a></li>
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
                    </ul>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{$article->article_content}}
                        </div>
                    </div>
                    <h3 class="page-header">评论列表({{$article->comment->count()}})</h3>

                    <h4>发表评论</h4>
                    <div class="col-md-4">
                        <form class="form-horizontal">
                            <div class="form-group">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                <label for="inputEmail3" class="control-label">Email</label>
                            </div>
                            <div class="form-group">


                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                <label for="inputPassword3" class="control-label">Password</label>
                            </div>
                            <textarea class="form-control" rows="5"></textarea>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-default">提交</button>
                            </div>
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