      
         <div class="partniorsContainer">
            <!--Partniors-->
            <div class="titleContainer5">
                <p>@lang('lang.partnyorlar')</p>
                <hr>
             </div>
             <div class="gridContainer2">
                @foreach ($partners as $partner)
                   <div data-aos="fade-up"><img src="{{$partner->image}}" alt="" ></div>              
                @endforeach
             </div>
          </div>
          <!--Partniors-->