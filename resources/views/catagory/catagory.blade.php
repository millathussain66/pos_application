@extends('layout/main')


@section('main_content')

<div class="clearfix row mb-3">
    <div class="col-xl-6">
        <h2>Users List</h2>
    </div>
    <div class="col-xl-6 text-right">
        <a href="{{ route('catagories.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> New Catagory </a>
    </div>
</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Catagories List
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Title</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($catagories as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->title }}</td>


                        <td>
<form action="{{ route('catagories.destroy',['catagory'=> $cat->id]) }}" method="post">

    <a href="{{ route('catagories.edit',['catagory'=> $cat->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>

    @csrf
    @method('DELETE')

    <button onclick="alert('are You Sure')" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

</form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
