@extends('website.layouts.basic')

@section('about-content')
<section>
   <div class="container">
    <div class="row">
        <div>
            <h1 class="h2 text-success border-bottom pb-3 border-light logo">{{ __('msg.about us') }}</h1>
        </div>
        <div>
            <h1>
                {{ __('msg.aboutp1') }}
            </h1>
            <h1>
                {{ __('msg.aboutp2') }}
            </h1>
            <h1>
                {{ __('msg.aboutp3') }}
            </h1>
            <h6> {{ __('msg.aboutp4') }}</h6>
        </div>
    </div>
   </div>
</section>
@endsection
