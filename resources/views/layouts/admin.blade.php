<!doctype html>
<html lang="en">

    <head>
        <title>Admin | HeavenCoffee</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../vendor/linearicons/style.css">
        <link rel="stylesheet" href="../../vendor/toastr/toastr.min.css">

        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../../vendor/toastr/toastr.min.js"></script>
        <script src="../../js/klorofil-common.js"></script>
        <script src="../../js/select2.js"></script>
        <script src="../../js/hc.js"></script>
        <script src="../../js/ckeditor.js"></script>
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="../../css/main.css">
        <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
        <link rel="stylesheet" href="../../css/demo.css">
        <link rel="apple-touch-icon" sizes="76x76" href="../../img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../../img/favicon.png">
    </head>

    <body>
        <!-- WRAPPER -->
        <div id="wrapper">
            <!-- NAVBAR -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="brand" style="padding: 10px 10px 10px 30px">
                    <a href="/admin/index"><img src="../../img/logo-hc-min.jpg" class="img-responsive logo"></a>
                </div>
                <div class="container-fluid">
                    <div class="navbar-btn">
                        <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                    </div>
                    <div class="navbar-btn" style="margin-left: 50px; padding: 10px 0px 0px 0px">
                        <label style="font-size: 30px; margin-bottom: 0px">@yield('page-title')</label>
                    </div>

                    <div id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <!--Hiển thị số thông báo chờ duyệt-->
                                <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="lnr lnr-alarm"></i>
                                    <span class="badge bg-danger">5</span>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Có 5 đơn hàng đang chờ duyệt</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../../img/User-green.png" class="img-circle" alt="Avatar"> <span>
                                        {!!session('username')!!}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                    <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                    <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                                    <li><a href="/login"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END NAVBAR -->
            <!-- LEFT SIDEBAR -->
            <div id="sidebar-nav" class="sidebar">
                <div class="sidebar-scroll">
                    <nav>
                        <ul class="nav">
                            <li><a href="#" class="active"><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
                            <li>
                                <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fa fa-coffee"></i><span>Quản lý đồ uống</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                                <div id="subPages" class="collapse ">
                                    <ul class="nav">
                                        <li><a href="#" class="">Danh mục đồ uống</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="fa fa-file-text"></i><span>Quản lý hóa đơn</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                                <div id="subPages2" class="collapse ">
                                    <ul class="nav">
                                        <li><a href="/Admin/bill/import-bill" class="">Hóa đơn nhập hàng</a></li>
                                        <li><a href="/Admin/bill/import-order" class="">Đề xuất nhập hàng</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="/Admin/user" class=""><i class="lnr lnr-user"></i> <span>Quản lý nhân viên</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- END LEFT SIDEBAR -->
            <!-- MAIN -->
            <div class="main">
                <!-- MAIN CONTENT -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div id="toastr-demo" class="panel">
                            <div class="panel-body">
                                @yield('page-content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT -->
            </div>
            <!-- END MAIN -->
            <div class="clearfix"></div>
            <footer>
                <div class="container-fluid">
                    <p class="copyright">&copy; 2017 <a href="" target="">Theme I Need</a>. All Rights Reserved.</p>
                </div>
            </footer>
        </div>
        <!-- END WRAPPER -->

    </body>