<x-guest-layout>
    <!-- Slider Starts -->
    <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators Starts -->
        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!-- Indicators Ends -->
        <!-- Carousel Inner Starts -->
        <div class="carousel-inner">
            <!-- Carousel Item Starts -->
            <div class="item active bg-parallax item-1">
                <div class="slider-content">
                    <div class="container">
                        <div class="slider-text text-center">
                            <h3 class="slide-title"><span>Profitable</span> Crypto <span>Trading </span> Investment
                                Solutions</h3>
                            <p>
                                <a href="{{ route('register') }}" class="slider btn btn-primary">Get Started</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Item Ends -->
            <!-- Carousel Item Starts -->
            <div class="item bg-parallax item-2">
                <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>Crypto</span> Investment <br />You can <span>Trust</span>
                                </h3>
                                <p>
                                    <a href="#plans" class="slider btn btn-primary">our Plans</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Item Ends -->
        </div>
        <!-- Carousel Inner Ends -->
        <!-- Carousel Controlers Starts -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
        <!-- Carousel Controlers Ends -->
    </div>
    <!-- Slider Ends -->
    <!-- Features Section Starts -->
    <section class="features">
        <div class="container">
            <div class="row features-row">
                <!-- Feature Box Starts -->
                <div class="feature-box col-md-4 col-sm-12">
                    <span class="feature-icon">
                        <img id="download-bitcoin" src="images/icons/orange/download-bitcoin.png"
                            alt="download bitcoin">
                    </span>
                    <div class="feature-box-content">
                        <h3>Open an account</h3>
                        <p>Click on the register button to create an account. It's totally easy and free</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
                <!-- Feature Box Starts -->
                <div class="feature-box two col-md-4 col-sm-12">
                    <span class="feature-icon">
                        <img id="add-bitcoins" src="images/icons/orange/add-bitcoins.png" alt="add bitcoins">
                    </span>
                    <div class="feature-box-content">
                        <h3>Deposit/Invest Funds</h3>
                        <p>Choose an investment plan and make your first deposit</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
                <!-- Feature Box Starts -->
                <div class="feature-box three col-md-4 col-sm-12">
                    <span class="feature-icon">
                        <img id="buy-sell-bitcoins" src="images/icons/orange/buy-sell-bitcoins.png"
                            alt="buy and sell bitcoins">
                    </span>
                    <div class="feature-box-content">
                        <h3>WIthdraw Funds</h3>
                        <p>Request for the withdrawal and receive instant payment</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
            </div>
    </section>
    <!-- Features Section Ends -->
    <!-- About Section Starts -->
    <section id="aboutus" class="about-us">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">About <span>Us</span></h2>
                <div class="title-head-subtitle">
                    <p> Sky stream exchange is an Online Digital trading platform, where companies, individuals and
                        firms are
                        given the opportunity to earn from Crypto trading & forex Exchange, by investing their capital
                        through cryptocurrency, which will be used to start up a trading section for you.</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img id="about-us" class="img-responsive img-about-us" src="images/about-us.png" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <h3 class="title-about">WE ARE Sky stream exchange</h3>
                    <p class="about-text">A special trading system developed by our specialists significantly reduces
                        financial risks, while increasing the efficiency of trading sessions at the same time.
                        Verityinvest has its own business model, which allows investors to receive high interest rates
                        on a daily basis, regardless of changes in the financial market, which not every company can
                        keep up with.

                    </p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>
                        <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>
                        <li><a data-toggle="tab" href="#menu3">Our guarantees</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade in active">
                            <p>The platform created by us provides our investors with the most comfortable conditions,
                                in order to help them engage in the investment process. Our professional traders, guided
                                by their own unique trading strategy, will allow our clients to receive such revenue,
                                which even an experienced investor will envy. The whole investment process takes place
                                on terms that are favorable for our investors; everyone will be satisfied with the
                                cooperation with our company. Join us and you will learn how to invest easily and
                                efficiently.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <p>Adhering to highest compliance standards <br>

                                As an international regulated financial intermediary subject to the rules set out by the
                                Swiss self-regulatory organization (SRO – VQF ) Evelo Limited operates under
                                international law and according to AML (anti-money laundering) regulations.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <p>We are here because we are passionate about open, transparent markets and aim to be a
                                major driving force in widespread adoption, we are the first and the best in crypto
                                Investments. </p>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="{{ route('register') }}">Join us</a>
                </div>
                <!-- Content Ends -->
            </div>
            <!-- Section Content Ends -->
        </div>
    </section>
    <!-- About Section Ends -->
    <!-- Features and Video Section Starts -->
    <section id="features" class="image-block">
        <div class="container-fluid">
            <div class="row">
                <!-- Features Starts -->
                <div class="col-md-8 ts-padding img-block-left">
                    <div class="gap-20"></div>
                    <div class="row text-center">
                        <h2 class="title-head">Why Choose Us?</h2>
                        <div class="title-head-subtitle">
                            <p>We are a worldwide investment company committed to the principle of revenue maximization
                                and reduction of the financial risks in investing.</p>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="strong-security" src="images/icons/orange/strong-security.png"
                                        alt="strong security" />
                                </span>
                                <h3 class="feature-title">Instant Withdrawals</h3>
                                <p>Get your payment instantly through requesting it! We don't take percentage.</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="world-coverage" src="images/icons/orange/world-coverage.png"
                                        alt="world coverage" />
                                </span>
                                <h3 class="feature-title">Referral System</h3>
                                <p>Promote the company and earn unlimited referral commission from each referral.</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="payment-options" src="images/icons/orange/payment-options.png"
                                        alt="payment options" />
                                </span>
                                <h3 class="feature-title">Blockchain Ecosystem</h3>
                                <p>Get mining with a big profit, and Miner is calculated with the blockchain ecosystem.
                                </p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img id="mobile-app" src="images/icons/orange/mobile-app.png" alt="mobile app" />
                                </span>
                                <h3 class="feature-title">Profitable Plans</h3>
                                <p>Our investment plans are tailored to the level of your investment opportunities.</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>


                </div>
                <!-- Features Ends -->
                <!-- Video Starts -->
                <div class="col-md-4 ts-padding ">
                    <div>
                        <div class="text-center">

                            <img src="certificate.png" height="500px" alt="">

                            {{-- <a class="button-video mfp-youtube" href="Sky stream exchange.mp4"></a> --}}
                        </div>
                    </div>
                </div>
                <!-- Video Ends -->
            </div>
        </div>
    </section>

    <!-- Features and Video Section Ends -->
    <!-- Pricing Starts -->
    <section id="plans" class="pricing">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">Investment <span>Plans</span></h2>
                <div class="title-head-subtitle">
                    <p>Complete Packages For Every Trader</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row pricing-tables-content">
                <div class="pricing-container">


                    <!-- Pricing Tables Starts -->
                    <ul class="pricing-list bounce-invert">

                        @foreach ($investment as $investment)
                            <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #1 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>{{ $investment->plan }} Plan</h2>

                                            <div class="price">

                                                <span class="value"
                                                    style="font-size: 30px;">{{ $investment->amount }}</span>
                                            </div>
                                            <h2>Profit <span>{{ $investment->profit }}</span> </h2>
                                            <h2>Duration <span> {{ $investment->duration }}</span></h2>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #1 Ends -->

                                </ul>
                            </li>
                        @endforeach
                        {{-- <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <ul class="pricing-wrapper">
                                <!-- Buy Pricing Table #2 Starts -->
                                <li data-type="buy" class="is-visible">
                                    <header class="pricing-header">
                                        <h2>Silver Plan</h2>

                                        <div class="price">

                                            <span class="value" style="font-size: 30px;">$4,000 - $10,000</span>
                                        </div>
                                        <h2>Profit <span> 11% </span> </h2>
                                        <h2>Duration <span> 4 Days</span></h2>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="user/signup.html" class="btn btn-primary">Get Started</a>
                                    </footer>
                                </li>
                                <!-- Buy Pricing Table #2 Ends -->

                            </ul>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <ul class="pricing-wrapper">
                                <!-- Buy Pricing Table #3 Starts -->
                                <li data-type="buy" class="is-visible">
                                    <header class="pricing-header">
                                        <h2>Gold Plan</h2>

                                        <div class="price">

                                            <span class="value" style="font-size: 30px;">$10,000 - $16,000</span>
                                        </div>
                                        <h2>Profit <span> 31% </span> </h2>
                                        <h2>Duration <span> 6 Days</span></h2>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="user/signup.html" class="btn btn-primary">Get Started</a>
                                    </footer>
                                </li>
                                <!-- Buy Pricing Table #3 Ends -->

                            </ul>
                        </li>

                        <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <ul class="pricing-wrapper">
                                <!-- Buy Pricing Table #3 Starts -->
                                <li data-type="buy" class="is-visible">
                                    <header class="pricing-header">
                                        <h2>Diamond Plan</h2>

                                        <div class="price">

                                            <span class="value" style="font-size: 30px;">$16,000 - $19,999</span>
                                        </div>
                                        <h2>Profit <span> 40% </span> </h2>
                                        <h2>Duration <span> 8 Days</span></h2>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="user/signup.html" class="btn btn-primary">Get Started</a>
                                    </footer>
                                </li>
                                <!-- Buy Pricing Table #3 Ends -->

                            </ul>
                        </li> --}}

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Ends -->
    <section id="features" class="image-block">
        <div class="container-fluid">
            <div class="row">
                <!-- Features Starts -->
                <div class="col-md-7 ts-padding img-block-left">
                    <div class="gap-20"></div>
                    <div class="row text-center">
                        {{-- <h2 class="title-head">Why Choose Us?</h2> --}}
                        <h2 class="title-head text-center"><span>Bitcoin</span> Calculator</h2>

                        <div class="title-head-subtitle">
                            <p class="message text-center">Find out the current Bitcoin value with our easy-to-use
                                converter
                            </p>
                            <p class="info"><i>* Data updated every 15 minutes</i></p>

                        </div>
                    </div>



                </div>
                <!-- Features Ends -->
                <!-- Video Starts -->
                <div class="col-md-5 ts-padding ">
                    <div>
                        <div class="text-center">
                            <div
                                style="width: 400px; height:335px; background-color: #232937; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;margin: 0;width: 400px;padding:1px;padding: 0px; margin: 0px;">
                                <div style="height:315px; padding:0px; margin:0px; width: 100%;"><iframe
                                        src="https://widget.coinlib.io/widget?type=converter&theme=dark"
                                        width="400" height="310px" scrolling="auto" marginwidth="0" 
                                        marginheight="0" frameborder="0" border="0"
                                        style="border:0;margin:0;padding:0;"></iframe>
                                </div>
                                <div
                                    style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                                    <a href="https://coinlib.io" target="_blank"
                                        style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">
                                        {{-- </a>&nbsp;</div> --}}
                                </div>


                                {{-- <a class="button-video mfp-youtube" href="Sky stream exchange.mp4"></a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Video Ends -->
                </div>
            </div>
    </section>
    <!-- Bitcoin Calculator Section Starts -->
    {{-- <section class="bitcoin-calculator-section">
        <div class="container">
            <div class="row">
                <!-- Section Heading Starts -->
                <div class="col-md-12">

                    <div class="col-md-12 text-center">
                        <form class="bitcoin-calculator" id="bitcoin-calculator">
                            <div
                                style="width: 400px; height:335px; background-color: #232937; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;margin: 0;width: 400px;padding:1px;padding: 0px; margin: 0px;">
                                <div style="height:315px; padding:0px; margin:0px; width: 100%;"><iframe
                                        src="https://widget.coinlib.io/widget?type=converter&theme=dark" width="400"
                                        height="310px" scrolling="auto" marginwidth="0" marginheight="0"
                                        frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                                </div>
                                <div
                                    style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                                    <a href="https://coinlib.io" target="_blank"
                                        style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency
                                        Prices</a>&nbsp;by Coinlib</div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Section Heading Ends -->

                <!-- Bitcoin Calculator Form Starts -->



                <!-- Bitcoin Calculator Form Ends -->
            </div>
        </div>
    </section> --}}

    <!-- Bitcoin Calculator Section Ends -->


    <!-- Team Section Starts -->
    {{-- <section class="team">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">TESTI<span>MONIES</span></h2>
                <div class="title-head-subtitle">
                    <p> What our customers has to say about us.</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Team Members Starts -->
            <div class="row team-content team-members">
                <!-- Team Member Starts --
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts --
                        <img src="images/team/member1.jpg" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                <!-- Team Member Details Starts --
                        <div class="team-member-caption social-icons">
                            <h4>Nicholas Zachary Gary</h4>
                            <p>Director </p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends --
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="images/team/member2.jpg" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Marco Verratti</h4>
                            <p>Sky stream exchange has liberated my life from abject poverty</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <!-- Team Member-->
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="images/team/member3.jpg" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Lugan Christine</h4>
                            <p>I really doubted it at first but now i beleive</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="images/team/member4.jpg" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Antonio Conte</h4>
                            <p>I am so happy to have benefitted from this oppurtunity</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->

            </div>
            <!-- Team Members Ends -->
        </div>
    </section> --}}
    <!-- Team Section Ends -->



    <!-- Section FAQ Starts -->
    <section class="faq">
        <div class="container">
            <div class="row text-center">
                <h2 class="title-head">FAQs</h2>
                <div class="title-head-subtitle">
                    <p>Frequently Asked Questions</p>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-md-12">
                    <!-- Panel Group Starts -->
                    <div class="panel-group" id="accordion">
                        <!-- Panel Starts -->
                        <div class="panel panel-default">
                            <!-- Panel Heading Starts -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        How do i get started?</a>
                                </h4>
                            </div>
                            <!-- Panel Heading Ends -->
                            <!-- Panel Content Starts -->
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">Create your own account to get started. It takes a few minutes
                                    to complete registration.</div>
                            </div>
                            <!-- Panel Content Starts -->
                        </div>
                        <!-- Panel Ends -->
                        <!-- Panel Starts -->
                        <div class="panel panel-default">
                            <!-- Panel Heading Starts -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse2">
                                        Is Sky stream exchange financial investment platform availability for the
                                        public?
                                    </a>
                                </h4>
                            </div>
                            <!-- Panel Heading Ends -->
                            <!-- Panel Content Starts -->
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body"> Sky stream exchange is available to both individuals,
                                    companies
                                    and cooperate organization, Who are interested in earning.</div>
                            </div>
                            <!-- Panel Content Starts -->
                        </div>
                        <!-- Panel Ends -->
                        <!-- Panel Starts -->
                        <div class="panel panel-default">
                            <!-- Panel Heading Starts -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse3">
                                        Are there any Commissions upon making transaction on my account?</a>
                                </h4>
                            </div>
                            <!-- Panel Heading Ends -->
                            <!-- Panel Content Starts -->
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">Sky stream exchange does not take any commissions on your
                                    transactions. But such commissions can be taken by the payment systems or payment
                                    aggregator.</div>
                            </div>
                            <!-- Panel Content Starts -->
                        </div>
                        <!-- Panel Ends -->
                        <!-- Panel Starts -->
                        <div class="panel panel-default">
                            <!-- Panel Heading Starts -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse4">
                                        How can I Close my Account?</a>
                                </h4>
                            </div>
                            <!-- Panel Heading Ends -->
                            <!-- Panel Content Starts -->
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">In case you wish to stop using your account, please contact our
                                    Clients support department via email</div>
                            </div>
                            <!-- Panel Content Starts -->
                        </div>
                        <!-- Panel Ends -->


                    </div>
                    <!-- Panel Group Ends -->
                </div>

            </div>
        </div>
    </section>
    <!-- Section FAQ Ends -->

    <!-- Pricing Starts -->
    {{-- <section class="pricing">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">Recent <span> Transactions</span></h2>
                <div class="title-head-subtitle">
                    <p>Newly recorded transactions on our platform</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row pricing-tables-content">
                <div class="pricing-container">
                    <!-- Pricing Switcher Starts -->
                    <div class="pricing-switcher">
                        <p>
                            <input type="radio" name="switch" value="buy" id="buy-1" checked>
                            <label for="buy-1">ALL</label>
                        </p>
                    </div>
                    <!-- Pricing Switcher Ends -->
                    <style>
                        table {
                            border-collapse: collapse;
                            font-family: Tahoma, Geneva, sans-serif;
                        }

                        table td {
                            padding: 15px;
                        }

                        table thead td {
                            background-color: #54585d;
                            color: #ffffff;
                            font-weight: bold;
                            font-size: 13px;
                            border: 1px solid #54585d;
                        }

                        table tbody td {
                            color: #636363;
                            border: 1px solid #dddfe1;
                        }

                        table tbody tr {
                            background-color: #f9fafb;
                        }

                        table tbody tr:nth-child(odd) {
                            background-color: #ffffff;
                        }
                    </style>
                    <!-- Pricing Tables Starts -->
                    <ul class="pricing-list bounce-invert">
                        <li class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <ul class="pricing-wrapper">
                                <!-- Buy Pricing Table #1 Starts -->
                                <li data-type="buy" class="is-visible" align=center>
                                    <header class="pricing-header">
                                        <h2>Deposits </h2> <br />
                                        <table align=center>
                                            <thead>
                                                <tr>
                                                    <td>No.</td>
                                                    <td>Name</td>
                                                    <td>Amount</td>
                                                    <td>Method</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Marina Victoria </td>
                                                    <td>$500</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Marina Victoria </td>
                                                    <td>$200</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Marina Victoria </td>
                                                    <td>$50</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Marina Victoria </td>
                                                    <td>$50</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Marina Victoria </td>
                                                    <td>$50</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </header>
                                </li>
                                <!-- Buy Pricing Table #1 Ends -->

                            </ul>
                        </li>
                        <li class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <ul class="pricing-wrapper">
                                <!-- Buy Pricing Table #2 Starts -->
                                <li data-type="buy" class="is-visible" align=center>
                                    <header class="pricing-header">
                                        <h2>Withdrawals </h2> <br />
                                        <table align=center>
                                            <thead>
                                                <tr>
                                                    <td>No.</td>
                                                    <td>Name</td>
                                                    <td>Amount</td>
                                                    <td>Method</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Emmanuel Pierre</td>
                                                    <td>$400</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Emmanuel Pierre</td>
                                                    <td>$950</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>stine Augustine</td>
                                                    <td>$280</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Flora. S Williams</td>
                                                    <td>$102</td>
                                                    <td>USDT</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Amelia Julian</td>
                                                    <td>$600</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </header>
                                </li>
                                <!-- Buy Pricing Table #2 Ends -->

                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Pricing Ends -->

    <!-- Quote and Chart Section Starts -->
    <section class="image-block2">
        <div class="container-fluid">
            <div class="row">
                <!-- Quote Starts -->
                <div class="col-md-4 img-block-quote bg-image-2">
                    <blockquote>
                        <p>Bitcoin is one of the most important inventions in all of human history. For the first time
                            ever, anyone can send or receive any amount of money with anyone else, anywhere on the
                            planet, conveniently and without restriction. It’s the dawn of a better, more free world.
                        </p>
                        <footer><img src="images/ceo.jpg" alt="ceo" /> <span>Marc Smith</span> - CEO</footer>
                    </blockquote>
                </div>

            </div>
        </div>
    </section>
    <!-- Quote and Chart Section Ends -->

    <!-- Call To Action Section Starts -->
    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Call To Action Text Starts -->
                        <div class="action-text">
                            <h2>Get Started Today With Sky stream exchange</h2>
                            <p class="lead">Open account for free to start investing in Crypto!</p>
                        </div>
                        <!-- Call To Action Text Ends -->
                        <!-- Call To Action Button Starts -->
                        <p class="action-btn"><a class="btn btn-primary" href="{{ route('register') }}">Register
                                Now</a></p>
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Ends -->

</x-guest-layout>
{{--  --}}
