@extends('website.layouts.basic')

@section('home-content')


<section style="margin-left: 50px;"><h3>Egyptian Garlic & Onion Mazarea El-Kaliubia Production</h3></section>
<br>


    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title">
                <h2>Products</h2>
              </div>
              <div class="featured__controls">
                <ul>
                  <li class="active" data-filter="*">All</li>
                  <li data-filter=".oranges">Garlic</li>
                  <li data-filter=".fresh-meat">Onion</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row featured__filter">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
              <div class="featured__item">
                <div>
                    <a style=" color:white;text-decoration:none;background-color:none;" href="{{ route('website.productView', $product->id) }}"><img src="{{ asset('storage/products/' . $product->images->first()->image) }}" class="object-fit" alt="" style="width:100%" ></a>


                </div>

                <div class="featured__item__text">
                  <h6><a href="#">{{$product->name}}</a></h6>
                  <h5>{{$product->description}}</h5>
                </div>
              </div>
            </div>
        @endforeach
        </div>
           </div>

        </section>
        @endsection
