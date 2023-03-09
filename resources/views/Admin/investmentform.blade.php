<x-app-layout>
    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
                <small class="text-muted">Welcome Admin</small>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        @foreach ($errors->all() as $err)
                            <label for="edit page"></label>
                            <p class="text-danger text-center">{{ $err }}</p>
                        @endforeach
                        <div class="header">
                            <h2> Add investment Details<small></small> </h2>
                        </div>

                        <form action="{{ route ('adminn.update')}}" method="POST">
                            @csrf
                            @method('PUT')


                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="plan"
                                                    placeholder="plan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="amount"
                                                    placeholder="amount">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="profit"
                                                    placeholder="profit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="duration"
                                                    placeholder="duration">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="pip"
                                                    placeholder="pip">
                                            </div>
                                        </div>
                                    </div>

                                </div> --}}
                                <div class="col-sm-12">
                                    <button class="btn btn-raised g-bg-blush2"> add Investment</button>
                                </div>

                            </div>
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- main content -->


</x-app-layout>
