<?php

namespace App\Http\Controllers\Auth;


use App\User;
use App\Http\Controllers\Controller;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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


    protected function register(array $data)
    {
        Users::create([
            'usr_name' => $data['name'],
            'usr_role' => $data['role'],
            'usr_email' => $data['email'],
            'usr_cpf' => $data['cpf'],
            'usr_cell_phone' => $data['cell_phone'],
            'usr_telephone' => $data['telephone'],
            'usr_address' => $data['address'],
            'usr_number' => $data['number'],
            'usr_neighborhood' => $data['neighborhood'],
            'usr_zip_code' => $data['zip_code'],
            'usr_password' => Hash::make($data['password']),
        ]);

        return redirect('/home');
    }

    protected function showRegistrationForm (){

        return view('auth.register');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//        ]);
//    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
//    protected function create(array $data)
//    {
//        User::create([
//            'name' => $data['name'],
//            'role' => $data['role'],
//            'email' => $data['email'],
//            'cpf' => $data['cpf'],
//            'cell_phone' => $data['cell_phone'],
//            'telephone' => $data['telephone'],
//            'address' => $data['address'],
//            'number' => $data['number'],
//            'neighborhood' => $data['neighborhood'],
//            'zip_code' => $data['zip_code'],
//            'password' => Hash::make($data['password']),
//        ]);
//
//
//
//        return redirect('/home');
//    }

//    public function store(Request $request)
//    {
//        $this->validate($request, [
//            'name' => ['required', 'max:255'],
//            'email' => ['required', 'max:255', 'email', 'unique:users'],
//
//        ]);
//
//        $senha_embaralhada = str_shuffle($request->cpf.$request->name);
//
//
//        $user = new User();
//        $user->name = $request->name;
//        $user->role = $request->role;
//        $user->email = $request->email;
//        $user->cpf = $request->cpf;
//        $user->cell_phone = $request->cell_phone;
//        $user->telephone = $request->telephone;
//        $user->address = $request->address;
//        $user->number = $request->number;
//        $user->neighborhood = $request->neighborhood;
//        $user->zip_code = $request->zip_code;
//        $user->password = bcrypt($senha_embaralhada);
//
//
//        $user->save();
//        $user->code_user= 'HZ00'.$user->id;
//        $user->save();
//
//        $data = array(
//            'email' => $request->email,
//            'bodyMessage' => 'Caro usuário, sua senha de acesso ao System Hertz é: '. $senha_embaralhada,
//        );
//
//        Mail::send('emails\test',$data,function ($m) use ($data){
//            $m->from('hertzsystemsjc@gmail.com','Hertz Music School');
//            $m->subject('Dados de Acesso System Hertz ');
//            $m->to($data['email']);
//        });
//
//
//
//        return redirect('/home');
//    }



}
