@extends('front.layouts.master')

@section('content')
    <section id="header">
        <div class="container">
            <div class="title">
                <h1>@lang('lang.sayt_haz')</h1>
            </div>
            <div class="description">
                <p>@lang('lang.muasir_fremwork')</p>
                <br />
                <p>@lang('lang.muasir_fremwork1')</p>
                <br />
                <p>@lang('lang.muasir_fremwork2')</p>
            </div>
        </div>
        <div class="go_to_bottom">
            <div class="container">
                <div class="content">
                    <p>@lang('lang.k_sayt')</p>
                    <a href="#what_we_do"><img src="{{ asset('assets/images/arrow-down.png') }}" alt="" /></a>
                </div>
            </div>
        </div>
    </section>
    <section id="site-preparation">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.sayt_haz1')</h2>
                <hr>
            </div>
            <div class="cards">
                <div class="col-lg-4 card">
                    <img src="{{ asset('assets/images/bag.png') }}" alt="">
                    <a>@lang('lang.korp_sayt_haz')</a>
                </div>
                <div class="col-lg-4 card">
                    <img src="{{ asset('assets/images/shopping.png') }}" alt="">
                    <a>@lang('lang.online_mag_haz')</a>
                </div>
                <div class="col-lg-4 card">
                    <img src="{{ asset('assets/images/company-logo.png') }}" alt="">
                    <a>@lang('lang.v_tip_haz')</a>
                </div>
                <div class="col-lg-4 card">
                    <img src="{{ asset('assets/images/plane-logo.png') }}" alt="">
                    <a>@lang('lang.elan_tip_haz')</a>
                </div>
                <div class="col-lg-4 card">
                    <img src="{{ asset('assets/images/phone-logo.png') }}" alt="">
                    <a>@lang('lang.elan_tip_haz')</a>
                </div>
                <div class="col-lg-4 card">
                    <img src="{{ asset('assets/images/b2b-portal.png') }}" alt="">
                    <a>@lang('lang.port_haz')</a>
                </div>
            </div>
            <div class="content">
                @lang('lang.sec_overview_text')
            </div>
    </section>
    <section id="projects">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.gor_is')</h2>
                <hr />
            </div>
            <div class="categories">
                @foreach ($portcategory as $portcat)
                    <div class="category">
                        <a href="#{{ $portcat->id }}">#{{ $portcat->title }}</a>
                    </div>
                @endforeach
            </div>
            <div class="projects">
                @foreach ($portcontent as $port)
                    <div class="project" style="background-image: url({{ $port->image }})"
                        data-cat="#{{ App\Models\PortCatToContent::where('port_content_id', $port->id)->first()->id }}">
                        <div class="project-overlay" style="background-color: {{ $port->color_code }};">
                            <div class="title">
                                <h4>{{ $port->title }}</h4>
                            </div>
                            <a href="{{ $port->url }}" target="__blank">www.afnrentacar.az <span><img
                                        class="finger" src="{{ asset('assets/images/click.png') }}"
                                        alt="click"></span> </a>
                            <p>{{ $port->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="view-all">
                <a href="">@lang('lang.hamisina_bax')<img src="{{ asset('assets/images/arrow-right.png') }}"
                        alt="" /></a>
            </div>
        </div>
    </section>
    <section id="prices">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.sayt_haz_qiy')</h2>
            </div>
            <div class="sub-title">
                <p>@lang('lang.korp_sayt_qiy')</p>
            </div>
            <div class="cards">
                <div class="col-lg-4 card">
                    <div class="card-title">
                        <h4>“Kiçik Biznes” paketi</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Şablon dizayn və ya
                                Unikal dizayn</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">1 - 4 səhifəlik
                                Landing və ya Vizitka sayt
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Dil seçimi: 1 dildə
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Hostinq: 12 ay
                                daxildir (5 GB SSD)</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Korporativ Email: 5
                                ədəd email akkaunt</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">SSL sertifikat</li>
                        </ul>
                        <p>Sayt Hazırlanması müddəti: 5 - 15 gün</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <p>Qiymət: <span class="price">400 - 900 AZN</span></p>
                    </div>
                    <div class="contact">
                        <a href=""><i class="fab fa-whatsapp"></i>
                            WhatsApp-la əlaqə</a>
                    </div>
                </div>
                <div class="col-lg-4 card">
                    <div class="card-title">
                        <h4>“Kiçik Biznes” paketi</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Şablon dizayn və ya
                                Unikal dizayn</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">1 - 4 səhifəlik
                                Landing və ya Vizitka sayt
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Dil seçimi: 1 dildə
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Hostinq: 12 ay
                                daxildir (5 GB SSD)</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Korporativ Email: 5
                                ədəd email akkaunt</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">SSL sertifikat</li>
                        </ul>
                        <p>Sayt Hazırlanması müddəti: 5 - 15 gün</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <p>Qiymət: <span class="price">400 - 900 AZN</span></p>
                    </div>
                    <div class="contact">
                        <a href=""><i class="fab fa-whatsapp"></i>
                            WhatsApp-la əlaqə</a>
                    </div>
                </div>
                <div class="col-lg-4 card">
                    <div class="card-title">
                        <h4>“Kiçik Biznes” paketi</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Şablon dizayn və ya
                                Unikal dizayn</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">1 - 4 səhifəlik
                                Landing və ya Vizitka sayt
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Dil seçimi: 1 dildə
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Hostinq: 12 ay
                                daxildir (5 GB SSD)</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Korporativ Email: 5
                                ədəd email akkaunt</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">SSL sertifikat</li>
                        </ul>
                        <p>Sayt Hazırlanması müddəti: 5 - 15 gün</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <p>Qiymət: <span class="price">400 - 900 AZN</span></p>
                    </div>
                    <div class="contact">
                        <a href=""><i class="fab fa-whatsapp"></i>
                            WhatsApp-la əlaqə</a>
                    </div>
                </div>
            </div>
            <div class="jedai-hr">
                <div class="hr-img">
                    <hr>
                    <img src="{{ asset('assets/images/logo-gray.png') }}" alt="jedai">
                    <hr>
                </div>
            </div>
            <div class="sub-title">
                <p>@lang('lang.online_mag_qiym')</p>
            </div>
            <div class="cards">
                <div class="col-lg-4 card">
                    <div class="card-title">
                        <h4>“Shop-1” Paketi</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Bu paketdə
                                e-commerce sayt hazırlanması üçün
                                dizayn olaraq premium şablon istifadə edirik</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">CMS / Framework:
                                OpenCart / PHP</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">İdarə paneli: var,
                                OpenCart idarə paneli
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Online ödəniş
                                sistemimin inteqrasiyası:
                                istənilən yerli bankın E-commerce sistemi ilə</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Kataloq strukturunun
                                qurulması</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Kontentin
                                yerləşdirilməsi: 200 məhsul
                                qiymətə daxildir</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Dil seçimi: 1 dildə
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Hostinq: 12 ay (VPS
                                / 10GB SSD / 1GB RAM / 1
                                CPU)</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Texniki dəstək: 12
                                ay pulsuz</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">SSL sertifikat</li>
                        </ul>
                        <p>Sayt Hazırlanması müddəti: 25 - 30 gün</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <p>Qiymət: <span class="price">1.500 AZN</span></p>
                    </div>
                    <div class="contact">
                        <a href=""><i class="fab fa-whatsapp"></i>
                            WhatsApp-la əlaqə</a>
                    </div>
                </div>
                <div class="col-lg-4 card">
                    <div class="card-title">
                        <h4>“Shop-1” Paketi</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Bu paketdə
                                e-commerce sayt hazırlanması üçün
                                dizayn olaraq premium şablon istifadə edirik</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">CMS / Framework:
                                OpenCart / PHP</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">İdarə paneli: var,
                                OpenCart idarə paneli
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Online ödəniş
                                sistemimin inteqrasiyası:
                                istənilən yerli bankın E-commerce sistemi ilə</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Kataloq strukturunun
                                qurulması</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Kontentin
                                yerləşdirilməsi: 200 məhsul
                                qiymətə daxildir</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Dil seçimi: 1 dildə
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Hostinq: 12 ay (VPS
                                / 10GB SSD / 1GB RAM / 1
                                CPU)</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Texniki dəstək: 12
                                ay pulsuz</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">SSL sertifikat</li>
                        </ul>
                        <p>Sayt Hazırlanması müddəti: 25 - 30 gün</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <p>Qiymət: <span class="price">1.500 AZN</span></p>
                    </div>
                    <div class="contact">
                        <a href=""><i class="fab fa-whatsapp"></i>
                            WhatsApp-la əlaqə</a>
                    </div>
                </div>
                <div class="col-lg-4 card">
                    <div class="card-title">
                        <h4>“Shop-1” Paketi</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Bu paketdə
                                e-commerce sayt hazırlanması üçün
                                dizayn olaraq premium şablon istifadə edirik</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">CMS / Framework:
                                OpenCart / PHP</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">İdarə paneli: var,
                                OpenCart idarə paneli
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Online ödəniş
                                sistemimin inteqrasiyası:
                                istənilən yerli bankın E-commerce sistemi ilə</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Kataloq strukturunun
                                qurulması</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Kontentin
                                yerləşdirilməsi: 200 məhsul
                                qiymətə daxildir</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Dil seçimi: 1 dildə
                            </li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Hostinq: 12 ay (VPS
                                / 10GB SSD / 1GB RAM / 1
                                CPU)</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">Texniki dəstək: 12
                                ay pulsuz</li>
                            <li><img src="{{ asset('assets/images/check-box-colored.svg') }}" alt="">SSL sertifikat</li>
                        </ul>
                        <p>Sayt Hazırlanması müddəti: 25 - 30 gün</p>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <p>Qiymət: <span class="price">1.500 AZN</span></p>
                    </div>
                    <div class="contact">
                        <a href=""><i class="fab fa-whatsapp"></i>
                            WhatsApp-la əlaqə</a>
                    </div>
                </div>
            </div>
            <div class="jedai-hr">
                <div class="hr-img">
                    <hr>
                    <img src="{{ asset('assets/images/logo-gray.png') }}" alt="jedai">
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <section id="about-us">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.pes')</h2>
                <hr />
            </div>
            <div class="teams">
                @foreach ($team as $t)
                    <div class="team">
                        <div class="team-img">
                            <img src="{{ asset('assets' . $t->image) }}" alt="{{ Str::slug($t->name_surname) }}">
                        </div>
                        <div class="name">{{ $t->name_surname }}</div>
                        <div class="profession">
                            <p>{{ $t->position }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="recommendation">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.bizi_tovsiye')</h2>
                <hr />
            </div>
            <div class="recommendations">
                <div class="row">
                    @foreach ($letters as $letter)
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ $letter->image }}"><img src="{{ asset($letter->image) }}" alt="gravity"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="technologies">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.tex')</h2>
                <hr />
            </div>
            <div class="our-technologies">
                <div class="row">
                    <div class="technology">
                        <img src="{{ asset('assets/images/laravel.png') }}" alt="laravel">
                        <p>@lang('lang.laravel')</p>
                    </div>
                    <div class="technology">
                        <img src="{{ asset('assets/images/php.png') }}" alt="php">
                        <p>@lang('lang.php')</p>
                    </div>
                    <div class="technology">
                        <img src="{{ asset('assets/images/bitrix.png') }}" alt="bitrix">
                        <p>@lang('lang.bitrix')</p>
                    </div>
                    <div class="technology">
                        <img src="{{ asset('assets/images/open-cart.png') }}" alt="open-cart">
                        <p>@lang('lang.opencart')</p>
                    </div>
                    <div class="technology">
                        <img src="{{ asset('assets/images/j.png') }}" alt="jedcms">
                        <p>@lang('lang.jedcms')</p>
                    </div>
                    <div class="technology">
                        <img src="{{ asset('assets/images/js.png') }}" alt="javascript">
                        <p>@lang('lang.js')</p>
                    </div>
                    <div class="technology">
                        <img src="{{ asset('assets/images/jquery.png') }}" alt="jquery">
                        <p>@lang('lang.jquery')</p>
                    </div>
                    <div class="technology">
                        <img src="{{ asset('assets/images/react.png') }}" alt="react">
                        <p>@lang('lang.react')</p>
                    </div>
                    <div class="technology">
                        <img src="{{ asset('assets/images/vue.png') }}" alt="vue">
                        <p>@lang('lang.vue')</p>
                    </div>
                    <div class="technology">
                        <img src="{{ asset('assets/images/bootstrap.png') }}" alt="bootstrap">
                        <p>@lang('lang.bootstrap')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="processing">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.sayt_haz_pros')</h2>
            </div>
            <div class="processing">
                <div class="item">
                    <img src="{{ asset('assets/images/scope.png') }}" alt="">
                    <div class="content">
                        <span>1.</span>
                        <p>@lang('lang.hedef_kut')</p>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="item" style="align-self: self-end; flex-direction: row;">
                    <img src="{{ asset('assets/images/design.png') }}" alt="">
                    <div class="content">
                        <span>2.</span>
                        <p>@lang('lang.veb_diz_uni')</p>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="item">
                    <img src="{{ asset('assets/images/code.png') }}" alt="">
                    <div class="content">
                        <span>3.</span>
                        <p>@lang('lang.proq_is')</p>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="item" style="align-self: self-end; flex-direction: row;">
                    <img src="{{ asset('assets/images/gallery.png') }}" alt="">
                    <div class="content">
                        <span>4.</span>
                        <p>@lang('lang.mel_sayt_yer')</p>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="item">
                    <img src="{{ asset('assets/images/document.png') }}" alt="">
                    <div class="content">
                        <span>5.</span>
                        <p>@lang('lang.sayt_test')</p>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="item" style="align-self: self-end; flex-direction: row;">
                    <img src="{{ asset('assets/images/domain.png') }}" alt="">
                    <div class="content">
                        <span>6.</span>
                        <p>@lang('lang.esas_domen')</p>
                    </div>
                </div>
                <div class="vertical-line"></div>
                <div class="item">
                    <img src="{{ asset('assets/images/completed.png') }}" alt="">
                    <div class="content">
                        <span>7.</span>
                        <p>@lang('lang.sayt_google')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="what_we_do">
        <div class="container">
            <div class="title">
                <h2>{{ __('lang.biz_ne_edirik') }}</h2>
                <hr />
            </div>
            <div class="cards">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/card-image.png') }}" alt="" />
                        </div>
                        <div class="card-title">
                            <h3>@lang('lang.card1_title')</h3>
                        </div>
                        <div class="card-description">
                            <ul>
                                <li>@lang('lang.card1_desc1')</li>
                                <li>@lang('lang.card1_desc2')</li>
                                <li>@lang('lang.card1_desc3')</li>
                                <li>@lang('lang.card1_desc4')</li>
                                <li>@lang('lang.card1_desc5')</li>
                            </ul>
                        </div>
                        <div class="more">
                            <a href="">@lang('lang.daha_etrafli')</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/card-image-2.png') }}" alt="" />
                        </div>
                        <div class="card-title">
                            <h3>@lang('lang.card2_title')</h3>
                        </div>
                        <div class="card-description">
                            <ul>
                                <li>@lang('lang.card2_desc1')</li>
                                <li>@lang('lang.card2_desc2')</li>
                                <li>@lang('lang.card2_desc3')</li>
                                <li>@lang('lang.card2_desc4')</li>
                                <li>@lang('lang.card2_desc5')</li>
                            </ul>
                        </div>
                        <div class="more">
                            <a href="">@lang('lang.daha_etrafli')</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/card-image-3.svg') }}" alt="" />
                        </div>
                        <div class="card-title">
                            <h3>@lang('lang.card3_title')</h3>
                        </div>
                        <div class="card-description">
                            <ul>
                                <li>@lang('lang.card3_desc1')</li>
                                <li>@lang('lang.card3_desc2')</li>
                                <li>@lang('lang.card3_desc3')</li>
                                <li>@lang('lang.card3_desc4')</li>
                                <li>@lang('lang.card3_desc5')</li>
                            </ul>
                        </div>
                        <div class="more">
                            <a href="">@lang('lang.daha_etrafli')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="why_we">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.haq_qis')</h2>
                <hr />
            </div>
            <div class="content">
                <ul>
                    <li><img src="{{ asset('assets/images/circle.png') }}" alt="">@lang('lang.veb_lay_yuk')</li>
                    <li><img src="{{ asset('assets/images/circle.png') }}" alt="">@lang('lang.cet_mar_lay')</li>
                    <li><img src="{{ asset('assets/images/circle.png') }}" alt="">@lang('lang.must_gozlent')</li>
                    <li><img src="{{ asset('assets/images/circle.png') }}" alt="">@lang('lang.kadr')</li>
                    <li><img src="{{ asset('assets/images/circle.png') }}" alt="">@lang('lang.isimizi_sevirik')</li>
                </ul>
            </div>
            <div class="jedai-hr">
                <div class="hr-img">
                    <hr>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="jedai">
                    <hr>
                </div>
            </div>
            <div class="title">
                <h2>@lang('lang.bizimle_emekdasliq')</h2>
                <hr>
            </div>
            <div class="reasons">
                <div class="col-lg-4">
                    <ul>
                        <li><img src="{{ asset('assets/images/check-box.png') }}" alt="">@lang('lang.pesekar_k')</li>
                        <li><img src="{{ asset('assets/images/check-box.png') }}" alt="">@lang('lang.lay_vaxt')</li>
                        <li><img src="{{ asset('assets/images/check-box.png') }}" alt="">@lang('lang.uc_dil')</li>
                        <li><img src="{{ asset('assets/images/check-box.png') }}" alt="">@lang('lang.uzun_mud')</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul>
                        <li><img src="{{ asset('assets/images/check-box.png') }}" alt="">@lang('lang.daimi_inkisaf')
                        </li>
                        <li><img src="{{ asset('assets/images/check-box.png') }}" alt="">@lang('lang.gozlenti')</li>
                        <li><img src="{{ asset('assets/images/check-box.png') }}" alt="">@lang('lang.budce_kenar')</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul>
                        <li><img src="{{ asset('assets/images/check-box.png') }}" alt="">@lang('lang.is_sev')</li>
                        <li><img src="{{ asset('assets/images/check-box.png') }}" alt="">@lang('lang.mesuliyetli')</li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <p>• JedAi sayt hazırlanması işində çox peşəkardır. Bizim hazırladığımız veb saytlar və veb layihələr bütün
                    brauzerlərdə və bütün cihazlarda mükəmməl çalışır və bu cür web saytlar istifadıçilər tərəfdən çox
                    sevilir.</p>
                <p>• Bundan əlavə, biz sayt haziranmasi işini görərkən, gələcəyi də nəzərə alırıq. Hazırladığımız web
                    saytların funksionallığını gələcəkdə rahatlıqla genişləndirə bilirik və bununla biznesinizin inkişafında
                    yardımçı oluruq.</p>
                <p>• Siz bizə sayt sifarişi edərkən, saytınızın və ya veb layihənizin gələcəyi barədə rahat ola bilərsiniz.
                    Gələcəkdə siz yeni veb sayt sifariş etməli olmayacaqsınız. Biz sizin saytınızı istədiyiniz kimi
                    genişləndirib, inkişaf etdirə biləcəyik.</p>
                <p>• Bizə sayt sifarisi etmək üçün, növbəti linkə klik edin <a href="https://wa.me/994709836699"
                        target="_blank">Sayt sifariş et</a> və ya zəng edin <a href="tel:+994709836699">(070) 983 66 99</a>
                </p>
            </div>
        </div>
    </section>
    <section id="partners">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.partnyorlar')</h2>
                <hr />
            </div>
            <div class="partners">
                <div class="row">
                    @foreach ($partners as $partner)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <img src="{{ asset('assets'.$partner->image) }}" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="row">
            <div class="col-lg-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.5978046061073!2d49.90625741489471!3d40.41775986350164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40306351ed002c7b%3A0xc993fbbfe87199e5!2sJedAi.az!5e0!3m2!1sen!2s!4v1650741419317!5m2!1sen!2s"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <div class="title">
                        <h2>@lang('lang.emekdasliq')</h2>
                        <hr>
                    </div>
                    <div class="sub-title">
                        <h3>@lang('lang.bize_mesaj')</h3>
                    </div>
                    <form action="">
                        <div class="col-6">
                            <input type="text" class="form-input" placeholder="@lang('lang.adiniz')*">
                            <input type="text" class="form-input" placeholder="@lang('lang.tel')*">
                            <input type="text" class="form-input" placeholder="@lang('lang.email')*">
                        </div>
                        <div class="col-6">
                            <textarea cols="30" rows="10" placeholder="@lang('lang.mesaj_yaz')"></textarea>
                        </div>
                        <button type="submit" class="btn-send">@lang('lang.gonder')</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
