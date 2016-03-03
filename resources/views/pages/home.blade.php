@extends('layouts.app')
@section('title') Home :: @parent @stop
@section('slider')
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-12">
                                <img src="{{ URL::to('') }}/images/noithat/noi-that-phong-ngu-5.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-12">
                                <img src="{{ URL::to('') }}/images/noithat/noi-that-phong-ngu-5.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-12">
                                <img src="{{ URL::to('') }}/images/noithat/noi-that-phong-ngu-5.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                    </div>
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
@endsection
@section('content')
<div class="col-sm-9 col-md-9 col-xs-12 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Tủ bếp</h2>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>

                    </div>

                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div><!--features_items-->


    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Thiết Bị tủ bếp</h2>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>

                    </div>

                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>

                    </div>

                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>

                    </div>

                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>

                    </div>

                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>

                    </div>

                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="images/home/product2.jpg" alt="" />
                        <h3>Tủ Bếp Laminate Nhà kiên Hà Đông</h3>
                        <p>Mã sp :TBCN11</p>
                        <p>Liên hệ</p>

                    </div>

                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">recommended items</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">	
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend1.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend2.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend3.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">	
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend1.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend2.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend3.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>			
        </div>
    </div><!--/recommended_items-->
</div>
@endsection

