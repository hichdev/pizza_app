<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'mobilephone' => $data['mobilephone'],
            'address->straatNaam' => $data['straatNaam'],
            'address->nummer' => $data['nummer'],
            'address->postcode' => $data['postcode'],
            'address->stad' => $data['stad'],
            'address->land' => $data['land'],
            'password' => Hash::make($data['password'])

        ]);
    }

//    public function showRegistrationForm()
//    {
//        $cart = Session::get('cart');
//
//        return view('auth.register')->with('cartItems', $cart);
//    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
//     */
//
//    public function register(Request $request)
//    {
//
//        dump($request->all());
//
//
////        $this->validator($request->all())->validate();
////
////        event(new Registered($user = $this->create($request->all())));
////
////        $this->guard()->login($user);
////
////        return $this->registered($request, $user)
////            ?: redirect($this->redirectPath());
//    }
//
//
//    protected function registered(Request $request, $user)
//    {
//        //
//    }



}
