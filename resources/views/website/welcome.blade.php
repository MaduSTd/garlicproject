@extends('website.layouts.basic')

@section('home-content')
<div
class="modal fade bg-white"
id="templatemo_search"
tabindex="-1"
role="dialog"
aria-labelledby="exampleModalLabel"
aria-hidden="true"
>
<div class="modal-dialog modal-lg" role="document">
    <div class="w-100 pt-1 mb-5 text-right">
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
        ></button>
    </div>
    <form
        action=""
        method="get"
        class="modal-content modal-body border-0 p-0"
    >
        <div class="input-group mb-2">
            <input
                type="text"
                class="form-control"
                id="inputModalSearch"
                name="q"
                placeholder="Search ..."
            />
            <button
                type="submit"
                class="input-group-text bg-success text-light"
            >
                <i class="fa fa-fw fa-search text-white"></i>
            </button>
        </div>
    </form>
</div>
</div>

<!-- Start Banner Hero -->

<!-- End Banner Hero -->


<!-- Start Our Products -->
<section class="bg-light">
<div class="container py-5">
    <div class="row text-center py-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Our Products</h1>
            <p>
                Reprehenderit in voluptate velit esse cillum dolore
                eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-8 col-md-4 mb-4">
            <div class="card h-100">
                <a href="shop-single.html">
                    <img
                        src="./assets/img/feature_prod_01.jpg"
                        class="card-img-top"
                        alt="..."
                    />
                </a>
                <div class="card-body">

                    <a
                        href="shop-single.html"
                        class="h2 text-decoration-none text-dark"
                        >Garlic</a
                    >
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Sunt in culpa qui officia
                        deserunt.
                    </p>

                </div>
            </div>
        </div>
        <div class="col-8 col-md-4 mb-4">
            <div class="card h-100">
                <a href="shop-single.html">
                    <img
                        src="./assets/img/feature_prod_02.jpg"
                        class="card-img-top"
                        alt="..."
                    />
                </a>
                <div class="card-body">

                    <a
                        href="shop-single.html"
                        class="h2 text-decoration-none text-dark"
                        >Red Onions</a
                    >
                    <p class="card-text">
                        Aenean gravida dignissim finibus. Nullam
                        ipsum diam, posuere vitae pharetra sed,
                        commodo ullamcorper.
                    </p>

                </div>
            </div>
        </div>
        <div class="col-8 col-md-4 mb-4">
            <div class="card h-100">
                <a href="shop-single.html">
                    <img
                        src="./assets/img/feature_prod_03.jpg"
                        class="card-img-top"
                        alt="..."
                    />
                </a>
                <div class="card-body">

                    <a
                        href="shop-single.html"
                        class="h2 text-decoration-none text-dark"
                        >Summer Addides Shoes</a
                    >
                    <p class="card-text">
                        Curabitur ac mi sit amet diam luctus porta.
                        Phasellus pulvinar sagittis diam, et
                        scelerisque ipsum lobortis nec.
                    </p>

                </div>
            </div>
        </div>
        <div class="col-8 col-md-4 mb-4">
            <div class="card h-100">
                <a href="shop-single.html">
                    <img
                        src="./assets/img/feature_prod_03.jpg"
                        class="card-img-top"
                        alt="..."
                    />
                </a>
                <div class="card-body">

                    <a
                        href="shop-single.html"
                        class="h2 text-decoration-none text-dark"
                        >Summer Addides Shoes</a
                    >
                    <p class="card-text">
                        Curabitur ac mi sit amet diam luctus porta.
                        Phasellus pulvinar sagittis diam, et
                        scelerisque ipsum lobortis nec.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
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
    </body>
</html>
