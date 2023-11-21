@extends('website.layouts.basic')

@section('contact-content')


<div class="contact" id="contact">
    <div class="image">
        <div class="content">
          <h2>{{ __('msg.contact us') }}</h2>
          <p>

          </p>

        </div>
      </div>
    <div class="form">
      <div class="content">
        <h2>{{ __('msg.contact us') }}</h2>
        @if (Session::has('msg'))
        <p class="aler alert-success">{{Session::get('msg')}}</p>
        @endif
        <form id ="contact-form" name="contact-form" class="defaultform2" action="/post-message" method="post">
            @csrf
            <input
            class="input"
            type="text"
            name="name"
            id="formEmail"
            placeholder="{{ __('msg.your name') }}"
            />

            <input
            class="input"
            type="phone"
            placeholder="{{ __('msg.your phone') }}"
            name="phone"
          />
          <input
            class="input"
            type="email"
            placeholder="{{ __('msg.your e-mail') }}"
            name="email"
            id="email"
          />
          <input
            class="input"
            type="country"
            placeholder="{{ __('msg.your country') }}"
            name="country"
          />
          <textarea
            class="input"
            placeholder="{{ __('msg.needs') }}"
            name="message"
          ></textarea>
          <input type="submit" value="Send" />
        </form>
      </div>
    </div>
  </div>

@endsection
