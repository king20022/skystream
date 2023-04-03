<x-app-layout>
    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="d-sm-flex justify-content-between">
                    <div>
                        <h2>All investors</h2>
                        <small class="text-muted">Welcome Admin</small>
                    </div>

                </div>
            </div>
            <div class="row clearfix">


                @foreach ($user as $user)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="member-card verified">
                                    {{-- <div class="thumb-xl member-thumb">
                                        <img src="asset/images/random-avatar3.jpg]" class="img-thumbnail rounded-circle"
                                            alt="profile-image">
                                    </div> --}}

                                    <div class="m-t-20">
                                        <h4 class="m-b-0">{{ $user->name }}</h4>
                                        <p class="text-muted">{{ $user->number }}<span> <a href="#"
                                                    class="text-pink">{{ $user->email }}</a> </span></p>
                                    </div>

                                    <p class="text-muted">{{ $user->address }}</p>

                                    <a href="{{ route('admin.edit', $user->id) }}"
                                        class="btn bg-success btn-raised ">Edit
                                        Profile</a>

                                    <a href="{{ route('admin.delete', ['user_id' => $user->id]) }}"
                                        onclick="event.preventDefault();
                                                     if (confirm('Are you sure you want to delete this Investor?')) {
                                                         document.getElementById('delete-user-form').submit();
                                                     }">
                                        <div class="col-sm-12">
                                            <button class="btn btn-raised g-bg-blush2"> Delete Investor</button>
                                        </div>

                                    </a>

                                    <form id="delete-user-form"
                                        action="{{ route('admin.delete', ['user_id' => $user->id]) }}" method="POST"
                                        style="display: none;">
                                        @csrf
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
{{--  --}}
