<?php

namespace Xstore\Http\Controllers\Auth;

use Xstore\Http\Controllers\Controller;
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
    protected $redirectTo = '/dashboard';

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
            'firstname' => 'required|min:6|max:50',
            'lastname' => 'required|min:8|max:150',
            'dob' => 'required|min:8|date',
            'address' => 'required|min:8|max:255',
            'district_id' => 'required|min:1',
            'idcard' => 'required|min:8|max:255',
            'email' => 'required|email|min:8|unique:users',
            'password' =>'required|min:8|max:255|confirmed',
            'phone' => 'required|min:8|max:255',
            'sex' => 'required|min:1',
        ],[

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        // dd(app('user'));
        return app('user')->create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'dob' => $data['dob'],
            'address' => $data['address'],
            'district_id' => $data['district_id'],
            'idcard' => $data['idcard'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'sex' => $data['sex'],
        ]);
    }
}
