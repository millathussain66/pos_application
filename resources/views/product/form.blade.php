@extends('layout/main')


@section('main_content')





@if($mode == 'edite')
<h2>Product => {{ $product->title }} Information</h2>
@else
<h2>Add New Product</h2>


@endif


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        @if($mode == 'edite')
        <h6 class="m-0 font-weight-bold text-primary">Product Update</h6>
        @else
        <h6 class="m-0 font-weight-bold text-primary">Product Create</h6>
        @endif
    </div>
    <div class="card-body">

        <div class="row justify-content-center">
            <div class="col-xl-10">


                @if(isset($product))

                {!!Form::model($product,['route' => ['product.update', $product->id], 'method' => 'put']) !!}


                @else
                {!!Form::open(['route' => 'product.store', 'method' => 'post']) !!}
                @endif




                <!--Collective Form -->

                {!!Form::open(['route' => 'product.store', 'method' => 'post']) !!}
                {!! Form::token() !!}




                <div class="form-group">
                    <label for="">Product Title </label>
                    {!! Form::text('title',NULL, ['class' => 'form-control']) !!}

                    <small class=" text-danger">
                        @error('title')
                        {{ $message }}
                        @enderror
                    </small>
                </div>

                <div class="form-group">
                    <label for="">Product Description </label>
                    {!! Form::textarea('description',NULL, ['class' => 'form-control']) !!}

                    <small class=" text-danger">
                        @error('description')
                        {{ $message }}
                        @enderror
                    </small>
                </div>

                <!-- Form Catagroy From  -->
                <div class="form-group w-25">
                    <label for="">Product Catagory </label>
                    {!! Form::select('title', $catagory ,NULL,['class' => 'form-control','placeholder'=>"Select Your Group"] ) !!}

                    <small class=" text-danger">
                        @error('title')
                        {{ $message }}
                        @enderror
                    </small>
                </div>
                <!-- Form Catagroy From  -->

                <div class="form-group w-25" >
                    <label for=""> Cost Price </label>
                    {!! Form::number('const_price',NULL, ['class' => 'form-control']) !!}

                    <small class=" text-danger">
                        @error('const_price')
                        {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="form-group w-25">
                    <label for="">Price  </label>
                    {!! Form::text('price',NULL, ['class' => 'form-control']) !!}

                    <small class=" text-danger">
                        @error('price')
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
