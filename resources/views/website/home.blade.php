@extends('website.layouts.basic')



@section('home-content')
<h1 class="centerMobileOnly" id="h2homepage">{{ __('msg.hometop') }}</h1>
    <div class="container" id="containerhometopbox" >
        <div id="imagehometopbox" class="box">
            <img id="photohometop" src="{{ asset('/front-assets/imgs/Log.webp') }}" alt="  agricultural production" />
        </div>
    </div>
 <!-- Start Products -->
    <div class="products" id="products">
        <h2 class="main-title">{{ __('msg.our products') }}</h2>
        <div class="container">
          <div class="box">
            <img src="{{ asset('/front-assets/imgs/Agricultural.webp') }}" alt="  agricultural production" />
            <div class="content">
              <h3>{{ __('msg.agricultural production') }}</h3>
              <p>


              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview1')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('/front-assets/imgs/RedGarlic.webp') }}" alt="  red garlic" />
            <div class="content">
              <h3>{{ __('msg.red garlic') }}</h3>
              <p>


              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview2')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('/front-assets/imgs/RedOnion.webp') }}" alt="  red onion" />
            <div class="content">
              <h3>{{ __('msg.red onion') }}</h3>
              <p>


              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview3')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('/front-assets/imgs/WhiteGarlic.webp') }}" alt="  white garlic" />
            <div class="content">
              <h3>{{ __('msg.white garlic') }}</h3>
              <p>


              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview4')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('/front-assets/imgs/WhiteOnion.webp') }}" alt="  white onion" />
            <div class="content">
              <h3>{{ __('msg.white onion') }}</h3>
              <p>


              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview5')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('/front-assets/imgs/GarlicCloves.webp') }}" alt="  garlic cloves" />
            <div class="content">
              <h3>{{ __('msg.garlic cloves') }}</h3>
              <p>


              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview6')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('/front-assets/imgs/Methods.webp') }}" alt="  methods" />
            <div class="content">
              <h3>{{ __('msg.methods') }}</h3>
              <p>


              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview7')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End Products -->
@endsection
