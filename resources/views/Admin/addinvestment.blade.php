<x-app-layout>

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="d-sm-flex justify-content-between">
                    <div>
                        <h2>All Investment</h2>
                        <small class="text-muted">Welcome Admin</small>

                    </div>
                    <div>
                        <a href="{{ route('admin.investment') }}" class="btn btn-raised btn-primary">Add Investment</a>
                    </div>

                </div>
            </div>
            <div class="row clearfix">


                @foreach ($investment as $investment)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="member-card verified">
                                    <div class="m-t-20">

                                        <p class="text-pink mb-0">Plan</p>
                                        <p class="text-muted"> <b>{{ $investment->plan }} </b><span></p>
                                        <p class="text-pink mb-0">Amount</p>
                                        <p class="text-muted"> <b>{{ $investment->amount }} </b></p>

                                    </div>
                                    <p class="text-pink mb-0">Profit</p>
                                    <p class="text-muted"> <b>{{ $investment->profit}} </b></p>
                                    <p class="text-pink mb-0">Duration</p>
                                    <p class="text-muted"> <b>{{ $investment->duration }} </b></p>
                                    {{-- <p class="text-pink mb-0">Invesment Plan</p>
                                    <p class="text-muted"> <b> {{ $investment->investmentPlan }}</b></p> --}}

                                    <form method="POST" action="/investments/{{ $investment->id }}">
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
