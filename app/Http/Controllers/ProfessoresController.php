<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('professores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

       // Professor::create($request->all());


        DB::insert('insert into professores
             (prf_nome,prf_celular,prf_telefone,prf_cpf,prf_email,prf_senha,prf_endereco,prf_numero, prf_bairro,prf_cep)
             values (?,?,?,?,?,?,?,?,?,?)',
            [   $request->prf_nome,
                $request->prf_celular,
                $request->prf_telefone,
                $request->prf_cpf,
                $request->prf_email,
                $request->prf_senha,
                $request->prf_endereco,
                $request->prf_numero,
                $request->prf_bairro,
                $request->prf_cep
            ]);

//
//        $professor = new Professor;          // MODO 4 ESSAS ULTIMAS LINHAS
//        $professor->prf_nome = $request->prf_nome;
//        $professor->prf_celular = $request->prf_celular;
//        $professor->prf_telefone = $request->prf_telefone;
//        $professor->prf_cpf = $request->prf_cpf;
//        $professor->prf_email = $request->prf_email;
//        $professor->prf_senha = $request->prf_senha;
//        $professor->prf_endereco = $request->prf_endereco;
//        $professor->prf_numero = $request->prf_numero;
//        $professor->prf_bairro = $request->prf_bairro;
//        $professor->prf_cep = $request->prf_cep;
//        $professor->save();
        return redirect('/professores/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $professor = DB::select('select * from professores where prf_id=?',[$id]);
        return view('professores.show', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //


        $professor = DB::select('select * from professores where prf_id=?',[1]);

        return view('professores.edit', compact('professor'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
