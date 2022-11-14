@extends('layout/primery')


@section('page_body')

@endsection


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <!-- <form class="user"> -->
                                {!!Form::open(['route' => 'login', 'method' => 'post']) !!}

                                <div class="form-group">
                                    <label for="">Emile Address </label>
                                    {!! Form::email('email',NULL, ['class' => 'form-control']) !!}

                                    <small class=" text-danger">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>


                                <div class="form-group">
                                    <label for="">Password </label>


                                    {!! Form::password('password', ['class' => 'form-control form-control-user']) !!}

                                    <small class=" text-danger">
                                        @error('password')
                                        {{ $message }}
                                        @enderror
                                    </small>
                                </div>


                                {!! Form::submit('Login!',['class'=>'btn btn-primary']) !!}


                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
