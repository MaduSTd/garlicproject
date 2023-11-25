<!DOCTYPE html>
<html lang="en">
<?php
    $lang = app()->getlocale() =="ar" ? '-rtl' : '';
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mazarea El-Kaliubia</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="/front-assets/css{{$lang}}/all.min.css">
    <link rel="stylesheet" href="/front-assets/css{{$lang}}/normalize.css">
    <link rel="stylesheet" href="/front-assets/css{{$lang}}/styles.css">
    <link rel="stylesheet" href="{{ asset('/front-assets/css/drop.css') }}">

     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />

</head>

    <body>
     @include('website.layouts.navbar')



     @yield('home-content')
     @yield('about-content')
     @yield('contact-content')
     @yield('page-content')



        <!-- Start Footer -->
      @include('website.layouts.footer')
        <!-- End Footer -->

        <!-- Js Plugins -->

    <script src="{{ asset('/front-assets/js/main.js') }}"></script>
    </body>
</html>
