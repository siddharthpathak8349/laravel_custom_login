@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center " style="margin-top: 40%;">

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif


            <h2>Edit Product</h2>
            <div class="col-sm-8">
                <div class="card mt-4 p-3">
                    <form method="POST" action="/products/{{ $product->id }}/update" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name', $product->name) }}"
                                class="form-control">
                            @if ($errors->has('name'))
                                <span class="text-danger"> {{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" rows="4" class="form-control">{{ old('description', $product->description) }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger"> {{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                            @if ($errors->has('image'))
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-dark">SUBMIT</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection>
