<?php

namespace App\Http\Controllers\Auth;

use App\Address;
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
    protected $redirectTo = '/';

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
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobilephone' =>['required', 'digits:11'],
            'streetname' => ['required', 'string', 'max:255'],
            'housenumber' => ['required', 'integer'],
            'city'=> ['required', 'string', 'max:255'],
            'postalcode' => ['required', 'integer', 'digits:4' ],
            'country' => ['required', 'string', 'max:255'],
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




      $address = Address::create([
            'straatNaam' => $data['streetname'],
            'nummer' => $data['housenumber'],
            'postcode' => $data['postalcode'],
            'stad' => $data['city'],
            'land' => $data['country'],

        ]);

      $address->save();





        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'mobilephone' => $data['mobilephone'],
            'address_id' => $address->id,
            'password' => Hash::make($data['password'])

        ]);
    }

    public function showRegistrationForm()
    {
        $cart = Session::get('cart');

        return view('auth.register')->with('cartItems', $cart);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request)
    {






        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));



        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }


    protected function registered(Request $request, $user)
    {
        //
    }



}
