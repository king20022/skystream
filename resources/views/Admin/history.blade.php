<x-app-layout>
    <!-- main content -->
    <section class="content home">
        <div class="container-fluid">

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>TASK INFOS</h2>

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
                                            <th>Name</th>
                                            <th>Trans.id</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($withdrawal as $withdrawal)
                                            <tr>
                                                <td>{{ $withdrawal->id }}</td>
                                                <td>{{ $withdrawal->created_at }}</td>
                                                <td><span class="label bg-orange">{{ $withdrawal->status }}</span></td>
                                                <td>{{ $withdrawal->amount }}</td>
                                                <td>{{ $withdrawal->user->name }}</td>
                                                <td>{{ $withdrawal->withdrawal_id }}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('admin.status', $withdrawal->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <select name="status" >
                                                            <option value="Pending" {{ $withdrawal->status == 'Pending' ? 'selected' : '' }} > <span class="label bg-orange">Pending</span> </option>
                                                            <option value="Approved" {{ $withdrawal->status == 'Approved' ? 'selected' : '' }}><span class="label bg-orange">Approved</span></option>
                                                        </select>
                                                        <button type="submit" class="btn bg-success btn-raised m-0 p-2 ml-1">Update</button>
                                                    </form>
                                                </td>

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
{{--  --}}
