<div class="menuOverlay" id="menuOverlay">
    <div class="overlayMainText" id="overlayMainText">
       <div class="text1" style="text-align: center;">
          <p id="text1_1">
             <a href="{{ route('homepage', app()->getLocale()) }}" style="text-decoration:none;">@lang('lang.esas_sehife')</a> 
            </p>
          <p id="text1_2">
             <a
           @if(App::isLocale('en')) href="{{ route('site.preparation.en')}}"
            @elseif(App::isLocale('ru')) href="{{ route('site.preparation.ru')}}" 
             @else href="{{ route('site.preparation')}}" @endif
             style="text-decoration:none;">@lang('lang.sayt_haz_navbar')</a>
            </p>
          <p id="text1_4">
             <a href="https://www.jedacademy.az" style="text-decoration:none;" target="blank">@lang('lang.kurs_navbar')</a>
         </p>
          <p id="text1_3">
             <a            
          @if(App::isLocale('en')) href="{{ route('contact.en')}}"
            @elseif(App::isLocale('ru')) href="{{ route('contact.ru')}}" 
             @else href="{{ route('contact')}}" @endif
          style="text-decoration:none;">@lang('lang.elaqe') </a> 
         </p>
       </div>
    </div>
    <div class="fText">
       <div class="container" >
          <p id="ftextOverlayP">@lang('lang.muellif_huquqlari') </p>
          <div >
             <span class="fireCall" id="ftextOverlaySpan1_3"><a href="tel:+994 12 310 15 99">+994 12 310 15 99</a></span>
            
             <span class="fireCall" id="ftextOverlaySpan1"><a href="tel:{{ $setting->tel }}">{{ $setting->tel }}</a></span>
             <span class="fireCall" id="ftextOverlaySpan1_2"><a href="tel:{{ $setting->tel2 }}">{{ $setting->tel2 }}</a></span>
             <span class="fireCall" id="ftextOverlaySpan2"><a href="mailto:{{ $setting->email }}"> {{ $setting->email }}</a></span>
          </div>
       </div>
    </div>
    

 </div>