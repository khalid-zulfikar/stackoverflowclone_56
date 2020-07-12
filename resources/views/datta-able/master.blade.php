<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clone Stack Overflow Kelompok 56</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('/datta-able/images/favicon.ico')}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset('/datta-able/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('/datta-able/plugins/animation/css/animate.min.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('/datta-able/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @stack('links')
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- navigation menu start -->
        @include('datta-able.partials.navbar')
    <!-- navigation menu end -->

    <!-- [ Header ] start -->
        @include('datta-able.partials.header')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
        @yield('content')
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="{{asset('/datta-able/js/vendor-all.min.js')}}"></script>
	<script src="{{asset('/datta-able/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/datta-able/js/pcoded.min.js')}}"></script>
    @stack('scripts')
</body>
</html>
