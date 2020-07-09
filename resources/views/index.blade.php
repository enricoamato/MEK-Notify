<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>MEKNotify</title>
        <link rel='icon' href='{{asset('media/images/favicon.png')}}' type='image/x-icon'>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500&display=swap" rel="stylesheet">
        <link href="{{ asset('css/vegas.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>



    <body class="{{$lang}}">
        @include('loader')
        @include('scrollspy')
        @include('header')
        @include('navigation')
        @include('homepage')
{{--        @include('features')--}}
{{--        @include('about-us')--}}
{{--        @include('services')--}}
{{--        @include('feedback')--}}
{{--        @include('success')--}}
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/vegas.js')}}"></script>
    <script src="{{asset('js/counter.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js"></script>
    </body>
</html>
