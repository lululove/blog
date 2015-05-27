<!doctype html>
<html lang="zh">
<head>
    <title>Lulu</title>

    {{HTML::style('styles/reset.css')}}
    {{HTML::style('bootstrap-3.3.4/css/bootstrap.css')}}
    {{HTML::style('styles/admin.css')}}

</head>
<body>
<div class="navbar navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/Admin/index.html" id="logo">Blog后台管理
            </a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">

                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        状态
                        <span class="label label-warning pull-right">5</span>
                    </a>
                </li>

                <li class="active">
                    <a href="#ArticleGategory" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-pushpin"></i>
                        文章
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul id="ArticleGategory" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <li><a href="#">全部分类</a></li>
                        @foreach($categories as $category)
                            <li><a href="#">{{$category->category_name}}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li>
                    <a href="./plans.html">
                        <i class="glyphicon glyphicon-file"></i>
                        页面
                    </a>
                </li>
                <li>
                    <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-cog"></i>
                        系统管理
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <li><a href="#">用户管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-th-large"></i>
                        返回首页
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-fire"></i>
                        关于系统
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-10">
            <h1><a href="#">写文章</a></h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>标题</th>
                    <th>作者</th>
                    <th>分类</th>
                    <th>评论</th>
                    <th>日期</th>
                </tr>
                </thead>
                <tbody>

                @foreach( $articles as $article)
                    <tr>
                        <td><input type="checkbox" name="article_id" value="{{$article->article_title}}"> {{$article->article_title}}</td>
                        <td>{{$article->article_author}}</td>
                        <td>{{Article::find($article->article_id)->category->category_name}}</td>
                        <td>{{Article::find($article->article_id)->comment->count()}}</td>
                        <td>{{$article->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{HTML::script('jquery-1.11.3/jquery-1.11.3.js')}}
{{HTML::script('bootstrap-3.3.4/js/bootstrap.js')}}
{{HTML::script('js/main.js')}}

</body>
</html>