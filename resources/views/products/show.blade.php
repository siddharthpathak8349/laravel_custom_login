@extends('layouts.master')
@section('content')
    <div class="container" style="margin-top: 20%;">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-4">
                <div class="card p-4">
                    <p>Name : {{ $product->name }}</p>
                    <p>Description : {{ $product->description }}</p>
                    <img src="/products/{{ $product->image }}" class="rounded " width="50%">
                </div>
            </div>
        </div>

    </div>
@endsection
