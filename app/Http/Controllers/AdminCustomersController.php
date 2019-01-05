<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCustomersController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:adminusers');
    }

    public function index(){


        $customers = User::orderBy('firstname', 'desc')->paginate(5);

        return view('admin.customer.index', ['customers'=> $customers]);

    }



    public function edit($id){

        $customer = User::find($id);

        return view('admin.customer.edit')->with('customer', $customer )->with('address', $customer->address_id );

    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id){

        $this->validate($request, [

            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobilephone' => 'required|digits:11',
            'streetname' => 'required',
            'housenumber' => 'required|integer',
            'city' => 'required',
            'postalcode' => 'required|digits:4',
            'country' => 'required'

        ]);

        $customer = User::findOrFail($id);







        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->email = $request->email;
        $customer->mobilephone = $request->mobilephone;
        $customer->address->straatNaam = $request->streetname;
        $customer->address->nummer = $request->housenumber;
        $customer->address->postcode = $request->postalcode;
        $customer->address->stad = $request->city;
        $customer->address->land = $request->country;


        $customer->save();
        $customer->address->save();

        Session::flash('success', 'De aanpassingen werden opgeslaan');

        return redirect()->route('admin.customers');


    }

    public function delete($id){

        $customer = User::find($id);



        $customer->delete();
        $customer->address->delete();

        return redirect()->route('admin.customers');


    }




}
