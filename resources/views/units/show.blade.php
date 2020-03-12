@extends('layouts.app')


@section('content')

    <h1><a href="{{route('units.edit', $unit->unt_id)}}">{{$unit->unt_name}}</a></h1>

@endsection