@extends('backend.layouts.basic')

@section('page-title')
    Edit Product
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h1 class="display-1 my-5 text-primary">Edit Product</h1>
            </div>
        </div>
        <form action="{{ route('backend.products.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" value="{{ $product->description }}" class="form-control mt-2 mb-3">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('backend.products.list') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</div>
@endsection

