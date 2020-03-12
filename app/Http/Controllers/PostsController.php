<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Post;

class PostsController extends Controller
{
    /*  *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // return "ok";

        $posts = Post::all();

        return view ('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //return "I am the method that creates stuff :)";
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {


        $input = $request->all();

        if($file = $request->file('file')){

            $name = $file->getClientOriginalName();

            $file->move('images',$name);

            $input['path']=$name;
        }

        Post::create($input);
        
        return redirect('/home');






        //TESTE UPLOAD FILES 1

//        $file = $request->file('file');
//
//        echo "<br>";
//
//        echo $file->getClientOriginalName();
//
//        echo "<br>";
//
//        echo $file->getClientSize();





        //return $request->all();
//
//        $this->validate($request,[
//
//            'title'=>'required',
//        ]);

//        Post::create($request->all());    // MODO 1
//
//        return redirect('/posts');
//
 //       $input = $request->all();     // MODO 2
//        $input['title'] = $request->title; // MODO 3

//        $post = new Post;          // MODO 4 ESSAS ULTIMAS LINHAS
//        $post->title = $request->title;
//        $post->save();

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
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
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
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('/posts');
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
        $post = Post::whereId($id)->delete();

                return redirect('/posts');


    }

    public function contact(){

//
        return view('contact', compact('people'));

    }


//    public function show_post($id ,$title, $content){
//
////        return view('post')->with('id',$id);
//        return view('post', compact( 'id','title','content'));
//
//    }

// FUNCTIONS SQL QUERIES

    public function test_post($title, $content){


//        DB::insert('insert into posts(title, content) values(?,? )',['Família','Todos integrantes']);
        DB::insert('insert into posts(title, content) values(?,? )',[$title , $content ]);
        return view('post');
}

    public function test_read(){

//        return view('post')->with('id',$id);
//        DB::insert('insert into posts(title, content) values(?,? )',['Família','Todos integrantes']);
//        DB::insert('insert into posts(title, content) values(?,? )',[compact('title'), compact('content')]);
        $results=DB::select('select * from posts where id=?', [4]);

       // return $results;

        foreach ($results as $post){
           return $post->title. ' '. $post->content ;
        }

     }



/*---------------------------------------------
|Aplication Routes
-----------------------------------------------*/





// ROTAS TG
    public function reserva_centro(){
        return view('reserva_centro');
    }

    public function reserva_morumbi(){
        return view('reserva_morumbi');
    }

    public function reserva_pub(){
        return view('reserva_pub');
    }

//    public function create()
//    {
//        return view('cadastrar_professores');
//    }



    public function cadastrar_professor(){
        return view('cadastrar_professores');
    }


    public function conteudoAula(){
        return view('conteudoAula');
    }

    public function teste_abas(){
        return view('teste_abas');
    }

    public function teste_abas2(){
        return view('teste_abas2');
    }



}
