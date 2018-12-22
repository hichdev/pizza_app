<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    //

    public function index(){



        return view('admin.user.index')->with('users', User::all());

    }


    public function create(){

        return view('admin.user.create');



    }

    public function store(){




    }


}
