<div class="col-md-3 col-xs-12 col-sm-3">
    <div class="left-sidebar">
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="category-panel">Danh Mục sản phẩm</div>
            <div id='cssmenu'>
                <ul>
                    @if(isset($productAndSubProduct))
                    @forelse ($productAndSubProduct as $productcate)
                    <li class="@if(isset($productcate['cate']['subcate'])) {{'active has-sub'}}  @endif">
                        <a href="{{URL::to('/')}}/product-category-{{$productcate['cate']['id']}}">
                            <span><?php echo $productcate['cate']['name']; ?></span>
                        </a>
                        @if(isset($productcate['cate']['subcate']))
                        @forelse($productcate['cate']['subcate'] as $subcate)
                        <ul>
                            <li class=''><a href='{{URL::to('/')}}/product-sub-category-{{$subcate['id']}}'><span><?php echo $subcate['name']; ?> </span></a>
                            </li>
                        </ul>
                        @empty
                        @endforelse
                        @endif
                    </li>
                    @empty
                    @endforelse
                    @endif
                </ul>
            </div>
        </div><!--/category-products-->

        <div class="brands_products support-online"><!--brands_products-->
            <div class="brands-name">
                <h2>Hỗ trợ trực tuyến</h2>
                <div class="h11"><!----></div>
                <div class="support">
                    <span class="title">Hỗ trợ mua hàng </span>
                    <div class="h8"><!----></div>
                    <span class="hotline">Mr.Dũng</span>
                    <span class="hotline">0983.438.810</span>
                </div>
                <div class="h22"><!----></div>
            </div>
        </div><!--/brands_products-->

        <div class="" id ="CommonStatistic">
            <div class="truycap">
                <div class="h20"><!----></div>
                <div class="label">Đang online:</div>
                <div class="value">2</div>
                <div class="cb h25"><!----></div>
                <div class="label">Tổng truy cập:</div>
                <div class="value">10</div>
                <div class="cb h0"><!----></div>
            </div>
        </div>
    </div>
</div>