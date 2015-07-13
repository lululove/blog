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
                        <a href="#">
                            <i class="glyphicon glyphicon-th-large"></i>
                            返回首页
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10">

            </div>
        </div>
    </div>

    {{HTML::script('jquery-1.11.3/jquery-1.11.3.js')}}
    {{HTML::script('bootstrap-3.3.4/js/bootstrap.js')}}
    {{HTML::script('js/main.js')}}

</body>
</html>

<!--

include_once 'plug-in/geshi.php';
$source = '$foo = 45;
for ( $i = 1; $i < $foo; $i++ )
{
    echo "$foo\n";
    --$foo;
}
for ( $i = 1; $i < $foo; $i++ )
{
    echo "$foo\n";
    --$foo;
}
for ( $i = 1; $i < $foo; $i++ )
{
    echo "$foo\n";
    --$foo;
}
for ( $i = 1; $i < $foo; $i++ )
{
    echo "$foo\n";
    --$foo;
}
for ( $i = 1; $i < $foo; $i++ )
{
    echo "$foo\n";
    --$foo;
}
for ( $i = 1; $i < $foo; $i++ )
{
    echo "$foo\n";
    --$foo;
}
for ( $i = 1; $i < $foo; $i++ )
{
    echo "$foo\n";
    --$foo;
}';
$language = 'php';
$geshi = new GeSHi($source, $language);
$geshi->enable_classes();
$geshi->set_header_type(GESHI_HEADER_PRE_TABLE);
$geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
$geshi->start_line_numbers_at(1);
echo $geshi->parse_code();

-->