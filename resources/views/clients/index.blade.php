@extends('layouts.app')

@section('content')

<div class="container">
    @foreach ($clients as $client)
    {{ $client->nome }} - {{ $client->orders()->count() }}<br>

     @foreach ($client->orders as $order)
        #{{ $order->id }} - {{ $order->status }} <br>
     @endforeach

    <hr>
    @endforeach
</div>

@endsection
