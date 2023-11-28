@extends('website.layouts.basic')

@section('page-title')
    View Product
@endsection

@section('page-content')

<div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h2 class="main-title">{{ __('msg.red onion') }}</h2></div>

    <section class="auto-slider">
        <div id="slider">
            <figure>
                <img src="{{asset('/front-assets/imgs/redonion9.webp')}}" alt="red onion" />

                <img src="{{asset('/front-assets/imgs/redonion6.webp')}}" alt="red onion" />

                <img src="{{asset('/front-assets/imgs/redonion16.webp')}}" alt="red onion" />

                <img src="{{asset('/front-assets/imgs/redonion17.webp')}}" alt="red onion" />

                <img src="{{asset('/front-assets/imgs/redonion20.webp')}}" alt="red onion" />
            <div class="indicator"></div>
</div>

</section>
    <div>
        <h2 style="margin-left: 100px; margin-top:50px; margin-right:100px;"> </h2 style="margin-left: 40px;">
      </div>
  </div>

@endsection
