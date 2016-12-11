@extends('master')

@section('main_content')
    <h1>Welcome to my second page! :)</h1>
    <h2>Orders</h2>

    @foreach ($orders as $order)
           <p> {{$order->name . " ordered by " . $order->customer->name}}</p>
    @endforeach

@stop