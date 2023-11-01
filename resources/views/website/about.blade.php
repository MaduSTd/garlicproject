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
            <h6>(Fresh red Onion - Fresh Golden Yellow Onion - Dry Onion Slides - Dry Onion Powder - White Fresh Green garlic - Red Fresh Green Garlic - Dry Red Garlic - Dry White Garlic - Fresh Green Garlic Peels - Dry Garlic Peels - Dry Garlic Powder)</h6>
        </div>
    </div>
   </div>
</section>
@endsection
