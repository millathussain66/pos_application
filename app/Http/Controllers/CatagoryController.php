<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatagoryRequest;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['catagories'] = Catagory::all();

        return view('catagory.catagory',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['mode']       = "create";

        return view('catagory.form',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatagoryRequest $request)
    {
        $formData  =  $request->all();

        if(Catagory::create($formData)){

            Session::flash('message', 'Your Group Created SuccessFully');
        }
        return redirect()->to('catagories');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $this->data['catagory'] = Catagory::findOrFail($id);

        $this->data['mode']       = "update";


        return view('catagory.form',$this->data);





    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatagoryRequest $request, $id)
    {

        $data                    = $request->all();
        $catagory                = Catagory::find($id);
        $catagory->title         = $data['title'];


        if ($catagory->save()) {

            Session::flash('message', 'Catagory Updated SuccessFully');
        }
        return redirect()->to('catagories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Catagory::find($id)->delete()) {

            Session::flash('message', 'Catagory Delete SuccessFully');
        }
        return redirect()->to('catagories');
    }
}
