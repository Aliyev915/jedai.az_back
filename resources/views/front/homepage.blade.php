@extends('front.layouts.master')

@section('content')
    <section id="header">
        <div class="container">
            <div class="title">
                <h1>@lang('lang.card2_title')</h1>
            </div>
            <div class="description">
                <p>
                    @lang('lang.muasir_reqemsal')
                </p>
                <br />
                <p>
                    @lang('lang.muasir_reqemsal_2')
                </p>
            </div>
        </div>
        <div class="go_to_bottom">
            <div class="container">
                <div class="content">
                    <p>
                        @lang('lang.muasir_reqemsal_2')
                    </p>
                    <a href="#what_we_do"><img src="{{ asset('assets/images/arrow-down.png') }}" alt="" /></a>
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
    <section id="technologies">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.tex')</h2>
                <hr />
            </div>
            <div class="technologies">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="technology">
                            <div class="tech-title">
                                <h3>@lang('lang.back')</h3>
                                <hr />
                            </div>
                            <div class="tech-content">
                                <div class="item">
                                    <img src="{{ asset('assets/images/php.png') }}"
                                        alt="php" /><span>@lang('lang.php')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/laravel.png') }}"
                                        alt="laravel" /><span>@lang('lang.laravel')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/j.png') }}"
                                        alt="jedcms" /><span>@lang('lang.jedcms')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/open-cart.png') }}"
                                        alt="open-cart" /><span>@lang('lang.opencart')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/bitrix.png') }}"
                                        alt="bitrix" /><span>@lang('lang.bitrix')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="technology">
                            <div class="tech-title">
                                <h3>@lang('lang.front')</h3>
                                <hr />
                            </div>
                            <div class="tech-content">
                                <div class="item">
                                    <img src="{{ asset('assets/images/js.png') }}"
                                        alt="js" /><span>@lang('lang.js')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/react.png') }}"
                                        alt="react" /><span>@lang('lang.react')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/next-js.png') }}"
                                        alt="next-js" /><span>@lang('lang.next')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/jquery.png') }}"
                                        alt="jquery" /><span>@lang('lang.jquery')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/bootstrap.png') }}"
                                        alt="bootstrap" /><span>@lang('lang.bootstrap')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="technology">
                            <div class="tech-title">
                                <h3>@lang('lang.seo')</h3>
                                <hr />
                            </div>
                            <div class="tech-content">
                                <div class="item">
                                    <img src="{{ asset('assets/images/semrush.png') }}"
                                        alt="semrush" /><span>@lang('lang.semrush')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/serpstat.png') }}"
                                        alt="serpstat" /><span>@lang('lang.serpstat')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/frog.png') }}"
                                        alt="screaming-frog" /><span>@lang('lang.screaming')</span>
                                </div>
                                <div class="item">
                                    <img src="" /><span>@lang('lang.google')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/yandex.png') }}"
                                        alt="yandex-direct" /><span>@lang('lang.yandex')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="technology">
                            <div class="tech-title">
                                <h3>@lang('lang.smm_target')</h3>
                                <hr />
                            </div>
                            <div class="tech-content">
                                <div class="item">
                                    <img src="{{ asset('assets/images/agile.png') }}"
                                        alt="agile" /><span>@lang('lang.agile')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/scrum.png') }}"
                                        alt="scrum" /><span>@lang('lang.scrum')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/kanban.png') }}"
                                        alt="kanban" /><span>@lang('lang.kanban')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/jira.png') }}"
                                        alt="jira" /><span>@lang('lang.jira')</span>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/confluence.png') }}"
                                        alt="confluence" /><span>@lang('lang.confluence')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-us">
        <div class="container">
            <div class="title">
                <h2>Haqqımızda</h2>
                <hr>
            </div>
            <div class="about-us">
                <ul>
                    <li>2018-ci ilin Yanvar ayından başlayaraq veb proqramlaşdırma sahəsində fəaliyyətə başlamışıq və hər
                        gün
                        yeni layihələr üzərində çalışaraq sürətlə inkişaf edirik və hər gün yeni təcrübələr əldə edirik.
                    </li>
                    <li>Agile metodologiyasının Scrum və Kanban metodlarından istifadə edərək, layihələri tam şəffaf şəkildə
                        və
                        vaxtında yerinə yetiririk.</li>
                    <li>Əsas məqsədlərimizdən biri, ölkəmizdə veb proqramlaşdırma və rəqəmsal marketinq sahələrini inkişaf
                        etdirib, Rusiya və qərb ölkələri səviyyəsinə çatdırmaqdır. Biz bu istiqamətdə hər gün çalışırıq və
                        günü
                        gündən məqsədimizə yaxınlaşırıq.</li>
                    <li>Digər məqsədimiz isə proqramçı olmaq istəyən gənclərimizə bilik və təcrübəmizi ötürərək, onlardan
                        yüksək
                        səviyyəli və peşakar developerlər yetişdirməkdir. Bu məqsədlə biz <a href="https://jedacademy.az"
                            target="_blank" style="text-decoration: underline;">"JedAcademy"</a> tədris mərkəzini yaratdıq.
                    </li>
                </ul>
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
    <section id="why_we">
        <div class="container">
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
                        <li><img src="{{ asset('assets/images/check-box.png') }}" alt="">@lang('lang.daimi_inkisaf')</li>
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
        </div>
    </section>
    <section id="partners">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.partnyorlar')</h2>
                <hr>
            </div>
            <div class="partners">
                <div class="row">
                    @foreach ($partners as $partner)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <img src="{{ asset('assets' . $partner->image) }}" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="recommendation">
        <div class="container">
            <div class="title">
                <h2>@lang('lang.bizi_tovsiye')</h2>
                <hr>
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
                    <form method="POST" id="demo-form" action="{{ route('send.message') }}">
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
