<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Portal do Condomínio</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="icon" href="http://demo.geekslabs.com/materialize/v2.1/layout03/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="http://demo.geekslabs.com/materialize/v2.1/layout03/images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="http://demo.geekslabs.com/materialize/v2.1/layout03/images/favicon/mstile-144x144.png">

    <link href="{{ URL::asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ URL::asset('css/style-custom.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://demo.geekslabs.com/materialize/v2.1/layout03/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">

    {{--<link href="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">--}}
    {{--<link href="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">--}}
    {{--<link href="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">--}}
</head>

<body>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<header id="header" class="page-topbar">
    <div class="navbar-fixed">
        @include("dashboard/top")
        @include("dashboard/menu")
    </div>
</header>
<div id="main">
    <div class="wrapper">
        @include("dashboard/menu-leftside")
        <section id="content">
            <div class="container page-content" id="content-site-global">
                @include("dashboard/dashboard")
            </div>
        </section>
    </div>
</div>

<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/materialize.js"></script>
{{--<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>--}}

{{--<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/chartist-js/chartist.min.js"></script>--}}

{{--<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/chartjs/chart.min.js"></script>--}}
{{--<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/chartjs/chart-script.js"></script>--}}

{{--<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/sparkline/jquery.sparkline.min.js"></script>--}}
{{--<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/sparkline/sparkline-script.js"></script>--}}

{{--<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>--}}
{{--<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>--}}
{{--<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/jvectormap/vectormap-script.js"></script>--}}

<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins.js"></script>

</body>

</html>
