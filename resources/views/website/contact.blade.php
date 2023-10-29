@extends('website.layouts.basic')

@section('contact-content')


<!-- Start Discount -->
<div class="contact" id="contact">
    <div class="image">
        <div class="content">
          <h2>Contact Us</h2>
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
        <h2>Contact Us</h2>
        <form action="">
          <input
            class="input"
            type="text"
            placeholder="Your Name"
            name="name"
          />
          <input
            class="input"
            type="email"
            placeholder="Your Email"
            name="email"
          />
          <textarea
            class="input"
            placeholder="Tell Us About Your Needs"
            name="message"
          ></textarea>
          <input type="submit" value="Send" />
        </form>
      </div>
    </div>
  </div>
  <!-- End Discount -->
@endsection
