@extends('layout/main')


@section('main_content')

<div class="clearfix row mb-3">
    <div class="col-xl-4">

    <a href="{{ route('users.index') }}" class="btn btn-info"> <i class="fa fa-arrow-left"></i> Back</a>


    </div>
    <div class="col-xl-8 text-right">
        <a href="{{ route('users.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> New Sale </a>
        <a href="{{ route('users.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> New Purchece </a>
        <a href="{{ route('users.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> New Payment </a>
        <a href="{{ route('users.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> New Reycypt </a>

    </div>
</div>

<!-- Alert Section -->


<!-- Alert Section -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
        {{ $users->name }}
        </h6>
    </div>
    <div class="card-body">

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">

        <div class="table-responsive">
           <table class="table striped">
                <tr>
                    <th>Groups</th>
                    <th>{{ $users->group->title }}</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>{{ $users->name }}</th>
                </tr>
                <tr>
                    <th>Email</th>
                    <th>{{ $users->email }}</th>
                </tr>
                <tr>
                    <th>Phone</th>
                    <th>{{ $users->phone }}</th>
                </tr>
                <tr>
                    <th>Address</th>
                    <th>{{ $users->address }}</th>
                </tr>
           </table>



        </div>
        </div>
        <div class="col-md-3"></div>
    </div>


    </div>
</div>


@endsection
