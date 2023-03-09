<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="utf-8" />
    <title>Sky Stream Exchange - Home</title>
    <meta name="viewport" content="width=500" />


    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/select2.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/skins/orange.css">


    <link rel="alternate stylesheet" type="/text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="/text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="/text/css" title="blue" href="css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="/css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit">
    </script>
    <style>
    </style>



</head>

<body>
    <!-- SVG Preloader Starts -->

    {{-- <div id="preloader">
        <div id="preloader-content">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px"
                viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="5" />
                    <feOffset dx="0" dy="0" result="offsetblur" />
                    <feFlood flood-color="red" />
                    <feComposite in2="offsetblur" operator="in" />
                    <feMerge>
                        <feMergeNode />
                        <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>
                <path class="path" fill="#000000"
                    d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z" />
            </svg>
        </div>
    </div> --}}
    <!-- SVG Preloader Ends -->


    <!-- Live Style Switcher Ends - demo only -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <!-- Logo Starts -->
                    <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                        <a href="{{ route('welcome') }}">
                            <img id="logo" width="200" src="logobroker.png" style=" width:50%; " alt="logo">
                        </a>

                    </div>
                    <!-- Logo Ends -->
                    <div align=center id="google_translate_element"></div>
                    <!-- Statistics Starts -->
                    <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                            <li>
                                <h6>9,450 USD</h6><span>Last trade price</span>
                            </li>
                            <li>
                                <h6>+5.26%</h6><span>24 hour price</span>
                            </li>
                            <li>
                                <h6>12.820 BTC</h6><span>24 hour volume</span>
                            </li>
                            <li>
                                <h6>2,231,775</h6><span>active traders</span>
                            </li>
                            <li>
                                <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                                <span>Live Bitcoin price</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Statistics Ends -->
                    <!-- User Sign In/Sign Up Starts -->
                    <div class="col-md-3 col-lg-3">
                        <ul class="unstyled user">
                            <li class="sign-in"><a href="{{ route('login') }}" class="btn btn-primary"><i
                                        class="fa fa-user"></i> sign in</a></li>
                            <li class="sign-up"><a href="{{ route('register') }}" class="btn btn-primary"><i
                                        class="fa fa-user-plus"></i> register</a></li>
                        </ul>
                    </div>
                    <!-- User Sign In/Sign Up Ends -->

                </div>

            </div>


            <!-- TradingView Widget BEGIN -->
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container mb-0">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank">

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                            {
                                "symbols": [{
                                        "proName": "FOREXCOM:SPXUSD",
                                        "title": "S&P 500"
                                    },
                                    {
                                        "proName": "FOREXCOM:NSXUSD",
                                        "title": "US 100"
                                    },
                                    {
                                        "proName": "FX_IDC:EURUSD",
                                        "title": "EUR/USD"
                                    },
                                    {
                                        "proName": "BITSTAMP:BTCUSD",
                                        "title": "Bitcoin"
                                    },
                                    {
                                        "proName": "BITSTAMP:ETHUSD",
                                        "title": "Ethereum"
                                    }
                                ],
                                "showSymbolLogo": true,
                                "colorTheme": "dark",
                                "isTransparent": false,
                                "displayMode": "adaptive",
                                "locale": "en"
                            }
                        </script>
                </div>
                <!-- TradingView Widget END -->
                <!-- TradingView Widget END -->
                <!-- Navigation Menu Starts -->
                <nav class="site-navigation navigation" id="site-navigation">
                    <div class="container">
                        <div class="site-nav-inner">
                            <!-- Logo For ONLY Mobile display Starts -->
                            <a class="logo-mobile" href="#">
                                <img id="logo-mobile" class="img-responsive" src="Sky stream exchange.png"
                                    alt="">
                            </a>
                            <!-- Logo For ONLY Mobile display Ends -->
                            <!-- Toggle Icon for Mobile Starts -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Toggle Icon for Mobile Ends -->
                            <div class="collapse navbar-collapse navbar-responsive-collapse">
                                <!-- Main Menu Starts -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="#aboutus">About Us</a></li>
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#plans">Our Plans</a></li>


                                    <li><a href="#">Contact Us</a></li>
                                    <!--  <li><div id="google_translate_element"></div></li> -->



                                </ul>
                                <!-- Main Menu Ends -->
                            </div>
                        </div>
                    </div>
                    <!-- Search Input Starts -->
                    <div class="site-search">
                        <div class="container">
                            <input type="text" placeholder="type your keyword and hit enter ...">
                            <span class="close">×</span>
                        </div>
                    </div>
                    <!-- Search Input Ends -->
                </nav>
                <!-- Navigation Menu Ends -->
        </header>

        <!-- Smartsupp Live Chat script --
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = 'c18d7ffe530d35f2f0394f058e54deea7a5297cd';
    window.smartsupp || (function(d) {
        var s, c, o = smartsupp = function() {
            o._.push(arguments)
        };
        o._ = [];
        s = d.getElementsByTagName('script')[0];
        c = d.createElement('script');
        c.type = 'text/javascript';
        c.charset = 'utf-8';
        c.async = true;
        c.src = '../www.smartsuppchat.com/loaderd41d.js?';
        s.parentNode.insertBefore(c, s);
    })(document);
