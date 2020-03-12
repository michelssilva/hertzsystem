@extends('layouts.app')


@section('content')

    <h1><a href="{{route('roles.edit', $role->rle_id)}}">{{$role->rle_name}}</a></h1>




@endsection