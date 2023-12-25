@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Cart</h2>
    <div class="row">
        <div class="col-8 align-self-start">
            @isset($user->products)
                @foreach ($user->products as $product)
                    <div class="card m-4 overflow-hidden" style="height: 18rem;">
                        <div class="card-body row">
                            <div class="col-3 justify-content-start">
                                <img src="../{{ $product->image }}" class="card-img-top" style="height: 240px; background-color: rgba(0,0,255,.1)" alt="...">
                            </div>
                            <div class="col-3 justify-content-end align-self-center">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">
                                    {{ $product->price }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar d-inline" viewBox="0 0 16 16">
                                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                                    </svg>
                                </p>
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                            <div class="col-6 justify-content-center align-self-center">
                                <p class="card-text">Description</p>
                                <p class="card-text">{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Orders...</p>
            @endisset
        </div>
        <div class="col-4 align-self-start">
            <div class="card m-4 overflow-hidden" style="height: 14rem;">
                <div class="card-header"><h5>Price Details</h5></div>
                <div class="card-body row">
                    <div class="col justify-content-center align-self-start text-center">
                        <p>price({{ $count }} items)</p>
                        <p>Delivery charge</p>
                        <p>Amount payable</p>

                    </div>
                    <div class="col justify-content-center align-self-start text-center">
                        <p>
                            {{ $totalPrice }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar d-inline" viewBox="0 0 16 16">
                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                            </svg>
                        </p>
                        <p class="text-success">FREE</p>
                        <p>
                            {{ $totalPrice }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar d-inline" viewBox="0 0 16 16">
                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                            </svg>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection