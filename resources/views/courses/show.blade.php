@extends('layouts.app')


@section('content')

    <h1><a href="{{route('courses.edit', $course->crs_id)}}">{{$course->crs_name}}</a></h1>

@endsection