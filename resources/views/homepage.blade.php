<section class="section-homepage">
    <div class="section-homepage container-fluid mb-auto mt-auto">
        <div class="row intro">

            <div class="text-center text-xl-left offset-xl-1 col-xl-2 d-xl-flex align-items-xl-center">
                <h2 class="intro__text intro__text--1">@lang('homepage.intro-1')</h2>
            </div>

            <div class="col-6 offset-3 offset-xl-1 col-xl-4 d-xl-flex justify-content-xl-start px-xl-0 intro__center">
                <object data="{{asset('media/images/background-animated-crosshairs.svg')}}"
                        width="100%" class="intro__background-elements d-none d-xl-block">
                </object>
                <div class="row offset-xl-3 intro__phone-row">
                    <div class="col-xl-6 px-xl-0 d-xl-flex flex-xl-wrap intro__phone-col">
                        <img src="{{asset('media/images/iphone.png')}}"
                             class="img-fluid w-100"
                             alt="phone"
                             data-aos="fade-up"
                             data-aos-delay="1000"
                             data-aos-duration="800">
                        <img src="{{asset('media/images/phone-lightning.png')}}"
                             class="img-fluid w-100 intro__phone-row__lightning"
                             alt="phone lightning"
                        >
                        <object data="{{asset('media/images/features/features.svg')}}"
                                width="100%" class="intro__features d-xl-block"
                        ></object>
                        <img src="{{asset('media/images/meklogov2bgless.svg')}}"
                             class="img-fluid w-100 intro__mek-logo"
                             alt="mek logo"
                        >
                    </div>
                </div>
            </div>

            <div class="text-center text-xl-right offset-xl-1 col-xl-2 d-xl-flex justify-content-xl-end align-items-center">
                <h2 class="intro__text intro__text--2">@lang('homepage.intro-2')</h2>
            </div>
        </div>

        <div class="row w-100 justify-content-center">
            <div class="col d-xl-flex justify-content-center text-center">
                <button class="intro__button">@lang('homepage.button')</button>
            </div>
        </div>
    </div>
</section>
