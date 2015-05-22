<!doctype html>
<html lang="en">
<head>
    <title>Lulu</title>

    {{HTML::style('styles/reset.css')}}
    {{HTML::style('styles/styles.css')}}
    {{HTML::style('bootstrap-3.3.4/css/bootstrap.css')}}
    {{HTML::script('jquery-1.11.3/jquery-1.11.3.js')}}
    {{HTML::script('bootstrap-3.3.4/js/bootstrap.js')}}
    {{HTML::script('js/main.js')}}

</head>
<body>
<div id="content">
    <div id="left-nav">
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
    <div id="right-content">
        <div id="right-header">
            <ul>
                <li>注册</li>
                <li>登陆</li>
            </ul>
        </div>
        <div id="total-article">

            @foreach($articles as $article)
                <div class="article">
                    <h1 class="article-title">{{$article->article_title}}</h1>
                    <ul>
                        <li class="article-time">{{$article->updated_at}}</li>
                        <li class="article-comment">15条评论</li>
                    </ul>
                    <p>{{$article->article_content}}</p>
                </div>
            @endforeach
            
        </div>
        <div id="footer">
            <p>&copy; 2013-2015 <b>Lulu爱</b>. <a href="http://www.miitbeian.gov.cn/" title="赣ICP备15000527号" target="_blank">赣ICP备15000527号</a></p>
        </div>
    </div>
</div>
</body>
</html>