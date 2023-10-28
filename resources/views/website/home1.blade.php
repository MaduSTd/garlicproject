@extends('website.layouts.basic')



@section('home-content')

<div class="articles" id="articles">
    <h2 class="main-title">Our Products</h2>
    <div class="container">
        @foreach ($products as $product)
        <div class="box">
            <a style=" color:white;text-decoration:none;background-color:none;" href="{{ route('website.productView', $product->id) }}"><img src="{{ asset('storage/products/' . $product->images->first()->image) }}" class="object-fit" alt="" style="width:100%" ></a>
            <div class="content">
              <h3>{{__ ('msg.name') }}</h3>
              <p>{{$product -> description}}</p>
            </div>
            <div class="info">
              <a href="">View</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
         </div>
         @endforeach
    </div>
</div>
    <div class="spikes"></div>
@endsection
