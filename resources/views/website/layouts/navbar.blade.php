<div class="header" id="header">
    <div class="container">
      <a href="#" class="logo">Mazarea El-Kaliubia</a>

      <ul class="main-nav">
        <li><a href="{{route('website.home')}}" >Home</a></li>
        <li><a href="{{route('website.about')}}">About Us</a></li>
        <li><a href="{{route('website.contact')}}">Contact Us</a></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                  <a href="{{ url('/en/tt') }}">English</a>
                  <a href="{{ url('/ar/tt') }}">Arabic</a>
                  <a href="{{ url('/de/tt') }}">German</a>
                  <a href="{{ url('/fr/tt') }}">French</a>
                </div>
              </div>
        </li>
                    <!--
                    id="a-en"
                    id="a-ar"
                    id="a-ge"
                    id="a-fr
                    -->

      </ul>
    </div>
  </div>
