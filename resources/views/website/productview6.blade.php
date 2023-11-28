@extends('website.layouts.basic')

@section('page-title')
    View Product
@endsection

@section('page-content')

<div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h2 class="main-title">{{ __('msg.garlic cloves') }}</h2></div>

    <section class="auto-slider">
        <div id="slider">
            <figure>
                <img src="{{asset('/front-assets/imgs/garlicloves7.webp')}}" alt="this is a photo of garlic cloves" />

                <img src="{{asset('/front-assets/imgs/garlicloves8.webp')}}" alt="this is a photo of garlic cloves" />

                <img src="{{asset('/front-assets/imgs/garlicloves4.webp')}}" alt="this is a photo of garlic cloves" />

                <img src="{{asset('/front-assets/imgs/garlicloves5.webp')}}" alt="this is a photo of garlic cloves" />

                <img src="{{asset('/front-assets/imgs/garlicloves6.webp')}}" alt="this is a photo of garlic cloves" />
            <div class="indicator"></div>
</div>

</section>
    <div>
        <h2 style="margin-left: 100px; margin-top:50px; margin-right:100px;"> </h2 style="margin-left: 40px;">
      </div>
  </div>

@endsection
