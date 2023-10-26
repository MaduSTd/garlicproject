<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mazarea El-Kaliubia</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('front-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/elegant-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/style.css') }}">
</head>

    <body>
     @include('website.layouts.navbar')



     @yield('home-content')
     @yield('about-content')
     @yield('contact-content')



        <!-- Start Footer -->
      @include('website.layouts.footer')
        <!-- End Footer -->

        <!-- Js Plugins -->

    <script src="{{ asset('front-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('front-assets/js/main.js') }}"></script>
    <script src="{{ asset('front-assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/owl.carousel.min.js') }}"></script>



    </body>
</html>
