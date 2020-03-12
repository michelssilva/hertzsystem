@extends('layouts.app')


@section('content')

    <ul>

        @foreach($teachers as $teacher)

            <li><a href="{{route('teachers.show', $teacher->id)}}">{{$teacher->tcr_name}}</a></li>

        @endforeach


            <br><a href="/teachers/create"><button> Cadastrar Professor</button></a>

    </ul>


@yield('footer')