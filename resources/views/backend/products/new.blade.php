@extends('backend.layouts.basic')

@section('page-title')
    New Product
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <h1 class="display-1 my-5 text-primary">New Product</h1>
        <form action="{{ route('backend.products.new') }}" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control mt-2 mb-3">
            </div>

                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Add Product</button>
            <a href="/admin/products/list" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</div>
@endsection
