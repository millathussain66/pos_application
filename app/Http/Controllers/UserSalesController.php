<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserSalesController extends Controller
{
    public function index($id)
    {

        $user                               = User::findOrFail($id);

        return $user;


    //     $this->data['sales']        = $user->sales;

    //    print_r($this->data);

    }
}
