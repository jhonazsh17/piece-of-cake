<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
            'dni' => ['required', 'string', 'min:8'],
            'name' => ['required', 'string', 'max:100'],
            'role'=> ['required','string']         
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
        // $roles = ['Student', 'Teacher', 'Administrator'];
        // $role = "";
        // $password = "";

        // if($data['role']=="Administrador"){
        //     $role = $roles[2];
        //     $password = $data('password');
        // }else if($data['role']=="Profesor"){
        //     $role = $roles[1];
        //     $password = Hash::make($data['dni']);
        // }else{
        //     $role = $roles[0];
        //     $password = Hash::make($data['dni']);
        // }

        // return User::create([
        //     'dni' => $data['dni'],
        //     'name' => $data['names'],            
        //     'password' => $password,
        //     'role' => $role,
        // ]);

        return $data['name'];
    }
}
