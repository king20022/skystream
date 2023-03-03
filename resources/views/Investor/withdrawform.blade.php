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
                        <div class="header">
                            <h2> Update your Profile <small></small> </h2>
                        </div>

                        {{-- <form action="{{route('investor.updated', $user->id) }}}} " method="POST">
                            @csrf
                            @method('PUT') --}}

                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name"
                                                    value="" placeholder="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" class="form-control" name="Amount"
                                                    value="" placeholder="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="numbe" class="datepicker form-control" name="Network"
                                                    value="" placeholder="phone-number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="address"
                                                    value="" placeholder="address">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-12">
                                <button class="btn btn-raised g-bg-blush2"> </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- main content -->


</x-app-layout>
