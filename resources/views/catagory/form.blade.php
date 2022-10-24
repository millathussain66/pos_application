@extends('layout/main')


@section('main_content')





@if($mode == 'edite')
<h2>Update User => {{ $catagory->title }} Information</h2>
@else
<h2>Add New Catagory</h2>


@endif


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        @if($mode == 'update')
        <h6 class="m-0 font-weight-bold text-primary">User Update</h6>
        @else
        <h6 class="m-0 font-weight-bold text-primary">Add New Catagory</h6>
        @endif
    </div>
    <div class="card-body">

        <div class="row justify-content-center">
            <div class="col-xl-6">

        @if(isset($catagory))
{!!Form::model($catagory,['route' => ['catagories.update', $catagory->id], 'method' => 'put']) !!}

@else
     {!!Form::open(['route' => 'catagories.store', 'method' => 'post']) !!}

                @endif

                <div class="form-group">

                    <label for="">Catagories Title </label>

      {!! Form::text('title',NULL, ['class' => 'form-control','placeholder'=>'Title']) !!}

                    <small class=" text-danger">
                        @error('title')
                        {{ $message }}
                        @enderror
                    </small>
                </div>
                {!! Form::submit('Submit!',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@endsection
