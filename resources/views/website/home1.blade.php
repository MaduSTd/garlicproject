@extends('website.layouts.basic')

@section('home-content')

<!-- Related Product Section Begin -->

<section><p>hhhhhhhhhhhhhhhhhhh





eee
eee


eee</p></section>


<section>
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <div>
              <h2>Products</h2>
            </div>
          </div>
        </div>
        <div class="row">

        @forelse($products as $product)
          <div class="col-lg-3 col-md-4 col-sm-6">

            <div>
              <div>
                <img src="{{ asset('storage/products/' . $product->images->first()->image) }}" class="object-fit" alt="" style="width:100%">
              </div>
              <div class="h2 text-success border-bottom pb-3 border-light logo">
                <h5 class="text-center">{{ $product->name }}</h5>
                <h5 class="text-center">{{$product->description}}</h5>
            </div>
            </div>
          </div>
          @empty
          <div class="col">
            <div class="product__item">
              <h5 class="text-center">Product Empty</h5>
            </div>
          </div>
        @endforelse
        </div>
      </div>
    </section>
<!-- Related Product Section End -->


<section><p>hhhhhhhhhhhhhhhhhhh

<br>



    eee
    eee

<br>
    eee</p></section>


@endsection


        <!-- Start Script -->
        <script src="{{ asset('front-assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('front-assets/js/custom.js') }}"></script>
        <script src="{{ asset('front-assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
        <script src="{{ asset('front-assets/js/jquery-1.11.0.min.js') }}"></script>
        <script src="{{ asset('front-assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('front-assets/js/templatemo.min.js') }}"></script>
        <script src="{{ asset('front-assets/js/templatemo.js') }}"></script>
        <!-- End Script -->

