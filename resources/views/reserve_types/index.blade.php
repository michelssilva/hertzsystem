@extends('layouts.app')


@section('content')

    <ul>

        @foreach($reserve_types as $reserve_type)

            <li><a href="{{route('reserve_types.show', $reserve_type->rst_id)}}">{{$reserve_type->rst_name}}</a></li>

        @endforeach

    </ul>


    @yield('footer')