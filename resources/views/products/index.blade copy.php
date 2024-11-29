@extends('layouts.master')
@section('content')
{{-- <div class="container" style="margin-top: 40%;">
    <h2>All Products</h2>
    <div class="d-flex justify-content-end">
        <a href="{{ route('products.create') }}" class="btn btn-dark" style="margin-top: -36px; ">New Product</a>
    </div>


</div> --}}

<div class="main-content app-content" style="margin-top:700px;">

    <!-- container -->
    <div class="main-container container-fluid">


        <!-- breadcrumb -->
        <div class="col-xl-12">
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">Blog</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /breadcrumb -->

        <div class="col-xl-12">
            {{-- @include('backend::layouts.flash-message') --}}
            <div class="d-flex justify-content-between pb-3">
                {{-- <h4 class="card-title mg-b-0">Event type</h4> --}}

                <a class="btn btn-md btn-primary active" href="">Create</a>
            </div>

            <div class="table-responsive">
                <div class="row">
                    {{-- @include('backend::blog.blog._search') --}}
                    {{-- @include('backend::configuration.type._search') --}}
                </div>
                <table class="table table-bordered table-striped table-hover mg-b-0 text-md-nowrap" id="type">
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
                                <img src="/products/{{ $product->image }}" class="rounded-circle" width="30" height="30"
                                    alt="">
                            </td>
                            <td>
                                <a href="/products/{{ $product->id }}/edit " style="color:white !important"
                                    class="btn btn-dark sm">Edit</a>
                                <a href="/products/{{ $product->id }}/delete " style="color:white !important"
                                    class="btn btn-danger sm">Delete</a>
                                <a href="/products/{{ $product->id }}/show " style="color:white !important"
                                    class="btn btn-danger sm">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="font-size: 15px;">
                {{-- {{ $blogs->links() }} --}}
            </div>
        </div>
    </div>
</div>
@endsection