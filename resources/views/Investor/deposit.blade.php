<x-app-layout>

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="d-sm-flex justify-content-between">

                    <div>
                    <a href="{{ route ('investor.coin')}}" class="btn btn-raised btn-primary">Fund Account</a>
                    </div>

                </div>
            </div>
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
        </div>
    </section>
    <!-- main content -->

</x-app-layout>
{{--  --}}
