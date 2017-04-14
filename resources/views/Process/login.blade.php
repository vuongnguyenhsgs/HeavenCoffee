<!doctype html>
<html lang="en" class="fullscreen-bg">

    <head>
        <title>Login | HeavenCoffee</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/linearicons/style.css">
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
        <link rel="stylesheet" href="css/demo.css">
        <!-- ICONS -->
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
    </head>

    <body>
        <!-- WRAPPER -->
        <div id="wrapper">
            <div class="vertical-align-wrap">
                <div class="vertical-align-middle">
                    <div class="auth-box">
                        <div class="content" style="padding: 0px 50px 30px 50px">
                            <div class="header">
                                <div class="logo text-center"><img src="img/logo-hc.jpg"></div>
                            </div>
                            <div style="text-align: center" id="errLoginMessage">
                                @if(isset($errMess))
                                    <label id="lblLoginMessage" class="text-danger">{!!$errMess!!}</label>
                                @else
                                @endif
                                <label id="lblLoginMessage" class="text-danger"></label>
                            </div>
                            <form class="form-auth-small" method="POST" action="/login">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    @if(isset($username))
                                    <input class="form-control input-login" name="txtUsername" id="txtUsername" value="{!!$username!!}" >
                                    @else
                                    <input class="form-control input-login" name="txtUsername" id="txtUsername" value="" placeholder="Tên đăng nhập">
                                    @endif
                                    
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-login" name="txtPassword" id="txtPassword" value="" placeholder="Mật khẩu">
                                </div>
                                <button type="submit" onclick="return checkLogin()" class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END WRAPPER -->
    </body>
    <script type="text/javascript">
        function checkLogin(){
            if($('input#txtUsername').val().trim() === '' || $('input#txtPassword').val().trim() === ''){
                $('label#lblLoginMessage').text('Vui lòng nhập đủ tên đăng nhập, mật khẩu');
                $('div#errLoginMessage').show();
                return false;
            }else{
                return true;
            }
        }
    </script>
</html>
