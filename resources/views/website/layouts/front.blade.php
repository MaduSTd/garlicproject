<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Garlic</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="apple-touch-icon" href="assets/img/apple-icon.png" />
        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="assets/img/favicon.ico"
        />
        <link rel="stylesheet" href="{{ asset('front-assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/css/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/css/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/css/slick-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/css/templatemo.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/css/templatemo.min.css') }}">

        <!-- Load fonts style after rendering the layout styles -->
        <link  href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet"/>


    </head>

    <body>
     @include('website.layouts.navbar')

      @yield('home-content')

      @yield('product-content')

      @yield('about-content')

      @yield('contact-content')


        <!-- Start Footer -->
      @include('website.layouts.footer')
        <!-- End Footer -->

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
