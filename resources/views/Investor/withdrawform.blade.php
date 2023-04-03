<x-app-layout>
    <!-- main content -->
    <section class="content home">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>
            <div class="header">
                <h5> Your withdrawal Details <small></small> </h5>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div>
                            @foreach ($errors->all() as $err)
                                <label for="edit page"></label>
                                <p class="text-danger text-center">{{ $err }}</p>
                            @endforeach
                        </div>


                        <form action="{{ route('investor.history') }} " method="POST">
                            @csrf



                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="network" required value=""
                                                    placeholder="Network">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class=" form-control" required
                                                    name="address" value="" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class=" form-control" required
                                                    name="amount" value="" placeholder="Amount">
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
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Withdrawal History</h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Data/Time</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th>Trans.id</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($withdrawals as $withdrawal)
                                        <tr>
                                            <td>{{ $withdrawal->id }}</td>
                                            <td>{{ $withdrawal->created_at }}</td>
                                            <td><span class="label bg-orange">{{ $withdrawal->status }}</span></td>
                                            <td>{{ $withdrawal->amount }}</td>
                                            <td>{{ $withdrawal->withdrawal_id }}</td>

                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>

        </div>

    </section>
    <!-- main content -->


</x-app-layout>
