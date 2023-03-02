<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Exquisite crypto ventures | Platform for Virtual Currencies That Is Straightforward, Secure, and Reliable
    </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/asset/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Custom Css -->
    <link rel="stylesheet" href="/asset/css/main.css">

    <link rel="stylesheet" href="/asset/css/themes/all-themes.css" />
</head>

<body class="theme-blush">
    {{-- <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blush">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader --> --}}


    <!--Side menu and right menu -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="admin-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
                <div class="admin-action-info">

                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active open"><a href="{{ route ('investor.show')}}"><i
                                class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    {{-- <li><a href="#"><i
                                class="zmdi zmdi-account"></i><span>My Profile</span> </a>

                    </li> --}}
                    <li><a href=""><i
                                class="zmdi zmdi-accounts-outline"></i><span>Investment</span> </a>

                    </li>
                    <li><a href="{{ route ('investor.reveal')}}"><i
                                class="zmdi zmdi-book"></i><span>Deposit</span> </a>

                    </li>
                    <li><a href=""><i
                                class="zmdi zmdi-book"></i><span>Withdrawals</span> </a>
                    </li>
                    <li><a href="{{ route ('logout')}}"><i
                                class="zmdi zmdi-city-alt"></i><span>Logout</span> </a>

                    </li>

                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>
    <!--Side menu and right menu -->
    {{ $slot }}
    <div class="color-bg"></div>

    <!-- Jquery Core Js -->
    <script src="asset/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="asset/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="asset/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search -->

    <script src="asset/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
    <script src="asset/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js -->

    <script src="asset/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="asset/js/pages/charts/sparkline.min.js"></script>
    <script src="asset/js/pages/index.js"></script>
</body>

</html>
