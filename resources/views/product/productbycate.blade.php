@extends('layouts.app')
@section('content')
<!--<div class="col-sm-9 col-md-9 col-xs-12">-->
    <div class="features_items"><!--features_items-->
        <div class="SubProductHomePageGroup1">
            <div class="TopBar">
                <div class="TopBarTitle">
                    <h2>
                        <a href="#" title="{{$productcate->name}}">{{$productcate->name}}</a>
                    </h2>
                </div>    
            </div>
            <div class="cb h0"><!----></div>
            <div class="container-productcate">
                @if($productbycate)
                @foreach($productbycate as $product)
                <div class="outerItem">
                    <div class="item">
                        <div class="itemContent">
                            <a class="JsImageFrame" href="{{ URL::to('') }}/product-{{$product->id}}" title="{{$product->name}}">
                                <img alt="{{$product->name}}" class="grow" src="/appfiles/product/{{$product->picture}}" style="position: absolute; z-index: 1; top: 0px; left: -22.4444px; height: 140px; width: 248.889px;">
                            </a>
                            <div class="h9"><!----></div>
                            <h3>
                                <a class="title" href="{{ URL::to('') }}/product-{{$product->id}}" title="{{$product->name}}">{{$product->name}}</a>
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
    </div><!--features_items-->

<!--</div>-->
@endsection

