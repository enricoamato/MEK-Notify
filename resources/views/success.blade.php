<section class="section-success">
    <div class="container-fluid">
        <div class="row" data-aos="zoom-in-down" data-aos-offset="300">
            <div class="col-12 text-center mb-big">
                <object data="{{asset('media/images/background-elements-section-title.svg')}}"
                        class="img-fluid section__background-elements"
                ></object>
                <div class="section__text">
                    <h2 class="section__title">@lang('success.title')</h2>
                    <h3 class="section__subtitle">
                        @lang('success.subtitle')
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row success">
            <div class="col-12 col-md-8 offset-md-2 mb-medium" data-aos="fade-up" data-aos-offset="200">
                <a class="success__banner" href="https://twitter.com/MEKNotify" target="_blank">
                    <img data-src="{{asset('media/images/banner.png')}}"
                         alt="banner"
                         class="img-fluid success__image lazy"
                    >
                </a>
            </div>
            <div class="col-12 col-md-8 offset-md-2" data-aos="fade-up" data-aos-offset="200">
                <img data-src="{{asset('media/images/glass-balls/feedback/glass-ball--1.png')}}"
                     class="img-fluid success__glass-ball success__glass-ball--1 lazy"
                     alt="glass ball 1">
                <img data-src="{{asset('media/images/glass-balls/feedback/glass-ball--2.png')}}"
                     class="img-fluid success__glass-ball success__glass-ball--2 lazy"
                     alt="glass ball 2">

                <div class="success__tweets">
                    <div class="success__tweets--storyline">
                        <a class="twitter-timeline" href="https://twitter.com/MEKNotify?ref_src=twsrc%5Etfw">
                            Tweets by MEKNotify</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
