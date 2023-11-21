<div class="header" id="header">
    <div class="container">
        <a href="{{route('website.home')}}" class="logo" >{{ __('msg.mazarea el-kaliubia') }}</a>

      <ul class="main-nav">
        <li><a href="{{route('website.home')}}" >{{ __('msg.homenav') }}</a></li>
        <li><a href="{{route('website.about')}}">{{ __('msg.about us') }}</a></li>
        <li><a href="{{route('website.contact')}}">{{ __('msg.contact us') }}</a></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn">{{ __('msg.languages') }}</button>
                <div class="dropdown-content">
                  <a href="{{ url('/en/home') }}">English</a>
                  <a href="{{ url('/ar/home') }}">Arabic</a>
                  <a href="{{ url('/de/home') }}">German</a>
                  <a href="{{ url('/fr/home') }}">French</a>
                  <a href="{{ url('/pt/home') }}">Portugeese</a>
                  <a href="{{ url('/ru/home') }}">Russian</a>
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
