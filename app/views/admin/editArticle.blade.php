<!doctype html>
<html lang="zh">
<head>
    <title>Lulu</title>

    {{HTML::style('styles/reset.css')}}
    {{HTML::style('bootstrap-3.3.4/css/bootstrap.css')}}
    {{HTML::style('styles/admin.css')}}
    {{HTML::script('ckeditor/ckeditor.js')}}
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
                    <a href="{{URL::route('home')}}">
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
            <div class="row">
                <h1 style="padding-bottom: 3px">编辑文章</h1>
                <form method="post">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="ArticleTitle">文章标题</label>
                            <input type="text" name="article_title" class="form-control" id="ArticleTitle" value="{{(is_null($article) ? null:$article->article_title)}}" placeholder="填写文章标题">
                        </div>
                        <textarea name="article_content">{{(is_null($article) ? null:$article->article_content)}}</textarea>
                        <script type="text/javascript">CKEDITOR.replace('article_content')</script>
                    </div>
                    <div class="col-md-3">
                        <!--
                        <input type="text" class="form-control">
                        <input type="button" class="btn btn-default" value="新增分类">
                        <select class="form-control">
                            @foreach($categories as $category)
                                <option>{{$category->category_name}}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-default">发布文章</button>
                        <button type="button" class="btn btn-default">存为草稿</button>
                        -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">发布</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">分类</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{HTML::script('jquery-1.11.3/jquery-1.11.3.js')}}
{{HTML::script('bootstrap-3.3.4/js/bootstrap.js')}}
{{HTML::script('js/main.js')}}


</body>
</html>