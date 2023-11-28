@extends('website.layouts.basic')

@section('page-title')
    View Product
@endsection

@section('page-content')

<div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h2 class="main-title">{{ __('msg.agricultural') }}</h2></div>

    <section class="auto-slider">
        <div id="slider">
            <figure>
                <img src="{{asset('/front-assets/imgs/agricultural2.webp')}}" alt="this is a photo of agricultural production" />

                <img src="{{asset('/front-assets/imgs/agricultural3.webp')}}" alt="this is a photo of agricultural production" />

                <img src="{{asset('/front-assets/imgs/agricultural7.webp')}}" alt="this is a photo of agricultural production" />

                <img src="{{asset('/front-assets/imgs/agricultural4.webp')}}" alt="this is a photo of agricultural production" />

                <img src="{{asset('/front-assets/imgs/agricultural9.webp')}}" alt="this is a photo of agricultural production" />
            <div class="indicator"></div>
</div>

</section>
<div>
    <h2 style="margin-left: 100px; margin-top:50px; margin-right:100px;"> </h2 style="margin-left: 40px;">
  </div>


@endsection
