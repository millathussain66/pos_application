@extends('layout/main')


@section('main_content')

<div class="clearfix row mb-3">
    <div class="col-xl-6">
        <h2>Users List</h2>
    </div>
    <div class="col-xl-6 text-right">
        <a href="{{ route('users.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i></a>
    </div>
</div>

<!-- Alert Section -->


<!-- Alert Section -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Groups</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Groups</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->group->title }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
