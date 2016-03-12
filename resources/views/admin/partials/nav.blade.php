<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::to('admin/dashboard') }}">Trang quản trị</a>
    </div>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{ URL::to('') }}"><i class="fa fa-backward"></i> {{trans('admin/nav.home')}}</a>
                </li>
                <li>
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-dashboard fa-fw"></i> {{trans('admin/nav.dashboard')}}
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/language')}}">
                        <i class="fa fa-language"></i> {{trans('admin/nav.language')}}
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-bullhorn"></i> {{trans('admin/nav.pdm')}}
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/productcategory')}}">
                                <i class="glyphicon glyphicon-list"></i> {{trans('admin/nav.pdc')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/productsubcategory')}}">
                                <i class="glyphicon glyphicon-list"></i> {{trans('admin/nav.pdsc')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/color')}}">
                                <i class="glyphicon glyphicon-bullhorn"></i> {{trans('admin/nav.color')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/material')}}">
                                <i class="glyphicon glyphicon-bullhorn"></i> {{trans('admin/nav.material')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/producer')}}">
                                <i class="glyphicon glyphicon-bullhorn"></i> {{trans('admin/nav.producer')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/product')}}">
                                <i class="glyphicon glyphicon-bullhorn"></i> {{trans('admin/nav.pd')}}
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-bullhorn"></i> Bài viết
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/articlecategory')}}">
                                <i class="glyphicon glyphicon-list"></i>  Danh mục bài viết
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/article')}}">
                                <i class="glyphicon glyphicon-bullhorn"></i> Bài viết
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-camera"></i> Photo items
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/photoalbum')}}">
                                <i class="glyphicon glyphicon-list"></i> Photo albums
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/photo')}}">
                                <i class="glyphicon glyphicon-camera"></i> Photo
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/user')}}">
                        <i class="glyphicon glyphicon-user"></i> Người dùng
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
</nav>