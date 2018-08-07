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
            'type_document_ofi' => 'required',
            'nro_document_ofi' => 'required|integer',
            'tlf_local_ofi' => 'required|integer',
            'tlf_movil_ofi' =>'required',
            'fecha_contrato_ini' => 'required',
            'fecha_contrato_final' => 'required',
            'name_ofi' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
            'type_document_ofi' => $data['type_document_ofi'],
            'nro_document_ofi' => $data['nro_document_ofi'],
            'tlf_local_ofi' => $data['tlf_local_ofi'],
            'tlf_movil_ofi' =>$data['tlf_movil_ofi'],
            'fecha_contrato_ini' => $data['fecha_contrato_ini'],
            'fecha_contrato_final' => $data['fecha_contrato_final'],
            'name_ofi' => $data['name_ofi'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
