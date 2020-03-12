<?php

use App\Post;
use App\Progress;
use App\Reserve;
use App\Role;
use App\User;
use App\Professor;
use App\Users;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::group(['middleware'=>['IsTeacher','IsAdmin']], function(){
//
//
//
//
//    //CRIAÇÃO AUTOMATIZADA DE ROTAS DE RESERVAS ACESSO ADMINISTRADOR
//
//
//    Route::get("/reserves/admin_access/{unit}/{unt_id}/{class}",function ($unt_name_var,$unt_id_var,$number_class_var){
//        $unt_name=$unt_name_var;
//        $unt_id=$unt_id_var;
//        $number_class=$number_class_var;
//        return view('reserves/admin_access/reserves',compact('unt_name','unt_id','number_class'));
//    });
//
//
//});













Route::group(['middleware'=>'IsAdmin'], function(){

    //ROTA PARA EDIÇÃO DE COMMIÇÃO DE PROFESSORES

    Route::get('/edit_commission/{id}', function ($id){
        $teacher = Users::findOrFail($id);
        return view('users/edit_teacher_commission', compact('teacher'));
    });

    Route::get('/update_commission/{usr_id}',function (Request $request, $id){


        DB::update('update users set usr_commission=? where usr_id=?',
            [$request->usr_commission, $id]);

        return redirect('/home');

    });




    //ESSA ROTA ESTA SENDO INUTILIZADA
    Route::get('/new_register_for_admin',function (){
        return view ('users.create_all');
    });

    Route::resource('/users', 'UsersController');


    Route::get('/reserva_centro/','PostsController@reserva_centro');
    Route::get('/reserva_morumbi/','PostsController@reserva_morumbi');
    Route::get('/reserva_pub/','PostsController@reserva_pub');
    Route::get('/reports', function(){
        return view('reports/list_reports');
    });
//    Route::get('/report_basic_units_return_money', function(){
////        return view('reports/report_basic_units_return_money');
////    });



    // ROTAS DE RELATÓRIOS

    Route::get('/report_units_return_money/{unt_id}/{unt_name}/{unt_number_classes}', function($unt_id,$unt_name, $unt_number_classes){

        return view('reports.report_units_return_money', compact('unt_id','unt_name','unt_number_classes'));
    });




    Route::get('/report_salary_teachers', function(){
        return view('reports/report_salary_teacher');
    });

    Route::get('/report_salary_teachers-pdf', function(){


        $date=Carbon::now()->format('d-m-Y');

        $pdf = PDF::loadView('reports.report_salary_teacher-pdf');
        return $pdf->download('report_salary_teacher_'.$date.'.pdf');
    });


    //CRIAÇÃO AUTOMATIZADA DE ROTAS DE RESERVAS ACESSO ADMINISTRADOR


    Route::get("/reserves/admin_access/{unit}/{unt_id}/{class}",function ($unt_name_var,$unt_id_var,$number_class_var){
        $unt_name=$unt_name_var;
        $unt_id=$unt_id_var;
        $number_class=$number_class_var;
        return view('reserves/admin_access/reserves',compact('unt_name','unt_id','number_class'));
    });

    Route::get("/create_progress/{rsv_id}", function ($rsv_id){

        DB::insert("insert into progress(pro_lesson,rsv_id) values(?,?)",["Aula 1",$rsv_id]);

        return redirect('/content/'.$rsv_id);
    });


    //// ROTAS APENAS PARA MONITORAMENTO DOS ANDAMENTOS DAS AULAS

    Route::get('/content/admin_access/{rsv_id}', function ($rsv_id){

        return view('progress_lessons/admin_access/progress_my_student', compact ('rsv_id'));
    });

    Route::get("/create_progress/my_student/admin_access/{rsv_id}", function ($rsv_id){

        DB::insert("insert into progress(pro_lesson,rsv_id) values(?,?)",["Aula 1",$rsv_id]);

        return redirect('/content/admin_access/'.$rsv_id);
    });


    Route::get('/add_lesson/admin_access/{rsv_id}',function ($rsv_id){

        return view('progress_lessons/admin_access/new_lesson', compact ('rsv_id'));
    });


    Route::post('/new_lesson/admin_access/{rsv_id}', function (Request $request, $rsv_id){

        DB::insert('insert into progress(
                                      pro_lesson,
                                      pro_data,
                                      pro_content,
                                      pro_book,
                                      rsv_id) values(?,?,?,?,?)',
            [   $request->lesson_input,
                $request->date_input,
                $request->content_input,
                $request->book_input,
                $rsv_id]);

        return redirect('/content/admin_access/'.$rsv_id);
    });

    Route::get('/edit_progress/access_admin/{pro_id}/{rsv_id}', function (Request $request, $id){
        $progress = Progress::findOrFail($id);
        $student_code=$request->student_code;
        return view('progress_lessons/admin_access/edit_progress_my_student', compact('progress'), compact('student_code'));
    });

    Route::get('update_progress/admin_access/{rsv_id}', function (Request $request, $id){

        $progress = Progress::findOrFail($id);

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




        return redirect('/content/admin_access/'.$progress->rsv_id);

    });

    Route::get('/delete_progress/admin_access/{rsv_id}', function ( $id){

        $progress = Progress::findOrFail($id);
        $progress->delete();
        return redirect('/content/admin_access/'.$progress->rsv_id);

    });



    /// ROTA PARA VISUALIZAÇÃO COMPLETA DOS CADASTROS

    Route::get('/admin_access/list_users', function (){
        return view('users.index');
    });




});


Route::group(['middleware'=>'IsTeacher'], function(){

    //ESSA ROTA ESTA SENDO INUTILIZADA
    Route::get('/new_student',function (){
        return view ('students.create');
    });
    Route::get('/my_students',function (){
        return view ('teachers.my_students');
    });

    Route::resource('/teachers','TeachersController');
    Route::resource('/students','StudentsController');





    //CRIAÇÃO AUTOMATIZADA DE ROTAS DE RESERVAS ACESSO PROFESSOR

    Route::get("/reserves/teacher_access/{unit}/{unt_id}/{class}",function ($unt_name_var,$unt_id_var,$number_class_var){
        $unt_name=$unt_name_var;
        $unt_id=$unt_id_var;
        $number_class=$number_class_var;
        return view('reserves/teacher_access/reserves',compact('unt_name','unt_id','number_class'));
    });

    // ROTA DE RESERVA DE AULAS PARA SER USADA PELOS PROFESSORES

    Route::post('/reserve_for_teacher', function (Request $request){

        $usr_id=Auth::user()->usr_id;


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
                $usr_id,
                $request->rsv_student_id]);



        return redirect('/home');
    });

/// ROTAS DE ANDAMENTO DAS AULAS

//    //ROTA SENDO INUTILIZADA
//
//    Route::get('/my_contents', function (){
//        return view('progress_lessons.list_progress');
//    });

    //ROTAS ANDAMENTO DE CONTEUDOS DAS AULAS "PROGRESS"

    Route::get('/content/{rsv_id}', function ($rsv_id){

        return view('progress_lessons/teacher_access/progress_my_student', compact ('rsv_id'));
    });



    Route::get("/create_progress/my_student/{rsv_id}", function ($rsv_id){

        DB::insert("insert into progress(pro_lesson,rsv_id) values(?,?)",["Aula 1",$rsv_id]);

//        return redirect('/content/'.$rsv_id);
        return redirect('/home');

    });


    Route::get('/add_lesson/{rsv_id}',function ($rsv_id){

        return view('progress_lessons/teacher_access/new_lesson', compact ('rsv_id'));
    });


    Route::post('/new_lesson/{rsv_id}', function (Request $request, $rsv_id){

        DB::insert('insert into progress(
                                      pro_lesson,
                                      pro_data,
                                      pro_content,
                                      pro_book,
                                      rsv_id) values(?,?,?,?,?)',
            [   $request->lesson_input,
                $request->date_input,
                $request->content_input,
                $request->book_input,
                $rsv_id]);

        return redirect('/content/'.$rsv_id);
    });


    /// ROTA PARA VISUALIZAÇÃO COMPLETA DOS CADASTROS

    Route::get('/teacher_access/list_users', function (){
        return view('users.index');
    });




});





