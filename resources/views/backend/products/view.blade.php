@extends('backend.layouts.basic')

@section('page-title')
    View Product
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <h1 class="display-1 my-5 text-primary">View Product</h1>
        <div class="row">
            <div class="col-6">
                <ul class="h2 mb-5">
                    <li class="mb-3">Name: {{ $product->name }}</li>
                    <li class="mb-3">Description: {{ $product->num_of_seats }}</li>
                </ul>
                <a href="{{ route('backend.products.list') }}" class="btn btn-secondary">Back to Products List</a>
            </div>
        </div>
    </div>
</div>
@endsection
