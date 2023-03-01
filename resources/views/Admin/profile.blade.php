<x-app-layout>
    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
                <small class="text-muted">Welcome Admin</small>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Investor current Information
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a>
                                        </li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another
                                                action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something
                                                else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{ $user->balance }}"
                                                placeholder="Balance">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="bonus"
                                                    value="{{ $user->bonus }}" placeholder="Bonus">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Profit"
                                                value="{{ $user->profit }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> Update Investor Portifiolo <small></small> </h2>
                        </div>

                        <form action="{{ route('admin.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="balance"
                                                    value="{{ $user->bonus }}" placeholder="Balance">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="bonus"
                                                    value="{{ $user->bonus }}" placeholder="Bonus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="profit"
                                                    value="{{ $user->profit }}" placeholder="Profit">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <button class="btn btn-raised g-bg-blush2"> Update Investor</button>
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
{{--  --}}
