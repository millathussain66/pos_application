@extends('layout/main')


@section('main_content')


<!-- Alert Section -->
<div class="clearfix row mb-3">
    <div class="col-xl-4">

    <a href="{{ route('product.index') }}" class="btn btn-info"> <i class="fa fa-arrow-left"></i> Back</a>


    </div>
    <div class="col-xl-8 text-right">


    </div>
</div>

<!-- Alert Section -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
        {{ $product->title }}
        </h6>
    </div>
    <div class="card-body">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center">

        <div class="table-responsive">
           <table class="table table-striped ">
                <tr>
                    <th>Catagory Name : </th>
                    <th>{{ $product->catagory->title }}</th>


                </tr>
                <tr>
                    <th>Title : </th>
                    <th>{{ $product->title }}</th>
                </tr>
                <tr>
                    <th>Description : </th>
                    <th>{{ $product->description }}</th>
                </tr>
                <tr>
                    <th>Cost Price : </th>
                    <th>{{ $product->const_price }}</th>
                </tr>
                <tr>
                    <th>Price : </th>
                    <th>{{ $product->price }}</th>
                </tr>
           </table>



        </div>
        </div>
        <div class="col-md-1"></div>
    </div>


    </div>
</div>


@endsection
