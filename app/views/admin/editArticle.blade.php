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

                <li class="active">
                    <a href="#">
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
                    <a href="{{URL::route('home')}}">
                        <i class="glyphicon glyphicon-th-large"></i>
                        返回首页
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="row">
                <h1 style="padding-bottom: 3px">编辑文章</h1>
                <form method="post">
                    <div class="col-md-9">
                        <p style="display: none" id="ArticleId" name="article_id">{{(is_null($article) ? null:$article->article_id)}}</p>
                        <div class="form-group">
                            <label for="ArticleTitle">文章标题</label>
                            <input type="text" name="article_title" class="form-control" id="ArticleTitle" value="{{(is_null($article) ? null:$article->article_title)}}" placeholder="填写文章标题">
                        </div>
                        <textarea name="article_content" id="ArticleContent">{{(is_null($article) ? null:$article->article_content)}}</textarea>
                        <script type="text/javascript">
                            var getVal = CKEDITOR.replace('ArticleContent');
                            function getContenet(){
                                return getVal.getData();    //获取textarea的值
                            }
                        </script>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">发布</h3>
                            </div>
                            <div class="panel-body">
                                <dl class="dl-horizontal">
                                    <dt style="width: 100px"><i class="glyphicon glyphicon-pencil"></i>&nbsp;文章状态：</dt>
                                    <dd style="margin-left: 105px">{{is_null($article) ? '草稿' : ($article->is_draft == 0 ? '已发布' : '草稿')}}</dd>
                                    <dt style="width: 100px"><i class="glyphicon glyphicon-time"></i>&nbsp;创建时间：</dt>
                                    <dd style="margin-left: 105px">{{is_null($article) ? '0000-00-00 00:00' : date('Y-m-d H:i',strtotime($article->created_at))}}</dd>
                                    <dt style="width: 100px"><i class="glyphicon glyphicon-time"></i>&nbsp;创建时间：</dt>
                                    <dd style="margin-left: 105px">{{is_null($article) ? '0000-00-00 00:00' : date('Y-m-d H:i',strtotime($article->updated_at))}}</dd>
                                </dl>
                                <button type="submit" class="btn btn-default">发布文章</button>
                                <button id="to_save_draft" type="button" class="btn btn-default">存为草稿</button>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">分类</h3>
                            </div>
                            <div class="panel-body">
                                <div id="edit_category" >
                                    @foreach($categories as $category)
                                        <div class="radio" id="edit_category_{{$category->category_id}}">
                                            <label>
                                                @if (($category->category_id == 1 && is_null($article)) || (!is_null($article) && $category->category_id == $article->category_id))
                                                    <input type="radio" name="category_id" value="{{$category->category_id}}" checked>
                                                @else
                                                    <input type="radio" name="category_id" value="{{$category->category_id}}">
                                                @endif
                                                {{$category->category_name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                <div>
                                    <a href="javascript:addLinkClick()">新增分类</a>
                                    <div id="add_category_area">
                                        <input style="margin-top: 10px" type="text" class="form-control">
                                        <button style="margin-top: 10px" type="button" class="btn btn-default">添加</button>
                                    </div>
                                </div>
                                <div style="margin-top: 10px">
                                    <a href="javascript:rmLinkClick()">删除分类</a>
                                    <div id="rm_category_area">
                                        <select style="margin-top: 10px" name="category_select" class="form-control">
                                            @foreach($categories as $category)
                                                <option id="select_category_{{$category->category_id}}" value="{{$category->category_id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                        <button style="margin-top: 10px" type="button" class="btn btn-default">删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




</body>

{{HTML::script('jquery-1.11.3/jquery-1.11.3.js')}}
{{HTML::script('bootstrap-3.3.4/js/bootstrap.js')}}
{{HTML::script('js/main.js')}}

</html>