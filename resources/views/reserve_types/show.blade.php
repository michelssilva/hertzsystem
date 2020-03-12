@extends('layouts.app')


@section('content')

    <h1><a href="{{route('reserve_types.edit', $reserve_type->rst_id)}}">{{$reserve_type->rst_name}}</a></h1>

@endsection