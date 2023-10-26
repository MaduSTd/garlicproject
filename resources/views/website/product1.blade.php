@extends('website.layouts.basic')


@section('home-content')
<section>
    <div style="margin-left: 120px";>
        <h1>View Product</h1>
    </div>
    <div>
        <div class="row featured__filter">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
              <div class="featured__item">
                <div>
                    <img src="{{ asset('storage/products/' . $product->images->first()->image) }}" class="object-fit" alt="" style="width:100%">


                </div>
                <div class="featured__item__text">
                  <h6><a href="#">{{$product->name}}</a></h6>
                  <h5>{{$product->description}}</h5>
                </div>
              </div>
            </div>
        @endforeach
    </div>


</section>
@endsection
