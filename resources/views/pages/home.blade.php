@extends('layouts.app')
@section('title','Nội Thất Ngọc Dũng') 
@section('slider')
<section id="slider"><!--slider-->
    <div class="myCarousel">
        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#slider-carousel" data-slide-to="1"></li>
                <li data-target="#slider-carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                @foreach($sliders as $key=>$slider)
                <div class="item  peopleCarouselImg {{$key==1?'active':''}}">
                    <a href="{{ URL::to('') }}/product-{{$slider->id}}">
                        <img src="{{ URL::to('') }}/appfiles/product/{{$slider->picture}}" class="girl img-responsive"
                             alt="{{$slider->title}}"/>
                    </a>
                </div>
                @endforeach
            </div>
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</section><!--/slider-->
@endsection
@section('content')
<!--<div class="col-sm-9 col-md-9 col-xs-12">-->
<div class="cate-home">
    @if($pro_home)
    @foreach($pro_home as $pro)
    <div class="SubProductHomePageGroup1">
        <div class="TopBar">
            <div class="TopBarTitle">
                <h2>
                    <a href="{{URL::to('/')}}/product-category-{{$pro['id']}}" title="{{$pro['name']}}">{{$pro['name']}}</a>
                </h2>
            </div>    
        </div>
        <a class="viewAll" href="{{URL::to('/')}}/product-category-{{$pro['id']}}" title="{{$pro['name']}}">Xem tất cả »</a>
        <div class="cb h0"><!----></div>
        <div class="container-productcate">
            @if($pro['product'])
            @foreach($pro['product'] as $product)
            <div class="outerItem">
                <div class="item">
                    <div class="itemContent">
                        <a class="JsImageFrame" href="{{ URL::to('') }}/product-{{$product->id}}" title="{{$product->name}}">
                            <img alt="{{$product->name}}" class="grow" src="{{ URL::to('') }}/appfiles/product/{{$product->picture}}" style="position: absolute; z-index: 1; top: 0px; left: -22.4444px; height: 140px; width: 248.889px;">
                        </a>
                        <div class="h9"><!----></div>
                        <h3>
                            <a class="title " href="{{ URL::to('') }}/product-{{$product->id}}" title="{{$product->title}}">{{$product->title}}</a>
                        </h3>
                        <div class="h5"><!----></div>
                        <div class="code">Mã sp: <span>{{$product->product_code}}</span></div>
                        <div class="h5"><!----></div>
                        <span class="price1"></span>
                        <span class="price2">Liên hệ</span>
                    </div>
                    <a class="detail" href="{{ URL::to('') }}/product-{{$product->id}}">Chi tiết</a>
                    <a class="order" href="{{ URL::to('contact') }}">Mua hàng</a>
                    <div class="cb h1"><!----></div>
                </div>
            </div>
            @endforeach
            @endif
            <div class="cb h0"><!----></div>
        </div>
    </div>
    @endforeach
    @endif
</div>
<div class="clearfix"></div>
@endsection

