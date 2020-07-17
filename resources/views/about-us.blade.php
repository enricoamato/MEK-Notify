<section id="section-two" class="section-about-us scroll-item" title="@lang('scrollspy.community')">
    <div class="container-fluid">
        <div class="row" data-aos="zoom-in-down" data-aos-offset="300">
            <div class="col-12 text-center mb-big">
                <object data="{{asset('media/images/background-elements-section-title.svg')}}"
                        class="img-fluid section__background-elements"
                ></object>
                <div class="section__text">
                    <h2 class="section__title">@lang('about-us.title')</h2>
                    <h3 class="section__subtitle">
                        @lang('about-us.subtitle')
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us__container"
         data-aos="fade-up"
         data-aos-offset="400"
    >
        <div class="container-fluid about-us__background">
            <div class="row align-items-xl-center">
                <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-0">
                    <img data-src="{{asset('media/images/glass-balls/about-us/glass-ball--1.png')}}"
                         class="img-fluid about-us__glass-ball about-us__glass-ball--1 lazy"
                         alt="glass ball 1">
                    <img data-src="{{asset('media/images/glass-balls/about-us/glass-ball--2.png')}}"
                         class="img-fluid about-us__glass-ball about-us__glass-ball--2 lazy"
                         alt="glass ball 2">
                    <img data-src="{{asset('media/images/glass-balls/about-us/glass-ball--3.png')}}"
                         class="img-fluid about-us__glass-ball about-us__glass-ball--3 lazy"
                         alt="glass ball 3">
                    <div class="about-us__text__container">
                        <h4 class="about-us__text">
                            <span class="d-inline-block">@lang('about-us.description-span')</span>
                            @lang('about-us.description')
                        </h4>
                    </div>
                </div>
                <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-0 about-us__min-height">
                    <div class="about-us__discord acti\ve">
                        <div class="loader">
                            <div class="logo">
                                <div class="logo__layer"></div>
                                <div class="logo__layer"></div>
                                <div class="logo__layer"></div>
                            </div>
                        </div>
                        <span class="about-us__discord__text">@lang('about-us.sign-in')</span>
                    </div>
                    <div class="about-us__discord--logged-in">
                        <img data-src="{{asset('media/images/discord-page.png')}}" class="img-fluid lazy"
                             alt="discord logged in visual">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
