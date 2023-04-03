<x-app-layout>

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            {{-- <div class="block-header">
                <div class="d-sm-flex justify-content-between">

                    <div>
                    <a href="{{ route ('investor.formm')}}" class="btn btn-raised btn-primary">Proceed</a>
                    </div>

                </div>
            </div> --}}

            <div class="row clearfix">


                {{-- @foreach ($payment as $payment) --}}
                    <div class="col-xl-3 col-lg-7 col-md-6 col-sm-12 mr-0">
                        <div class="card shadow-2xl">
                            <div class="body">
                                <div class="member-card verified text-left ">

                                    <p class="text-pink mb-0"><b class="h6">Available Balance</b></p>
                                    <p class="text-pink mt-3"><i class="h5">$ </i><span class="h5">{{ $user->balance }}</span></p>
                                    <p class="text-muted"> <b> </b></p>


                                </div>


                            </div>
                        </div>
                    </div>
                {{-- @endforeach --}}


            </div>




            {{-- <div class="body">
                <div class="row clearfix">


                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" required name="Network"
                                    value="" placeholder="network">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="datepicker form-control" required name="address"
                                    value="" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="datepicker form-control" required name="amount"
                                    value="" placeholder="Amount">
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
        </div>
        <div class="block-header">
            <div class="d-sm-flex justify-content-between">

                <div class=" pl-3" >
                <a href="{{ route ('investor.formm')}}" class="btn btn-raised btn-primary">Proceed</a>
                </div>

            </div>
        </div>

    </section>

    <!-- main content -->

</x-app-layout>
