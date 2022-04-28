<footer>
    <div class="container">
        <div class="footer-nav">
            <div class="col-md-7">
                <ul>
                    <li><a href="">@lang('lang.esas_sehife')</a></li>
                    <li><a href="">@lang('lang.sayt_haz')</a></li>
                    <li><a href="">@lang('lang.kurs_navbar')</a></li>
                    <li><a href="">@lang('lang.elaqe') </a></li>
                    <li><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                </ul>
                <div class="phones">
                    <a href="tel:{{ $setting->tel }}">{{ $setting->tel }}</a><a href="tel:+994509836699">{{ $setting->tel2 }}</a><a href="+994709836699">{{ $setting->tel2 }}</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="social">
                    <ul>
                        <li><a href="https://wa.me/123456789" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a></li>
                        <li><a href="http://facebook.com" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a></li>
                        <li><a href="http://instagram.com" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a></li>
                        <li><a href="http://linkedin.com" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a></li>
                        <li><a href="http://telegram.org" target="_blank">
                                <i class="fab fa-telegram"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="copyright">
            <p>@lang('lang.muellif_huquqlari')</p>
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
        </div>
    </div>
</footer>
