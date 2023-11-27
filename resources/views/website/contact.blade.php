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
        @if(Session::has('message_sent'))
        <div class="alert alert-success">
            {{ Session::get('message_sent') }}
        </div>
        @endif
        <br><br>
        <form action="{{ route('contact-us') }}" method="POST" enctype="multipart/form-data">
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
          <input type="submit" value="{{ __('msg.send') }}" />
        </form>
      </div>
    </div>
  </div>

@endsection
