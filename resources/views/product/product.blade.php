@extends('layout/main')


@section('main_content')

<div class="clearfix row mb-3">
    <div class="col-xl-6">
        <h2>Products List</h2>
    </div>
    <div class="col-xl-6 text-right">
        <a href="{{ route('product.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i></a>
    </div>
</div>

<!-- Alert Section -->



<!-- Alert Section -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Products List
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>catagory_id</th>
                        <th>title</th>
                        <th>description</th>
                        <th>const_price</th>
                        <th>price</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>catagory_id</th>
                        <th>title</th>
                        <th>description</th>
                        <th>const_price</th>
                        <th>price</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->catagory->title }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->const_price }}</td>
                        <td>{{ $product->price }}</td>

                        <td>
                            <form action="{{ route('product.destroy',['product'=> $product->id] )}}" method="post">


                        <a class="btn btn-info" href="{{ route('product.show',['product'=> $product->id]) }}"><i class="fa fa-eye"></i></a>

                        <a class="btn btn-info" href="{{ route('product.edit',['product'=> $product->id]) }}"><i class="fa fa-edit"></i> </a>




                            @csrf
                            @method("DELETE");
                               <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>

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
