@extends('layouts.master')
@section('content')
    <div class="container" style="margin-top: 40%;">
        <h2>All Products</h2>
        <div class="d-flex justify-content-end">
            <a href="{{ route('products.create') }}" class="btn btn-dark" style="margin-top: -36px; ">New Product</a>
        </div>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <img src="/products/{{ $product->image }}" class="rounded-circle" width="30" height="30" alt="">
                        </td>
                        <td>
                            <a href="/products/{{ $product->id }}/edit " style="color:white !important" class="btn btn-dark sm">Edit</a>
                            <a href="/products/{{ $product->id }}/delete " style="color:white !important" class="btn btn-danger sm">Delete</a>
                            <a href="/products/{{ $product->id }}/show " style="color:white !important" class="btn btn-danger sm">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
