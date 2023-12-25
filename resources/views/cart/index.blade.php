@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Cart</h2>
    <div class="row">
        <div class="col-8 align-self-start">
            @isset($user->orders)
                @foreach ($user->orders as $order)
                    <p>This is order {{ $order->name }}</p>
                @endforeach
            @else
                <p>No Orders...</p>
            @endisset
        </div>
        <div class="col-4 align-self-end">
            One of three columns
        </div>
    </div>
</div>
@endsection


