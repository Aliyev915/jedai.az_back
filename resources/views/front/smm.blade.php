@extends('front.layouts.master')
@section('title')
    {{ $setting->site_title }}
@endsection
@section('description')
    {{ $setting->site_description }}
@endsection
@section('content')

    <body>
        <div class="secondPage" id="secondPage">

            <div class="quicklinksCont">
                <div class="quicklinks">
                    <a class="quickBox" href="#prices">
                        <img width="46px" class="quicklinksImg1" height="auto" src="/assets/images/price-tag.svg">
                        <p class="quicklinksTitle quicklinksTitle1"> Qiymətlər </p>
                    </a>
                    <a class="quickBox" href="#komanda">
                        <img width="43px" class="quicklinksImg2" height="auto" src="/assets/images/humans.svg">
                        <p class="quicklinksTitle quicklinksTitle2"> Komandamız </p>
                    </a>
                    <a class="quickBox" href="#review">
                        <img width="45px" class="quicklinksImg3" height="auto" src="/assets/images/reviewImage.svg">
                        <p class="quicklinksTitle quicklinksTitle3"> Rəylər </p>
                    </a>
                    <a class="quickBox" href="#portfolio">
                        <img width="45px" class="quicklinksImg4" height="auto" src="/assets/images/galleryimage.svg">
                        <p class="quicklinksTitle quicklinksTitle4"> Portfolio </p>
                    </a>
                    <a class="quickBox" href="#aboutus">
                        <img width="45px" class="quicklinksImg5" height="auto" src="/assets/images/information.svg">
                        <p class="quicklinksTitle quicklinksTitle5"> Haqqımızda </p>
                    </a>
                </div>
            </div>

            <script>
                window.addEventListener('scroll', function() {
                    var prices = document.querySelector('.prices').getBoundingClientRect()
                    var komanda = document.querySelector('#komanda').getBoundingClientRect()
                    var review = document.querySelector('#review').getBoundingClientRect()
                    var portfolio = document.querySelector('#portfolio').getBoundingClientRect()
                    var aboutus = document.querySelector('#aboutus').getBoundingClientRect()



                    if (window.innerWidth > 600) {
                        if (prices.top < 300 && prices.bottom < 3100 && prices.top > -2250 && prices.bottom > 280) {
                            document.querySelector('.quicklinksImg1').setAttribute('style', 'filter:grayscale(0);')
                            document.querySelector('.quicklinksTitle1').setAttribute('style', 'color:#225A93;')
                        } else {
                            document.querySelector('.quicklinksImg1').setAttribute('style', 'filter:grayscale(1);')
                            document.querySelector('.quicklinksTitle1').setAttribute('style', 'color:#979797;')
                        }


                        if (komanda.top < 500 && komanda.bottom < 1662 && komanda.top > -850 && komanda.bottom > 280) {
                            document.querySelector('.quicklinksImg2').setAttribute('style', 'filter:grayscale(0);')
                            document.querySelector('.quicklinksTitle2').setAttribute('style', 'color:#225A93;')
                        } else {
                            document.querySelector('.quicklinksImg2').setAttribute('style', 'filter:grayscale(1);')
                            document.querySelector('.quicklinksTitle2').setAttribute('style', 'color:#979797;')
                        }



                        if (review.top < 500 && review.bottom < 1050 && review.top > -100 && review.bottom > 280) {
                            document.querySelector('.quicklinksImg3').setAttribute('style', 'filter:grayscale(0);')
                            document.querySelector('.quicklinksTitle3').setAttribute('style', 'color:#225A93;')
                        } else {
                            document.querySelector('.quicklinksImg3').setAttribute('style', 'filter:grayscale(1);')
                            document.querySelector('.quicklinksTitle3').setAttribute('style', 'color:#979797;')
                        }


                        if (portfolio.top < 200 && portfolio.bottom < 4100 && portfolio.top > -3000 && portfolio.bottom >
                            920) {
                            document.querySelector('.quicklinksImg4').setAttribute('style', 'filter:grayscale(0);')
                            document.querySelector('.quicklinksTitle4').setAttribute('style', 'color:#225A93;')
                        } else {
                            document.querySelector('.quicklinksImg4').setAttribute('style', 'filter:grayscale(1);')
                            document.querySelector('.quicklinksTitle4').setAttribute('style', 'color:#979797;')
                        }

                        if (aboutus.top < 300 && aboutus.bottom < 1870 && aboutus.top > -1100 && aboutus.bottom > 560) {
                            document.querySelector('.quicklinksImg5').setAttribute('style', 'filter:grayscale(0);')
                            document.querySelector('.quicklinksTitle5').setAttribute('style', 'color:#225A93;')
                        } else {
                            document.querySelector('.quicklinksImg5').setAttribute('style', 'filter:grayscale(1);')
                            document.querySelector('.quicklinksTitle5').setAttribute('style', 'color:#979797;')
                        }
                    }
                    console.log("TOP " + portfolio.top)
                    console.log("BOTTOM " + portfolio.bottom)

                    if (window.innerWidth < 600) {
                        if (prices.top < 158.25 && prices.bottom < 7359.875 && prices.top > -6486.75 && prices.bottom >
                            526.875) {
                            document.querySelector('.quicklinksImg1').setAttribute('style', 'filter:grayscale(0);')
                            document.querySelector('.quicklinksTitle1').setAttribute('style', 'color:#225A93;')
                        } else {
                            document.querySelector('.quicklinksImg1').setAttribute('style', 'filter:grayscale(1);')
                            document.querySelector('.quicklinksTitle1').setAttribute('style', 'color:#979797;')
                        }

                        if (komanda.top < 163.875 && komanda.bottom < 4181.375 && komanda.top > -3170.125 && komanda
                            .bottom > 681.375) {
                            document.querySelector('.quicklinksImg2').setAttribute('style', 'filter:grayscale(0);')
                            document.querySelector('.quicklinksTitle2').setAttribute('style', 'color:#225A93;')
                        } else {
                            document.querySelector('.quicklinksImg2').setAttribute('style', 'filter:grayscale(1);')
                            document.querySelector('.quicklinksTitle2').setAttribute('style', 'color:#979797;')
                        }

                        if (review.top < 500 && review.bottom < 1050 && review.top > -100 && review.bottom > 280) {
                            document.querySelector('.quicklinksImg3').setAttribute('style', 'filter:grayscale(0);')
                            document.querySelector('.quicklinksTitle3').setAttribute('style', 'color:#225A93;')
                        } else {
                            document.querySelector('.quicklinksImg3').setAttribute('style', 'filter:grayscale(1);')
                            document.querySelector('.quicklinksTitle3').setAttribute('style', 'color:#979797;')
                        }
                        if (portfolio.top < 200 && portfolio.bottom < 7669.375 && portfolio.top > -6666.625 && portfolio
                            .bottom > 835) {
                            document.querySelector('.quicklinksImg4').setAttribute('style', 'filter:grayscale(0);')
                            console.log("YES")
                            document.querySelector('.quicklinksTitle4').setAttribute('style', 'color:#225A93;')
                        } else {
                            document.querySelector('.quicklinksImg4').setAttribute('style', 'filter:grayscale(1);')
                            document.querySelector('.quicklinksTitle4').setAttribute('style', 'color:#979797;')
                        }

                        if (aboutus.top < 200 && aboutus.bottom < 7669.375 && aboutus.top > -6666.625 && aboutus.bottom >
                            835) {
                            document.querySelector('.quicklinksImg5').setAttribute('style', 'filter:grayscale(0);')
                            document.querySelector('.quicklinksTitle5').setAttribute('style', 'color:#225A93;')
                        } else {
                            document.querySelector('.quicklinksImg5').setAttribute('style', 'filter:grayscale(1);')
                            document.querySelector('.quicklinksTitle5').setAttribute('style', 'color:#979797;')
                        }


                    }
                    // console.log(window.scrollY)
                });
            </script>

            <div class="buttonContWPAnd">
                <button class="buttonForScroll" id="scrollToTop" onclick="topFunction()" title="Go to top"><img
                        src="/assets/images/arrow.svg" alt="" width="30"></button>
                <a href="https://wa.me/994709836699" target="new_blank"><button class="buttonForWP"><img
                            src="/assets/images/wpIcon.png" alt="" width="50" height="auto"
                            style="margin-top:1.5px;"></button></a>
            </div>
            <div class="topContainer" id="topContainer">
                <div class="navbarContainer" id="navbarContainer">
                    @include('front.widgets.nav')
                </div>
                <div class="subNav">
                    <h1 class="title">@lang('lang.sayt_haz')</h1>
                    <p class="subTitle">@lang('lang.muasir_fremwork')</p>
                </div>
                <div class="subTitle2">
                    <p> <span>@lang('lang.k_sayt')</span> <a href="#whatDo"><button><img src="/assets/images/arrowDown.png"
                                    alt=""></button></a></p>
                </div>
                <hr>
                <div class="overlayForTopConatiner"></div>
            </div>
            @include('front.widgets.menu')
            <!-- Veb Saytlarin hazirlanmasi-->
            <div class="whatDo" id="whatDo">
                <div class="titleContainer" data-aos="fade-right">
                    <h2>@lang('lang.veb_sayt_haz')</h2>
                    <hr class="remove">
                </div>
                <div class="cardConatiner">
                    <!-- Card Conatiner-->
                    <a class="single-partition" href="#prices">
                        <div class="card" data-aos="fade-up">
                            <img src="/assets/images/bag.png" alt="">
                            <p>@lang('lang.korp_sayt_haz')</p>
                        </div>
                    </a>
                    <a class="single-partition" href="#prices">
                        <div class="card" data-aos="fade-up">
                            <img src="/assets/images/shopping.png" alt="">
                            <p>@lang('lang.online_mag_haz')</p>
                        </div>
                    </a>
                    <a class="single-partition" href="#prices">
                        <div class="card" data-aos="fade-up">
                            <img src="/assets/images/compLogo.png" alt="">
                            <p>@lang('lang.v_tip_haz')</p>
                        </div>
                    </a>
                    <a class="single-partition" href="#prices">
                        <div class="card" data-aos="fade-up">
                            <img src="/assets/images/phoneLogo.png" alt="">
                            <p>@lang('lang.elan_tip_haz')</p>
                        </div>
                    </a>
                    <a class="single-partition" href="#prices">
                        <div class="card" data-aos="fade-up">
                            <img src="/assets/images/planeLogo.png" alt="">
                            <p>@lang('lang.landing_pag_haz')</p>
                        </div>
                    </a>
                    <a class="single-partition" href="#prices">
                        <div class="card" data-aos="fade-up">
                            <img src="/assets/images/b2bPortal.png" alt="">
                            <p>@lang('lang.port_haz')</p>
                        </div>
                    </a>


                </div>
                <!-- Card Conatiner-->
                <div class="text" data-aos="fade-up">
                    @lang('lang.overview_text')
                </div>
                <!-- Veb Saytlarin hazirlanmasi-->
            </div>
            <!--Technologies Container-->
            <div class="prices" id="whatDo">
                <div class="titleContainer" data-aos="fade-right">
                    <h2 class="sizeChange" id="prices">@lang('lang.sayt_haz_qiy')</h2>
                </div>

                @foreach ($packcategories as $packcat)
                    <div class="subTitleContainer" data-aos="fade-right">
                        <h2>{{ $packcat->title }}</h2>
                    </div>
                    <div class="cardConatiner ">
                        <!-- Card Conatiner-->
                        @foreach ($packcontent as $packcont)
                            @if ($packcat->id == $packcont->cat_id)
                                <div class="card1">
                                    <div class=" card" data-aos="fade-up">
                                        <p class="title">{{ $packcont->title }}</p>
                                        <div class="subTitle ">
                                            @foreach ($packfeature as $packf)
                                                @if ($packcont->id == $packf->package_id)
                                                    <p class="subTitleee"><img src="/assets/images/checkBox.svg" alt="">
                                                        <span>{{ $packf->content }}</span></p>
                                                @endif
                                            @endforeach
                                            <p class="topTitle">@lang('lang.sayt_haz_m') {{ $packcont->day }}
                                                @lang('lang.gun')</p>
                                            <hr>
                                            <div class='cardPriceButton'>
                                                <div class='cardPriceC'>
                                                    <p class='cardPrice'> @lang('lang.qiymet') </p> {{ $packcont->price }}
                                                    AZN
                                                </div>
                                            </div>
                                            <a class='wpContact' href='https://wa.me/994709836699'> <img
                                                    src="/assets/images/wpblue.svg" width='25px' height='auto'
                                                    alt="wp-icon"> @lang('lang.orderviawp')</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <!-- Card Conatiner-->
                    <div class="jedailogoandHr">
                        <hr>
                        <img src="/assets/images/Jedai logo white 1 (1).png" alt="">
                        <hr>
                    </div>
                @endforeach

                <!-- Card Conatiner-->
                <!-- What Do I Do-->
            </div>

            <!--Sayt Hazirlanma Prosesi-->
            <div class="komanda" id="komanda">
                <div class="titleContainer4" data-aos="fade-up">
                    <h2>@lang('lang.pes')</h2>
                    <hr class="remove">
                </div>
                <div class="imgs">
                    <div class="imgContainer1" data-aos="fade-right">
                        @foreach ($team as $t)
                            <div>
                                <img src="{{ asset($t->image) }}" alt="">
                                <p class="title">{{ $t->name_surname }}</p>
                                <p class="subTitle">{{ $t->position }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            @include('front.widgets.letters')

            <!-- Portfolio -->
            @include('front.widgets.portfolio')

            <div class="card" data-aos="fade-up">
                <div>
                    <img src="/assets/images/JedaiLogo.png" alt="">
                    <p>BURADA SİZİN LAYİHƏNİZ OLA BİLƏR!</p>
                    <a href="https://wa.me/994709836699"><img src="/assets/images/wpIcon.png" alt="" width="30"
                            height="auto" style="margin-right:5px;"> Sayt sifarişi (WhatsApp)</a>
                </div>
                <!--Overlay-->

            </div>
            <!--CARD-->

        </div>

        </div>
        <!--ProjectsConatiner -->

        <!-- End Portfolio -->


        <!-- What Do I do-->
        <div class="technologies">
            <div class="titleContainer3" data-aos="fade-right">
                <h2>@lang('lang.istif_et_tex')</h2>
                <hr class="remove">
            </div>
            <div class="cardConatiner">
                <!-- Card Conatiner-->
                <div class="card" data-aos="fade-up">
                    <img src="/assets/images/Laravel.png" alt="" width="52" height="auto">
                    <p>@lang('lang.laravel')</p>
                </div>
                <div class="card" data-aos="fade-up">
                    <img src="/assets/images/1c_bitrix_logo 1 (1).png" alt="" width="52" height="auto">
                    <p>@lang('lang.bitrix')</p>
                </div>
                <div class="card" data-aos="fade-up">
                    <img src="/assets/images/opencartBig.png" alt="" width="52" height="auto">
                    <p>@lang('lang.opencart')</p>
                </div>
                <div class="card" data-aos="fade-up">
                    <img src="/assets/images/j.png" alt="" width="52" height="auto">
                    <p>@lang('lang.jedcms')</p>
                </div>
                <div class="card" data-aos="fade-up">
                    <img src="/assets/images/js.png" alt="" width="52" height="auto">
                    <p>@lang('lang.js')</p>
                </div>
                <div class="card" data-aos="fade-up">
                    <img src="/assets/images/reactlogo.png" alt="" width="92" height="auto">
                    <p>@lang('lang.react')</p>
                </div>
                <div class="card" data-aos="fade-up">
                    <img src="/assets/images/nextlogo.png" alt="" width="82" height="auto">
                    <p>@lang('lang.next')</p>
                </div>
                <div class="card" data-aos="fade-up">
                    <img src="/assets/images/backbonejs 1 (1).png" alt="" width="52" height="auto">
                    <p>@lang('lang.backbone')</p>
                </div>
                <div class="card" data-aos="fade-up">
                    <img src="/assets/images/bootstrap.png" alt="" width="52" height="auto">
                    <p>@lang('lang.bootstrap')</p>
                </div>
                <div class="card" data-aos="fade-up">
                    <img src="/assets/images/Jquerry.png" alt="" width="52" height="auto">
                    <p>@lang('lang.jquery')</p>
                </div>
            </div>
            <!-- Card Conatiner-->
            <!--Technologies-->
        </div>
        <!--Sayt Hazirlanma Prosesi-->
        <div class="preparingSite">
            <div class="titleContainer" data-aos="fade-right">
                <h2>@lang('lang.sayt_haz_pros')</h2>
            </div>
            <div class="containerOfContainers">
                <div class="container" style="align-self: flex-start;margin-top: 150px;" data-aos="fade-right">
                    <div>
                        <p class="number">1.</p>
                        <p class="text">@lang('lang.hedef_kut')</p>
                    </div>
                    <img src="/assets/images/lupa.png" alt="" width="141">
                </div>
                <div class="verticalLine" data-aos="fade-up"></div>
                <div class="container " style="align-self: flex-end;" data-aos="fade-left">
                    <img src="/assets/images/design 1.png" alt="" width="141">
                    <div>
                        <p class="number">2.</p>
                        <p class="text">@lang('lang.veb_diz_uni')</p>
                    </div>
                </div>
                <div class="verticalLine" data-aos="fade-up"></div>
                <div class="container container3" style="margin-top: 20px;align-self: flex-start;" data-aos="fade-right">
                    <div>
                        <p class="number">3.</p>
                        <p class="text">@lang('lang.proq_is')</p>
                    </div>
                    <img src="/assets/images/codeLogo1.png" alt="" width="141">
                </div>
                <div class="verticalLine" data-aos="fade-up" style="margin-top: 20px;"></div>
                <div class="container" style="margin-top: 20px;align-self: flex-end;" data-aos="fade-left">
                    <img src="/assets/images/imgLogo.png" alt="" width="141">
                    <div>
                        <p class="number">4.</p>
                        <p class="text">@lang('lang.mel_sayt_yer')</p>
                    </div>
                </div>
                <div class="verticalLine" data-aos="fade-up" style="margin-top: 20px;"></div>
                <div class="container" style="align-self: flex-start;margin-top: 20px;" data-aos="fade-right">
                    <div>
                        <p class="number">5.</p>
                        <p class="text">@lang('lang.sayt_test')</p>
                    </div>
                    <img src="/assets/images/documentLogo.png" alt="" width="141">
                </div>
                <div class="verticalLine" data-aos="fade-up" style="margin-top: 20px;"></div>
                <div class="container" style="align-self: flex-end;margin-top: 20px;" data-aos="fade-left">
                    <img src="/assets/images/domainLogo.png" alt="" width="141">
                    <div>
                        <p class="number">6.</p>
                        <p class="text">@lang('lang.esas_domen')</p>
                    </div>
                </div>
                <div class="verticalLine" data-aos="fade-up" style="margin-top: 20px;"></div>
                <div class="container" style="align-self: flex-start;margin-top: 20px;" data-aos="fade-right">
                    <div>
                        <p class="number">7.</p>
                        <p class="text">@lang('lang.sayt_google')</p>
                    </div>
                    <img src="/assets/images/lupa2.png" alt="" width="153">
                </div>
            </div>

        </div>


        <div class="bizimleEmekdahsliq" id="aboutus">
            <!-- Bizimle Emekdashliq-->
            <div class="titleContainer4" data-aos="fade-right">
                <p>@lang('lang.haq_qis')</p>
                <hr class="remove">
            </div>
            <div class="aboutContainer">
                <div class="about1">
                    <p data-aos="fade-up"><img src="/assets/images/Ellipse 5.png" alt="">@lang('lang.veb_lay_yuk') </p>
                    <p data-aos="fade-up"><img src="/assets/images/Ellipse 5.png" alt="">@lang('lang.cet_mar_lay') </p>
                    <p data-aos="fade-up"><img src="/assets/images/Ellipse 5.png" alt="">@lang('lang.must_gozlent')</p>
                    <p data-aos="fade-up"><img src="/assets/images/Ellipse 5.png" alt="">@lang('lang.kadr')</p>
                    <p data-aos="fade-up"><img src="/assets/images/Ellipse 5.png" alt="">@lang('lang.isimizi_sevirik') </p>
                </div>
                <div class="jedailogoandHr" data-aos="fade-right">
                    <hr>
                    <img src="/assets/images/JedaiLogo.png" alt="">
                    <hr>
                </div>
                <div class="titleContainer4_2" data-aos="fade-right">
                    <p>@lang('lang.bizimle_emekdasliq')</p>
                </div>
                <div class="subAboutContainer">
                    <div class="about1_1" data-aos="fade-up">
                        <p><img src="/assets/images/checkBox2.png" alt="@lang('lang.pesekar_k')"> @lang('lang.pesekar_k')
                        </p>
                        <p><img src="/assets/images/checkBox2.png" alt="@lang('lang.lay_vaxt')"> @lang('lang.lay_vaxt')</p>
                        <p><img src="/assets/images/checkBox2.png" alt="@lang('lang.uc_dil')"> @lang('lang.uc_dil')</p>
                        <p><img src="/assets/images/checkBox2.png" alt="@lang('lang.uzun_mud')"> @lang('lang.uzun_mud')</p>
                    </div>
                    <div class="about2" data-aos="fade-up">
                        <p><img src="/assets/images/checkBox2.png" alt="@lang('lang.daimi_inkisaf')">
                            @lang('lang.daimi_inkisaf')</p>
                        <p><img src="/assets/images/checkBox2.png" alt="@lang('lang.gozlenti')"> @lang('lang.gozlenti')</p>
                        <p><img src="/assets/images/checkBox2.png" alt="@lang('lang.budce_kenar')">
                            @lang('lang.budce_kenar')</p>
                    </div>
                    <div class="about3" data-aos="fade-up">
                        <p><img src="/assets/images/checkBox2.png" alt="@lang('lang.is_sev')"> @lang('lang.is_sev')</p>
                        <p><img src="/assets/images/checkBox2.png" alt="@lang('lang.mesuliyyetli')">
                            @lang('lang.mesuliyyetli')</p>
                    </div>
                </div>
            </div>
            <div class="text" data-aos="fade-up">
                @lang('lang.sec_overview_text')
            </div>
        </div>
        <!-- Bizimle Emekdashliq-->
        @include('front.widgets.partners')
        @include('front.widgets.message-map')
    @endsection
