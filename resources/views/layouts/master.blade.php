<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Ecommerce - @yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('backassets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/fonts/meteocons/style.css') }}">
    @yield('vender-css')
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/app.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('backassets/fonts/line-awesome/css/line-awesome.min.css') }}">
    @yield('page-css')
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/style.css') }}">
    <!-- END Custom CSS-->
    @yield('custome-css')
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    
    <div class="se-pre-con"></div>

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row position-relative">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="index-2.html"><img class="brand-logo" alt="modern admin logo" src="{{ asset('backassets/images/logo/logo.png') }}">
                        <h3 class="brand-text">Modern Admin</h3></a></li>
                        <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                        <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                    </ul>
                </div>
                <div class="navbar-container content">
                    <div class="collapse navbar-collapse" id="navbar-mobile">
                        <ul class="nav navbar-nav mr-auto float-left">         
                            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                                <div class="search-input">
                                    <input class="input" type="text" placeholder="Explore Modern...">
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1">Hello,<span class="user-name text-bold-700">@if(Auth::check()) {{ ucfirst(Auth::user()->name) }}   @endif</span></span><span class="avatar avatar-online"><img src="{{ asset('backassets/images/portrait/small/avatar-s-19.png') }}" alt="avatar"><i></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                                    <a class="dropdown-item" href="{{ url('logout') }}"><i class="ft-power"></i> Logout
                                    </a>
                                </div>
                            </li>
                            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                                    </li>
                                    <li class="scrollable-container media-list w-100">
                                        <a href="javascript:void(0)">
                                          <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i>
                                            </div>
                                            <div class="media-body">
                                              <h6 class="media-heading">You have new order!</h6>
                                              <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item @if(Request::segment(1) == "dashboard") active  @endif">
                    <a href="{{ url('dashboard') }}"><i class="la la-home"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/') }}"><i class="la la-television"></i>
                        <span class="menu-title">Visite Site</span>
                    </a>
                </li>
                <li class="nav-item @if(Request::segment(2) == "banner") active  @endif">
                    <a href="{{ url('backend/banner') }}"><i class="la la-image"></i>
                        <span class="menu-title">Banner</span>
                    </a>
                </li>
                <li class="nav-item @if(Request::segment(2) == "category") active  @endif">
                    <a href="{{ url('backend/category') }}"><i class="la la-briefcase"></i>
                        <span class="menu-title">Category</span>
                    </a>
                </li>
                <li class="nav-item @if(Request::segment(2) == "product") active  @endif">
                    <a href="{{ url('backend/product') }}"><i class="la la-shopping-cart"></i>
                        <span class="menu-title">Product</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                @if(Request::segment(1) != "dashboard")
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">@yield('page-title')</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('login') }}">Home</a>
                                </li>
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div>


                <div class="content-header-right col-md-6 col-12">
                    <div class="float-md-right">
                        @yield('action')
                    </div>
                </div>
                @endif
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible col-md-6" role="alert">
                            <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Error! </strong> {{ $error }}.
                        </div>
                    @endforeach
                @endif
                @if($msg = Session::get('success'))
                    <div class="alert bg-success alert-icon-left alert-arrow-left alert-dismissible col-md-12" role="alert">
                        <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Success! </strong> {{ $msg }}.
                    </div>
                @endif
                @if($msg = Session::get('error'))
                    <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible col-md-12" role="alert">
                        <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Error! </strong> {{ $msg }}.
                    </div>
                @endif
            </div>
            <div class="content-body"><!-- Basic initialization table -->
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
        </p>
    </footer>


    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('backassets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    @yield('page-vendor-js')
    <!-- END PAGE VENDOR JS-->

    <!-- BEGIN MODERN JS-->

    <!-- BEGIN MODERN JS-->
    <script src="{{  asset('backassets/js/core/app-menu.js') }}"></script>
    <script src="{{  asset('backassets/js/core/app.js') }}"></script>
    <script src="{{  asset('backassets/js/scripts/customizer.js') }}"></script>
    
    <!-- END MODERN JS-->
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    @yield('custome-js')
    <!-- END PAGE LEVEL JS-->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
</body>
</html>