</script>        <!-- Header Ends -->

        {{ $slot }}
        <!-- Footer Starts -->

        <footer class="footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-2">
                            <h4>Our Company</h4>
                            <div class="menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Our Plans</a></li>

                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-2">
                            <h4>Help & Support</h4>
                            <div class="menu">
                                <ul>


                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-3">
                            <h4>Contact Us </h4>
                            <div class="contacts">
                                <div>
                                    <span>support@Skystreamexchange.com</span>
                                </div>
                                <div>
                                    <span>0000 --- --- --</span>
                                </div>
                                <div>
                                    <span><i class="fas fa-map-marker-alt uk-margin-small-right"></i> Wellington, New
                                        Zealand</span>
                                </div>


                            </div>

                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-12 col-md-5">
                            <!-- Facts Starts -->
                            <div class="facts-footer">
                                <div>
                                    <h5>$198.76B</h5>
                                    <span>Market cap</span>
                                </div>
                                <div>
                                    <h5>243K</h5>
                                    <span>daily transactions</span>
                                </div>
                                <div>
                                    <h5>369K</h5>
                                    <span>active accounts</span>
                                </div>
                                <div>
                                    <h5>127</h5>
                                    <span>supported countries</span>
                                </div>
                            </div>
                            <!-- Facts Ends -->
                            <hr>

                        </div>
                        <!-- Footer Widget Ends -->
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                            <p class="text-center">Copyright © 2023 Sky stream exchange All Rights Reserved </p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <!-- Footer Ends -->
        <!-- Back To Top Starts  -->
        <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
        <!-- Back To Top Ends  -->

        <!-- Template JS Files -->
        <script src="/js/jquery-2.2.4.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/select2.min.js"></script>
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <script src="/js/custom.js"></script>

        <!-- Live Style Switcher JS File - only demo -->
        <script src="/js/styleswitcher.js"></script>
        <script src="//code.tidio.co/siunvhzub3nu1lfoiiehhobczd0qjl7z.js" async></script>


        <!-- Begin of Chaport Live Chat code --
      <script type="text/javascript">
          (function(w, d, v3) {
              w.chaportConfig = {
                  appId: '638fc2a74a67c51a91bc0960'
              };

              if (w.chaport) return;
              v3 = w.chaport = {};
              v3._q = [];
              v3._l = {};
              v3.q = function() {
                  v3._q.push(arguments)
              };
              v3.on = function(e, fn) {
                  if (!v3._l[e]) v3._l[e] = [];
                  v3._l[e].push(fn)
              };
              var s = d.createElement('script');
              s.type = 'text/javascript';
              s.async = true;
              s.src = 'https://app.chaport.com/javascripts/insert.js';
              var ss = d.getElementsByTagName('script')[0];
              ss.parentNode.insertBefore(s, ss)
          })(window, document);
      </script>
      <!-- End of Chaport Live Chat code -->



    </div>
    <!-- Wrapper Ends -->
</body>
