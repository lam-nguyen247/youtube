<!DOCTYPE html>
<html lang="{{session('locale', $config->locale)}}" data-theme="{{session('theme', $config->theme)}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="sp55spD2C7qqScAArM8ME4KG2Y-mkT0zYAu9GLJOMQA" />
    @isset($seo)
        <title>{{$seo->title}}</title>
        <meta name="description" content="{{$seo->description}}">
        <meta name="robots" content="{{$seo->robots}}" />
    @else
        <title>@yield('title') - {{config('app.name')}}</title>
        <meta name="description" content="@yield('title') - {{config('app.name')}}">
    @endif
    @cms
    <meta name="author" content="duongvalo">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/admin/favicon.png">
    <link rel="canonical" href="{{request()->url()}}">
    <!-- Custom CSS -->
    <link href="/css/home/app.min.css" rel="stylesheet">
    @yield('css')
</head>
<body id="body-site">
<svg aria-hidden="true" class="common-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <symbol id="icon-quotes-left" viewbox="0 0 32 32">
            <path d="M7.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.357-0.056 0.724-0.086 1.097-0.086zM25.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.358-0.056 0.724-0.086 1.097-0.086z"></path>
        </symbol>
        <symbol id="icon-send" viewbox="0 0 18 18">
            <path d="M15.9488 0.738308L1.26884 6.87831C0.43884 7.22831 0.45884 8.40831 1.28884 8.72831L6.62884 10.7983C6.88884 10.8983 7.09884 11.1083 7.19884 11.3683L9.25884 16.6983C9.57884 17.5383 10.7688 17.5583 11.1188 16.7283L17.2688 2.05831C17.5988 1.22831 16.7688 0.398308 15.9488 0.738308Z"></path>
        </symbol>
        <symbol id="icon-plus" viewbox="0 0 24 24">
            <path xmlns="http://www.w3.org/2000/svg" d="M12 3C11.45 3 11 3.45 11 4V11H4C3.45 11 3 11.45 3 12C3 12.55 3.45 13 4 13H11V20C11 20.55 11.45 21 12 21C12.55 21 13 20.55 13 20V13H20C20.55 13 21 12.55 21 12C21 11.45 20.55 11 20 11H13V4C13 3.45 12.55 3 12 3Z"></path>
        </symbol>
        <symbol id="icon-expand-more" viewbox="0 0 24 14">
            <path xmlns="http://www.w3.org/2000/svg" d="M4.25078 13.1479L12.0108 5.38794L19.7708 13.1479C20.1444 13.5224 20.6517 13.7329 21.1808 13.7329C21.7098 13.7329 22.2171 13.5224 22.5908 13.1479C23.3708 12.3679 23.3708 11.1079 22.5908 10.3279L13.4108 1.14794C12.6308 0.367938 11.3708 0.367938 10.5908 1.14794L1.41078 10.3279C0.630781 11.1079 0.630781 12.3679 1.41078 13.1479C2.19078 13.9079 3.47078 13.9279 4.25078 13.1479Z"></path>
        </symbol>
        <symbol id="icon-facebook" viewbox="0 0 17 17">
            <path xmlns="http://www.w3.org/2000/svg" d="M26.0998 12.4367C26.0998 11.089 24.9107 9.8999 23.563 9.8999H13.3366C11.9889 9.8999 10.7998 11.089 10.7998 12.4367V22.6631C10.7998 24.0108 11.9889 25.1999 13.3366 25.1999H18.4894V19.4129H16.5869V16.8761H18.4894V15.8455C18.4894 14.1015 19.7578 12.5952 21.3433 12.5952H23.4045V15.132H21.3433C21.1055 15.132 20.8677 15.3698 20.8677 15.8455V16.8761H23.4045V19.4129H20.8677V25.1999H23.563C24.9107 25.1999 26.0998 24.0108 26.0998 22.6631V12.4367Z"></path>
        </symbol>
        <symbol id="icon-arrow" viewbox="0 0 16 16">
            <path xmlns="http://www.w3.org/2000/svg" d="M1.20898 9.0002H12.379L7.49898 13.8802C7.10898 14.2702 7.10898 14.9102 7.49898 15.3002C7.88898 15.6902 8.51898 15.6902 8.90898 15.3002L15.499 8.7102C15.889 8.3202 15.889 7.6902 15.499 7.3002L8.91898 0.7002C8.73215 0.512948 8.4785 0.407715 8.21398 0.407715C7.94947 0.407715 7.69582 0.512948 7.50898 0.7002C7.11898 1.0902 7.11898 1.7202 7.50898 2.1102L12.379 7.0002H1.20898C0.658984 7.0002 0.208984 7.4502 0.208984 8.0002C0.208984 8.5502 0.658984 9.0002 1.20898 9.0002Z"></path>
        </symbol>
        <symbol id="icon-close" viewbox="0 0 10 10">
            <path xmlns="http://www.w3.org/2000/svg" d="M9.72504 0.282528C9.58492 0.142089 9.39468 0.0631641 9.19629 0.0631641C8.9979 0.0631641 8.80766 0.142089 8.66754 0.282528L5.00004 3.94253L1.33254 0.275028C1.19242 0.134589 1.00218 0.0556641 0.803789 0.0556641C0.605401 0.0556641 0.415163 0.134589 0.275039 0.275028C-0.0174609 0.567528 -0.0174609 1.04003 0.275039 1.33253L3.94254 5.00003L0.275039 8.66753C-0.0174609 8.96003 -0.0174609 9.43253 0.275039 9.72503C0.567539 10.0175 1.04004 10.0175 1.33254 9.72503L5.00004 6.05753L8.66754 9.72503C8.96004 10.0175 9.43254 10.0175 9.72504 9.72503C10.0175 9.43253 10.0175 8.96003 9.72504 8.66753L6.05754 5.00003L9.72504 1.33253C10.01 1.04753 10.01 0.567528 9.72504 0.282528Z"></path>
        </symbol>
        <symbol id="icon-chevron-up" viewbox="0 0 28 28">
            <path d="M26.297 20.797l-2.594 2.578c-0.391 0.391-1.016 0.391-1.406 0l-8.297-8.297-8.297 8.297c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.578c-0.391-0.391-0.391-1.031 0-1.422l11.594-11.578c0.391-0.391 1.016-0.391 1.406 0l11.594 11.578c0.391 0.391 0.391 1.031 0 1.422z"></path>
        </symbol>
    </defs>
