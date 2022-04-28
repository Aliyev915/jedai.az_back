<div  id="review" style="width: 100%;display: flex;justify-content: center;background-color: #EEEEEE;">
   <div class="slider"><!--Slider-->

       <div class="titleContainer6" > <p>@lang('lang.bizi_tovsiye')</p> <hr class="remove"></div>
   <div style="width: 85%;background: #EEEE;">
       <!-- <div class="glide" >
           <div class="glide__track" data-glide-el="track" style="text-align: center;">
             <ul class="glide__slides ">
                <li class="glide__slide  "></li>
            </ul>
           </div>

           <div class="glide__arrows" data-glide-el="controls">
               <button class="glide__arrow glide__arrow--left button1" data-glide-dir="<"><img src="./assets/images/vectorLeft.png" alt=""></button>
               <button class="glide__arrow glide__arrow--right button2" data-glide-dir=">"><img src="./assets/images/vectorRight.png" alt=""></button>
           </div>
       </div> -->
       <!-- <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($letters as $letter)
                        <li class="splide__slide"  >
                            <button onclick="myfunc({{$letter->id}})"  class='modalBtn' id="modal-btn-{{$letter->id}}">
                                <img id="modal-btn-image-{{$letter->id}}"  src="{{$letter->image}}"  width="247" height="auto" alt="" style="margin-top: 14px;box-shadow: 5px 5px 20px 0px rgba(0, 0, 0, 0.2);"/>
                            </button>
                        </li>
                   @endforeach
                </ul>
            </div>
        </div> -->
        <!-- <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($letters as $letter)
                        <li class="splide__slide"  >
                            <button onclick="myfunc({{$letter->id}})"  class='modalBtn' id="modal-btn-{{$letter->id}}">
                                <img id="modal-btn-image-{{$letter->id}}"  src="{{$letter->image}}"  width="247" height="auto" alt="" style="margin-top: 14px;box-shadow: 5px 5px 20px 0px rgba(0, 0, 0, 0.2);"/>
                            </button>
                        </li>
                   @endforeach
                </ul>
            </div>
        </div> -->
        
        <div class="letters-slides" >
        @foreach ($letters as $letter)
                <div class="single">
                <a href="{{$letter->image}}" class="img-galery fancybox">
                    <img src="{{$letter->image}}" width="247" height="auto" alt="" style="margin: auto;box-shadow: 0px 2px 8px 3px rgba(0, 0, 0, 0.15); margin-bottom: 10px;" />
                </a>
                </div>
                @endforeach 
</div>


    </div>

   </div><!--Slider-->
   
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <img id='modalImage'  width='600px' height='auto' alt="">
        </div>
    </div>
    <style>
        /* The Modal (background) */
        .modalBtn
        {
            cursor: pointer;
            outline:none !important;    
            border:1px solid transparent !important;
        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            overflow:hidden;
            z-index: 999999999999999999;
            justify-content:center;
            align-items:center;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            display:flex;
            width:600px;
            flex-direction:column;
            align-items:center;
            margin: 5% auto; /* 15% from the top and centered */
            border: 1px solid #888;
            width: auto; /* Could be more or less, depending on screen size */
        }
        @media screen and (max-width:600px) {
            .modal-content {
                width:350px !important;
                margin-top: -100px !important;
            }
            .modal-content img {
                 width:350px !important;
            }
        }
    </style>

</div>