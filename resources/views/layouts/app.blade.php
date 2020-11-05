<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Oct 2020 08:40:35 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- App Icons -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SocialV - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/typography.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>
<style>
    .sign-in-logo img {
        height: 220px;
    }
</style>
<body>

<!-- Begin page -->


    @yield('content')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- Appear JavaScript -->
<script src="{{asset('frontend/js/jquery.appear.js')}}"></script>
<!-- Countdown JavaScript -->
<script src="{{asset('frontend/js/countdown.min.js')}}"></script>
<!-- Counterup JavaScript -->
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<!-- Wow JavaScript -->
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<!-- Apexcharts JavaScript -->
<script src="{{asset('frontend/js/apexcharts.js')}}"></script>
<!-- lottie JavaScript -->
<script src="{{asset('frontend/js/lottie.js')}}"></script>
<!-- Slick JavaScript -->
<script src="{{asset('frontend/js/slick.min.js')}}"></script>
<!-- Select2 JavaScript -->
<script src="{{asset('frontend/js/select2.min.js')}}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{asset('frontend/js/smooth-scrollbar.js')}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset('frontend/js/chart-custom.js')}}"></script>
<!-- Custom JavaScript -->
<script src="{{asset('frontend/js/custom.js')}}"></script>

<script type="text/javascript">
    $('select').on('change', function() {
        var method = this.value;
        if(method == 3){
            $("#organization").show();
            $("#address").show();
            $("#firstname").hide();
            $("#lastname").hide();
            $("#organization").find('input').attr('required',true);
            $("#address").find('input').attr('required',true);
            $("#firstname").find('input').attr('required',false);
            $("#lastname").find('input').attr('required',false);

        } if(method == 2 || method == 1 ){
            $("#organization").hide();
            $("#address").hide();
            $("#firstname").show();
            $("#lastname").show();
            $("#organization").find('input').attr('required',false);
            $("#address").find('input').attr('required',false);
            $("#firstname").find('input').attr('required',true);
            $("#lastname").find('input').attr('required',true);
        }
    });


</script>
</body>

<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Oct 2020 08:40:39 GMT -->
</html>
