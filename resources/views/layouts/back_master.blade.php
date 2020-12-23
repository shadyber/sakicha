
<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="DESCRIPTION HERE">
    <meta name="keywords" content="KEY WORD">
    <meta name="author" content="ROOTSYSTEM">
    <title>Sakicha | @yield('title')  -> @yield('subtitle')</title>
    <link rel="apple-touch-icon" href="/back/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/back/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/back/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css/core/colors/palette-gradient.css">
    @stack('css')
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/back/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

@include('inc.back.header')
@include('inc.back.menu')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">@yield('title')</h2>

                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="">@yield('title')</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">@yield('subtitle')</a>
                                </li>
                            </ol>
                        </div>


                    </div>
                </div>
            </div>




        </div>
        <div class="content-body">

@yield('content')

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('inc.back.footer')

<!-- BEGIN: Vendor JS-->
<script src="/back/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/back/app-assets/js/core/app-menu.js"></script>
<script src="/back/app-assets/js/core/app.js"></script>
<script src="/back/app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
@stack('js')
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
