<nav class="navbar navbar-default">  
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse menu-bar" id="bs-example-navbar-collapse-1 ">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{URL::to('/')}}">Trang Chủ <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tủ Bếp </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Tủ bếp gỗ xoan đào</a></li>
                        <li><a href="#">Tủ bếp gỗ sồi Nga</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thiết bị bếp </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Máy hút mùi</a></li>
                        <li><a href="#">Bếp ga, bếp từ</a></li>
                        <li><a href="#">Chậu rửa,vòi rửa</a></li>					            
                    </ul>
                </li>
                <li class="{{ (Request::is('about') ? 'active' : '') }}">
                    <a href="{{ URL::to('about') }}">Giới thiệu</a>
                </li>
                <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                    <a href="{{ URL::to('contact') }}">Liên hệ</a>
                </li>
                @if (Auth::guest())
                <li class="{{ (Request::is('auth/login') ? 'active' : '') }}"><a href="{{ URL::to('auth/login') }}"><i
                            class="fa fa-sign-in"></i> Đăng nhập</a></li>
                <li class="{{ (Request::is('auth/register') ? 'active' : '') }}"><a
                        href="{{ URL::to('auth/register') }}">Đăng kí</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i
                            class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        @if(Auth::check())
                        @if(Auth::user()->admin==1)
                        <li>
                            <a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Trang quản lý</a>
                        </li>
                        @endif
                        <li role="presentation" class="divider"></li>
                        @endif
                        <li>
                            <a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>