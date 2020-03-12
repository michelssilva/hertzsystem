<?php

namespace App\Http\Controllers;

use App\Reserve;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Exception;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::all();

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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'usr_name' => ['required', 'max:255'],
//            'usr_email' => ['required', 'max:255', 'email', 'unique:users'],
//
//        ]);

        try {
            // the code goes here

            $primeiro_nome=explode(' ',$request->name)[0];

            $conjunto_de_letras_e_caracteres ='12345!#$*';

            $senha_embaralhada = str_shuffle($primeiro_nome.$conjunto_de_letras_e_caracteres);


            $user = new Users();
            $user->usr_name = $request->name;
            $user->usr_role = $request->role;
            $user->usr_email = $request->email;
            $user->usr_cpf = $request->cpf;
            $user->usr_cell_phone = $request->cell_phone;
            $user->usr_telephone = $request->telephone;
            $user->usr_state = $request->state;
            $user->usr_city = $request->city;
            $user->usr_address = $request->address;
            $user->usr_number = $request->number;
            $user->usr_neighborhood = $request->neighborhood;
            $user->usr_zip_code = $request->zip_code;
            $user->usr_password = Hash::make($senha_embaralhada);


            $user->save();
            if($request->role=='Administrador'){
                $user->usr_code_user= 'HZADM0'.$user->usr_id;
            }elseif ($request->role=='Professor'){
                $user->usr_code_user= 'HZPRO0'.$user->usr_id;
            }else{
                $user->usr_code_user= 'HZALN0'.$user->usr_id;
            }

            $user->save();

            $data = array(
                'email' => $request->email,
                'bodyMessage' => 'Caro usuário, sua senha de acesso ao System Hertz é: '. $senha_embaralhada,
            );

            Mail::send('emails.test',$data,function ($m) use ($data){
                $m->from('hertzsystemsjc@gmail.com','Hertz Music School');
                $m->subject('Dados de Acesso System Hertz ');
                $m->to($data['email']);
            });



            return redirect('/');
        } catch (Exception $e) {
            // if an exception happened in the try block above

            echo "<script type='text/javascript'>  

    alert('Não foi possível cadastrar usuário!! ' +
     'Email ou CPF já existe!!');    
    history.back()
   </script>";



//            return redirect()->back();

//            return redirect()->back()->with(['error' => '<script type="text/javascript">alert(\'bla bla bla...\');</script>']);


        }


    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Users::findOrFail($id);

        return redirect('/users/'.$id.'/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::findOrFail($id);

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
        $user = Users::findOrFail($id);

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
        $user = Users::whereUsrId($id);



        $reservas_student_id=DB::select('select * from reserves where rsv_student_id=?',[$id]);

//        dd(count($reservas_student_id));

        for($i=0 ; $i<count($reservas_student_id); $i++){
            DB::delete('delete from progress where rsv_id=?',[$reservas_student_id[$i]->rsv_id]);
        }


        $reservas_teacher_id=DB::select('select * from reserves where rsv_teacher_id=?',[$id]);

//        dd(count($reservas_teacher_id));

        for($i=0 ; $i<count($reservas_teacher_id); $i++){
            DB::delete('delete from progress where rsv_id=?',[$reservas_teacher_id[$i]->rsv_id]);
        }


        DB::delete('delete from reserves where rsv_student_id=?',[$id]);

        DB::delete('delete from reserves where rsv_teacher_id=?',[$id]);

        $user->delete();


        return redirect('/home');
    }


    public function list_users(){
        $select = DB::select("select * from users");



        return response()->json($select);
    }



}
