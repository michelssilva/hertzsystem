<?php

namespace App\Http\Controllers;

use App\Reserve;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //return redirect('/home');

        $reserves = Reserve::all();

        return view ('reserves.index', compact('reserves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserves.create');
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
        DB::insert('insert into reserves(rsv_start_time, 
                                      rsv_end_time,
                                      rsv_class,
                                      rsv_week_day,
                                      rsv_payment,
                                      rst_id,
                                      unt_id,
                                      crs_id,
                                      rsv_teacher_id,
                                      rsv_student_id) values(?,?,?,?,?,?,?,?,?,? )',
               [$request->rsv_start_time,
                $request->rsv_end_time,
                $request->rsv_class,
                $request->rsv_week_day,
                $request->rsv_payment,
                $request->rst_id,
                $request->unt_id,
                $request->crs_id,
                $request->rsv_teacher_id,
                $request->rsv_student_id]);



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
        $reserve = Reserve::findOrFail($id);

        return redirect('/reserves/'.$id.'/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserve = Reserve::findOrFail($id);

        return view('reserves.edit', compact('reserve'));
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


        //$user_t = Users::find(['usr_code_user'=>$request->rsv_teacher_code]);
        //$user_t = Users::findOrFail($request->rsv_teacher_code);
//


        DB::update('update reserves set rsv_start_time=?,
                                     rsv_end_time=?,
                                     rsv_class=?,
                                     rsv_week_day=?,
                                     rsv_payment=?,
                                     rst_id=?,
                                     unt_id=?,
                                     crs_id=?,
                                     rsv_teacher_id=?,
                                     rsv_student_id=?
                                           where rsv_id=?',
            [$request->rsv_start_time,
                $request->rsv_end_time,
                $request->rsv_class,
                $request->rsv_week_day,
                $request->rsv_payment,
                $request->rst_id,
                $request->unt_id,
                $request->crs_id,
                $request->rsv_teacher_id,
                $request->rsv_student_id,
                $id]);



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

        DB::delete('delete from reserves where rsv_id=?',[$id]);

        return redirect('/home');
    }
}
