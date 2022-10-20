@extends('layout/main')


@section('main_content')



<div class="clearfix row mb-3">
    <div class="col-xl-6">
        <h2>User Groups</h2>
    </div>
    <div class="col-xl-6 text-right">
        <a href="{{ url('groups/create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> New Group</a>
    </div>
</div>

<!-- Alert Section -->


<!-- Alert Section -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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

                    @foreach($groups as $group)
                    <tr>
                        <td>{{ $group->id }}</td>
                        <td>{{ $group->title }}</td>

                        <td>

                            <form action="{{ url('groups',$group->id) }}" method="post">

                                @csrf
                                @method('DELETE')


                                <button onclick="alert('are You Sure')" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>

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
