@extends('website.layouts.basic')

@section('page-title')
    View Product
@endsection

@section('page-content')

<div><br><br><br><br><br><br><br><br><br><br><br><br><br><h2 class="main-title">{{ __('msg.white garlic') }}</h2></div>

    <section class="auto-slider">
        <div id="slider">
            <figure>
                <img src="{{asset('front-assets/imgs/whitegarlic2.jpg')}}" alt="" />

                <img src="{{asset('front-assets/imgs/whitegarlic3.jpg')}}" alt="" />

                <img src="{{asset('front-assets/imgs/whitegarlic4.jpg')}}" alt="" />

                <img src="{{asset('front-assets/imgs/whitegarlic5.jpg')}}" alt="" />

                <img src="{{asset('front-assets/imgs/whitegarlic6.jpg')}}" alt="" />
            <div class="indicator"></div>
</div>

</section>
    <div>
        <h2 style="margin-left: 100px; margin-top:50px; margin-right:100px;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</h2 style="margin-left: 40px;">
      </div>
  </div>

@endsection
