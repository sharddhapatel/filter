<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.themefisher.com/focus/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 05:13:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL:: asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{URL:: asset('assets/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('assets/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{URL:: asset('assets/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{URL:: asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{URL:: asset('assets/vendor/summernote/summernote.css')}}" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index-2.html" class="brand-logo">
                <img class="logo-abbr" src="{{URL:: asset('assets/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{URL:: asset('assets/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{URL:: asset('assets/images/logo-text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="{{url('admin')}}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>

                    </li>
                    <li><a class="has-arrow" href="{{url('category')}}" aria-expanded="false"><i
                        class="mdi mdi-content-duplicate"></i><span class="nav-text">Category</span></a>
                    </li>
                    <li><a class="has-arrow" href="{{url('product')}}" aria-expanded="false"><i
                        class="mdi mdi-sitemap"></i><span class="nav-text">Product</span></a>
                    </li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
@yield('content')
 <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <!-- <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p> -->
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{URL:: asset('assets/vendor/global/global.min.js')}}"></script>
    <script src="{{URL:: asset('assets/js/quixnav-init.js')}}"></script>
    <script src="{{URL:: asset('assets/js/custom.min.js')}}"></script>


    <!-- Vectormap -->
    <script src="{{URL:: asset('assets/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/morris/morris.min.js')}}"></script>


    <script src="{{URL:: asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{URL:: asset('assets/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{URL:: asset('assets/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{URL:: asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{URL:: asset('assets/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


    <script src="{{URL:: asset('assets/js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{URL:: asset('assets/vendor/summernote/js/summernote.min.js')}}"></script>
    <!-- Summernote init -->
    <script src="{{URL:: asset('assets/js/plugins-init/summernote-init.js')}}"></script>

</body>


<!-- Mirrored from demo.themefisher.com/focus/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 05:13:38 GMT -->
</html>
