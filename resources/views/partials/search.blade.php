<div class="search">
    <div class="row">
        <div class="col-md-8 col-xs-12 col-sm-4">
        </div>
        <div class="col-md-4 col-xs-12 col-sm-9">
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
        </div>
    </div>
</div>