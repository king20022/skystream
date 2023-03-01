<x-app-layout>

    <!-- main content -->
    <section class="content home">
        <div class="container-fluid">
            <div class="block-header">
                <div class="d-sm-flex justify-content-between">
                    <div>
                        <h2>Dashboard</h2>
                        <small class="text-muted">Welcome to Admin </small>
                    </div>

                </div>
            </div>

            {{-- <div class="row clearfix top-report row-deck">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="card bg-blush">
                        <div class="body  ">
                            <h3 class="mt-4"><b>1,50</b></h3>
                            <p class="text-uppercase text-dark"><b>Total Investors</b></p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="card bg-blue-grey">
                        <div class="body">
                            <h3 class="mt-4"><b>464</b></h3>
                            <p class="text-uppercase  text-dark"><b>No. of coin</b></p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="card bg-deep-orange">
                        <div class="body">
                            <h3 class="mt-4"><b>46596</b></h3>
                            <p class="text-uppercase text-dark"><b>No. of Investment Plan</b></p>


                        </div>
                    </div>
                </div>

            </div> --}}
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="body">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
                                    async>
                                    {
                                        "interval": "1m",
                                        "width": 425,
                                        "isTransparent": false,
                                        "height": 425,
                                        "symbol": "NASDAQ:AAPL",
                                        "showIntervalTabs": true,
                                        "locale": "en",
                                        "colorTheme": "dark"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">

                        <div class="body">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright">
                                </div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                    async>
                                    {
                                        "symbol": "FX:EURUSD",
                                        "width": "425",
                                        "height": "425",
                                        "locale": "en",
                                        "dateRange": "12M",
                                        "colorTheme": "dark",
                                        "trendLineColor": "rgba(41, 98, 255, 1)",
                                        "underLineColor": "rgba(41, 98, 255, 0.3)",
                                        "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                        "isTransparent": false,
                                        "autosize": false,
                                        "largeChartUrl": ""
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Investors info</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td><span class="label bg-green">Doing</span></td>
                                            <td>08068837099</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div> --}}

        </div>
    </section>
    <!-- main content -->
</x-app-layout>
