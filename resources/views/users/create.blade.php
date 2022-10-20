@extends('layout/main')


@section('main_content')

<h2>Add New User</h2>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User Create</h6>
    </div>
    <div class="card-body">

        <div class="row justify-content-center">
            <div class="col-xl-6">




            <!--Collective Form -->

            {!!Form::open(['route' => 'users.store', 'method' => 'post']) !!}
            {!! Form::token() !!}

    <!-- Form User Groups -->
                    <div class="form-group">
                        <label for="">User Group </label>
                        {!! Form::select('group_id', $groups ,NULL,['class' => 'form-control','placeholder'=>"Select Your Group"] ) !!}

                        <small class=" text-danger">
                            @error('group_id')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
    <!-- Form User Groups -->


                    <div class="form-group">
                        <label for="">Name </label>
                        {!! Form::text('name',NULL, ['class' => 'form-control']) !!}

                        <small class=" text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="">Email </label>
                        {!! Form::text('email',NULL, ['class' => 'form-control']) !!}

                        <small class=" text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="">Phone Number </label>
                        {!! Form::number('phone',NULL, ['class' => 'form-control']) !!}

                        <small class=" text-danger">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="">Address </label>
                        {!! Form::text('address',NULL, ['class' => 'form-control']) !!}

                        <small class=" text-danger">
                            @error('address')
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
