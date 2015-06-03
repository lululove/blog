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
            <div id="right-header">
            </div>
            <div id="total-article">
               HEHE
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