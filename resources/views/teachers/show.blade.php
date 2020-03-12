@extends('layouts.app')


@section('content')

    <h1><a href="{{route('teachers.edit', $teacher->id)}}">{{$teacher->tcr_name}}</a></h1>


@endsection