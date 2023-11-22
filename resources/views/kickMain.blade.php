<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>AdmPage</title>
    <link rel="icon" type="image/x-icon" href="{{asset("/assets/img/favicon.ico")}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <script src="{{asset("/assets/js/libs/jquery-3.1.1.min.js")}}"></script>
    <link href="{{asset("/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("/assets/css/plugins.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/scrollspyNav.css")}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset("plugins/bootstrap-select/bootstrap-select.min.css")}}">
    <link href="{{asset("/plugins/file-upload/file-upload-with-preview.min.css")}}" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset("plugins/select2/select2.min.css")}}">
    <link href="{{asset("assets/css/elements/miscellaneous.css")}}" rel="stylesheet" type="text/css">

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it
        */
        .navbar .navbar-item.navbar-dropdown {
            margin-left: auto;
        }
        .layout-px-spacing {
            min-height: calc(100vh - 96px)!important;
        }

    </style>


    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="sidebar-noneoverflow">

<!--  BEGIN NAVBAR  -->
@include('adminka.navbarAdm')
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
@include('adminka.sidebarAdm')
    <!--  END SIDEBAR  -->
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <!-- CONTENT AREA -->
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">

                            @yield('content')

                </div>
            </div>

            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">

                </div>
            </div>
        </div>



        <!-- CONTENT AREA -->

    </div>
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
           {{-- <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>--}}
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->

</div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset("/bootstrap/js/popper.min.js")}}"></script>
<script src="{{asset("/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("/plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
<script src="{{asset("/assets/js/app.js")}}"></script>

{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        App.init();--}}
{{--    });--}}
{{--</script>--}}
<script src="{{asset("/assets/js/custom.js")}}"></script>
<script src="{{asset("/plugins/highlight/highlight.pack.js")}}"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>