Route::group(['middleware'=>'IsStudent'], function(){


    //ROTA ANDAMENTO DE CONTEUDOS DAS AULAS "PROGRESS"

    Route::get('/my_progress/{rsv_id}', function ($rsv_id){

        return view('progress_lessons/student_access/my_progress', compact ('rsv_id'));
    });

    Route::get('/assessment_lesson/{pro_id}/{rsv_id}', function (Request $request, $pro_id, $rsv_id){

//        DB::update('update progress set pro_assessment=?,
//                                     pro_comment=?
//
//                                           where pro_id=?',
//            [$request->pro_lesson,
//                $request->pro_data,
//                $request->pro_content,
//                $request->pro_book,
//                $id]);

        DB::update("update progress set pro_assessment=?, pro_comment=? where pro_id=?; ",[$request->pro_assessment, $request->pro_comment, $pro_id]);

        return redirect('/my_progress/'.$rsv_id);
    });


    Route::post('/reset-password-student', function (Request $request){

        $student=Auth::user();


        if (Hash::check($request->atual, $student->usr_password)) {
            // The passwords match...
            $new_password=Hash::make($request->nova);
           DB::update('update users set usr_password=? where usr_id=?;',[$new_password,$student->usr_id]);

        }else{
           return "NÃO FOI POSSÍVEL ALTERAR A SENHA!";
        };





    });


});










