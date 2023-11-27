<div class="footer">
    <div class="container">
      <div class="box">
        <h3>{{ __('msg.mazarea el-kaliubia') }}</h3>
      </div>
      <div class="box">
       <h3>{{ __('msg.our products') }}</h3>
        <ul class="links">
          <li><a href="{{route('website.productview2')}}">{{ __('msg.red garlic') }}</a></li>
          <li><a href="{{route('website.productview4')}}">{{ __('msg.white garlic') }}</a></li>
          <li><a href="{{route('website.productview6')}}">{{ __('msg.garlic cloves') }}</a></li>
          <li><a href="{{route('website.productview3')}}">{{ __('msg.red onion') }}</a></li>
          <li><a href="{{route('website.productview5')}}">{{ __('msg.white onion') }}</a></li>
        </ul>
      </div>
      <div class="box">
        <div class="line">
          <i class="fas fa-map-marker-alt fa-fw"></i>
          <div class="info">{{ __('msg.office') }}</div>
        </div>
        <div class="line">
                 <i class="fas fa-map-marker-alt fa-fw"></i>
                <div class="info">{{ __('msg.station') }}</div>
        </div>
      </div>
      <div class="box">
        <div class="line">
            <i class="fa fa-envelope fa-fw"></i>
            <div class="info">
            {{ __('msg.email1') }}
            </div>
        </div>

        <div class="line">
            <i class="fa fa-envelope fa-fw"></i>
            <div class="info">
            {{ __('msg.email2') }}
            </div>
        </div>

        <div class="line">
          <i class="fa fa-phone fa-fw"></i>
          <div class="info">
            {{ __('msg.phone') }}
          </div>
        </div>
    </div>
  </div>
