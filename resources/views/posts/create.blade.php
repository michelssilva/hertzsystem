@extends('layouts.app')


@section('content')

    <h1>Create Post</h1>

    {{--<form method="POST" action="/posts">--}}

    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store','files'=>true]) !!}

    <div class="form-group">

        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}

    </div>



    <div class="form-group">
        <br>{!! Form::file('file',['class'=>'form-control']) !!}<br>
    </div>


        {{ csrf_field() }}

       {{-- <input type="text" name="title" placeholder="Insira o Título">--}}
    <div class="form-group">

        <br>{!! Form::submit('Create Post',['class'=>'bnt bnt-primary']) !!}

       {{-- <input type="submit" name="submit">--}}
    </div>

    {!! Form::close()!!}

    @if(count($errors)>0)

        <div class="alert-danger">

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                    @endforeach


            </ul>

        </div>

        @endif



        
    {{--</form>--}}




@endsection