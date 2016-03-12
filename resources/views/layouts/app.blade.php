<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here"/>
    @show @section('meta_author')
        <meta name="author" content="Jon Doe"/>
    @show @section('meta_description')
        <meta name="description"
              content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    @show
    <title>@section('title')</title>

    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('styles')

    <link rel="shortcut icon" href="{!! asset('assets/site/ico/favicon.ico')  !!} ">

</head><!--/head-->
<body>
<div class="container layout">
    <!--Begin-header-->
    @include('partials.header')
    <div class="menu">
        @include('partials.nav')
    </div>
    @yield('slider')
            <!--End-header-->
    <!--Begin-Form search-->
    @include('partials.search')
            <!--End-Formsarch-->
    <section>
        <div class="leftmenu">
            <div class="row">
                @include('partials.leftmenu')
                @yield('content')
            </div>
        </div>
    </section>
    @include('partials.footer')
</div>
@yield('scripts')
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/site.js') }}"></script>
<script src="{{ asset('js/nprogress.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('js/price-range.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/jcarousellite.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
<script>
    //loading like youtube
    $(document).ready(function () {
        NProgress.start();
        NProgress.configure({easing: 'ease', speed: 500});
        NProgress.configure({showSpinner: true});
    });
    jQuery(window).load(function () {
        NProgress.done();
    });

</script>
</body>
</html>