</svg>
<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

    {{-- icon --}}
    <label id="navigation__button" for="navi-toggle" class="navigation__button">
        <span class="navigation__icon"></span>
    </label>
    <div id="navigation__background" class="navigation__background"></div>
    <h3 id="navigation__title" class="navigation__title" data-cms="{{app()->getLocale()}}-layouts-app-23">Let's talk</h3>

    {{-- language --}}
    <div class="navigation__language language-picker js-language-picker" data-trigger-class="btn btn--subtle js-tab-focus">
        <button class="language-picker__button" onclick="toggleDropdown()">
            <img class="img-fluid" @src="/images/home/flag_{{app()->getLocale()}}.png" alt="image">
            <em>{{app()->getLocale() == 'en' ? __('English') : __('Vietnamese')}}</em>
            <svg viewBox="0 0 16 16" class="icon"><polygon points="3,5 8,11 13,5 "></polygon></svg>
        </button>
        <div id="language-content" class="dropdown-content">
            <ul class="language-picker__list">
                <li>
                    <a href="/en" title="@lang('English')">
                        <img class="img-fluid" @src="/images/home/flag_en.png" alt="@lang('English')">
                        <span>@lang('English')</span>
                    </a>
                </li>
                <li>
                    <a href="/vi" title="@lang('Vietnamese')">
                        <img class="img-fluid" @src="/images/home/flag_vi.png" alt="@lang('Vietnamese')">
                        <span>@lang('Vietnamese')</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Dark/Light mode --}}
    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" {{session('theme') == 'dark' ? 'checked' : '' }}>
            <div class="slider round">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="0.502638in" height="0.501575in" version="1.1" viewbox="0 0 502.64 501.57">
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path class="fil0" d="M500.62 322.06c-38.53,9.01 -72.33,40.44 -155.22,25.45 -51.69,-9.35 -97.71,-37.16 -124.62,-64.83 -63.29,-65.09 -86.84,-158.41 -52.58,-248.15 3.59,-9.4 11.11,-21.61 13.05,-31.98 -85.44,28.76 -144,83.86 -171.61,170.21 -33.74,105.52 11.37,203.76 63.6,257.39 128.48,131.92 374.62,82.21 427.37,-108.09z"></path>
                    </g>
                </svg>
            </div>
        </label>
    </div>

    {{-- logo --}}
    <div id="navigation__logo" class="navigation__logo">
        <a href="/" title="logo">
            <img class="img-fluid" @src="/images/home/logo-black.png" alt="{{config('app.name')}}">
        </a>
    </div>
    <nav class="navigation__nav">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="navigation__flex">
                        <div class="navigation__content">
                            <h4 class="navigation__lable" data-cms="{{app()->getLocale()}}-layouts-app-47">Menu</h4>
                            <ul class="navigation__list" id="navi-menu">
                                <li class="navigation__item active">
                                    <a href="/@lang('about-us')" class="navigation__link" data-@src="/images/home/menu-about.png">@lang('About Us')</a>
                                </li>
                                <li class="navigation__item">
                                    <a href="/@lang('chanels')" class="navigation__link" data-@src="/images/home/menu-website.png">@lang('Chanels')</a>
                                </li>
                                <li class="navigation__item">
                                    <a href="/@lang('buy-chanels')" class="navigation__link" data-@src="/images/home/menu-brand.png">@lang('Buy-Chanels')</a>
                                </li>
                                <li class="navigation__item">
                                    <a href="/@lang('news')" class="navigation__link" data-@src="/images/home/menu-news.png">@lang('News')</a>
                                </li>
                                <li class="navigation__item">
                                    <a href="/@lang('contact')" class="navigation__link" data-@src="/images/home/menu-contact.png">@lang('Contact')</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="navigation__flex">
                        <div class="navigation__content">
                            <div class="navigation__image">
                                <img id="menu-image" class="img-fluid" @src="/images/home/menu-about.png" alt="Images" data-cms="{{app()->getLocale()}}-layouts-app-65">
                            </div>
                            <div class="navigation__info">
                                <ul class="navigation-list">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{$config->phone}}" title="Số điện thoại" data-cms="{{app()->getLocale()}}-layouts-app-70">{{$config->phone}}</a></li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <span data-cms="{{app()->getLocale()}}-layouts-app-73">Email:</span> <a href="mailto:lnguyen24794@gmail.com" title="Email" data-cms="{{app()->getLocale()}}-layouts-app-74">lnguyen24794@gmail.com</a></li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> <span data-cms="{{app()->getLocale()}}-layouts-app-77">2530 10th Ct SE Olympia WA 98501</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<header id="header" class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="header__logo-box d-flex align-items-center">
                    <a href="/" title="logo">
                        <img class="img-fluid" @src="/images/home/logo-white.png" alt="{{config('app.name')}}">
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="header__nav"></div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="grid-head">
                        <h3 class="title" data-cms="{{app()->getLocale()}}-layouts-app-93">HAVE AN <br> IDEAS ?</h3>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="footer-content">
                        <h3 class="title" data-cms="{{app()->getLocale()}}-layouts-app-96">Contact</h3>
                        <ul class="footer-list">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <span data-cms="{{app()->getLocale()}}-layouts-app-100">2530 10th Ct SE Olympia WA 98501</span></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{$config->phone}}" title="Số điện thoại" data-cms="{{app()->getLocale()}}-layouts-app-103">{{$config->phone}}</a></li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <span data-cms="{{app()->getLocale()}}-layouts-app-106">Email:</span> <a href="mailto:lnguyen24794@gmail.com" title="Email" data-cms="{{app()->getLocale()}}-layouts-app-107">lnguyen24794@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <div class="footer-content">
                        <h3 class="title">@lang('About')</h3>
                        <ul class="footer-list">
                            <li><a href="/@lang('about-us')" title="@lang('About us')">@lang('About Us')</a></li>
                            <li><a href="/@lang('news')" title="@lang('News')">@lang('News')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="footer-content">
                        <h3 class="title">@lang('Services')</h3>
                        <ul class="footer-list">
                            <li><a href="/@lang('chanels')" title="@lang('Chanels')">@lang('Chanels')</a></li>
                            <li><a href="/@lang('buy-chanels')" title="@lang('Buy-Chanels')">@lang('Buy-Chanels')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-8 col-md-3 col-lg-2">
                    <div class="footer-content">
                        <h3 class="title">@lang('Follow us')</h3>
                        <ul class="footer-list footer-list--social">
                            <li>
                                <a class="facebook" href="javascript:void(0)" title="facebook">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewbox="0 0 17 17" fill="none">
                                        <path d="M16.0998 3.43669C16.0998 2.08902 14.9107 0.899902 13.563 0.899902H3.33659C1.98892 0.899902 0.799805 2.08902 0.799805 3.43669V13.6631C0.799805 15.0108 1.98892 16.1999 3.33659 16.1999H8.48944V10.4129H6.58685V7.87607H8.48944V6.8455C8.48944 5.10146 9.75784 3.59523 11.3433 3.59523H13.4045V6.13202H11.3433C11.1055 6.13202 10.8677 6.36985 10.8677 6.8455V7.87607H13.4045V10.4129H10.8677V16.1999H13.563C14.9107 16.1999 16.0998 15.0108 16.0998 13.6631V3.43669Z" fill="white"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="instagram" href="javascript:void(0)" title="instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewbox="0 0 17 17" fill="none">
                                        <path d="M13.9225 0.799805H2.97711C1.74134 0.799805 0.799805 1.74134 0.799805 2.97711V13.9225C0.799805 15.1583 1.74134 16.0998 2.97711 16.0998H13.9225C15.1583 16.0998 16.0998 15.1583 16.0998 13.9225V2.97711C16.0998 1.74134 15.1583 0.799805 13.9225 0.799805ZM8.4498 13.0398C10.9802 13.0398 13.0398 11.039 13.0398 8.62634C13.0398 8.21442 12.981 7.74365 12.8633 7.39057H14.1579V13.6283C14.1579 13.9225 13.9225 14.2167 13.5694 14.2167H3.33019C3.03596 14.2167 2.74173 13.9813 2.74173 13.6283V7.33173H4.09519C3.9775 7.74365 3.91865 8.15557 3.91865 8.5675C3.85981 11.039 5.91942 13.0398 8.4498 13.0398ZM8.4498 11.2744C6.80211 11.2744 5.5075 9.9798 5.5075 8.39096C5.5075 6.80211 6.80211 5.5075 8.4498 5.5075C10.0975 5.5075 11.3921 6.80211 11.3921 8.39096C11.3921 10.0387 10.0975 11.2744 8.4498 11.2744ZM14.099 4.97788C14.099 5.33096 13.8048 5.62519 13.4517 5.62519H11.804C11.451 5.62519 11.1567 5.33096 11.1567 4.97788V3.38904C11.1567 3.03596 11.451 2.74173 11.804 2.74173H13.4517C13.8048 2.74173 14.099 3.03596 14.099 3.38904V4.97788Z" fill="white"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="youtube" href="javascript:void(0)" title="youtube">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewbox="0 0 17 13" fill="none">
                                        <path d="M16.8422 5.02191C16.8422 4.67282 16.784 4.26555 16.784 3.8001C16.7259 3.33464 16.6677 2.86919 16.6095 2.46191C16.4931 1.99646 16.3186 1.64737 15.9695 1.35646C15.6786 1.06555 15.2713 0.891003 14.864 0.832821C13.5258 0.658276 11.5477 0.600098 8.87131 0.600098C6.19494 0.600098 4.15857 0.658276 2.87857 0.832821C2.4713 0.891003 2.06403 1.06555 1.77312 1.35646C1.48221 1.64737 1.24948 1.99646 1.13311 2.46191C1.01675 2.86919 0.958576 3.27646 0.958576 3.8001C0.900394 4.26555 0.900391 4.67282 0.900391 5.02191C0.900391 5.371 0.900391 5.77828 0.900391 6.36009C0.900391 6.94191 0.900391 7.40737 0.900391 7.69828C0.900391 8.04737 0.958576 8.45465 0.958576 8.9201C1.01676 9.38555 1.07493 9.851 1.13311 10.2583C1.24948 10.7237 1.42403 11.0728 1.77312 11.3637C2.06403 11.6546 2.4713 11.8292 2.87857 11.8874C4.21675 12.0619 6.19494 12.1201 8.87131 12.1201C11.5477 12.1201 13.584 12.0619 14.864 11.8874C15.2713 11.8292 15.6786 11.6546 15.9695 11.3637C16.2604 11.0728 16.4931 10.7237 16.6095 10.2583C16.7258 9.851 16.784 9.44374 16.784 8.9201C16.8422 8.45465 16.8422 8.04737 16.8422 7.69828C16.8422 7.34919 16.8422 6.94191 16.8422 6.36009C16.8422 5.77828 16.8422 5.31282 16.8422 5.02191ZM11.9549 6.82555L7.35858 9.67646C7.30039 9.73464 7.18403 9.79283 7.06767 9.79283C6.9513 9.79283 6.89312 9.79282 6.77676 9.73464C6.60221 9.61828 6.48585 9.44374 6.48585 9.21101V3.451C6.48585 3.21828 6.60221 3.04373 6.77676 2.92737C6.9513 2.81101 7.18403 2.81101 7.35858 2.92737L11.9549 5.77828C12.1295 5.89464 12.2458 6.06919 12.2458 6.24373C12.2458 6.41828 12.1295 6.70919 11.9549 6.82555Z" fill="white"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" href="javascript:void(0)" title="twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewbox="0 0 19 15" fill="none">
                                        <path d="M18.5404 2.41019C17.9104 2.68019 17.1904 2.8602 16.4704 2.9502C17.1904 2.5002 17.8204 1.7802 18.0904 0.970198C17.3704 1.4202 16.6504 1.6902 15.7504 1.8702C15.1204 1.1502 14.1304 0.700195 13.1404 0.700195C11.1604 0.700195 9.54038 2.3202 9.54038 4.3002C9.54038 4.5702 9.54039 4.84019 9.63039 5.11019C6.66039 4.93019 3.96039 3.49019 2.16039 1.33019C1.89039 1.87019 1.71039 2.50019 1.71039 3.13019C1.71039 4.39019 2.34039 5.4702 3.33039 6.1002C2.70039 6.1002 2.16039 5.9202 1.71039 5.6502C1.71039 7.3602 2.97038 8.89019 4.59038 9.16019C4.32038 9.25019 3.96039 9.2502 3.60039 9.2502C3.33039 9.2502 3.15039 9.25019 2.88039 9.16019C3.33039 10.6002 4.68039 11.6802 6.30039 11.6802C5.04039 12.6702 3.51039 13.2102 1.80039 13.2102C1.53039 13.2102 1.26039 13.2102 0.900391 13.1202C2.52039 14.1102 4.41039 14.7402 6.48039 14.7402C13.1404 14.7402 16.7404 9.25019 16.7404 4.48019V4.03019C17.4604 3.76019 18.0904 3.13019 18.5404 2.41019Z" fill="white"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="google" href="javascript:void(0)" title="google">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18" fill="none">
                                        <path d="M9.30788 7.5974V11.1599H14.1529C13.4404 13.0837 11.5879 14.3662 9.45039 14.3662C6.67164 14.3662 4.46289 12.1574 4.46289 9.37865C4.46289 6.5999 6.67164 4.39115 9.45039 4.39115C10.5191 4.39115 11.5166 4.7474 12.3716 5.3174L12.6566 5.53115L14.7941 2.7524L14.5091 2.53865C13.0129 1.4699 11.3029 0.899902 9.45039 0.899902C4.74789 0.899902 0.900391 4.7474 0.900391 9.4499C0.900391 14.1524 4.74789 17.9999 9.45039 17.9999C14.1529 17.9999 18.0004 14.1524 18.0004 9.4499V7.66865H9.30788V7.5974Z" fill="white"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="linkedin" href="javascript:void(0)" title="linkedin">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewbox="0 0 15 14" fill="none">
                                        <path d="M14.1992 8.66976V13.6339H11.2934V8.97245C11.2934 7.82223 10.8696 7.03523 9.84048 7.03523C9.05348 7.03523 8.56917 7.58008 8.38756 8.06438C8.32702 8.246 8.26649 8.48815 8.26649 8.79084V13.6339H5.36065C5.36065 13.6339 5.42119 5.76393 5.36065 4.97694H8.26649V6.1877C8.62971 5.58232 9.35617 4.73478 10.8696 4.73478C12.7463 4.73478 14.1992 6.00608 14.1992 8.66976ZM2.33375 0.799805C1.36514 0.799805 0.699219 1.46572 0.699219 2.31326C0.699219 3.16079 1.3046 3.82671 2.27321 3.82671C3.30236 3.82671 3.90774 3.16079 3.90774 2.31326C3.96828 1.40519 3.36289 0.799805 2.33375 0.799805ZM0.880833 13.6339H3.78666V4.97694H0.880833V13.6339Z" fill="white"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="skype" href="javascript:void(0)" title="skype">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewbox="0 0 19 19" fill="none">
                                        <path d="M18.2864 10.9615C18.3477 10.4706 18.4091 10.041 18.4091 9.5501C18.4091 4.64101 14.4205 0.591007 9.45 0.591007C8.95909 0.591007 8.52955 0.65237 8.03864 0.713734C7.24091 0.284189 6.38182 0.100098 5.52273 0.100098C2.45455 0.100098 0 2.55464 0 5.62283C0 6.48192 0.184091 7.34101 0.613636 8.13873C0.552273 8.62964 0.490909 9.05919 0.490909 9.5501C0.490909 14.4592 4.47955 18.5092 9.45 18.5092C9.94091 18.5092 10.3705 18.4478 10.8614 18.3865C11.6591 18.7546 12.5182 19.0001 13.3773 19.0001C16.4455 19.0001 18.9 16.5456 18.9 13.4774C18.9 12.6183 18.6545 11.7592 18.2864 10.9615ZM13.1932 12.8024C13.0091 13.1706 12.7636 13.4774 12.3955 13.7228C12.0273 13.9683 11.6591 14.1524 11.1682 14.2751C10.6773 14.3978 10.125 14.4592 9.51136 14.4592C8.22273 14.4592 7.17955 14.1524 6.44318 13.6001C6.01364 13.2319 5.64545 12.8024 5.46136 12.2501C5.21591 11.7592 5.64545 11.1456 6.25909 11.1456H6.44318C6.81136 11.1456 7.17955 11.391 7.30227 11.6978C7.425 12.0046 7.60909 12.2501 7.85455 12.4342C8.22273 12.741 8.775 12.8637 9.45 12.8637C10.0636 12.8637 10.5545 12.741 10.9227 12.5569C11.2909 12.3728 11.475 12.0046 11.475 11.6365C11.475 11.4524 11.4136 11.3296 11.3523 11.2069C11.2909 11.0842 11.1068 10.9615 10.9841 10.9001C10.8 10.7774 10.6159 10.716 10.3091 10.6546C10.0636 10.5933 9.75682 10.4706 9.38864 10.4092L9.02045 10.2865C8.59091 10.1637 8.1 10.041 7.73182 9.91828C7.30227 9.79555 6.93409 9.61146 6.62727 9.42737C6.32045 9.24328 6.075 8.99782 5.89091 8.62964C5.70682 8.32282 5.64545 7.89328 5.64545 7.40237C5.64545 6.91146 5.76818 6.48192 5.95227 6.11373C6.13636 5.74555 6.44318 5.43873 6.75 5.25464C7.11818 5.00919 7.48636 4.8251 7.97727 4.76373C8.40682 4.64101 8.89773 4.57964 9.45 4.57964C10.0636 4.57964 10.5545 4.64101 11.0455 4.76373C11.5364 4.88646 11.9045 5.07055 12.2727 5.37737C12.6409 5.62283 12.8864 5.92964 13.0705 6.35919C13.3773 6.91146 12.9477 7.64783 12.2727 7.64783H12.0886C11.7205 7.64783 11.4136 7.46373 11.2295 7.15692C11.1068 6.97283 10.9841 6.78873 10.8 6.60464C10.4932 6.35919 10.0023 6.23646 9.45 6.23646C8.89773 6.23646 8.46818 6.35919 8.16136 6.54328C7.85455 6.72737 7.73182 7.03419 7.73182 7.34101C7.73182 7.5251 7.79318 7.64783 7.85455 7.77055C7.91591 7.89328 8.03864 8.01601 8.22273 8.07737C8.40682 8.13873 8.59091 8.26146 8.83636 8.32282C9.08182 8.38419 9.38864 8.44555 9.75682 8.56828C10.125 8.62964 10.4318 8.75237 10.8 8.81373C11.1068 8.8751 11.4136 8.99783 11.7205 9.05919C12.0273 9.18192 12.2727 9.30464 12.5182 9.42737C12.7636 9.5501 12.9477 9.73419 13.1318 9.91828C13.3159 10.1024 13.4386 10.3478 13.5 10.5933C13.6227 10.8387 13.6227 11.2069 13.6227 11.5751C13.5 12.0046 13.3773 12.4342 13.1932 12.8024Z" fill="white"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>@lang('Design by') YoutubeStore</p>
    </div>
