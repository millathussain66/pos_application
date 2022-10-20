@extends('layout/main')


@section('main_content')

<h2>Add New Group</h2>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">

        <div class="row justify-content-center">
            <div class="col-xl-6">

                <form action="{{ url('groups')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="groupTitlte">User Group Title</label>
                        <input name="title" type="text" class="form-control " id="groupTitlte" placeholder="Enter Group Title...">
                        <small class=" text-danger">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">

                </form>
            </div>
        </div>


    </div>
</div>


@endsection
