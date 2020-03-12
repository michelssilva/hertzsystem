@extends('layouts.app')


@section('content')

    <div class="container">
        <h1><a href="{{route('students.edit', $user->usr_id)}}">{{$user->usr_name}}</a></h1>

    </div>

@endsection