<?php
    $lang = app()->getlocale() =="ar" ? '-rtl' : '';
?>

<?php
    $htmlang = '';
    $locale = app()->getLocale();

    if ($locale == 'en') {
        $htmlang = 'en';
    } elseif ($locale == 'ar') {
        $htmlang = 'ar';
    } elseif ($locale == 'it') {
        $htmlang = 'it';
    } elseif ($locale == 'de') {
        $htmlang = 'de';
    } elseif ($locale == 'fr') {
        $htmlang = 'fr';
    } elseif ($locale == 'pt') {
        $htmlang = 'pt';
    } elseif ($locale == 'ru') {
        $htmlang = 'ru';
    }
?>
<!DOCTYPE html>
<html lang="{{$htmlang}}">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mazarea El-Kaliubia-Egyptian Garlic and Onion</title>
    <meta name="description" content="Egyptian Garlic,Egyptian Onion,Exporting Egyptian Garlic,Exporting Egyptian Onion,Fresh Green and Dry Egyptian Red and White Garlic">
    <link rel="canonical" href="http://www.egyptiangarlic-onion.shop/">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/front-assets/css{{$lang}}/all.min.css">
    <link rel="stylesheet" href="/front-assets/css{{$lang}}/normalize.css">
    <link rel="stylesheet" href="/front-assets/css{{$lang}}/styles.css">
    <link rel="icon" type="image/png" href="{{ asset('front-assets/imgs/logoo.webp') }}">

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


    </body>
</html>
