<div class="col-md-3 col-xs-12 col-sm-3">
    <div class="left-sidebar">
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <h2>Danh Mục sản phẩm</h2>
            @if(isset($productAndSubProduct))
                @forelse ($productAndSubProduct as $productcate)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <!--data-toggle="collapse"-->
                                <a  data-parent="#accordian" href="{{URL::to('/')}}/product-category-{{$productcate['cate']['id']}}">
                                    <?php echo $productcate['cate']['name']; ?>
                                </a>
                            </h4>
                        </div>
                        <div>
                            <div class="panel-body">
                                <ul>
                                    @if(isset($productcate['cate']['subcate']))
                                        @forelse($productcate['cate']['subcate'] as $subcate)
                                            <li><a href="{{URL::to('/')}}/product-sub-category-{{$subcate['id']}}"><?php echo $subcate['name']; ?> </a></li>
                                        @empty
                                        @endforelse
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            @endif
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