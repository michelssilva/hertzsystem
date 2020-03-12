<?php

namespace App\Http\Controllers;

use App\ReserveType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserveTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return redirect('/home');

//        $reserve_types = ReserveType::all();
//
//        return view ('reserve_types.index', compact('reserve_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserve_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //DESSA FORMA PRECISA DE TIMESTEMP
//        $unit = new Unit();
//        $unit->unt_name=$request->unit;
//        $unit->unt_number_classes=$request->number_classes;
//        $unit->save();
        //DESSA FORMA PRECISA DE TIMESTEMP
//        $input=$request->all();
//        Unit::create($input);

        //DESSA FORMA NÃO PRECISA DE TIMESTEMP
        DB::insert('insert into reserve_types(rst_name) values(?)',
            [$request->rst_name]);



          return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserve_type = ReserveType::findOrFail($id);

        return redirect('/reserve_types/'.$id.'/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserve_type = ReserveType::findOrFail($id);

        return view('reserve_types.edit', compact('reserve_type'));
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
//        $unit = Unit::findOrFail($id);
//
//        $unit->update($request->all());


        DB::update('update reserve_types set rst_name=? where rst_id=?',
            [$request->rst_name,$id]);

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
//        $unit = Unit::findOrFail($id);
//
//        $unit->delete();

        DB::delete('delete from reserve_types where rst_id=?',[$id]);

        return redirect('/home');
    }
}
