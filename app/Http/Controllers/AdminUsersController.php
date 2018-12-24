<?php

namespace App\Http\Controllers;

use App\Role;
use App\Adminuser;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    //


    public function __construct()
    {

        $this->middleware('auth:adminusers');

    }


    public function index(){


        $users = Adminuser::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.user.index', ['adminusers'=> $users]);

    }


    public function create(){

        return view('admin.user.create')->with('roles', Role::all() );



    }

    /**
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request){


        $this->validate($request, [

            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role_id' => 'required'

        ]);

        Adminuser::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'password'=> bcrypt($request->password) ,
            'role_id'=>$request->role_id
        ]);


        return redirect()->route('admin.user');


    }

    public function edit($id){

        $user = Adminuser::find($id);

        return view('admin.user.edit')->with('user', $user )->with('roles', Role::all());

    }

    /**
     * @param Request $request
     * @param $id
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id){

        $this->validate($request, [

            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'role_id' => 'required'

        ]);

        $user = Adminuser::find($id);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;


        $user->save();

        return redirect()->route('admin.user');


    }

    public function delete($id){

        $user = Adminuser::find($id);



        $user->delete();

        return redirect()->route('admin.user');


    }


    public function roles(){

        return view('admin.user.role.index')->with('roles', Role::all());

    }

    public function rolesCreate(){

        return view('admin.user.role.create');



    }

    /**
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function roleStore(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);

        Role::create(['name' => $request->name]);

       return redirect()->route('admin.users.roles');

    }

    public function roleDelete($id){

        $role = Role::find($id);


        $role->delete();

        return redirect()->route('admin.users.roles');


    }

}
