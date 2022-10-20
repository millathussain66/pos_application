<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserGroupController extends Controller
{

    public function index()
    {
        $this->data['groups'] = Group::all();
        return view('groups.group', $this->data);
    }

    public function create()
    {
        return view('groups.create');
    }

    // Store Data

    public function store(Request $request)
    {

        $formData = $request->all();

        $request->validate(
            [
                'title' => 'required',
            ]
        );
        if (Group::create($formData)) {
            Session::flash('message', 'Your Group Created SuccessFully');
        }
        return redirect()->to('groups');
    }
    // destroy

    public function destroy($id)
    {

        if ( Group::find($id)->delete()) {
            
            Session::flash('message', 'Your Group Deleted SuccessFully');
        }
        return redirect()->to('groups');
    }
}
