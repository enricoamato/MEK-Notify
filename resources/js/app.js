require('./bootstrap');

// jQuery import
import jQuery from "jquery";

window.$ = window.jQuery = jQuery;

import LazyLoad from "vanilla-lazyload";
import 'slick-carousel';
import AOS from 'aos';

// There should only be a single file that rules them all

function removeLoader() {
    $('#loading').hide();
}

$(window).on('load', removeLoader);

/**
 * Lazyload init
 */

new LazyLoad({
    elements_selector: ".lazy"
});

/**
 * Document ready init function
 */

$(document).ready(function () {

    const $body = $('body');
    const $mobileMenu = $('#mobile-menu');
    const $navigationMenu = $('#navigation');
    const $headerDots = $('.header__dots');
    const $header = $('#header');
    const $headerList = $('.header__list');

    let prevScrollpos = window.pageYOffset;

    window.onscroll = function () {
        if ($header.hasClass('navigation-open')) {
            return false;
        } else {
            let currentScrollPos = window.pageYOffset;

            isPageTop(currentScrollPos);

            if (currentScrollPos >= 0) {
                $headerList.toggleClass('hide');
            }

            if (prevScrollpos > currentScrollPos) {
                $header.removeClass('hide');
            } else {
                $header.addClass('hide');
            }
            prevScrollpos = currentScrollPos;
        }

        if ($headerList.hasClass('hide')) {
            scrollMenu.removeClass('freeze');
        } else {
            scrollMenu.addClass('freeze');
        }
    }

    function isPageTop(scrollY) {
        scrollY >= 30 ? showElement($headerList) : hideElement($headerList);
    }

    function hideElement(el) {
        if (!el.hasClass('hide')) {
            el.addClass('hide');
        }
    }

    function showElement(el) {
        if (el.hasClass('hide')) {
            el.removeClass('hide');
        }
    }

    $mobileMenu.on('click', function () {
        $mobileMenu.toggleClass('navigation-open');
        $headerDots.toggleClass('active');
        $header.toggleClass('navigation-open');
        $navigationMenu.toggleClass('visible');
    });

    function initBackgroundAnimation() {
        $body.vegas({
            slides: [
                {src: './media/images/sliding-backgrounds/bg--1.jpg'},
                {src: './media/images/sliding-backgrounds/bg--2.jpg'},
                {src: './media/images/sliding-backgrounds/bg--3.jpg'},
                {src: './media/images/sliding-backgrounds/bg--4.jpg'},
            ],
        });
    }

    /**
     * Background effect
     */
    initBackgroundAnimation();

    /**
     * Slider feedback
     */

    const $sliderFeedback = $('.slider__feedback');

    function initSliderFeedback() {

        if (!$sliderFeedback.hasClass('slick-initialized')) {
            $sliderFeedback.slick({
                dots: true,
                infinite: true,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2500,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 1359,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                ]
            });
        }
    }

    $(window).on('load', initSliderFeedback);


    /**
     * Discord fake log in
     */

    const $discordLogIn = $('.about-us__discord');
    const $discordLoggedIn = $('.about-us__discord--logged-in');

    setInterval(function () {
        $discordLogIn.toggleClass('active');
        $discordLoggedIn.toggleClass('active');
    }, 3000);


    /**
     * AOS Library for animations
     */
    AOS.init();

    /**
     * Go to section
     */

    const aboutUs = $('#aboutUs');
    const features = $('#features');
    const feedback = $('#feedback');
    const introButton = $('.intro__button');

    // Desktop
    aboutUs.on('click', (function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".section-about-us").offset().top
        }, 600);
    }));

    features.on('click', (function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".section-features").offset().top
        }, 600);
    }));

    feedback.on('click', (function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".section-feedback").offset().top
        }, 600);
    }));

    introButton.on('click', (function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".section-features").offset().top
        }, 600);
    }));

    // Mobile
    const navAboutUs = $('.navigation__item-about-us');
    const navFeatures = $('.navigation__item-features');
    const navFeedback = $('.navigation__item-feedback');
    const navItem = $('.navigation__item');


    navItem.on('click', function () {
        $navigationMenu.removeClass('visible');
    });

    navAboutUs.on('click', (function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".section-about-us").offset().top
        }, 600);
    }));

    navFeatures.on('click', (function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".section-features").offset().top
        }, 600);
    }))

    navFeedback.on('click', (function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".section-feedback").offset().top
        }, 600);
    }))


    /**
     * Scroll Spy
     **/

    const viewport = $(window);
    let viewportHeight = viewport.height();

    var scrollMenu = $('#section-menu');

    var sectionsHeight = {},
        viewportheight, i = 0;
    var scrollItem = $('.scroll-item');
    var bannerHeight;

    function sectionListen() {
        viewportHeight = viewport.height();
        bannerHeight = (viewportHeight);
        $('.section').addClass('resize');
        scrollItem.each(function () {
            sectionsHeight[this.title] = $(this).offset().top;
        });
    }

    sectionListen();
    viewport.resize(sectionListen);
    viewport.bind('orientationchange', function () {
        sectionListen();
    });

    var count = 0;

    scrollItem.each(function () {
        var anchor = $(this).attr('id');
        var title = $(this).attr('title');
        count++;
        $('#section-menu ul').append('' +
            '<li>' +
            '<a id="nav_' + title + '" href="#' + anchor + '"> ' + title + '<span class="underline"></span></a>' +
            '</li>'
        );
    });

    function menuListen() {
        var pos = $('html').scrollTop();

        pos = pos + viewportHeight * 0.25;
        for (i in sectionsHeight) {
            if (sectionsHeight[i] < pos) {
                $('#section-menu a').removeClass('active');
                $('#section-menu a#nav_' + i).addClass('active');
                var newHash = '#' + $('.scroll-item[title="' + i + '"]').attr('id');
                if (history.pushState) {
                    history.pushState(null, null, newHash);
                } else {
                    location.hash = newHash;
                }
            } else {
                $('#section-menu a#nav_' + i).removeClass('active');
                if (pos < viewportHeight - 72) {
                    history.pushState(null, null, ' ');
                }
            }
        }
    }

    scrollMenu.css('margin-top', scrollMenu.height() / 2 * -1);

    /**
     * Smooth Scroll for Anchor Links and URL refresh
     */

    scrollMenu.find('a').click(function () {
        var href = $.attr(this, 'href');
        $('html').animate({
            scrollTop: $(href).offset().top
        }, 600, function () {
            window.location.hash = href;
        });
        return false;
    });


    /**
     * Fire functions on Scroll Event
     */

    function scrollHandler() {
        menuListen();
    }

    viewport
        .on('load', scrollHandler)
        .on('scroll', scrollHandler)

});





