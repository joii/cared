<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Care.D</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Admin & Dashboard" name="designed for administrators or managerial users who require comprehensive access to monitor, manage, and control various aspects of the system." />
        <meta name="robots" content="noindex, follow">
        <meta content="CMS Theme" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

        <!-- plugin css -->
        <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/preloader.min.css')}}" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

        @if (request()->routeIs('backend.branch.*'))
        <link rel="stylesheet" href="{{ asset('backend/assets/modules/jquery-selectric/selectric.css')}}">
        @endif


        @if (request()->routeIs('backend.navigation.index','backend.footer.index','backend.social_link.index'))
        <!-- DataTables -->
        <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        @endif

        @if (request()->routeIs('backend.article.create','backend.article.edit','backend.promotion_package.create','backend.promotion_package.edit','backend.faqs.create','backend.faqs.edit','backend.home_content.create','backend.home_content.edit','backend.branch.create','backend.branch.edit'))

        <link rel="stylesheet" href="{{ asset('backend/assets/modules/summernote/summernote-bs4.css')}}">
        <link rel="stylesheet" href="{{ asset('backend/assets/modules/codemirror/lib/codemirror.css')}}">
        <link rel="stylesheet" href="{{ asset('backend/assets/modules/codemirror/theme/duotone-dark.css')}}">
        <link rel="stylesheet" href="{{ asset('backend/assets/modules/jquery-selectric/selectric.css')}}">
        <!-- DatePicker Css -->
        <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/modules/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/modules/jquery-selectric/selectric.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">

        @endif

        <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css')}}">



        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <!-- Toastr Css-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- ========== Header Start ========== -->
            @include('admin.body.header')
            <!-- Header End -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.body.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

             @yield('admin')

            <!-- End Page-content -->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

         <!-- ========== Footer Start ========== -->
         @include('admin.body.footer')
         <!-- Footer End -->


        <!-- Right Sidebar -->
        @include('admin.body.rightside')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js')}}"></script>
        <!-- pace js -->
        <script src="{{ asset('backend/assets/libs/pace-js/pace.min.js')}}"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        @if (request()->routeIs('admin.*'))
        <!-- apexcharts -->
        <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{ asset('backend/assets/js/pages/dashboard.init.js')}}"></script>

        @endif

       @if (request()->routeIs('backend.navigation.index','backend.footer.index','backend.social_link.index'))
       <!-- JS Libraies -->
        <script src="{{ asset('backend/assets/modules/datatables/datatables.min.js')}}""></script>
        <script src="{{ asset('backend/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}""></script>
        <script src="{{ asset('backend/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}""></script>
        <script src="{{ asset('backend/assets/modules/jquery-ui/jquery-ui.min.js')}}""></script>

        <!-- Page Specific JS File -->
        <script src="{{ asset('backend/assets/js/page/modules-datatables.js')}}""></script>
        @endif

        @if (request()->routeIs('backend.navigation.*'))
         <script src="{{ asset('backend/assets/js/pages/navigation.js')}}"></script>
        @endif
        @if (request()->routeIs('backend.article_category.*'))
         <script src="{{ asset('backend/assets/js/pages/article_category.js')}}"></script>
        @endif
       @if (request()->routeIs('backend.article.create','backend.article.edit','backend.promotion_package.create','backend.promotion_package.edit','backend.faqs.create','backend.faqs.edit','backend.home_content.create','backend.home_content.edit','backend.branch.create','backend.branch.edit'))
         <!-- General JS Scripts -->
        <script src="{{ asset('backend/assets/modules/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/modules/popper.js') }}"></script>
        <script src="{{ asset('backend/assets/modules/tooltip.js') }}"></script>
        <script src="{{ asset('backend/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('backend/assets/modules/moment.min.js') }}"></script>

        <!-- JS Libraies -->
        <script src="{{ asset('backend/assets/modules/summernote/summernote-bs4.js') }}"></script>
        <script src="{{ asset('backend/assets/modules/codemirror/lib/codemirror.js') }}"></script>
        <script src="{{ asset('backend/assets/modules/codemirror/mode/javascript/javascript.js') }}"></script>
        <script src="{{ asset('backend/assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
        <script src="{{ asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ asset('backend/assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{ asset('backend/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{ asset('backend/assets/js/pages/editor_calendar.js')}}"></script>
        @endif
        @if (request()->routeIs('backend.article.create','backend.article.edit'))
        <script src="{{ asset('backend/assets/js/pages/articles.js')}}"></script>
        @endif
         @if (request()->routeIs('backend.promotion_package.create','backend.promotion_package.edit'))
        <script src="{{ asset('backend/assets/js/pages/promotion_package.js')}}"></script>
        @endif

        @if (request()->routeIs('backend.branch.*'))
        <script src="{{ asset('backend/assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{ asset('backend/assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
        <script src="{{ asset('backend/assets/js/pages/branches.js')}}""></script>
        @endif





      <!-- dashboard init -->
        <script src="{{ asset('backend/assets/js/app.js')}}"></script>
        <script src="{{ asset('backend/assets/js/validate.min.js')}}"></script>


        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
               case 'info':
               toastr.info(" {{ Session::get('message') }} ");
               break;

               case 'success':
               toastr.success(" {{ Session::get('message') }} ");
               break;

               case 'warning':
               toastr.warning(" {{ Session::get('message') }} ");
               break;

               case 'error':
               toastr.error(" {{ Session::get('message') }} ");
               break;
            }
            @endif
           </script>


    </body>

</html>
