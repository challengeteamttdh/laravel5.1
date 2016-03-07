@extends('layouts.app')
@section('content')
<div class="col-sm-9 col-md-9 col-xs-12 padding-right">
    <div class="features_items"><!--features_items-->
        @if($productcate)
            <h2 class="title text-center">{{$productcate->name}}</h2>
        @endif
        @if($productbycate)
            @foreach($productbycate as $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{$product->picture}}" alt="" />
                            <h3>{{$product->name}}</h3>
                            <p>Mã sp :{{$product->unique_code}}</p>
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
            @endforeach
        @endif
    </div><!--features_items-->

</div>
@endsection

