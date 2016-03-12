<div class="nav-container">
    <nav class="nav navbar navbar-default">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse menu-bar" id="bs-example-navbar-collapse-1 ">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{URL::to('/')}}">Trang Chủ <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Sản Phẩm </a>
                        <ul class="dropdown-menu">
                            @forelse ($productAndSubProduct as $productcate)
                            <li>
                                <a href="{{URL::to('/')}}/product-category-{{$productcate['cate']['id']}}"><?php echo $productcate['cate']['name']; ?> </a>
                            </li>
                            @empty
                            @endforelse
                        </ul>
                    </li>
                    <!--                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thiết bị bếp </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Máy hút mùi</a></li>
                                            <li><a href="#">Bếp ga, bếp từ</a></li>
                                            <li><a href="#">Chậu rửa,vòi rửa</a></li>					            
                                        </ul>
                                    </li>-->
                    <li class="{{ (Request::is('about') ? 'active' : '') }}">
                        <a href="{{ URL::to('about') }}">Giới thiệu</a>
                    </li>
                    <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                        <a href="{{ URL::to('contact') }}">Liên hệ</a>
                    </li>
                    <li class="">
                        <a href="{{ URL::to('contact') }}">Báo Giá</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>
</div>