<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- Mirrored from pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/login-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 16:42:09 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title') - Ecommerce</title>
    <link rel="apple-touch-icon" href="{{ asset('backassets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/vendors/css/forms/icheck/custom.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/app.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/pages/login-register.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backassets/css/style.css') }}">
    <!-- END Custom CSS-->
    @yield('css')
</head>
<body class="vertical-layout vertical-menu-modern 1-column bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        @yield('content')
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('backassets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('backassets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('backassets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('backassets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('backassets/js/core/app.js') }}"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('backassets/js/scripts/forms/form-login-register.js') }}"></script>
    <!-- END PAGE LEVEL JS-->
    @yield('js')
</body>
</html>