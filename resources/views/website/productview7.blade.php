@extends('website.layouts.basic')

@section('page-title')
    View Product
@endsection

@section('page-content')

<div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h2 class="main-title">{{ __('msg.methods') }}</h2></div>

    <section class="auto-slider">
        <div id="slider">
            <figure>
                <img src="{{asset('/front-assets/imgs/method2.webp')}}" alt="methods of packing and cargo" />

                <img src="{{asset('/front-assets/imgs/method3.webp')}}" alt="methods of packing and cargo" />

                <img src="{{asset('/front-assets/imgs/method4.webp')}}" alt="methods of packing and cargo" />

                <img src="{{asset('/front-assets/imgs/method11.webp')}}" alt="methods of packing and cargo" />

                <img src="{{asset('/front-assets/imgs/method13.webp')}}" alt="methods of packing and cargo" />
            <div class="indicator"></div>
</div>

</section>
    <div>
        <h2 style="margin-left: 100px; margin-top:50px; margin-right:100px;"> </h2 style="margin-left: 40px;">
      </div>
  </div>

@endsection
