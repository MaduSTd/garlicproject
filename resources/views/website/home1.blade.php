@extends('website.layouts.basic')

@section('home-content')

<!-- Related Product Section Begin -->

<section style="margin-left: 30px;"><h3>Egyptian Garlic & Onion Mazarea El-Kaliubia Production</h3></section>
<br><br><br>


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


              <div class="h2 text-success border-bottom pb-3 border-light logo">
                <img style="width: 100%; height: 100%;"src="{{ asset('storage/products/' . $product->images->first()->image) }}" alt="">


                <h5 class="text-center">{{ $product->name }}</h5>
                <h5 class="text-center">{{$product->description}}</h5>
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


<section><br><br><br><br><h3>Glad to Serve You</h3></section>


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

