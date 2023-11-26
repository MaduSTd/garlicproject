@extends('website.layouts.basic')

@section('page-title')
    View Product
@endsection

@section('page-content')

<div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h2 class="main-title">{{ __('msg.white onion') }}</h2></div>

    <section class="auto-slider">
        <div id="slider">
            <figure>
                <img src="{{asset('/front-assets/imgs/whiteonion5.jpg')}}" alt="this is a photo of whit onion" />

                <img src="{{asset('/front-assets/imgs/whiteonion6.jpg')}}" alt="this is a photo of whit onion" />

                <img src="{{asset('/front-assets/imgs/whiteonion7.jpg')}}" alt="this is a photo of whit onion" />

                <img src="{{asset('/front-assets/imgs/whiteonion8.jpg')}}" alt="this is a photo of whit onion" />

                <img src="{{asset('/front-assets/imgs/WhiteOnion.jpg')}}" alt="this is a photo of whit onion" />
            <div class="indicator"></div>
</div>

</section>
    <div>
        <h2 style="margin-left: 100px; margin-top:50px; margin-right:100px;"> </h2 style="margin-left: 40px;">
      </div>
  </div>

@endsection
