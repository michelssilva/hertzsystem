@extends('layouts.app')


@section('content')

    <h1>Edit Post</h1>

    {{--<form method="POST" action="/posts/{{$post->id}}">--}}

    {!! Form::model($post,['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}

        {{ csrf_field() }}



    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}

    {!! Form::submit('Update Post',['class'=>"btn btn-info"]) !!}

    {!! Form::close()!!}



        {{--<input type="hidden" name="_method" value="PUT">

        <input type="text" name="title" placeholder="Insira o Título" value={{$post->title}}>

        <input type="submit" name="submit" value="UPDATE">


    </form>--}}

    {!! Form::model($post,['method'=>'DELETE', 'action'=>['PostsController@destroy',$post->id]]) !!}

    {!! Form::submit('Delete Post',['class'=>"btn btn-danger"]) !!}

    {!! Form::close()!!}



   {{-- <form method="post" action="/posts/{{$post->id}}">

        {{ csrf_field() }}

        <input type="hidden" name="_method" value="DELETE">

        <input type="submit" value="DELETE">

    </form>--}}




@endsection