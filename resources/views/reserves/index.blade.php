@extends('layouts.app')


@section('content')

    <ul>

        @foreach($units as $unit)

            <li><a href="{{route('units.show', $unit->unt_id)}}">{{$unit->unt_name}}</a></li>

        @endforeach

    </ul>


    @yield('footer')