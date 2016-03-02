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

        <!--<link href="{{ asset('css/site.css') }}" rel="stylesheet">-->
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

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    </head><!--/head-->
    <body>
        <!--Begin-header-->
        <div class="container header">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div id = "logo-header">
                        <img src="images/home/logo_hoanganh.jpg" class="img-responsive" alt="" />
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
                <div class="col-md-6 col-xs-12 col-sm-4">
                    <div class="SubNewsLastestNews">
                        Tin mới
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-9">
                    <div class=" row form-search SubSearchProduct">
                        <form role="form form-search">

                            <div class="form-group search-cat">					      
                                <select class="form-control" id="sel1">
                                    <option>Tìm theo danh mục</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>					      
                            </div>

                            <div class="form-group search-produce">					      
                                <select class="form-control" id="sel2">
                                    <option>Tìm theo nhà sản xuất</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>					      
                            </div>
                            <button type="button" class="btn btn-default btn-search">
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
                    <div class="col-md-3 col-xs-12 col-sm-3">
                        <div class="left-sidebar">
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <h2>Danh Mục sản phẩm</h2>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                Tủ bếp
                                            </a>
                                        </h4>
                                    </div>
                                    <div>
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Tủ bếp gỗ xoan đào </a></li>
                                                <li><a href="#">Tủ bếp gỗ xồi ngà</a></li>
                                                <li><a href="#">Tủ bêp gỗ công nghiệp </a></li>
                                                <li><a href="#">Tủ  bếp inox</a></li>											
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">			
                                                Thiết bị nhà bếp
                                            </a>
                                        </h4>
                                    </div>
                                    <div>
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Máy hút mùi cổ điển</a></li>
                                                <li><a href="#">Máy hút mùi kính</a></li>
                                                <li><a href="#">Bếp gà, bếp từ</a></li>
                                                <li><a href="#">Chậu rửa, vòi rửa</a></li>
                                                <li><a href="#">Kính ốp bếp</a></li>
                                                <li><a href="#">Phụ kiện tử bếp</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                Thương hiệu thiết bị bếp
                                            </a>
                                        </h4>
                                    </div>
                                    <div>
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Bếp lorca</a></li>
                                                <li><a href="#">Under Armour </a></li>
                                                <li><a href="#">Adidas </a></li>
                                                <li><a href="#">Puma</a></li>
                                                <li><a href="#">ASICS </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                Nội thất phòng khách
                                            </a>
                                        </h4>
                                    </div>

                                </div>
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                Bàn ghế ăn
                                            </a>
                                        </h4>
                                    </div>
                                    <div>
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Bàn ghế sồi ngà</a></li>
                                                <li><a href="#">Bàn ghế xoan đào</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                Nội thất phòng ngủ
                                            </a>
                                        </h4>
                                    </div>
                                    <div>
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Giường ngủ</a></li>
                                                <li><a href="#">Kệ tivi</a></li>
                                                <li><a href="#">Tủ áo</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                Quầy bar - nhà hàng
                                            </a>
                                        </h4>
                                    </div>								
                                </div>
                            </div><!--/category-products-->

                            <div class="brands_products support-online"><!--brands_products-->							
                                <div class="brands-name">
                                    <h2>Hỗ trợ trực tuyến</h2>
                                    <div class="h11"><!----></div>
                                    <div class="support">
                                        <span class="title">Hỗ trợ mua hàng </span>
                                        <div class="h8"><!----></div>
                                        <span class="hotline">0979 689 829</span>
                                    </div>
                                    <div class="h22"><!----></div>

                                    <div class="item">
                                        <div class="image"></div>
                                        <a class="title" href="">Mr Long</a>
                                        <div class="h6"><!----></div>
                                        <span class="title">0979.689.829</span>
                                        <div class="cb h15"><!----></div>
                                    </div><div class="item">
                                        <div class="image"></div>
                                        <a class="title" href="">Hoàng Anh</a>
                                        <div class="h6"><!----></div>
                                        <span class="title">0983379283</span>
                                        <div class="cb h15"><!----></div>
                                    </div>
                                </div>
                            </div><!--/brands_products-->

                            <div class="price-range"><!--price-range-->

                                <div class="">
                                    <h2>Tin tức nổi bật</h2>
                                    <div id="mycarouselPartner">
                                        <ul>
                                            <li>
                                                <div class="item ">
                                                    <a class="JsImageFrame" href="#" title="Dự án có "><img class="img-responsive" style=""src="http://media.tinmoi.vn/2012/02/23/3_15_1329973634_84_1329959535-can-ho-sieu-sang2.jpg"></a>
                                                    <h3><a class="title" href="#" title="Dự án có căn hộ giá 100 triệu đồng/m2">Dự án có căn hộ giá 100 triệu đồng/m2</a></h3>

                                                </div>

                                            </li>
                                            <li>
                                                <div class="item ">
                                                    <a class="JsImageFrame" href="#" title="Dự án có "><img class="img-responsive" style=""src="http://media.tinmoi.vn/2012/02/23/3_15_1329973634_84_1329959535-can-ho-sieu-sang2.jpg"></a>
                                                    <h3><a class="title" href="#" title="Dự án có căn hộ giá 100 triệu đồng/m2">Dự án có căn hộ giá 100 triệu đồng/m2</a></h3>

                                                </div>

                                            </li>
                                            <li>
                                                <div class="item ">
                                                    <a class="JsImageFrame" href="#" title="Dự án có "><img class="img-responsive" style=""src="http://media.tinmoi.vn/2012/02/23/3_15_1329973634_84_1329959535-can-ho-sieu-sang2.jpg"></a>
                                                    <h3><a class="title" href="#" title="Dự án có căn hộ giá 100 triệu đồng/m2">Dự án có căn hộ giá 100 triệu đồng/m2</a></h3>

                                                </div>

                                            </li>
                                            <li>
                                                <div class="item ">
                                                    <a class="JsImageFrame" href="#" title="Dự án có "><img class="img-responsive" style=""src="http://media.tinmoi.vn/2012/02/23/3_15_1329973634_84_1329959535-can-ho-sieu-sang2.jpg"></a>
                                                    <h3><a class="title" href="#" title="Dự án có căn hộ giá 100 triệu đồng/m2">Dự án có căn hộ giá 100 triệu đồng/m2</a></h3>

                                                </div>

                                            </li>
                                            <li>
                                                <div class="item ">
                                                    <a class="JsImageFrame" href="#" title="Dự án có "><img class="img-responsive" style=""src="http://media.tinmoi.vn/2012/02/23/3_15_1329973634_84_1329959535-can-ho-sieu-sang2.jpg"></a>
                                                    <h3><a class="title" href="#" title="Dự án có căn hộ giá 100 triệu đồng/m2">Dự án có căn hộ giá 100 triệu đồng/m2</a></h3>

                                                </div>

                                            </li>
                                            <li>
                                                <div class="item ">
                                                    <a class="JsImageFrame" href="#" title="Dự án có "><img class="img-responsive" style=""src="http://media.tinmoi.vn/2012/02/23/3_15_1329973634_84_1329959535-can-ho-sieu-sang2.jpg"></a>
                                                    <h3><a class="title" href="#" title="Dự án có căn hộ giá 100 triệu đồng/m2">Dự án có căn hộ giá 100 triệu đồng/m2</a></h3>

                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--/price-range-->

                            <div class="" id ="CommonStatistic">
                                <div class="truycap">
                                    <div class="h20"><!----></div>
                                    <div class="label">Đang online:</div>
                                    <div class="value">2</div>
                                    <div class="cb h25"><!----></div>
                                    <div class="label">Tổng truy cập:</div>
                                    <div class="value">636670</div>
                                    <div class="cb h0"><!----></div>
                                </div>
                            </div>

                        </div>
                    </div>

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