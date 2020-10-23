<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- App Icons -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- C3 charts css -->
    <link href="{{ asset('backend/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Basic Css files -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>




    @yield('content')






<!-- jQuery  -->
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/jquery.slimscroll.js')}} "></script>
<script src="{{ asset('backend/assets/js/waves.js') }}"></script>
<script src="{{ asset('backend/assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('backend/assets/js/jquery.scrollTo.min.js') }}"></script>

<!-- Peity chart JS -->
<script src="{{ asset('backend/plugins/peity-chart/jquery.peity.min.js')}}"></script>

<!--C3 Chart-->
<script src="{{ asset('backend/plugins/d3/d3.min.js') }}"></script>
<script src="{{ asset('backend/plugins/c3/c3.min.js') }}"></script>

<!-- KNOB JS -->
<script src="{{ asset('backend/plugins/jquery-knob/excanvas.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.js') }}"></script>

<!-- Page specific js -->
<script src="{{ asset('backend/assets/pages/dashboard.js') }}"></script>

<!-- App js -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>
</html>