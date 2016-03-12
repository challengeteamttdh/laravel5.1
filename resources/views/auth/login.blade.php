<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang Đăng Nhập Admin</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900'
          rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/admin/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/admin/style.css">
    <link rel="stylesheet" type="text/css" href="css/admin/sweetalert.css">
    <script src="js/admin/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<div class="container">
    <div class="top">
        <h1 id="title" class="hidden"><span id="logo">Đăng Nhập</h1>
    </div>
    <div class="login-box animated fadeInUp">
        <div class="box-header">
            <h2>Đăng Nhập</h2>
        </div>
        {!! Form::open(array('url' => URL::to('/admin'), 'method' => 'post', 'files'=> true)) !!}
        <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('email', "E-Mail Address", array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('email', null, array('class' => 'form-control')) !!}
                <div class="help-block-email">{{ $errors->first('email', ':message') }}</div>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
            {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::password('password', array('class' => 'form-control')) !!}
                <div class="help-block-password">{{ $errors->first('password', ':message') }}</div>

            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Ghi nhớ
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                    Đăng nhập
                </button>

                <a href="{{ URL::to('/password/email') }}">Quên mật khẩu?</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
</body>

<script>
    $(document).ready(function () {
        $('#logo').addClass('animated fadeInDown');
        $("input:text:visible:first").focus();
        var emailerror = $(".help-block-email").text();
        var passworderror = $(".help-block-password").text();
        if (emailerror.trim()) {
            $(".help-block-email").hide();
            swal({
                title: "Lỗi",
                text: emailerror,
                timer: 5000,
                showConfirmButton: true
            });
        } else if (passworderror.trim()) {
            $(".help-block-password").hide();
            swal({
                title: "Lỗi",
                text: passworderror,
                timer: 5000,
                showConfirmButton: true
            });
        }
    });
    $('#username').focus(function () {
        $('label[for="username"]').addClass('selected');
    });
    $('#username').blur(function () {
        $('label[for="username"]').removeClass('selected');
    });
    $('#password').focus(function () {
        $('label[for="password"]').addClass('selected');
    });
    $('#password').blur(function () {
        $('label[for="password"]').removeClass('selected');
    });
</script>

</html>
