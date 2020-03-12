<?php

namespace App\Http\Controllers;

use App\Progress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MongoDB\BSON\Javascript;

class ProgressController extends Controller
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

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $progress = new Progress();
//        $progress->pro_week_day = $request->pro_week_day;
//        $progress->pro_lesson = "1ª Aula";
//        $progress->pro_teacher_code = Auth::user()->usr_code_user;
//        $progress->pro_student_code = $request->student_code;
//        $progress->pro_student_name = $request->student_name;
//        $progress->pro_teacher_name = Auth::user()->usr_name;
//        $progress->save();

        DB::insert('insert into progress(pro_week_day, 
                                      pro_lesson,
                                      pro_teacher_code,
                                      pro_student_code,
                                      pro_teacher_name,
                                      pro_student_name
                                     ) values(?,?,?,?,?,? )',
            [$request->pro_week_day,
                "1ª Aula",
                Auth::user()->usr_code_user,
                $request->student_code,
                Auth::user()->usr_name,
                $request->student_name ]);

        return redirect('/');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pro_student_code)
    {
        $student_code = $pro_student_code.'';

        return view('progress_lessons.progress_my_student', compact ('student_code'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $progress = Progress::findOrFail($id);
        $student_code=$request->student_code;
        return view('progress_lessons/teacher_access/edit_progress_my_student', compact('progress'), compact('student_code'));
//        return redirect('/progress/'.$id.'/edit', compact('progress'));
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
        $progress = Progress::findOrFail($id);

//
//        $progress->pro_lesson=$request->pro_lesson;
//        $progress->pro_data=$request->pro_data;
//        $progress->pro_content=$request->pro_content;
//        $progress->pro_book=$request->pro_book;
//        $progress->save();

        DB::update('update progress set pro_lesson=?,
                                     pro_data=?,
                                     pro_content=?,
                                     pro_book=?                                     
                                           where pro_id=?',
            [$request->pro_lesson,
                $request->pro_data,
                $request->pro_content,
                $request->pro_book,
                $id]);



            return redirect('/content/'.$progress->rsv_id);













    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $progress = Progress::findOrFail($id);
        $progress->delete();
        return redirect('/content/'.$progress->rsv_id);
    }
}
