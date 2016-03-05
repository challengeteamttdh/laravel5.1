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
        <!--Begin-header-->
        <div class="container header">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div id = "logo-header">
                        <img src="{{ URL::to('') }}/images/banner.png" class="img-responsive" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container menu">
            @include('partials.nav')
        </div>
        @yield('slider')
        <!--End-header-->
        <!--Begin-Form search-->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-4">
                </div>
                <div class="col-md-4 col-xs-12 col-sm-9">
                    <div class="row form-search SubSearchProduct">
                        <form role="form form-search" method="post" action="{{URL::to('/')}}/search">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group search-cat">					      
                                <input type="text" name="search" class="form-control" id="search" placeholder="Nhập để tìm">
                            </div>
<!--                            <div class="form-group search-produce">					      
                                <select class="form-control" id="sel2">
                                    <option>Tìm theo nhà sản xuất</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>					      
                            </div>-->
                            <button type="submit" class="btn btn-default btn-search">
                                Tìm kiếm
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End-Formsarch-->
        <section>
            <div class="container">
                <div class="row">
                    @include('partials.leftmenu')
                    @yield('content')
                </div>
            </div>
        </section>
        @include('partials.footer')
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