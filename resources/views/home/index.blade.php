@extends('home.layouts.app')

@section('title', __('Home'))

@section('content')
    {{-- Block hero --}}
    <div class="grid-hero" id="grid-hero">
        <div class="container-fluid"  style="padding: 0px; overflow: hidden;">
            <div class="row">
                <div class="col-md-12" style="padding-top:{{$agent->isMobile()?'58px':'80px'}}">
                    <img style="width:100% !important" src="{{URL::to('/')}}/images/home/{{$agent->isMobile()?'714x500.jpg':'1912x800.jpg'}}">
                </div>
            </div>
        </div>
    </div>

    {{-- Block call --}}
    <div class="grid-call">
        <div class="container">
            <div class="box-call">
                <h3 class="title" data-cms="{{app()->getLocale()}}-index-24">Over 10 Years Of Working Experience</h3>
                <div class="sapo" style="max-width:740px">
                    <p style="text-align: left" data-cms="{{app()->getLocale()}}-index-26">YoutubeStore has been developed by a team of young, enthusiastic, and professional that help many businesses succeed in different fields.</p>
                    {{-- <p data-cms="{{app()->getLocale()}}-index-27">The number 1 solution for enterprises and company who is looking for a web solution for their business. We value our clients and commited to provide the best services and products</p> --}}
                </div>
                <div class="btn-normal">
                    <a href="/@lang('chanels')" title="Get to know us">
                        <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-30">Danh Sách Kênh</span>
                        <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Block service --}}
    <div class="grid-service servicee">
        <div class="container">
            <div class="grid-service__wrapp">
                <div id="splide-service">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="box-service-home branding">
                                    <div class="box-content row">
                                        <div class="col-12 col-md-12" style="text-align: center">
                                            <iframe  class="img-fluid animated my-video grid-service__image-title" src="https://youtu.be/oITErRInqZM" alt="websites"> </iframe>
                                        </div>
                                        <div class="col-7"></div>
                                        <div class="col-5 col-md-5">
                                            <div class="text">
                                                <div class="animated">
                                                    <p data-cms="{{app()->getLocale()}}-index-51">Your voice is important to us. We ensure to meet all of your needs to create an unique and attrative brand.</p>
                                                </div>
                                                <div class="btn-normal">
                                                    <a href="/@lang('chanels')" title="Danh Sách Kênhe">
                                                        <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-54">Danh Sách Kênh</span>
                                                        <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="splide__slide">
                                <div class="box-service-home branding">
                                    <div class="box-content row">
                                        <div class="col-12 col-md-12" style="text-align: center">
                                            <iframe  class="img-fluid animated my-video grid-service__image-title" src="https://www.youtube.com/embed/tgbNymZ7vqY" alt="websites"> </iframe>
                                        </div>
                                        <div class="col-7"></div>
                                        <div class="col-5 col-md-5">
                                            <div class="text">
                                                <div class="animated">
                                                    <p data-cms="{{app()->getLocale()}}-index-69">Your voice is important to us. We ensure to meet all of your needs to create an unique and attrative brand.</p>
                                                </div>
                                                <div class="btn-normal">
                                                    <a href="/@lang('chanels')" title="Danh Sách Kênhe">
                                                        <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-54">Danh Sách Kênh</span>
                                                        <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li class="splide__slide">
                                <div class="box-service-home marketing">
                                    <div class="box-content row">
                                        <div class="col-12 col-md-12" style="text-align: center">
                                            <iframe  class="img-fluid animated my-video grid-service__image-title" src="https://www.youtube.com/embed/tgbNymZ7vqY" alt="websites"> </iframe>
                                        </div>
                                        <div class="col-7"></div>
                                        <div class="col-5 col-md-5">
                                            <div class="text">
                                                <div class="animated">
                                                    <p data-cms="{{app()->getLocale()}}-index-87">Reach the full potential of your business by ultilizing our digital marketing solution.</p>
                                                </div>
                                                <div class="btn-normal">
                                                    <a href="/@lang('chanels')" title="Danh Sách Kênh">
                                                        <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-54">Danh Sách Kênh</span>
                                                        <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home.includes.consultation')
@endsection
