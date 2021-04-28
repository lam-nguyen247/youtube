@extends('home.layouts.app')

@section('title', __('Home'))

@section('content')
    {{-- Block hero --}}
    <div class="grid-hero" id="grid-hero">
        <div id="grid-hero-banner">
        </div>
    </div>

    {{-- Block call --}}
    <div class="grid-call">
        <div class="container">
            <div class="box-call">
                <h3 class="title" data-cms="{{app()->getLocale()}}-index-24">Tại sao nên sở hữu một kênh youtube</h3>
                <div class="sapo" style="max-width:740px">
                    <p style="text-align: left" data-cms="{{app()->getLocale()}}-index-26">Youtube tạo nên thương hiệu cho Sản Phẩm, Doanh Nghiệm của bạn.
                        Youtube đem lại doanh thu với tính năng kiếm tiền trên Youtube.
                        Đưa Sản Phẩm, Doanh Nghiệp của bạn đến với khách hàng mà không tốn phí.
                        Giúp khách hàng đánh giá, nhìn nhận đúng và rõ hơn về Sản Phẩm, Doanh Nghiệp</p>
                </div>
                <div class="btn-normal">
                    <a href="/@lang('channels')" title="Get to know us">
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
                                            <iframe width="100%" height="600px" src="https://www.youtube.com/embed/oITErRInqZM?start=60" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="col-7"></div>
                                        <div class="col-5 col-md-5">
                                            <div class="text">
                                                <div class="animated">
                                                    <p data-cms="{{app()->getLocale()}}-index-51"></p>
                                                </div>
                                                <div class="btn-normal">
                                                    <a href="/@lang('channels')" title="Danh Sách Kênh">
                                                        <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-54">Danh Sách Kênh</span>
                                                        <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home.includes.consultation')
@endsection
