<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->data['products'] = Product::all();


        return view('product.product',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['catagory']    = Catagory::arrayForSelect();
        $this->data['mode']      = "create";
        return view('product.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $formData = $request->all();
        if (Product::create($formData)) {

            Session::flash('message', 'Product Created SuccessFully');
        }
        return redirect()->to('product');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['product'] = Product::findOrFail($id);

        return view('product.show',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['product'] = Product::findOrFail($id);
        $this->data['catagory']    = Catagory::arrayForSelect();
        $this->data['mode']         = "edite";

        return view('product.form',$this->data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data                       = $request->all();
        $product                    = Product::find($id);
        $product->catagory_id        = $data['catagory_id'];
        $product->title              = $data['title'];
        $product->description        = $data['description'];
        $product->const_price        = $data['const_price'];
        $product->price              = $data['price'];


        if ($product->save()) {

            Session::flash('message', 'Product Updated SuccessFully');
        }
        return redirect()->to('product');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Product::find($id)->delete()) {

            Session::flash('message', 'Product Delete SuccessFully');
        }
        return redirect()->to('product');
    }
}
