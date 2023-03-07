<x-app-layout>

    <!-- main content -->
    <section class="content home">
        <div class="container-fluid">
            <div class="block-header">
                <div class="d-sm-flex justify-content-between">
                    <div>
                        <h2>Dashboard</h2>
                        <small class="text-muted">Welcome {{ Auth::user()->name }} </small>
                    </div>

                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="body pb-16 ">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container ">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="#" rel="noopener"
                                        target="_blank"><span class="blue-text">
                                        </span></a> </div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
                                    async>
                                    {
                                        "interval": "1m",
                                        "width": "100%",
                                        "isTransparent": false,
                                        "height": "100%",
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
                        <div class="body ">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="#"
                                        rel="noopener" target="_blank"><span class="blue-text"></span></a>
                                   </div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js"
                                    async>
                                    {
                                        "colorTheme": "dark",
                                        "dateRange": "12M",
                                        "showChart": true,
                                        "locale": "en",
                                        "width": "100%",
                                        "height": "100%",
                                        "largeChartUrl": "",
                                        "isTransparent": false,
                                        "showSymbolLogo": true,
                                        "showFloatingTooltip": false,
                                        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                        "gridLineColor": "rgba(240, 243, 250, 0)",
                                        "scaleFontColor": "rgba(106, 109, 120, 1)",
                                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                        "tabs": [{
                                                "title": "Indices",
                                                "symbols": [{
                                                        "s": "FOREXCOM:SPXUSD",
                                                        "d": "S&P 500"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:NSXUSD",
                                                        "d": "US 100"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:DJI",
                                                        "d": "Dow 30"
                                                    },
                                                    {
                                                        "s": "INDEX:NKY",
                                                        "d": "Nikkei 225"
                                                    },
                                                    {
                                                        "s": "INDEX:DEU40",
                                                        "d": "DAX Index"
                                                    },
                                                    {
                                                        "s": "FOREXCOM:UKXGBP",
                                                        "d": "UK 100"
                                                    }
                                                ],
                                                "originalTitle": "Indices"
                                            },
                                            {
                                                "title": "Futures",
                                                "symbols": [{
                                                        "s": "CME_MINI:ES1!",
                                                        "d": "S&P 500"
                                                    },
                                                    {
                                                        "s": "CME:6E1!",
                                                        "d": "Euro"
                                                    },
                                                    {
                                                        "s": "COMEX:GC1!",
                                                        "d": "Gold"
                                                    },
                                                    {
                                                        "s": "NYMEX:CL1!",
                                                        "d": "Crude Oil"
                                                    },
                                                    {
                                                        "s": "NYMEX:NG1!",
                                                        "d": "Natural Gas"
                                                    },
                                                    {
                                                        "s": "CBOT:ZC1!",
                                                        "d": "Corn"
                                                    }
                                                ],
                                                "originalTitle": "Futures"
                                            },
                                            {
                                                "title": "Bonds",
                                                "symbols": [{
                                                        "s": "CME:GE1!",
                                                        "d": "Eurodollar"
                                                    },
                                                    {
                                                        "s": "CBOT:ZB1!",
                                                        "d": "T-Bond"
                                                    },
                                                    {
                                                        "s": "CBOT:UB1!",
                                                        "d": "Ultra T-Bond"
                                                    },
                                                    {
                                                        "s": "EUREX:FGBL1!",
                                                        "d": "Euro Bund"
                                                    },
                                                    {
                                                        "s": "EUREX:FBTP1!",
                                                        "d": "Euro BTP"
                                                    },
                                                    {
                                                        "s": "EUREX:FGBM1!",
                                                        "d": "Euro BOBL"
                                                    }
                                                ],
                                                "originalTitle": "Bonds"
                                            },
                                            {
                                                "title": "Forex",
                                                "symbols": [{
                                                        "s": "FX:EURUSD",
                                                        "d": "EUR/USD"
                                                    },
                                                    {
                                                        "s": "FX:GBPUSD",
                                                        "d": "GBP/USD"
                                                    },
                                                    {
                                                        "s": "FX:USDJPY",
                                                        "d": "USD/JPY"
                                                    },
                                                    {
                                                        "s": "FX:USDCHF",
                                                        "d": "USD/CHF"
                                                    },
                                                    {
                                                        "s": "FX:AUDUSD",
                                                        "d": "AUD/USD"
                                                    },
                                                    {
                                                        "s": "FX:USDCAD",
                                                        "d": "USD/CAD"
                                                    }
                                                ],
                                                "originalTitle": "Forex"
                                            }
                                        ]
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
