<div class="header" id="header">
    <div class="container">
      <a href="#" class="logo">Mazarei El-Kalioubeya</a>
      <ul class="main-nav">
        <li><a href="{{route('website.home')}}" >Home</a></li>
        <li><a href="{{route('website.about')}}">About Us</a></li>
        <li><a href="{{route('website.contact')}}">Contact Us</a></li>
        <li >
            <a href="#">
             <select name="languages">
                <option href="{{ url('/en') }}">English</option>
                <option href="{{ url('/ar') }}">Arabic</option>
                <option href="{{ url('/ge') }}">German</option>
                <option href="{{ url('/fe') }}">French</option>
            </select></a>

        </li>
      </ul>
    </div>
  </div>
