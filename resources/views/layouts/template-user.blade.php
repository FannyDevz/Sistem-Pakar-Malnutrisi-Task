<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sispar Malnutrisi</title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{asset('template/images/favicon')}}" sizes="16x16" href="{{asset('template/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('template/plugins/highlightjs/styles/darkula.css')}}">
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('template/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="{{asset('template/plugins/summernote/dist/summernote.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2d1f726aba.js" crossorigin="anonymous"></script>
    <style>
        table.dataTable tr.even { background-color: #cbe0ff; }
        table.dataTable thead { background-color: #afcefd; }

    </style>
    	<style>
    .button-tambah {
      background-color: #00b300;
      color: #ffffff;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }

    .button-tambah:hover {
      background-color: transparent;
      color: #00b300;
      border: 2px solid #00b300;
    }

    .button-edit {
      background-color: #ffcc00;
      color: #ffffff;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }

    .button-edit:hover {
      background-color: transparent;
      color: #ffcc00;
      border: 2px solid #ffcc00;
    }

    .button-hapus {
      background-color: #cc0000;
      color: #ffffff;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }

    .button-hapus:hover {
      background-color: transparent;
      color: #cc0000;
      border: 2px solid #cc0000;
    }
  </style>
</head>


<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
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
            <div class="brand-logo">

                    <img src="{{asset('template/images/logo.jpg')}}" width="150" height="80">


                {{-- <a href="index.html">
                    <b class="logo-abbr"><img src="{{asset('template/images/logo.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{asset('template/images/logo-compact.png')}}" alt=""></span>

                </a> --}}
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix " >

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <br>
                    <H2>Sistem Pakar Malnutrisi</H2>
                </div>


            <div class="header-right">
                <ul class="clearfix">
                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="{{asset('images/user.png')}}" height="60" width="60" alt="">
                        </div>
                        <div class="drop-down dropdown-profile   dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>

                                    <li> <span class="text-center" id="user-name" >{{ $userName }}</span></li>
                                    <li><a class="has-arrow" href="{{route('user.data-user')}}" aria-expanded="false">
                                        <i class="icon-user menu-icon"></i>
                                        <span class="nav-text">Edit Data</span>
                                    </a> </li>
                                    <li>
                                        <a class="has-arrow" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();" aria-expanded="false" >
                                            <i class="icon-key menu-icon"></i><span class="nav-text"> {{ __('Logout') }}</span>

                                        </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       @include('layouts.partial.sidebar-user')
       @include('sweet::alert')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

        @yield('contents-user')

        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright text-center t ">
                <p>Copyright &copy; Designed & Developed by <a href="instagram.com/abrinsaputri">Abrinsa Putri</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('template/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('template/js/custom.min.js')}}"></script>
    <script src="{{asset('template/js/settings.js')}}"></script>
    <script src="{{asset('template/js/styleSwitcher.js')}}"></script>

    <script src="{{asset('template/plugins/highlightjs/highlight.pack.min.js')}}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <script src="{{asset('template/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('template/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
    <script src="{{asset('template/plugins/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{asset('template/plugins/summernote/dist/summernote-init.js')}}"></script>

    <script>hljs.initHighlightingOnLoad();</script>



    <script>
        (function($) {
        "use strict"

            new quixSettings({
                version: "light", //2 options "light" and "dark"
                layout: "horizontal", //2 options, "vertical" and "horizontal"
                navheaderBg: "color_1", //have 10 options, "color_1" to "color_10"
                headerBg: "color_1", //have 10 options, "color_1" to "color_10"
                sidebarStyle: "vertical", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
                sidebarBg: "color_1", //have 10 options, "color_1" to "color_10"
                sidebarPosition: "static", //have two options, "static" and "fixed"
                headerPosition: "static", //have two options, "static" and "fixed"
                containerLayout: "wide",  //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
                direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
            });


        })(jQuery);
    </script>
 @yield('script')

</body>

</html>
