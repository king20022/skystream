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
                            <h2> Add Coin Details<small></small> </h2>
                        </div>

                        <form action="{{ route('coin.update') }}" method="POST">
                            @csrf
                            @method('PUT')


                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="network"
                                                    placeholder="network">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <button class="btn btn-raised g-bg-blush2"> add Coin</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- <a href="{{ route('admin.delete', ['user_id' => $user->id]) }}"
                            onclick="event.preventDefault();
                                     if (confirm('Are you sure you want to delete this Investor?')) {
                                         document.getElementById('delete-user-form').submit();
                                     }">
                            <div class="col-sm-12">
                                <button class="btn btn-raised g-bg-blush2"> Delete Investor</button>
                            </div>

                        </a>

                        <form id="delete-user-form" action="{{ route('admin.delete', ['user_id' => $user->id]) }}"
                            method="POST" style="display: none;">
                            @csrf
                        </form> --}}

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- main content -->


</x-app-layout>
