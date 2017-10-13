<!DOCTYPE html>
<html>

<head>
    <title>@yield('title') - Dcms.RcikSun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.lug.ustc.edu.cn/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.lug.ustc.edu.cn/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{ asset('./backend/lib/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./backend/lib/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./backend/lib/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./backend/lib/css/bootstrap-switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./backend/lib/css/checkbox3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./backend/lib/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./backend/lib/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./backend/lib/css/select2.min.css') }}">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{ asset('./backend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./backend/css/themes/flat-blue.css') }}">
</head>

<body class="flat-blue">
<div class="app-container">
    <div class="row content-container">
        <nav class="navbar navbar-default navbar-fixed-top navbar-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-expand-toggle">
                        <i class="fa fa-bars icon"></i>
                    </button>
                    <ol class="breadcrumb navbar-breadcrumb">
                        <li class="active">管 理</li>
                    </ol>
                    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                        <i class="fa fa-th icon"></i>
                    </button>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                        <i class="fa fa-times icon"></i>
                    </button>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li class="title">
                                通知 <span class="badge pull-right">0</span>
                            </li>
                            <li class="message">
                                无
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown danger">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-star-half-o"></i> 4</a>
                        <ul class="dropdown-menu danger  animated fadeInDown">
                            <li class="title">
                                通知 <span class="badge pull-right">4</span>
                            </li>
                            <li>
                                <ul class="list-group notifications">
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i> new registration
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge success">1</span> <i class="fa fa-check icon"></i> 新订单
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge danger">2</span> <i class="fa fa-comments icon"></i> customers messages
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item message">
                                            view all
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Emily Hart <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li class="profile-img">
                                <img src="../img/profile/picjumbo.com_HNCK4153_resize.jpg" class="profile-img">
                            </li>
                            <li>
                                <div class="profile-info">
                                    <h4 class="username">Emily Hart</h4>
                                    <p>emily_hart@email.com</p>
                                    <div class="btn-group margin-bottom-2x" role="group">
                                        <button type="button" class="btn btn-default"><i class="fa fa-user"></i> 个人</button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> 退出</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="side-menu sidebar-inverse">
            @include('backend.btzero.common.menu')
        </div>
        <!-- Main Content -->
        <div class="container-fluid">
            @yield('contents')
        </div>
    </div>
    <footer class="app-footer">
        <div class="wrapper">
            <span class="pull-right">1.0.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright. - Collect from 随便下的
        </div>
    </footer>
    <div>
        <!-- Javascript Libs -->
        <script type="text/javascript" src="{{ asset('./backend/lib/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/lib/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/lib/js/Chart.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/lib/js/bootstrap-switch.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/lib/js/jquery.matchHeight-min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/lib/js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/lib/js/dataTables.bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/lib/js/select2.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/lib/js/ace/ace.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/lib/js/ace/mode-html.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/lib/js/ace/theme-github.js') }}"></script>
        <!-- Javascript -->
        <script type="text/javascript" src="{{ asset('./backend/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('./backend/js/index.js') }}"></script>
</body>

</html>
