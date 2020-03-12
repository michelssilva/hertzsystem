@extends('layouts.app')


@section('content')

    <div class="container">
        <h1><a href="{{route('users.edit', $user->usr_id)}}">{{$user->usr_name}}</a></h1>

    </div>




@endsection