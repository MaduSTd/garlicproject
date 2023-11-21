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
    <link rel="stylesheet" href="{{ asset('front-assets/css/drop.css') }}">
</head>

<div class="form">
  <div class="content">
    <form id ="contact-form" name="contact-form" class="defaultform2" action="/post-message" method="post">
        @csrf


        Name:
        "{{ ($data['name']) }}"
        <br>
        <br>
       Phone:
        "{{ ($data['phone']) }}"
        <br>
        <br>
       Email:
        "{{ ($data['email']) }}"
        <br>
        <br>
       Country:
        "{{ ($data['country']) }}"
        <br>
        <br>
       Message:
        "{{ ($data['message']) }}"

    </form>
  </div>
</div>
</html>
