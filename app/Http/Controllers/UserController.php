<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\updateUserRequest;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['users']    = User::with('group')->get();

         return view('users.users', $this->data);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->data['groups']    = Group::arrayForSelect();
        $this->data['mode']      = "create";
        return view('users.form', $this->data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {

        $formData = $request->all();
        if (User::create($formData)) {

            Session::flash('message', 'Your Group Created SuccessFully');
        }
        return redirect()->to('users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show($id)
     {
        $this->data['users'] = User::find($id);

        return view('users.show',$this->data);
     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['users']        = User::findOrFail($id);
        $this->data['groups']       = Group::arrayForSelect();
        $this->data['mode']         = "edite";

        return view('users.form',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateUserRequest $request, $id)
    {
        $data               = $request->all();
        $user               = User::find($id);

        $user->group_id     = $data['group_id'];
        $user->name         = $data['name'];
        $user->email        = $data['email'];
        $user->phone        = $data['phone'];
        $user->address      = $data['address'];


        if ($user->save()) {

            Session::flash('message', 'User Updated SuccessFully');
        }
        return redirect()->to('users');



        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (User::find($id)->delete()) {

            Session::flash('message', 'User Delete SuccessFully');
        }
        return redirect()->to('users');

    }
}
