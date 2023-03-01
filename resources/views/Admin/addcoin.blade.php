<x-app-layout>

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="d-sm-flex justify-content-between">
                    <div>
                        <h2>All COIN</h2>
                        <small class="text-muted">Welcome Admin</small>

                    </div>
                    <div>
                        <a href="{{ route('admin.addcoin') }}" class="btn btn-raised btn-primary">Add Coin</a>
                    </div>

                </div>
            </div>
            <div class="row clearfix">


                @foreach ($payment as $payment)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="member-card verified">
                                    <div class="m-t-20">

                                        <p class="text-pink mb-0">NAME</p>
                                        <p class="text-muted"> <b> {{ $payment->name }}</b><span></p>
                                        <p class="text-pink mb-0">ADDRESS</p>
                                        <a href="#" class="text-pink">{{ $payment->address }}   </p> </span>

                                    </div>
                                    <p class="text-pink mb-0">NETWORK</p>
                                    <p class="text-muted"> <b> {{ $payment->network }}</b></p>

                                   
                                        <form method="POST" action="/payments/{{ $payment->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn bg-danger btn-raised">Delete</button>
                                        </form>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- main content -->

</x-app-layout>
