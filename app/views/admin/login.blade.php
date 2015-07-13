<!doctype html>
<html lang="zh">
<head>
    <title>Lulu</title>

    {{HTML::style('styles/reset.css')}}
    {{HTML::style('styles/styles.css')}}
    {{HTML::style('bootstrap-3.3.4/css/bootstrap.css')}}
    {{HTML::script('jquery-1.11.3/jquery-1.11.3.js')}}
    {{HTML::script('bootstrap-3.3.4/js/bootstrap.js')}}

</head>
<body>
<div class="container" id="signin-body">

    <div class="row">
        <form method="post" class="col-sm-offset-3 form-horizontal">
            <div class="form-group">
                <label for="inputUser" class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-4">
                    <input type="text"  name="user_name" class="form-control" id="inputUser" placeholder="请输入用户名">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-4">
                    <input type="password" name="user_passwd" class="form-control" id="inputPassword" placeholder="请输入密码">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember-me">记住密码
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">登录</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>