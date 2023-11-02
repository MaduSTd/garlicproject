@extends('website.layouts.basic')

@section('contact-content')


<div class="contact" id="contact">
    <div class="image">
        <div class="content">
          <h2>{{ __('msg.contact us') }}</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi
            asperiores consectetur, recusandae ratione provident necessitatibus,
            cumque delectus commodi fuga praesentium beatae. Totam vel similique
            laborum dicta aperiam odit doloribus corporis.
          </p>

        </div>
      </div>
    <div class="form">
      <div class="content">
        <h2>{{ __('msg.contact us') }}</h2>
        <form action="">

            <input
            class="input"
            type="text"
            placeholder="{{ __('msg.your name') }}"
            name="name"
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
