<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUnitRequest;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return redirect('/home');

//        $units = Unit::all();
//
//        return view ('units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUnitRequest $request)
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
        DB::insert('insert into units(unt_name, unt_number_classes) values(?,? )',
            [$request->unit , $request->number_classes ]);



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
        $unit = Unit::findOrFail($id);

        return redirect('/units/'.$id.'/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = Unit::findOrFail($id);

        return view('units.edit', compact('unit'));
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


        DB::update('update units set unt_name=?,
                                           unt_number_classes=?
                                           where unt_id=?',
            [$request->unt_name,$request->unt_number_classes,$id]);

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

        DB::delete('delete from units where unt_id=?',[$id]);

        return redirect('/home');
    }
}
