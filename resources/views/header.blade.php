<header id="header" class="header">
    <div class="container-fluid px-5">
        <div class="header__container">
            <div class="header__language header__language--mobile">

                @if ( Config::get('app.locale') == 'en')
                    <a class="header__language--mobile--selected" href="/cn">
                        @lang('header.language-cn')
                    </a>
                @endif

                @if ( Config::get('app.locale') == 'cn')
                    <a class="header__language--mobile--selected" href="/en">
                        @lang('header.language-en')
                    </a>
                @endif

            </div>

            <div class="header__language header__language--desktop">
                <a class="header__language--1" href="/en">@lang('header.language-en')<span class="underline"></span></a>
                <span class="slash">/</span>
                <a class="header__language--2" href="/cn">@lang('header.language-cn--desktop')<span class="underline"></span></a>
            </div>

            <div class="header__logo">
                <img src="{{asset('media/images/mek-logo--small.svg')}}" alt="mek logo">
            </div>
            <div id="mobile-menu" class="header__menu">
                <img src="{{asset('media/images/dots.svg')}}" class="header__dots img-fluid" alt="dots">
            </div>
            <ul class="header__list">
                <li class="header__item" id="aboutUs">@lang('header.item-1')<span class="underline"></span></li>

                <li class="header__item" id="features">@lang('header.item-2')<span class="underline"></span></li>

                <li class="header__item" id="feedback">@lang('header.item-3')<span class="underline"></span></li>
            </ul>
        </div>
    </div>
</header>
