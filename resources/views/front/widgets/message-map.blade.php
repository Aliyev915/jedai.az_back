
<div class="formAndIframe {{$class}}" >
    <!--Form-->
    
    <iframe  data-aos="fade-right" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3037.548299843901!2d49.90863201045075!3d40.418856336974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc993fbbfe87199e5!2sJedAi.az!5e0!3m2!1sen!2s!4v1615467538414!5m2!1sen!2s" width="600" height="470" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="form" data-aos="fade-left">
       <div class="titleContainer7">
          <p>@lang('lang.emekdasliq')</p>
          <hr class="remove">
       </div>
       <div class="titleContainer7_2">
          <p>@lang('lang.bize_mesaj')</p>
       </div>
       <div class="formContainer" id="form">
          <form method="POST" id="demo-form" action="{{route('send.message')}}">
             @csrf
             <div class="inputs">
                <input type="text" required name="name"  placeholder="@lang('lang.adiniz')*">
                <input type="number" required  name="tel" placeholder="@lang('lang.tel')*">
                <input type="email"  required name="email" placeholder="@lang('lang.email')*">

                <div class="capthcdiv">
                   <span id="cpc" style="display: flex;min-width:120px;">{!! captcha_img() !!} </span> <img width="33px" src="{{asset('images/reload.png')}}" alt="" id="reload">
                  <input id="captcha" type="text" class="form-control" placeholder="Captcha"  required name="captcha"></div>
                
               
             </div>
             <textarea class="textArea" required name="mesaj" id="" cols="30" rows="10" placeholder="@lang('lang.mesaj_yaz')"></textarea>
           
             {{-- <button  type="submit" class="gonderButton">@lang('lang.gonder')</button> --}}
             <button class="g-recaptcha" 
        data-sitekey="6LfmlmsdAAAAALemlZRz8KRED_0ZT6TUzaegYbnU" 
        data-callback='onSubmit' 
        data-action='submit'>@lang('lang.sendbtn')</button>
          </form>
       </div>
    </div>
 </div>
 <!--Form-->
 