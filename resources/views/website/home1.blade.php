@extends('website.layouts.basic')

    <!-- Start Featured Product -->
    @section('product-content')
    <section class="bg-light">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                </div>
            </div>
    @foreach($products as $product)
            <div class="row">
                <div class="col-12 col-md-3 mb-4">
                    <div class="card h-100">
                            <img src="{{ asset('storage/products/' . $product->images->first()->image) }}" alt="">
                        <div class="card-body">
                            <p class="card-text">
                                {{ $product->name }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    </section>
@endsection
    <!-- End Featured Product -->


        <!-- Start Script -->
        <script src="{{ asset('front-assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('front-assets/js/custom.js') }}"></script>
        <script src="{{ asset('front-assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
        <script src="{{ asset('front-assets/js/jquery-1.11.0.min.js') }}"></script>
        <script src="{{ asset('front-assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('front-assets/js/templatemo.min.js') }}"></script>
        <script src="{{ asset('front-assets/js/templatemo.js') }}"></script>
        <!-- End Script -->
    </body>
</html>
