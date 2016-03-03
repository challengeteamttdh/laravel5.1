<!--<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Nội thất Ngọc Dũng</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('/') ? 'active' : '') }}">
                    <a href="{{ URL::to('') }}"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="{{ (Request::is('articles') ? 'active' : '') }}">
                    <a href="{{ URL::to('articles') }}">Articles</a>
                </li>
                <li class="{{ (Request::is('about') ? 'active' : '') }}">
                    <a href="{{ URL::to('about') }}">About</a>
                </li>
                <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                    <a href="{{ URL::to('contact') }}">Contact</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{trans("common.language")}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ URL::to('language/en') }}">{{trans("common.en")}}</a></li>
                        <li><a href="{{ URL::to('language/vi') }}">{{trans("common.vi")}}</a></li>
                    </ul>
                </li>
                @if (Auth::guest())
                    <li class="{{ (Request::is('auth/login') ? 'active' : '') }}"><a href="{{ URL::to('auth/login') }}"><i
                                    class="fa fa-sign-in"></i> Login</a></li>
                    <li class="{{ (Request::is('auth/register') ? 'active' : '') }}"><a
                                href="{{ URL::to('auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i
                                    class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::check())
                                @if(Auth::user()->admin==1)
                                    <li>
                                        <a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a>
                                    </li>
                                @endif
                                <li role="presentation" class="divider"></li>
                            @endif
                            <li>
                                <a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>-->


<nav class="navbar navbar-default">  
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse menu-bar" id="bs-example-navbar-collapse-1 ">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Trang Chủ <span class="sr-only">(current)</span></a></li>\
                <li><a href="#">Giới Thiệu</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tủ Bếp </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Tủ bếp gỗ xoan đào</a></li>
                        <li><a href="#">Tủ bếp gỗ sồi Nga</a></li>
                        <li><a href="#">Tủ bếp gỗ công nghiệp</a></li>			            
                        <li><a href="#">Bàn ghế ăn</a></li>			            			            
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thiết bị bếp </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Máy hút mùi</a></li>
                        <li><a href="#">Bếp ga, bếp từ</a></li>
                        <li><a href="#">Chậu rửa,vòi rửa</a></li>					            
                        <li><a href="#">Kính ốp bếp</a></li>					            
                        <li><a href="#">Phụ kiện tủ bếp</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xu hướng hiện nay </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Xu hướng chọn tủ bếp</a></li>					           
                    </ul>
                </li>
                <li><a href="#">Báo giá tủ bếp</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>