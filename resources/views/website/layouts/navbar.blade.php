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
                  <a href="{{ url('/en') }}" hreflang="en">English</a>
                  <a href="{{ url('/ar') }}" hreflang="ar">Arabic</a>
                  <a href="{{ url('/it') }}" hreflang="it">Italiano</a>
                  <a href="{{ url('/de') }}" hreflang="de">German</a>
                  <a href="{{ url('/fr') }}" hreflang="fr">French</a>
                  <a href="{{ url('/pt') }}" hreflang="pt">Portugeese</a>
                  <a href="{{ url('/ru') }}" hreflang="ru">Russian</a>
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
