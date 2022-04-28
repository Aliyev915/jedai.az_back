@extends('front.layouts.master')

@section('content')
    <section id="header">
        <div class="container">
            <div class="title">
                <h1>@lang('lang.gor_is')</h1>
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
@endsection
