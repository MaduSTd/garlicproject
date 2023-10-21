@extends('backend.layouts.basic')

@section('page-title')
    Add New Product
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <h1 class="display-1 my-5 text-primary">New Product</h1>
        <form action="{{ route('backend.products.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Profile Picture</label>
                <input type="file" name="image" id="image" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="descreption">Description</label>
                <input type="text" name="description" id="description" class="form-control mt-2 mb-3">
            </div>

            <button type="submit" class="btn btn-success">Add Product</button>
            <a href="/admin/products" class="btn btn-secondary">Back to Products List</a>
        </form>
    </div>
</div>
@endsection
