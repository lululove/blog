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
                    <a href="admin">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        状态
                        <span class="label label-warning pull-right">5</span>
                    </a>
                </li>

                <li class="active">
                    <a href="{{URL::route('edit')}}">
                        <i class="glyphicon glyphicon-pushpin"></i>
                        文章
                    </a>
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
            <h2>{{HTML::link('edit/new', '写文章')}}</h2>
            <ul class="clearfix">
                <li class="pull-left"><a href="#">全部({{Article::count()}})</a>&nbsp;|</li>
                <li class="pull-left">&nbsp;<a href="#">已发布({{Article::where('is_draft', '=', 0)->count()}})</a>&nbsp;|</li>
                <li class="pull-left">&nbsp;<a href="#">草稿({{Article::where('is_draft', '=', 1)->count()}})</a></li>
            </ul>
            <div class="clearfix">
                <form class="form-inline pull-left">
                    <select class="form-control">
                        <option>批量操作</option>
                        <option>转成草稿</option>
                        <option>发布文章</option>
                        <option>移至回收站</option>
                    </select>
                    <button id="operation_article" class="btn btn-default" type="button">应用</button>
                </form>
                <form method="post" action="{{action('ArticleController@postFilterCategory')}}" class="form-inline pull-left">
                    <select name="filter_category" style="margin-left: 15px" class="form-control">
                        <option value="0">全部分类</option>
                        @foreach($categories as $category)
                            <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-default" type="submit">筛选</button>
                </form>
                <form class="form-inline  pull-right">
                    <input class="form-control" type="text" placeholder="搜索关键字">
                    <button style="margin-left: 5px" class="btn btn-default" type="button">搜索</button>
                </form>
            </div>
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
                <tbody id="checkBoxArticle_id">
                @foreach( $articles as $article)
                    <tr>
                        <td><input type="checkbox" name="article_id" id="checkBoxArticle_id_.{{$article->article_id}}"> {{HTML::link(('edit/'.$article->category_id.'/'.$article->article_id), $article->article_title)}}</td>
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