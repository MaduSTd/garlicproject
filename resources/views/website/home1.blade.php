@extends('website.layouts.basic')



@section('home-content')

<div class="articles" id="articles">
    <h2 class="main-title">Our Products</h2>
    <div class="container">
        @foreach ($products as $product)
        <div class="box">
            <img src="imgs/cat-01.jpg" alt="" />
            <div class="content">
              <h3>{{$product -> name}}/h3>
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
