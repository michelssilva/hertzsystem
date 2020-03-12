@extends('layouts.app')


@section('content')

    <ul>

        @foreach($roles as $role)

            <li><a href="{{route('roles.show', $role->rle_id)}}">{{$role->rle_name}}</a></li>

        @endforeach

    </ul>





    @yield('footer')