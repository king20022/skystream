<x-app-layout>
    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">


                        <form action="{{ route('investor.message') }} " method="GET">
                            @csrf


                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="amount" value=""
                                                    placeholder="amount">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <div class="col-sm-12">
                                <button class="btn btn-raised g-bg-blush2">Withdraw </button>
                            </div>
                        </form>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- main content -->


</x-app-layout>
