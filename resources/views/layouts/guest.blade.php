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
        <div class="mgm " style="display: none">
            <div class="txt" style="color: black">
                Someone from <b></b> just made a withdrawal of
                <a href="javascript:void(0);" onclick="javascript:void(0);"></a>
            </div>
        </div>

        <style>
            .mgm {
                border-radius: 7px;
                position: fixed;
                z-index: 150;
                bottom: 300px;
                right: 50px;
                background: #fff;
                padding: 10px 27px;
                box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.3);
            }

            .mgm a {
                font-weight: 700;
                display: block;
                color: #f2d516;
            }

            .mgm a,
            .mgm a:active {
                transition: all 0.2s ease;
                color: #f2d516;
            }
        </style>
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script>
        <script type="text/javascript">
            var listCountries = [
                "Brazil",
                "USA",
                "Germany",
                "France",
                "Italy",
                "United Kingdom",
                "Australia",
                "Iraq",
                "Canada",
                "Argentina",
                "Saudi Arabia",
                "Mexico",
                "USA",
                "South Africa",
                "Venezuela",
                "United Kingdom",
                "Sweden",
                "Brazil",
                "Germany",
                "Italy",
                "South Africa",
                "United Kingdom",
                "South Africa",
                "Greece",
                "Cuba",
                "South Africa",
                "Portugal",
                "Austria",
                "Brazil",
                "Panama",
                "Dubai",
                "USA",
                "Netherlands",
                "Switzerland",
                "Belgium",
                "Israel",
                "Cyprus",
            ];
            var listPlans = [
                "$500",
                "$1500",
                "$1000",
                "$10,000",
                "$2000",
                "$3000",
                "$4000",
                "$600",
                "$700",
                "$2500",
            ];
            interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
            var run = setInterval(request, interval);

            function request() {
                clearInterval(run);
                interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
                var country =
                    listCountries[Math.floor(Math.random() * listCountries.length)];
                var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
                var msg =
                    "Someone from <b>" +
                    country +
                    '</b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' +
                    plan +
                    " .</a>";
                $(".mgm .txt").html(msg);
                $(".mgm").stop(true).fadeIn(100);
                window.setTimeout(function() {
                    $(".mgm").stop(true).fadeOut(300);
                }, 6000);
                run = setInterval(request, interval);
            }
        </script>

        <div class="mgm" style="display: none">
            <div class="txt" style="color: #d4af37">
                Someone from <b></b> just made a withdrawal of
                <a href="javascript:void(0);" onclick="javascript:void(0);"></a>
            </div>
        </div>

        <style>
        
            .mgm {
                border-radius: 7px;
                position: fixed;
                z-index: 150;
                bottom: 300px;
                right: 50px;
                background: black;
                padding: 10px 27px;
                box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.3);
                border: 2px solid #ffc400;
            }

            .mgm a {
                font-weight: 700;
                display: block;
                color: #d4af37;
                /*#f2d516;*/
            }

            .mgm a,
            .mgm a:active {
                transition: all 0.2s ease;
                color: #d4af37;
                /*#f2d516;*/
            }
        </style>
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min-2.html"></script>
        <script type="text/javascript">
            var listCountries = [
                "South Africa",
                "USA",
                "Germany",
                "France",
                "Italy",
                "United Kingdom",
                "Australia",
                "Iraq",
                "Canada",
                "Argentina",
                "Saudi Arabia",
                "Mexico",
                "USA",
                "South Africa",
                "Venezuela",
                "United Kingdom",
                "Sweden",
                "Brazil",
                "Germany",
                "Italy",
                "South Africa",
                "United Kingdom",
                "South Africa",
                "Greece",
                "Cuba",
                "South Africa",
                "Portugal",
                "Austria",
                "Brazil",
                "Panama",
                "South Africa",
                "South Africa",
                "Netherlands",
                "Switzerland",
                "Belgium",
                "Israel",
                "Cyprus",
            ];
            var listPlans = [
                "$7,835",
                "$3,231",
                "$2,500",
                "$1,500",
                "$10,000",
                "$20,000",
                "$3,000",
                "$4,000",
                "$7,650",
                "$8,427",
                "$6,962",
                "$5,704",
                "$27,340",
                "$41,530",
            ];
            interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
            var run = setInterval(request, 9000);

            function request() {
                clearInterval(run);
                interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
                var country =
                    listCountries[Math.floor(Math.random() * listCountries.length)];
                var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
                var msg =
                    "Someone from <b>" +
                    country +
                    '</b> just made a withdrawal of <a href="javascript:void(0);" onclick="javascript:void(0);">' +
                    plan +
                    " </a>";
                $(".mgm .txt").html(msg);
                $(".mgm").stop(true).fadeIn(100);
                window.setTimeout(function() {
                    $(".mgm").stop(true).fadeOut(300);
                }, 7000);
                run = setInterval(request, 60000);
            }
        </script>

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
    <div style="position:fixed;bottom:25%;left:2%;z-index:999999;" id="gtranslate_wrapper">
        <!-- GTranslate: https://gtranslate.io/ -->
        <select onchange="doGTranslate(this);" class="notranslate" id="gtranslate_selector"
            aria-label="Website Language Selector">
            <option value="">Select Language</option>
            <option value="en|af">Afrikaans</option>
            <option value="en|sq">Albanian</option>
            <option value="en|am">Amharic</option>
            <option value="en|ar">Arabic</option>
            <option value="en|hy">Armenian</option>
            <option value="en|az">Azerbaijani</option>
            <option value="en|eu">Basque</option>
            <option value="en|be">Belarusian</option>
            <option value="en|bn">Bengali</option>
            <option value="en|bs">Bosnian</option>
            <option value="en|bg">Bulgarian</option>
            <option value="en|ca">Catalan</option>
            <option value="en|ceb">Cebuano</option>
            <option value="en|ny">Chichewa</option>
            <option value="en|zh-CN">Chinese (Simplified)</option>
            <option value="en|zh-TW">Chinese (Traditional)</option>
            <option value="en|co">Corsican</option>
            <option value="en|hr">Croatian</option>
            <option value="en|cs">Czech</option>
            <option value="en|da">Danish</option>
            <option value="en|nl">Dutch</option>
            <option value="en|en">English</option>
            <option value="en|eo">Esperanto</option>
            <option value="en|et">Estonian</option>
            <option value="en|tl">Filipino</option>
            <option value="en|fi">Finnish</option>
            <option value="en|fr">French</option>
            <option value="en|fy">Frisian</option>
            <option value="en|gl">Galician</option>
            <option value="en|ka">Georgian</option>
            <option value="en|de">German</option>
            <option value="en|el">Greek</option>
            <option value="en|gu">Gujarati</option>
            <option value="en|ht">Haitian Creole</option>
            <option value="en|haw">Hawaiian</option>
            <option value="en|iw">Hebrew</option>
            <option value="en|hi">Hindi</option>
            <option value="en|hmn">Hmong</option>
            <option value="en|hu">Hungarian</option>
            <option value="en|is">Icelandic</option>
            <option value="en|id">Indonesian</option>
            <option value="en|ga">Irish</option>
            <option value="en|it">Italian</option>
            <option value="en|ja">Japanese</option>
            <option value="en|jw">Javanese</option>
            <option value="en|kn">Kannada</option>
            <option value="en|kk">Kazakh</option>
            <option value="en|km">Khmer</option>
            <option value="en|ko">Korean</option>
            <option value="en|ku">Kurdish (Kurmanji)</option>
            <option value="en|ky">Kyrgyz</option>
            <option value="en|lo">Lao</option>
            <option value="en|la">Latin</option>
            <option value="en|lv">Latvian</option>
            <option value="en|lt">Lithuanian</option>
            <option value="en|lb">Luxembourgish</option>
            <option value="en|mk">Macedonian</option>
            <option value="en|mg">Malagasy</option>
            <option value="en|ms">Malay</option>
            <option value="en|ml">Malayalam</option>
            <option value="en|mt">Maltese</option>
            <option value="en|mi">Maori</option>
            <option value="en|mr">Marathi</option>
            <option value="en|mn">Mongolian</option>
            <option value="en|my">Myanmar (Burmese)</option>
            <option value="en|ne">Nepali</option>
            <option value="en|no">Norwegian</option>
            <option value="en|ps">Pashto</option>
            <option value="en|fa">Persian</option>
            <option value="en|pl">Polish</option>
            <option value="en|pt">Portuguese</option>
            <option value="en|pa">Punjabi</option>
            <option value="en|ro">Romanian</option>
            <option value="en|ru">Russian</option>
            <option value="en|sm">Samoan</option>
            <option value="en|gd">Scottish Gaelic</option>
            <option value="en|sr">Serbian</option>
            <option value="en|st">Sesotho</option>
            <option value="en|sn">Shona</option>
            <option value="en|sd">Sindhi</option>
            <option value="en|si">Sinhala</option>
            <option value="en|sk">Slovak</option>
            <option value="en|sl">Slovenian</option>
            <option value="en|so">Somali</option>
            <option value="en|es">Spanish</option>
            <option value="en|su">Sudanese</option>
            <option value="en|sw">Swahili</option>
            <option value="en|sv">Swedish</option>
            <option value="en|tg">Tajik</option>
            <option value="en|ta">Tamil</option>
            <option value="en|te">Telugu</option>
            <option value="en|th">Thai</option>
            <option value="en|tr">Turkish</option>
            <option value="en|uk">Ukrainian</option>
            <option value="en|ur">Urdu</option>
            <option value="en|uz">Uzbek</option>
            <option value="en|vi">Vietnamese</option>
            <option value="en|cy">Welsh</option>
            <option value="en|xh">Xhosa</option>
            <option value="en|yi">Yiddish</option>
            <option value="en|zu">Zulu</option>
        </select>
        <style type="text/css">
            #goog-gt-tt {
                display: none !important;
            }

            .goog-te-banner-frame {
                display: none !important;
            }

            .goog-te-menu-value:hover {
                text-decoration: none !important;
            }

            .goog-text-highlight {
                background-color: transparent !important;
                box-shadow: none !important;
            }

            body {
                top: 0 !important;
            }

            #google_translate_element2 {
                display: none !important;
            }
        </style>

        <div id="google_translate_element2"></div>
        <script type="text/javascript">
            function googleTranslateElementInit2() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    autoDisplay: false
                }, 'google_translate_element2');
            }
        </script>
        <script type="text/javascript" src="../translate.google.com/translate_a/element7876.js?cb=googleTranslateElementInit2">
        </script>


        <script type="text/javascript">
            function GTranslateGetCurrentLang() {
                var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
                return keyValue ? keyValue[2].split('index.html')[2] : null;
            }

            function GTranslateFireEvent(element, event) {
                try {
                    if (document.createEventObject) {
                        var evt = document.createEventObject();
                        element.fireEvent('on' + event, evt)
                    } else {
                        var evt = document.createEvent('HTMLEvents');
                        evt.initEvent(event, true, true);
                        element.dispatchEvent(evt)
                    }
                } catch (e) {}
            }

            function doGTranslate(lang_pair) {
                if (lang_pair.value) lang_pair = lang_pair.value;
                if (lang_pair == '') return;
                var lang = lang_pair.split('|')[1];
                if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
                var teCombo;
                var sel = document.getElementsByTagName('select');
                for (var i = 0; i < sel.length; i++)
                    if (/goog-te-combo/.test(sel[i].className)) {
                        teCombo = sel[i];
                        break;
                    } if (document.getElementById('google_translate_element2') == null || document.getElementById(
                        'google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length ==
                    0) {
                    setTimeout(function() {
                        doGTranslate(lang_pair)
                    }, 500)
                } else {
                    teCombo.value = lang;
                    GTranslateFireEvent(teCombo, 'change');
                    GTranslateFireEvent(teCombo, 'change')
                }
            }
        </script>
    </div>
    <!-- Wrapper Ends -->

</body>
