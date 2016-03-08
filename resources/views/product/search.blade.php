@extends('layouts.app')
@section('content')
<div class="col-sm-9 col-md-9 col-xs-12 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Kết quả tìm kiếm với từ khóa: 
            <b>@if(!empty($params)) {{$params}} @endif</b>
        </h2>
    </div><!--features_items-->
    <div class="SubProductHomePageGroup1">
        <div class="container-productcate">
            @if(isset($search_result))
            @foreach($search_result as $product)
            <div class="outerItem">
                <div class="item">
                    <div class="itemContent">
                        <a class="JsImageFrame" href="{{ URL::to('') }}/product-{{$product->id}}" title="{{$product->title}}">
                            <img alt="{{$product->title}}" class="" src="http://tubephoanganh.com/pic/products/DSC_0016635916761289785577.jpg.ashx" style="position: absolute; z-index: 1; top: 0px; left: -22.4444px; height: 140px; width: 248.889px;">
                        </a>
                        <div class="h9"><!----></div>
                        <h3>
                            <a class="title" href="{{ URL::to('') }}/product-{{$product->id}}" title="{{$product->title}}">{{$product->title}}</a>
                        </h3>
                        <div class="h5"><!----></div>
                        <div class="code">Mã sp: <span>{{$product->product_code}}</span></div>
                        <div class="h5"><!----></div>
                        <span class="price1"></span>
                        <span class="price2">Liên hệ</span>
                    </div>
                    <a class="detail" href="{{ URL::to('') }}/product-{{$product->id}}">Chi tiết</a>
                    <a class="order" href="#">Mua hàng</a>
                    <div class="cb h1"><!----></div>
                </div>
            </div>
            @endforeach
            @endif
            <div class="cb h0"><!----></div>
        </div>
    </div>
</div>
@endsection

