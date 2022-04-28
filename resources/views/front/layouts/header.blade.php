<header>
    <div class="container">
        <nav>
            <div class="left">
                <div class="logo">
                    <a href="{{ route('homepage', app()->getLocale()) }}"><img
                            src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a>
                </div>
                <div class="logo-blue">
                    <a href=""><img src="{{ asset('assets/images/logo-blue.png') }}" alt="logo-blue" /></a>
                </div>
                <div class="phones">
                    <ul>
                        <li><a href="tel:+994709836699">+994 12 310 15 99</a></li>
                        <li><a href="tel:{{ $setting->tel }}">{{ $setting->tel }}</a></li>
                        <li><a href="tel:{{ $setting->tel2 }}">{{ $setting->tel2 }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="lang">
                    <ul>
                        @if (Request::segment(2) == 'saytlarin-hazirlanmasi' or Request::segment(2) == 'web-development-azerbaijan' or Request::segment(2) == 'sozdaniye-saytov-baku')
                            <li><a href="{{ url('/az/saytlarin-hazirlanmasi') }}">az |</a></li>
                            <li><a href="{{ url('/en/web-development-azerbaijan') }}">en |</a></li>
                            <li><a href="{{ url('/ru/sozdaniye-saytov-baku') }}">ru</a></li>
                        @elseif(Request::segment(2) == 'elaqe' or Request::segment(2) == 'contact' or Request::segment(2) == 'kontakti')
                            <li><a href="{{ url('/az/elaqe') }}">az |</a></li>
                            <li><a href="{{ url('/en/contact') }}">en |</a></li>
                            <li><a href="{{ url('/ru/kontakti') }}">ru</a></li>
                        @else
                            <li><a href="{{ url('/az') }}">az |</a></li>
                            <li><a href="{{ url('/en') }}">en |</a></li>
                            <li><a href="{{ url('/ru') }}">ru</a></li>
                        @endif
                    </ul>
                </div>
                <div class="burger-menu">
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header-overlay">
            <div class="container">
                <div class="top">
                    <div class="logo">
                        <a href=""><img src="{{ asset('assets/images/logo-blue.png') }}" alt=""></a>
                    </div>
                    <div class="close">
                        <ul>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <nav>
                    <ul class="navbar-list">
                        <li><a href="">@lang('lang.esas_sehife')</a></li>
                        <li><a href="">@lang('lang.sayt_haz')</a></li>
                        <li><a href="">@lang('lang.kurs_navbar')</a></li>
                        <li><a href="">@lang('lang.gor_is')</a></li>
                        <li><a href="">@lang('lang.elaqe') </a></li>
                    </ul>
                </nav>
                <div class="bottom">
                    <div class="phones">
                        <a href="tel:+994 12 310 15 99">+994 12 310 15 99</a>
                        <a href="tel:+994 50 983 66 99">+994 50 983 66 99</a>
                        <a href="tel:+994 70 983 66 99">+994 70 983 66 99</a>
                        <a href="mailto:info@jedai.az"> info@jedai.az</a>
                    </div>
                </div>
                <div class="copyright">
                  @lang('lang.muellif_huquqlari')
                </div>
            </div>
        </div>
    </div>
</header>
