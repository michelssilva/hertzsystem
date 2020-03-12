<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeacherRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->whereStrict('usr_role','Aluno');

        return view('users.index', compact ('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        $teachers = Teacher::all();
         return view ('users.create_all');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],

        ]);

        $senha_embaralhada = str_shuffle($request->cpf.$request->name);

        $user = new User();
        $user->usr_name = $request->name;
        $user->usr_role = "Aluno";
        $user->usr_email = $request->email;
        $user->usr_cpf = $request->cpf;
        $user->usr_cell_phone = $request->cell_phone;
        $user->usr_telephone = $request->telephone;
        $user->usr_address = $request->address;
        $user->usr_number = $request->number;
        $user->usr_neighborhood = $request->neighborhood;
        $user->usr_zip_code = $request->zip_code;
        $user->usr_password = bcrypt($senha_embaralhada);

        $user->save();

        $data = array(
            'email' => $request->email,
            'bodyMessage' => 'Caro usuário, sua senha de acesso ao System Hertz é: '. $senha_embaralhada,
        );

        Mail::send('emails\test',$data,function ($m) use ($data){
            $m->from('hertzsystemsjc@gmail.com','Hertz Music School');
            $m->subject('Dados de Acesso System Hertz ');
            $m->to($data['email']);
        });



        return redirect('/new_register_for_teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return redirect('/students/'.$id.'/edit');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::whereId($id)->delete();

        return redirect('/teachers');
    }
}
