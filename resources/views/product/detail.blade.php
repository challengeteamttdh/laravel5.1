@extends('layouts.app')
@section('title') Home :: @parent @stop
@section('content')
<div class="col-sm-9 col-md-9 col-xs-12 padding-right">
    <div id="ProductDetail">
        <div class="TopBar">
            <div class="TopBarTitle"><h1><a href="#">{{$product->title}}</a></h1></div>    
        </div>
        <div class="cb h0"><!----></div>
        <!--Chi tiet cua san pham-->
        <div class="detailProduct">
            <div class="h21"><!----></div>
            <div class="content">
                <div class="slider">
                    <div id="ListImagePreview">              
                        <div class="khungAnhDau JsImageFrame">
                            <a class="group1 cboxElement" href="/appfiles/product/{{$product->picture}}" title="{{$product->title}}"><img style="position: absolute; z-index: 1; top: 0px; left: -32.3889px; height: 253px; width: 449.778px;" alt="{{$product->title}}" class="" src="/appfiles/product/{{$product->picture}}"></a>
                        </div>
                        <div class="h5"><!----></div>
                    </div>
                </div>
                <div class="specs">
                    <span class="TopTitle">{{$product->title}}</span>
                    <div class="h22"><!----></div>
                    <span class="spec"><b>Mã sp:</b> {{$product->product_code}}</span>
                    <div class="h9"><!----></div>
                    <span class="spec"><b>Bảo hành:</b> 24 tháng</span>
                    <div class="h9"><!----></div>
                    <span class="spec"><b>Chất liệu:</b> gỗ</span>
                    <div class="h9"><!----></div>
                    <span class="spec"><b>Màu sắc:</b> Tùy chọn</span>

                    <div class="h22 DottedBottom"><!----></div>

                    <div class="h22"><!----></div>
                    <div class="hotline"><span>Hotline:</span> 0983438810</div>
                    <div class="h10"><!----></div>
                    <div class="hotline"><span>Tel:</span> 0983438810</div>
                    <div class="h10"><!----></div>
                    <a class="purchase" href="#"><span>Gửi liên hệ</span></a>
                </div>
                <!--Hinh anh va mo ta chi tiet ve san phm-->

                <div class="cb h45"><!----></div>
                <div class="TopTitle">Thông tin chi tiết</div>
                <div class="h13"><!----></div>
                <div class="desc">
                    <p>{!! $product->content !!}</p>
                    <p><img alt="" src="/appfiles/product/{{$product->picture}}" style="width: 700px; height: 460px;"></p>
                </div>
                <div class="h25"><!----></div>
            </div>
            <div class="h15"><!----></div>
            <div class="h1 DottedBottom"><!----></div>
            <div class="h10"><!----></div>
            <div class="TopTitle" style="padding-left:13px">Sản phẩm cùng loại</div>
            <div class="h5"><!----></div>
            <div class="outerItem">
                <div class="item">
                    <div class="itemContent">
                        <a class="JsImageFrame ItemImageFrame" href="#" title="Tủ bếp gỗ công nghiệp"><img style="position: absolute; z-index: 1; top: 0px; left: -1.9604px; height: 140px; width: 207.921px;" alt="Tủ bếp gỗ công nghiệp" class="" src="http://tubephoanganh.com/pic/products/tubepcn2635490059747340619.jpg.ashx"></a>
                        <div class="h9"><!----></div>
                        <h3><a class="title" href="#" title="Tủ bếp gỗ công nghiệp">Tủ bếp gỗ công nghiệp</a></h3>
                        <div class="h10"><!----></div>
                        <div class="code">Mã sp: <span>HACN12</span></div>
                        <div class="h9"><!----></div>
                        <span class="price1">Liên hệ</span>
                        <span class="price2">Liên hệ</span>
                    </div>
                    <a class="detail" href="#">Chi tiết</a>
                    <a class="order" href="#">Mua hàng</a>
                    <div class="cb h1"><!----></div>
                </div>
            </div>
            <div class="cb h0"><!----></div>
            <div class="SplitPages">
                <a title="First" class="first" href="#">&nbsp;</a><a class="current" href="#">1</a><a title="Go to 2" class="other" href="#">2</a><a title="Last" class="last" href="#">&nbsp;</a>
            </div>
            <div class="h9"><!----></div>
        </div>
    </div>
</div>
@endsection

