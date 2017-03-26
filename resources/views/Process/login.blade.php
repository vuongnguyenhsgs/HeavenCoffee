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
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
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
                            <form class="form-auth-small" method="POST" action="/login">
                                <div class="form-group">
                                    <input class="form-control input-login" id="txtUsername" placeholder="Tên đăng nhập">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-login" id="txtPassword" placeholder="Mật khẩu">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END WRAPPER -->
    </body>

</html>
