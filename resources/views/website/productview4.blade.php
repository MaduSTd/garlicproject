@extends('website.layouts.basic')

@section('page-title')
    View Product
@endsection

@section('page-content')

<div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h2 class="main-title">{{ __('msg.white garlic') }}</h2></div>

    <section class="auto-slider">
        <div id="slider">
            <figure>
                <img src="{{asset('/front-assets/imgs/whitegarlic2.webp')}}" alt="this is a photo of white garlic" />

                <img src="{{asset('/front-assets/imgs/whitegarlic3.webp')}}" alt="this is a photo of white garlic" />

                <img src="{{asset('/front-assets/imgs/whitegarlic4.webp')}}" alt="this is a photo of white garlic" />

                <img src="{{asset('/front-assets/imgs/whitegarlic5.webp')}}" alt="this is a photo of white garlic" />

                <img src="{{asset('/front-assets/imgs/whitegarlic6.webp')}}" alt="this is a photo of white garlic" />
            <div class="indicator"></div>
</div>

</section>
    <div>
        <h2 style="margin-left: 100px; margin-top:50px; margin-right:100px;"> </h2 style="margin-left: 40px;">
      </div>
  </div>

@endsection
