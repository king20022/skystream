<x-app-layout>
    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Swap your Coin here</h2>
                <small class="text-muted">Convert 0 fees </small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {{-- <ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul> --}}
                        </div>
                        <form action="{{ route ('investor.store') }}" method="POST">@csrf
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Wallet name"  required  name="wallet">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="amount">
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>


                                <div class="col-sm-12">

                                    <button class="btn btn-raised g-bg-blush2">Proceed</button>
                                    {{-- <a href="{{ route ('investor.swap')}}"> <button type="submit" class="btn btn-raised g-bg-blush2">Proceed</button></a> --}}

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- main content -->
</x-app-layout>
{{--  --}}
