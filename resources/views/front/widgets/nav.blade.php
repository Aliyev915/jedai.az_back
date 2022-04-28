
       <nav class="navbar">
          <div class="logoAndText">
             <a href="{{ route('homepage', app()->getLocale()) }}"><img src="/assets/images/JedaiLogo.png" alt="" id="jedaiLogo"></a>
             <p class="phoneNumber fireCall" ><a id="phoneNuber2" href="tel:+994 12 310 15 99">+994 12 310 15 99</a> </p>
             <p class="phoneNumber fireCall" ><a id="phoneNuber" href="tel:{{ $setting->tel }}">{{ $setting->tel }}</a> </p>
             <p class="phoneNumber fireCall" ><a id="phoneNuber3" href="tel:{{ $setting->tel2 }}">{{ $setting->tel2 }}</a> </p>
          </div>
          
          <div style="float: right" class="langCont">
            <div class="logoAndText langCont" style="margin-right: 30px;margin-top: 0px;">
              <p class="phoneNumber langThings" >
                   @if(Request::segment(2)== 'saytlarin-hazirlanmasi' or Request::segment(2)== 'web-development-azerbaijan' or Request::segment(2)== 'sozdaniye-saytov-baku' )
                   
                   <a id="lang1" href="{{ url('/az/saytlarin-hazirlanmasi') }}">az |</a> 
                   <a id="lang2" href="{{ url('/en/web-development-azerbaijan') }}">en |</a> 
                   <a id="lang3" href="{{ url('/ru/sozdaniye-saytov-baku') }}">ru</a>
                   
                   @elseif(Request::segment(2)== 'elaqe' or Request::segment(2)== 'contact' or Request::segment(2)== 'kontakti' )
                   
                   <a id="lang1" href="{{ url('/az/elaqe') }}">az |</a> 
                   <a id="lang2" href="{{ url('/en/contact') }}">en |</a> 
                   <a id="lang3" href="{{ url('/ru/kontakti') }}">ru</a>
                   
                   @else
                   
                   <a id="lang1" href="{{ url('/az') }}">az |</a> 
                   <a id="lang2" href="{{ url('/en') }}">en |</a> 
                   <a id="lang3" href="{{ url('/ru') }}">ru</a>
                   
                   @endif
              </p>
            </div>
          <button class="menuIcon" id="menuIcon" onclick="animationMenu()">
            <div class="topIcon" id="topIcon"></div>
            <div class="downIcon" id="downIcon"></div>
         </button>
         </div>
          </a>
       </nav>
