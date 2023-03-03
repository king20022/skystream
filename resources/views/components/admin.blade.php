<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Exquisite crypto ventures | Platform for Virtual Currencies That Is Straightforward, Secure, and Reliable
    </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/asset/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Custom Css -->
    <link rel="stylesheet" href="/asset/css/main.css">

    <link rel="stylesheet" href="/asset/css/themes/all-themes.css" />
</head>

<body class="theme-blush">



    <!--Side menu and right menu -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="admin-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
                <div class="admin-action-info">
                    <h3>{{ Auth::user()->name }}</h3>
                    <ul>

                    </ul>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">

                    <li class="active open"><a href="{{ route('admin.dashboard') }}"><i
                                class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <li>
                    </li>
                    <li><a href="{{ route('admin.show') }}"><i class="zmdi zmdi-account"></i><span>Investors</span>
                        </a>

                    </li>

                    <li><a href="{{ route('investor.add') }}"><i class="zmdi zmdi-account-add"></i><span>Add-Coin</span>
                        </a>

                    </li>
                    <li><a href="{{ route('investment.add') }}"><i
                                class="zmdi zmdi-account-add"></i><span>Add-Investment</span> </a>

                    </li>

                    <li><a href="{{ route ('logout')}}"><i
                        class="zmdi zmdi-city-alt"></i><span>Logout</span> </a>

            </li>

                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red">
                            <div class="red"></div><span>Red</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div><span>Purple</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div><span>Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div><span>Cyan</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div><span>Green</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div><span>Deep Orange</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div><span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div><span>Black</span>
                        </li>
                        <li data-theme="blush" class="active">
                            <div class="blush"></div><span>Blush</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="chat">
                    <div class="demo-settings">
                        <div class="search">
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Search..." required
                                        autofocus>
                                </div>
                            </div>
                        </div>
                        <h6>Recent</h6>
                        <ul>
                            <li class="online">
                                <div class="media">
                                    <a role="button" tabindex="0"> <img class="media-object "
                                            src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Claire Sassu</span> <span class="message">Can you share
                                            the...</span> <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media"> <a role="button" tabindex="0"> <img class="media-object "
                                            src="assets/images/xs/avatar2.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Maggie jackson</span> <span class="message">Can you share
                                            the...</span> <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media"> <a role="button" tabindex="0"> <img class="media-object "
                                            src="assets/images/xs/avatar3.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Joel King</span> <span class="message">Ready for the
                                            meeti...</span> <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h6>Contacts</h6>
                        <ul>
                            <li class="offline">
                                <div class="media"> <a role="button" tabindex="0"> <img class="media-object "
                                            src="assets/images/xs/avatar4.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Joel King</span> <span
                                            class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media"> <a role="button" tabindex="0"> <img class="media-object "
                                            src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Joel King</span> <span
                                            class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="offline">
                                <div class="media"> <a class="pull-left " role="button" tabindex="0"> <img
                                            class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <span class="name">Joel King</span> <span
                                            class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->

    </section>
    <!--Side menu and right menu -->
    {{ $slot }}

    {{-- <div class="color-bg"></div> --}}

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
