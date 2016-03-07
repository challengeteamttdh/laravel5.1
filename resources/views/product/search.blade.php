@extends('layouts.app')
@section('content')
<div class="col-sm-9 col-md-9 col-xs-12 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Kết quả tìm kiếm với từ khóa: 
            <b>@if(!empty($params)) {{$params}} @endif</b>
        </h2>
    </div><!--features_items-->
    @if(isset($search_result))
        @foreach($search_result as $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{$product->picture}}" alt="{{$product->title}}" />
                            <h3>{{$product->title}}</h3>
                            <p>Mã sp :{{$product->product_code}}</p>
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
</div>
@endsection

