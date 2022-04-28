@extends('front.layouts.master')

@section('content')
    <section id="header">
        <div class="container">
            <div class="title">
                <h1> @lang('lang.elaqe_mel')</h1>
            </div>
        </div>
        <div class="go_to_bottom">
            <div class="container">
                <div class="content">
                    <p style="display: flex; align-items: center; width: 100%;">
                        <img src="{{ asset('assets/images/phone.png') }}" width="25" style="margin-right: 20px;" alt=""><a
                            href="tel:{{ $setting->tel }}">{{ $setting->tel }}</a> <span class="line">|</span> <a href="tel:{{ $setting->tel2 }}">{{ $setting->tel2 }}
                        </a> <span class="line">|</span> <a href="tel:{{ $setting->tel2 }}">{{ $setting->tel2 }}</a>
                    </p>
                    <p style="display: flex; align-items: center; width: 100%;">
                        <img src="{{ asset('assets/images/location.png') }}" width="25" style="margin-right: 20px;" alt="">
                        <a href="https://www.google.com/maps/place/JedAi.az/@40.3905621,49.8914718,15z/data=!4m2!3m1!1s0x0:0xc993fbbfe87199e5?sa=X&ved=2ahUKEwjU8d6UrcPtAhXxoosKHc9XDxYQ_BIwGHoECCQQBQ"
                            target="_blank">{{ $setting->address }}</a>
                    </p>
                    <p style="display: flex; align-items: center; width: 100%;">
                        <img src="{{ asset('assets/images/clock.png') }}" width="25" style="margin-right: 20px;" alt="">
                        <a>Bazar Ertəsi - Cümə | 08:30 - 17:30</a>
                    </p>
                    <p style="display: flex; align-items: center; width: 100%;">
                        <img src="{{ asset('assets/images/envelope.png') }}" width="25" style="margin-right: 20px;" alt="">
                        <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.5978046061073!2d49.90625741489471!3d40.41775986350164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40306351ed002c7b%3A0xc993fbbfe87199e5!2sJedAi.az!5e0!3m2!1sen!2s!4v1650741419317!5m2!1sen!2s"
            height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
