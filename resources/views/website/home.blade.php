@extends('website.layouts.basic')



@section('home-content')
<h3 id="h3homepage" class="text-center">{{ __('msg.hometop') }}</h3>

    <!-- Start Products -->
    <div class="articles" id="articles">
        <h2 class="main-title">{{ __('msg.our products') }}</h2>
        <div class="container">
          <div class="box">
            <img src="{{ asset('front-assets/imgs/Agricultural.jpg') }}" alt="" />
            <div class="content">
              <h3>{{ __('msg.agricultural production') }}</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview1')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/RedGarlic.jpg') }}" alt="" />
            <div class="content">
              <h3>{{ __('msg.red garlic') }}</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview2')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/RedOnion.jpg') }}" alt="" />
            <div class="content">
              <h3>{{ __('msg.red onion') }}</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview3')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/WhiteGarlic.jpg') }}" alt="" />
            <div class="content">
              <h3>{{ __('msg.white garlic') }}</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview4')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/WhiteOnion.jpg') }}" alt="" />
            <div class="content">
              <h3>{{ __('msg.white onion') }}</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview5')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/GarlicCloves.jpg') }}" alt="" />
            <div class="content">
              <h3>{{ __('msg.garlic cloves') }}</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="{{route('website.productview6')}}">{{ __('msg.view') }}</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/Methods.jpg') }}" alt="" />
            <div class="content">
              <h3>{{ __('msg.methods') }}</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
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
