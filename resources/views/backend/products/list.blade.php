@extends('backend.layouts.basic')


@section('page-title')
    Products List
@endsection

@section('page-content')
    <div class="row">
        <h1>Products List</h1>
        <table class="table">
            <tr>
                <td class="w-25">ID</td>
                <td class="w-25">Name</td>
                <td class="w-25">Description</td>
                <td>Actions</td>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('backend.products.view', $product->id) }}">View</a>
                    <a class="btn btn-primary" href="{{ route('backend.products.edit', $product->id) }}">Edit</a>
                    <form style="display: inline-block" action="{{ route('backend.products.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
