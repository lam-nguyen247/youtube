@extends('home.layouts.app')

@section('title', __('Home'))

@section('content')
    {{-- Block hero --}}
    <div class="grid-hero" id="grid-hero">
        <div class="container">
            <div class="grid-hero-bg">
                <div class="row">
                    <div class="col-11 col-md-11 col-lg-7 col-xl-6">
                        <div class="grid-hero__wrapp">
                            <div class="grid-hero__content">
                                <div class="box-hero">
                                    <h4 class="sub" data-cms="{{app()->getLocale()}}-index-8">WE ARE MIRAITECH</h4>
                                    <h2 class="title"><span data-cms="{{app()->getLocale()}}-index-10">A digital agency focused on</span> <span id="typing" class="hero typed" data-cms="{{app()->getLocale()}}-index-11">Website</span></h2>
                                    <div class="sapo" data-cms="{{app()->getLocale()}}-index-12">We are a creative team of designers, developers, and strategists, building elevated websites in the heart of Vietnam</div>
                                    <div class="btn-normal">
                                        <a href="/website" title="Get to know us">
                                            <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-15">Get to know us</span>
                                            <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-scroll">
                    <div class="btn-scroll--wrapp">
                        <a href="javascript:void(0)" title="scroll" data-cms="{{app()->getLocale()}}-index-20">SCROLL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Block call --}}
    <div class="grid-call">
        <div class="container">
            <div class="box-call">
                <h3 class="title" data-cms="{{app()->getLocale()}}-index-24">Over 10 Years Of Working Experience</h3>
                <div class="sapo">
                    <p data-cms="{{app()->getLocale()}}-index-26">MIRAITECH has been developed by a team of young, enthusiastic, and professional that help many businesses succeed in different fields.</p>
                    <p data-cms="{{app()->getLocale()}}-index-27">The number 1 solution for enterprises and company who is looking for a web solution for their business. We value our clients and commited to provide the best services and products</p>
                </div>
                <div class="btn-normal">
                    <a href="/about" title="Get to know us">
                        <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-30">Get to know us</span>
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
                                <div class="box-service-home website">
                                    <div class="box-image">
                                        <div class="grid-service__image-circle"></div>
                                        {{-- <img class="img-fluid grid-service__image-circle" @src="/images/home/bg-service-circle.png" alt="background service" data-cms="{{app()->getLocale()}}-index-43"> --}}
                                        <img class="img-fluid animated grid-service__image-title" @src="/images/home/title-websites.png" alt="websites" data-cms="{{app()->getLocale()}}-index-44">
                                        <img class="img-fluid animated grid-service__content-main grid-service__content-website" @src="/images/home/img-website.png" alt="websites" data-cms="{{app()->getLocale()}}-index-45">
                                    </div>
                                    <div class="box-content row">
                                        <div class="col-0 col-md-7">
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="text">
                                                <div class="animated">
                                                    <p data-cms="{{app()->getLocale()}}-index-51">We craft your custom website with advanced technology that come with low cost and highly optimized.</p>
                                                </div>
                                                <div class="btn-normal">
                                                    <a href="/website" title="View our service">
                                                        <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-54">View our service</span>
                                                        <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box-service-home branding">
                                    <div class="box-image">
                                        <div class="grid-service__image-circle"></div>
                                        {{-- <img class="img-fluid grid-service__image-circle" @src="/images/home/bg-service-circle.png" alt="background branding" data-cms="{{app()->getLocale()}}-index-61"> --}}
                                        <img class="img-fluid animated grid-service__image-title" @src="/images/home/title-branding.png" alt="branding" data-cms="{{app()->getLocale()}}-index-62">
                                        <img class="img-fluid animated grid-service__content-main grid-service__content-branding" @src="/images/home/img-branding.png" alt="branding" data-cms="{{app()->getLocale()}}-index-63">
                                    </div>
                                    <div class="box-content row">
                                        <div class="col-0 col-md-7">
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="text">
                                                <div class="animated">
                                                    <p data-cms="{{app()->getLocale()}}-index-69">Your voice is important to us. We ensure to meet all of your needs to create an unique and attrative brand.</p>
                                                </div>
                                                <div class="btn-normal">
                                                    <a href="/brand" title="View our service">
                                                        <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-72">View our service</span>
                                                        <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box-service-home marketing">
                                    <div class="box-image">
                                        <div class="grid-service__image-circle"></div>
                                        {{-- <img class="img-fluid grid-service__image-circle" @src="/images/home/bg-service-circle.png" alt="background marketing" data-cms="{{app()->getLocale()}}-index-79"> --}}
                                        <img class="img-fluid animated grid-service__image-title" @src="/images/home/title-marketing.png" alt="marketing" data-cms="{{app()->getLocale()}}-index-80">
                                        <img class="img-fluid animated grid-service__content-main grid-service__content-marketing" @src="/images/home/img-marketing.png" alt="marketing" data-cms="{{app()->getLocale()}}-index-81">
                                    </div>
                                    <div class="box-content row">
                                        <div class="col-0 col-md-7">
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="text">
                                                <div class="animated">
                                                    <p data-cms="{{app()->getLocale()}}-index-87">Reach the full potential of your business by ultilizing our digital marketing solution.</p>
                                                </div>
                                                <div class="btn-normal">
                                                    <a href="/marketing" title="View our service">
                                                        <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-90">View our service</span>
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

    {{-- Block package --}}
    <div class="grid-package">
        <div class="container">
            <div class="grid-head">
                <h3 class="subtitle" data-cms="{{app()->getLocale()}}-index-96">Our package</h3>
                <h2 class="title" data-cms="{{app()->getLocale()}}-index-97">What are your benefits ?</h2>
            </div>
            <div class="grid-content">
                <div class="row no-gutters">
                    <div class="col-12 col-md-4 d-flex align-items-center">
                        <div class="box-package first">
                            <h3 class="title" data-cms="{{app()->getLocale()}}-index-102">BASIC</h3>
                            <div class="image">
                                <img class="img-fluid" @src="/images/home/img-package-1.png" alt="Package 1" data-cms="{{app()->getLocale()}}-index-104">
                            </div>
                            <div class="box-package__content">
                                <ul>
                                    <li data-cms="{{app()->getLocale()}}-index-107">Website design, logo design and content writing</li>
                                    <li data-cms="{{app()->getLocale()}}-index-108">A basic and essential solution to get your business started</li>
                                </ul>
                            </div>
                            <div class="btn-normal">
                                <a class="btn-modal" href="javascript:void(0)" title="GET started">
                                    <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-111">GET started</span>
                                    <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="box-package active">
                            <h3 class="title" data-cms="{{app()->getLocale()}}-index-116">PREMIUM</h3>
                            <div class="image">
                                <img class="img-fluid" @src="/images/home/img-package-2.png" alt="Package 2" data-cms="{{app()->getLocale()}}-index-118">
                            </div>
                            <div class="box-package__content">
                                <ul>
                                    <li data-cms="{{app()->getLocale()}}-index-121">Website design and logo design with unlimited revision, content writing and digital marketing ( Google Ads, Facebook Ads, Zalo Ads)</li>
                                    <li data-cms="{{app()->getLocale()}}-index-122">We utilize advertisement on all platforms, providing customer care, promoting your brand image, and train your employees for digital marketing</li>
                                    <li data-cms="{{app()->getLocale()}}-index-123">This is the most premium service that Miraitech provide - the number one solution when it’s come to promoting your sales and business efficiency. We guarantee to creat a positive impact to your sales by choosing this package.</li>
                                </ul>
                            </div>
                            <div class="btn-normal">
                                <a class="btn-modal" href="javascript:void(0)" title="GET started">
                                    <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-126">GET started</span>
                                    <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 d-flex align-items-center">
                        <div class="box-package last">
                            <h3 class="title" data-cms="{{app()->getLocale()}}-index-131">PLUS</h3>
                            <div class="image">
                                <img class="img-fluid" @src="/images/home/img-package-3.png" alt="Package 3" data-cms="{{app()->getLocale()}}-index-133">
                            </div>
                            <div class="box-package__content">
                                <ul>
                                    <li data-cms="{{app()->getLocale()}}-index-136">Everything in the basic package and an digital marketing solution of your choice ( Google Ads, Facebook Ads, Zalo Ads)</li>
                                    <li data-cms="{{app()->getLocale()}}-index-137">A basic and essential solution to get your business started</li>
                                </ul>
                            </div>
                            <div class="btn-normal">
                                <a class="btn-modal" href="javascript:void(0)" title="GET started">
                                    <span class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-140">GET started</span>
                                    <svg class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Block working --}}
    <div class="grid-work">
        <div class="container">
            <div class="grid-head">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h3 class="title" data-cms="{{app()->getLocale()}}-index-148">How IT works ?</h3>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="sapo" data-cms="{{app()->getLocale()}}-index-150">We commited to provide you a highly optimized products that comes with a complete set of features and wonderful customer care. Saving your time, cost, and man power with our already available resources</div>
                    </div>
                </div>
            </div>
            <div class="grid-content">
                <ol class="nav-timeline">
                    <li>
                        <div class="tl__content">
                            <div class="tl__image">
                                <img @src="/images/home/img-tl-1.png" alt="Collecting Data" data-cms="{{app()->getLocale()}}-index-156">
                            </div>
                            <h4 class="tl__title" data-cms="{{app()->getLocale()}}-index-157">Collecting Data</h4>
                            <span class="tl__number" data-cms="{{app()->getLocale()}}-index-158">1</span>
                        </div>
                        <span class="number" data-cms="{{app()->getLocale()}}-index-159">1</span>
                    </li>
                    <li>
                        <div class="tl__content">
                            <div class="tl__image">
                                <img @src="/images/home/img-tl-2.png" alt="Quoting" data-cms="{{app()->getLocale()}}-index-163">
                            </div>
                            <h4 class="tl__title" data-cms="{{app()->getLocale()}}-index-164">Quoting</h4>
                            <span class="tl__number" data-cms="{{app()->getLocale()}}-index-165">2</span>
                        </div>
                        <span class="number" data-cms="{{app()->getLocale()}}-index-166">2</span>
                    </li>
                    <li>
                        <div class="tl__content">
                            <div class="tl__image">
                                <img @src="/images/home/img-tl-3.png" alt="Signing Contract" data-cms="{{app()->getLocale()}}-index-170">
                            </div>
                            <h4 class="tl__title" data-cms="{{app()->getLocale()}}-index-171">Signing Contract</h4>
                            <span class="tl__number" data-cms="{{app()->getLocale()}}-index-172">3</span>
                        </div>
                        <span class="number" data-cms="{{app()->getLocale()}}-index-173">3</span>
                    </li>
                    <li>
                        <div class="tl__content">
                            <div class="tl__image">
                                <img @src="/images/home/img-tl-4.png" alt="Maintenance" data-cms="{{app()->getLocale()}}-index-177">
                            </div>
                            <h4 class="tl__title" data-cms="{{app()->getLocale()}}-index-178">Maintenance</h4>
                            <span class="tl__number" data-cms="{{app()->getLocale()}}-index-179">4</span>
                        </div>
                        <span class="number" data-cms="{{app()->getLocale()}}-index-180">4</span>
                    </li>
                    <li>
                        <div class="tl__content">
                            <div class="tl__image">
                                <img @src="/images/home/img-tl-5.png" alt="Demo" data-cms="{{app()->getLocale()}}-index-184">
                            </div>
                            <h4 class="tl__title" data-cms="{{app()->getLocale()}}-index-185">Demo</h4>
                            <span class="tl__number" data-cms="{{app()->getLocale()}}-index-186">5</span>
                        </div>
                        <span class="number" data-cms="{{app()->getLocale()}}-index-187">5</span>
                    </li>
                    <li>
                        <div class="tl__content">
                            <div class="tl__image">
                                <img @src="/images/home/img-tl-6.png" alt="Website Design" data-cms="{{app()->getLocale()}}-index-191">
                            </div>
                            <h4 class="tl__title" data-cms="{{app()->getLocale()}}-index-192">Website Design</h4>
                            <span class="tl__number" data-cms="{{app()->getLocale()}}-index-193">6</span>
                        </div>
                        <span class="number" data-cms="{{app()->getLocale()}}-index-194">6</span>
                        <i class="fa fa-angle-right fa-absolute" aria-hidden="true"></i>
                    </li>
                </ol>
            </div>
        </div>
    </div>


    {{-- Block testimonials --}}
    <div class="grid-testimonials">
        <div class="container">
            <div class="grid-head">
                <h3 class="title" data-cms="{{app()->getLocale()}}-index-199">TESTIMONIALS</h3>
            </div>
            <div class="grid-content">
                <div id="splide-testimonials" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="box-testimonials">
                                    <svg class="icon"><use xlink:href="#icon-quotes-left"></use></svg>
                                    <div class="sapo" data-cms="{{app()->getLocale()}}-index-208">Sed amet sed ac malesuada netus purus ac. Tristique quam egestas iaculis aliquet suspendisse. Tellus facilisi nulla fermentum risus. Odio maecenas non magna turpis egestas. Senectus nec nulla aenean mi.</div>
                                    <h4 class="title" data-cms="{{app()->getLocale()}}-index-209">Vitae</h4>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box-testimonials">
                                    <svg class="icon"><use xlink:href="#icon-quotes-left"></use></svg>
                                    <div class="sapo" data-cms="{{app()->getLocale()}}-index-214">Justo, venenatis cursus blandit sit tempor, tempus iaculis scelerisque sit. Enim sapien ornare scelerisque sit amet et. Magna turpis volutpat fames scelerisque pellentesque dui donec parturient. Quam at volutpat sit.</div>
                                    <h4 class="title" data-cms="{{app()->getLocale()}}-index-215">Pellentesque</h4>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box-testimonials">
                                    <svg class="icon"><use xlink:href="#icon-quotes-left"></use></svg>
                                    <div class="sapo" data-cms="{{app()->getLocale()}}-index-220">Tincidunt aliquam nunc in non. Mattis adipiscing id sapien orci, tincidunt. Volutpat nulla mauris, aliquet convallis velit mattis gravida dictum. Purus a elementum nibh egestas magna at viverra dui viverra mauris.</div>
                                    <h4 class="title" data-cms="{{app()->getLocale()}}-index-221">Senectus</h4>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="box-testimonials">
                                    <svg class="icon"><use xlink:href="#icon-quotes-left"></use></svg>
                                    <div class="sapo" data-cms="{{app()->getLocale()}}-index-226">Justo, venenatis cursus blandit sit tempor, tempus iaculis scelerisque sit. Enim sapien ornare scelerisque sit amet et. Magna turpis volutpat fames scelerisque pellentesque dui donec parturient. Quam at volutpat sit.</div>
                                    <h4 class="title" data-cms="{{app()->getLocale()}}-index-227">Pellentesque</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Block action --}}
    @include('home.includes.consultation')
@endsection
