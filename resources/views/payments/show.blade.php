@extends('layouts.app')


@section('content')

    <h1><a href="{{route('payments.edit', $payment->pay_id)}}">{{$payment->pay_value}}</a></h1>

@endsection