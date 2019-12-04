    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="TipsTer">
        <meta name="keywords" content="">
        <meta name="author" content="CoelhoSolutions">

        <title>@yield('title')</title>
        
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
        <link href="{{asset('assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">


        <!-- Plugins css -->
        <link href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>

    </head>
    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <!-- Logo container-->
                    <div class="logo">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{asset('assets/images/logo-sm.png')}}" alt="" class="logo-small"> 
                            <img src="{{asset('assets/images/logo.png')}}" alt="" class="logo-large">
                        </a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras topbar-custom">
                        <ul class="float-right list-unstyled mb-0">
                            <li class="dropdown notification-list d-none d-sm-block">
                                <form role="search" class="app-search">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="Search.."> 
                                        <button type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </li>
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="ti-bell noti-icon"></i> 
                                    <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                    <!-- item-->
                                    <h6 class="dropdown-item-text">Notifications (258)</h6>
                                    <div class="slimscroll notification-item-list">
                                        <!-- item--> 
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </div>
                                            <p class="notify-details">Your order is placed
                                                <span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                            </p>
                                        </a>
                                        <!-- item--> 
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning">
                                                <i class="mdi mdi-message"></i>
                                            </div>
                                            <p class="notify-details">New Message received
                                                <span class="text-muted">You have 87 unread messages</span>
                                            </p>
                                        </a>
                                        <!-- item--> 
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-martini"></i>
                                            </div>
                                            <p class="notify-details">Your item is shipped
                                                <span class="text-muted">It is a long established fact that a reader will</span>
                                            </p>
                                        </a>
                                        <!-- item--> 
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </div>
                                            <p class="notify-details">Your order is placed
                                                <span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                            </p>
                                        </a>
                                        <!-- item--> 
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger">
                                                <i class="mdi mdi-message"></i>
                                            </div>
                                            <p class="notify-details">New Message received
                                                <span class="text-muted">You have 87 unread messages</span>
                                            </p>
                                        </a>
                                    </div>
                                    <!-- All--> 
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all 
                                        <i class="fi-arrow-right"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="dropdown notification-list">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                        <!-- item--> 
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-account-circle m-r-5"></i> Profile
                                        </a> 
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-wallet m-r-5"></i> My Wallet
                                        </a> 
                                        <a class="dropdown-item d-block" href="#">
                                            <span class="badge badge-success float-right">11</span>
                                            <i class="mdi mdi-settings m-r-5"></i> Settings
                                        </a> 
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">
                                            <i class="mdi mdi-power text-danger"></i> Sair
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <!-- Mobile menu toggle--> 
                                <a class="navbar-toggle nav-link" id="mobileToggle">
                                    <div class="lines"><span></span> <span></span> <span></span></div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->
                    <div class="clearfix"></div>
                </div><!-- end container -->
            </div><!-- end topbar-main -->
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">{{ __('Seja Bem-vindo Apostador') }}</li>
                            </ol>
                            <div class="state-information">
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">Balance $ 2,317</div>
                                </div>
                                <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">Item Sold 1230</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="{{ route('home') }}"><i class="ti-dashboard"></i> 
                                    <span>{{ __('Início') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}"><i class="ti-home"></i> 
                                    <span>{{ __('Casas') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('apostas.index') }}"><i class="ti-money"></i> 
                                    <span>{{ __('Apostas') }}</span>
                                </a>
                            </li>
                            <!--<li class="has-submenu">
                                <a href="#"><i class="ti-email"></i>Email</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="email-inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="email-read.html">Email Read</a>
                                    </li>
                                    <li>
                                        <a href="email-compose.html">Email Compose</a>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end navigation -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end navbar-custom -->
        </header>

        
        
        