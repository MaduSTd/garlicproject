@extends('website.layouts.basic')



@section('home-content')
<br><br><br>
    <!-- Start Products -->
    <div class="articles" id="articles">
        <h2 class="main-title">Our Products</h2>
        <div class="container">
          <div class="box">
            <img src="{{ asset('front-assets/imgs/Agricultural.jpg') }}" alt="" />
            <div class="content">
              <h3>Agricultural Production</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="">Read More</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/RedGarlic.jpg') }}" alt="" />
            <div class="content">
              <h3>Red Garlic</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="">View</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/RedOnion.jpg') }}" alt="" />
            <div class="content">
              <h3>Red Onion</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="">View</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/WhiteGarlic.jpg') }}" alt="" />
            <div class="content">
              <h3>White Garlic</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="">View</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/WhiteOnion.jpg') }}" alt="" />
            <div class="content">
              <h3>White Onion</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="">View</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/GarlicCloves.jpg') }}" alt="" />
            <div class="content">
              <h3>Garlic Cloves</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="">View</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('front-assets/imgs/Methods.jpg') }}" alt="" />
            <div class="content">
              <h3>Methods of Packing and Cargo</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Reprehenderit
              </p>
            </div>
            <div class="info">
              <a href="">View</a>
              <i class="fas fa-long-arrow-alt-right"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End Products -->
@endsection
