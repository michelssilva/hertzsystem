@extends('layouts.app')


@section('content')

    <ul>

        @foreach($payments as $payment)

            <li><a href="{{route('payments.show', $payment->pay_id)}}">{{$payment->pay_value}}</a></li>

        @endforeach

    </ul>


    @yield('footer')