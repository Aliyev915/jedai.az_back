<div class="cardContainer">
    <div class="cards">
        <div class="card rotate-card1" >
            <div class="circle"><img src="/images/top-cards/card-image.png" width="70" height="auto" alt="veb saytlarin hazirlanmasi"></div>
            <p class="titleCard">@lang('lang.card1_title')</p>
            <div class="aboutCard">
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card1_desc1')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card1_desc2')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card1_desc3')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card1_desc4')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card1_desc5')</p></div>
            </div>
            <a href="@if(App::getLocale() == 'az') {{route('site.preparation')}} @elseif(App::getLocale() == 'en') {{route('site.preparation.en')}} @elseif(App::getLocale() == 'ru') {{route('site.preparation.ru')}} @endif" class="btn-flip" data-back="{{ __('lang.məlumat_alın') }}" data-front="{{ __('lang.daha_etrafli') }}"><i class="fas fa-info-circle"></i></a>
        </div>

        <div class="card">
            <div class="circle"><img src="/images/top-cards/card-image-2.png" alt="veb saytlarin hazirlanmasi"></div>
            <p class="titleCard">@lang('lang.card2_title')</p>
            <div class="aboutCard">
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card2_desc1')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card2_desc2')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card2_desc3')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card2_desc4')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card2_desc5')</p></div>
            </div>
            <a href="@if(App::getLocale() == 'az') {{route('site.preparation')}} @elseif(App::getLocale() == 'en') {{route('site.preparation.en')}} @elseif(App::getLocale() == 'ru') {{route('site.preparation.ru')}} @endif" class="btn-flip" data-back="{{ __('lang.məlumat_alın') }}" data-front="{{ __('lang.daha_etrafli') }}"><i class="fas fa-info-circle"></i></a>
        </div>

        <div class="card card3">
            <div class="circle"><img src="/images/top-cards/card-image-3.svg" alt="veb saytlarin hazirlanmasi"></div>
            <p class="titleCard">@lang('lang.card3_title')</p>
            <div class="aboutCard">
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card3_desc1')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card3_desc2')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card3_desc3')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card3_desc4')</p></div>
               <div class="textContcard"><div class='card-dot1'></div> <p class='text-card'>@lang('lang.card3_desc5')</p></div>
            </div>
            <a href="#" class="btn-flip" data-back="{{ __('lang.məlumat_alın') }}" data-front="{{ __('lang.daha_etrafli') }}"><i class="fas fa-info-circle"></i></a>
        </div>
    </div>
</div>

<script>
    
</script>