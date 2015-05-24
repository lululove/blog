<!doctype html>
<html lang="zh">
<head>
    <title>Lulu</title>

    {{HTML::style('styles/reset.css')}}
    {{HTML::style('bootstrap-3.3.4/css/bootstrap.css')}}
    {{HTML::style('styles/styles.css')}}
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
                    <li><a href="#" title="Github">Github</a></li>
                    <li><a href="#" title="About me">About me</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-9 col-xs-offset-3" id="right-content">
            <div id="right-header">
            </div>
            <div id="total-article">
                @foreach($articles as $article)
                    <div class="article">
                        <div class="jumbotron" id="my-jumbotron">
                            <div class="clearfix">
                            <h2 class="pull-left"><strong>{{ HTML::link('login', $article->article_title) }}</strong></h2>
                            <ul class="pull-right">
                                <li class="article-time">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"> </span>
                                    {{$article->created_at}}
                                </li>
                                <li class="article-comment">
                                    <span class="glyphicon glyphicon-comment" aria-hidden="true"> </span>
                                    <span>{{HTML::link('login', '15条评论')}}</span>
                                </li>
                            </ul>
                            </div>
                            <p>{{$article->article_content}}<span>{{HTML::link('login','   阅读全文...')}}</span></p>

                        </div>

                    </div>
                @endforeach
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