Route::group(['middleware'=>'web'], function(){

    Route::get('/', function () {
        return redirect('/home');
    });

    Route::get('/cartilha_modificacao',function (){
        return view('cartilhas_modificacao');
    });

    Route::get('/cartilha_elementos',function (){
        return view('cartilha_de_elementos');
    });





    Route::resource('/posts', 'PostsController');

    Route::resource('/reserves', 'ReservesController');

    Route::resource('/progress', 'ProgressController');

    Auth::routes();


    Route::get('/home', 'HomeController@index')->name('home');






//    Route::get('/reserve_lesson',function (){
//
//        return view('list_units');
//    });

//    Route::get('/conteudo/','PostsController@conteudoAula');


//    Route::get('/monday_progress', function (){
//        return view('progress_lessons.monday_progress');
//    });
//    Route::get('/tuesday_progress', function (){
//        return view('progress_lessons.tuesday_progress');
//    });
//
//    Route::get('/wednesday_progress', function (){
//        return view('progress_lessons.wednesday_progress');
//    });
//    Route::get('/thursday_progress', function (){
//        return view('progress_lessons.thursday_progress');
//    });
//    Route::get('/friday_progress', function (){
//        return view('progress_lessons.friday_progress');
//    });
//    Route::get('/saturday_progress', function (){
//        return view('progress_lessons.saturday_progress');
//    });



//    Route::get('/content/{pro_student_code}', function ($pro_student_code){
//        $student_code= $pro_student_code;
//        return view('progress_lessons.progress_my_student', compact ('student_code'));
//    });

//    Route::get('/conteudo2', function (){
//        return view('conteudo.conteudoAula');
//    } );

//      Route::get('/add_lesson/{week_day}/{teacher_code}/{student_code}',function ($pro_week_day, $pro_teacher_code, $pro_student_code){
//        $week_day = $pro_week_day;
//        $teacher_code = $pro_teacher_code;
//        $student_code= $pro_student_code;
//        return view('progress_lessons.new_lesson', compact ('week_day'),compact('student_code'),compact('teacher_code'));
//    })->name('add_lesson');




    //////////// ROTAS RESERVAS ///////////

//    Route::get('/new_unit',function (){
//         return view('new_unit');
//    });
//
//    Route::post('/add_new_unit', function (Resquest $resquest){
//
//
//    });
//








//Route::get('/reserva2/','PostsController@reserva2');
//Route::get('/abas/','PostsController@teste_abas');
//Route::get('/abas2/','PostsController@teste_abas2');






//    Route::get('/dates',function(){
//
//        $date = new DateTime('+1 week');
//
//        echo $date->format('d-m-Y');
//
//        echo '<br>';
//
//        echo Carbon::now()->addDays(10)->diffForHumans();
//
//        echo '<br>';
//
//        echo Carbon::now()->subMonth(5)->diffForHumans();
//
//        echo '<br>';
//
//        echo Carbon::now()->yesterday();
//
//        echo '<br>';
//
//    });
//
//    Route::get('/getname', function(){
//
//         $user = User::find(5);
//
//         echo $user->name;
//
//    });
//
//
//
//    Route::get('/setname', function(){
//
//        $user = User::findOrFail(1);
//
//        $user->name = "william";
//
//        $user->save();
//
//    });

//    Route::get('/sendmail',function (){
//
//        //    $data = [
////
////        'title' => 'Hi student',
////        'content' => 'This Laravel course'
////    ];
////
////    Mail::send('emails.teste', $data, function ($message){
////
////        $message->to('contato_michel@outlook.com','Michel')->subject('Hellow student');
////
////    });
//
//        Mail::send('emails\test',['curso'=>'Caro professor, sua senha de acesso ao system hertz é:1234'],function ($m){
//            $m->from('hertzsystemsjc@gmail.com','Hertz Music School');
//            $m->subject('Dados de Acesso System Hertz ');
//            $m->to('michel.anarq30@gmail.com');
//        });
//    });




//ROTA DE REGISTRO CUSTOMIZADA ONDE O GESTOR POR USAR DE FORMA ALTERNATIVA E CRIAR A SENHA DO USUÁRIO
    Route::post('/register_user',function (Request $request){


         try{

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
             $user->usr_password= Hash::make($request->password);

             $user->save();

             if($request->role=='Administrador'){
                 $user->usr_code_user= 'HZADM0'.$user->usr_id;
             }elseif ($request->role=='Professor'){
                 $user->usr_code_user= 'HZPRO0'.$user->usr_id;
             }else{
                 $user->usr_code_user= 'HZALN0'.$user->usr_id;
             }

             $user->save();

             return redirect('/home');

         }catch (Exception $e){
             echo "<script type='text/javascript'>  

    alert('Não foi possível cadastrar usuário!! ' +
     'Email ou CPF já existe!!');    
    history.back()
   </script>";

         }


    })->name('register_user');





    //ROTA DE LOGIN CUSTOMIZADA
    Route::post('/login_user', function (Request $request){


        $dados = $request->all();

        try{
            $user = Users::where('usr_email', $dados['email'])
                ->first();

            if (Hash::check($dados['password'], $user->usr_password)) {
                // The passwords match...
                Auth::login($user, true);


                return redirect()->route('home');}


            }catch (Exception $e){
            echo "<script type='text/javascript'>  

    alert('Não foi se autenticar!! ' +
     'Email ou Senha Inválidos!!');    
    history.back()
   </script>";

        }


//
//        $user = Users::where('usr_email', $dados['email'])
//            ->first();
//
//        if (Hash::check($dados['password'], $user->usr_password)) {
//            // The passwords match...
//            Auth::login($user, true);
//            return redirect()->route('home');
//
//        }else{
//            return redirect()->back()
//                ->with('fail', 'Credenciais não encontradas para email informado')
//                ->withInput();
//        };

    })->name('login_user');





    //ROTA DE LOGOUT CUSTOMIZADA
    Route::post('/account/sign-out', function (){
        Auth::logout();
        return redirect('home');
    })->name('sign-out');





    //ROTAS CRIADAS DE ULTIMA HORA -- DIRECIONAR PARA AS MIDDLEWARES CORRETAS

    Route::resource('/roles', 'RolesController');
    Route::resource('/units','UnitsController');
    Route::resource('/payments','PaymentsController');
    Route::resource('/courses','CoursesController');
    Route::resource('/reserve_types','ReserveTypesController');


    // ROTAS PERSONALIZADAS ALTERAR SENHA

    Route::get('/update_password', function (){
        return view('auth.passwords.reset_personalizado');
    });

    Route::post('/reset_password_user', function (Request $request){

        $dados = $request->all();
        $user = Users::where('usr_email', $dados['email'])
            ->first();


        if (Hash::check($dados['password_a'], $user->usr_password)) {
            // The passwords match...

            if($dados['password']==$dados['password_confirmation']){
                $user->usr_password = Hash::make($dados['password']);
                $user->save();
                return redirect('/login');
            }else{
                return redirect()->back()->with(['error' => 'SENHAS NÃO ESTÃO IGUAIS!']);
            };

        }else{
//            echo "<script type=\"text/javascript\">alert('senha errada');</script>";
            return redirect()->back()->with(['success' => 'SENHAS ATUAL ESTÁ ERRADA!']);
        };





    });


    // ROTAS PERSONALIZADAS PARA ESQUECIMENTO DE SENHA

    Route::get('/forgot_password', 'Security\ForgotPassword@forgot');
    Route::post('/forgot_password', 'Security\ForgotPassword@password');
    Route::get('/reset_password/{email}/{code}', 'Security\ForgotPassword@reset');
//    Route::post('/reset_password/{email}/{code}', 'Security\ForgotPassword@resetPasswordTest');
    Route::post('/reset_password_user_account/', 'Security\ForgotPassword@resetPasswordTest');




//    Route::get('/list_users', function (){
//
//        $select = DB::select("select * from users");
//
//        $palavra = "blablabla";
//
//        return view('form_teste', compact('palavra'));
//    });











//    Route::get('/edit_reserve/', function ($id){
//        //$reserve = Reserve::findOrFail($id);
//
//        $numero=$id;
//
//        $rsv_id=$numero;
//
//
//        return view('reserves.editar', compact($rsv_id));
//    });






    //// ROTAS DE TESTE PARA USO DE DOWNLOAD PDF


//    Route::get('/teste_view', function (){
//        return view('teste_view');
//
//    });
//
//    Route::get('/teste_view',function (){
//        return view('reports.report_salary_teacher');
//    });
//
//    Route::get('/download_report_salary_teacher',function (){
//
//
//        $date=Carbon::now()->format('d-m-Y');
//
//
//        $pdf = PDF::loadView('reports.report_salary_teacher');
//        return $pdf->download('report_salary_teacher_'.$date.'.pdf');
//    });
//
//
//    Route::get('/invoice',function (){
//
//
//        $date=Carbon::now()->format('d-m-Y');
//
//
//        $pdf = PDF::loadView('invoice');
//        return $pdf->download('invoice_'.$date.'.pdf');
//    });
//
//
//    Route::get('/invoice-view',function (){
//
//        return view('invoice');
//
//    });
//
//
//
//    Route::get('/invoice-pdf',function (){
//
//
//        $date=Carbon::now()->format('d-m-Y');
//
//
//        $pdf = PDF::loadView('invoice-pdf');
//        return $pdf->download('invoice_'.$date.'.pdf');
//    });
//
//    Route::get('/invoice-pdf-teste',function (){
//
//
//        $date=Carbon::now()->format('d-m-Y');
//
//
//        $pdf = PDF::loadView('invoice-pdf-teste');
//        return $pdf->download('invoice_'.$date.'.pdf');
//    });
//
//
//    Route::get('/invoice-pdf-view',function (){
//
//
//   return view('invoice-pdf');
//    });
//
//
//    Route::get('/invoice-pdf-view-teste',function (){
//
//
//        return view('invoice-pdf-teste');
//    });
//
//
//
//    Route::get('/invoice-teste',function (){
//
//
//        return view('invoice-teste');
//    });


});
