<?php

namespace App\Http\Controllers;

//use App\Http\Requests\CreateUnitRequest;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return redirect('/home');

//        $payments = Payment::all();
//
//        return view ('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payments.create');
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
        DB::insert('insert into payments(pay_value) values(?)',
            [$request->value]);

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
        $unit = Payment::findOrFail($id);

        return redirect('/payments/'.$id.'/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);

        return view('payments.edit', compact('payment'));
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


        DB::update('update payments set pay_value=?
                                           where pay_id=?',
            [$request->pay_value,$id]);

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

        DB::delete('delete from payments where pay_id=?',[$id]);

        return redirect('/home');
    }
}
