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
                <h1><a href="{{URL::route('home')}}" title="LOGO">Lulu爱</a></h1>
                <p>Sharing technology and life</p>
                <ul>
                    <li><a href="{{URL::route('home')}}" title="Blog">Blog</a></li>
                    <li onMouseOut="do_list_row_unshow(this);" onMouseOver="do_list_row_show(this);"><a href="#" title="Gategory">Gategory</a>
                        <span id="show_test">
                             @foreach($categories as $category)
                                {{HTML::link('category/'.$category->category_id, $category->category_name)}}<br>
                            @endforeach
                        </span>
                    </li>

                    <li><a href="https://github.com/lululove" target="_blank" title="Github">Github</a></li>
                    <li>{{HTML::link('about', 'About me')}}<br></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-9 col-xs-offset-3" id="right-content">
            <div class="row">
                <div class="container-fluid">
                    <h2 class="page-header">关于作者</h2>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>Lulu爱， 江西赣州人士也，90后，喜欢码代码，爱好开源，主刀嵌入C，了解嵌入式设备相关软件开发技术，这个小世界会一直记录Lulu的成长过程，目前工作性质为底层驱动工程师，负责WIFI、CDMA、LTE、Android相关产品研发。</br></br>

                                为何取名Lulu爱？这里面关乎着一个美好而纯洁的爱情故事，欲知详情，请容我日后细细道来…</br></br>

                                邮箱：admin@lulu-love.cc</br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{HTML::script('jquery-1.11.3/jquery-1.11.3.js')}}
{{HTML::script('bootstrap-3.3.4/js/bootstrap.js')}}
{{HTML::script('js/main.js')}}

</body>
</html>