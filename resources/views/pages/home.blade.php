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
                                <img src="{{ URL::to('') }}/images/noithat/noithatdep.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-12">
                                <img src="{{ URL::to('') }}/images/noithat/noithatdep.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-12">
                                <img src="{{ URL::to('') }}/images/noithat/noithatdep.jpg" class="girl img-responsive" alt="" />
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
    @if($pro_home)
    @foreach($pro_home as $pro)
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">{{$pro['name']}}</h2>
        @if($pro['product'])
        @foreach($pro['product'] as $product)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{$product->picture}}" alt="" />
                        <h3>{{$product->name}}</h3>
                        <p>Mã sp :{{$product->product_code}}</p>
                        <p>Liên hệ</p>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="{{ URL::to('') }}/product-{{$product->id}}"><i class=""></i>Chi tiết</a></li>
                        <li><a href="#"><i class=""></i>Mua hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div><!--features_items-->
    @endforeach
    @endif

</div>
@endsection

