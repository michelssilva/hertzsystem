<?php

namespace App\Http\Controllers;

//use App\Http\Requests\CreateUnitRequest;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        return redirect('/home');

        $courses = Course::all();

        return view ('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
        DB::insert('insert into courses(crs_name, pay_id) values(?,?)',
            [$request->course,$request->pay_id]);

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
        $course = Course::findOrFail($id);

        return redirect('/courses/'.$id.'/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('courses.edit', compact('course'));
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


        DB::update('update courses set crs_name=?
                                           where crs_id=?',
            [$request->crs_name,$id]);

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

        DB::delete('delete from courses where crs_id=?',[$id]);

        return redirect('/home');
    }
}