</footer>
<a id="scrolltop" class="scroll-top" onclick="document.documentElement.scrollIntoView({ behavior: 'smooth' });">
    <svg class="icon icon-chevron-up"><use xlink:href="#icon-chevron-up"></use></svg>
</a>
<div class="overlay" id="modal-overlay"></div>
<div class="modal" id="modal-form">
    <button class="modal-close-btn" id="close-btn">
        <svg class="icon"><use xlink:href="#icon-close"></use></svg>
    </button>
    <div class="modal-content">
        <div class="grid-head">
            <h3 class="title" data-cms="{{app()->getLocale()}}-layouts-app-171">NEED CONSULTANCY?</h3>
            <div class="sapo">
                <p data-cms="{{app()->getLocale()}}-layouts-app-173">Stop hesitating and increase your sales with YOUTUBESTORE!</p>
                <p data-cms="{{app()->getLocale()}}-layouts-app-174">Fill out our form below or send us an email.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="modal-content__form">
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number/ Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="5" placeholder="Tell us about your project."></textarea>
                        </div>
                        <div class="form-group">
                            <div class="btn-normal">
                                <button class="btn button-submit" type="submit">
                                    <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-layouts-app-188">Send to US</span>
                                    <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="modal-content__image">
                    <img @src="/images/home/img-contact-form.png" alt="img contact form" data-cms="{{app()->getLocale()}}-layouts-app-193">
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/home/app.min.js"></script>
@yield('js')
</body>
</html>
