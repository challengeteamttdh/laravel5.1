<div class="search">
    <div class="row form-search SubSearchProduct">
        <form role="form form-search" method="post" action="{{URL::to('/')}}/search">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group search-cat">
                <input type="text" name="search" class="form-control" id="search" placeholder="Nhập để tìm">
            </div>
            <button type="submit" class="btn btn-default btn-search">
                Tìm kiếm
            </button>
        </form>
    </div>
    <div class="clearfix"></div>
</div>