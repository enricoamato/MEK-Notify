<section class="section-services">
    <div class="container-fluid">
        <div class="row" data-aos="zoom-in-down" data-aos-offset="300">
            <div class="col-12 text-center mb-big">
                <object data="{{asset('media/images/background-elements-section-title.svg')}}"
                        class="img-fluid section__background-elements"
                ></object>
                <div class="section__text">
                    <h2 class="section__title">@lang('services.title')</h2>
                    <h3 class="section__subtitle">
                        @lang('services.subtitle')
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="services__container">

        <div class="services__box services__monitors px-xl-0">
            <object data="{{asset('media/images/bell-animated.svg')}}"
                    class="col-12 services__image services__monitors__image justify-content-center"
            ></object>
            <span class="col-12 counter services__monitors__counter text-center" aria-label="300">300</span>

            <span class="col-12 services__text services__monitors__text text-center">@lang('services.monitors')</span>

            <object data="{{asset('media/images/slider__services--mobile.svg')}}"
                    width="100%"
                    class="img-fluid d-block d-xl-none services__slider--mobile">
            </object>
            <object data="{{asset('media/images/slider__services.svg')}}"
                    width="100%"
                    class="img-fluid d-none d-xl-block services__slider--desktop">
            </object>

        </div>

        <div class="services__box services__community">
            <object data="{{asset('media/images/community.svg')}}"
                    class="col-12 services__image services__community__image justify-content-center"
            ></object>
            <span class="col-12 counter services__community__counter text-center" aria-label="1000">1000</span>
            <span class="col-12 services__text services__community__text text-center">@lang('services.community')</span>
        </div>

        <div class="services__box services__shipping">
            <object data="{{asset('media/images/shipping.svg')}}"
                    class="col-12 d-flex img-fluid services__image services__shipping__image justify-content-center"
            ></object>
            <span class="col-12 services__text services__shipping__text text-center">
                @lang('services.shipping-1')
                <span class="d-block">@lang('services.shipping-2')</span>
            </span>
        </div>

    </div>
</section>
