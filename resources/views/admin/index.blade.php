
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title> ADMIN Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App Icons -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- C3 charts css -->
    <link href="{{ asset('backend/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Basic Css files -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">

        @include('admin/includes/leftsidebar')
    <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->


    <!-- Start right Content here -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            @include('admin/includes/topbar')
            <!-- Top Bar End -->

            <!-- ==================
                 PAGE CONTENT START
                 ================== -->

            <div class="page-content-wrapper">

                <div class="container-fluid">

                    @yield('content')

                </div><!-- container -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

        <footer class="footer">
            © 2017 - 2019 Admiria <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->

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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Page specific js -->
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
<script src="{{ asset('backend/assets/pages/dashboard.js') }}"></script>


<!-- Required datatable js -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('backend/assets/pages/datatables.init.js')}}"></script>


<!-- App js -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>


</body>
</html>
