@extends('website.layouts.basic')

@section('page-title')
    View Product
@endsection

@section('page-content')
<div class="gallery" id="gallery">
    <h2 class="main-title">View Product</h2>
    <div class="container">
      <div class="box">
        <div class="image">
          <img src="{{'front-assets/imgs/gallery-01.png'}}" alt="" />
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{'front-assets/imgs/gallery-02.png'}}" alt="" />
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{'front-assets/imgs/gallery-03.jpg'}}" alt="" />
        </div>
      </div>
    </div>
    <div>
        <h2 style="margin-left: 100px; margin-top:50px; margin-right:100px;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</h2 style="margin-left: 40px;">
      </div>
  </div>

@endsection
