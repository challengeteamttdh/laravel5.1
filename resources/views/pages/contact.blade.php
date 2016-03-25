@extends('layouts.appnonmenu')
@section('title') Contact :: @parent @stop
@section('content')
<div class="col-md-12 col-xs-12 col-sm-12">
    <div class="contact">
        <h2 class="contact-title">Nội Thất Ngọc Dũng</h2>
        <div class="info">
            <label>SĐT: 0983438810</label>
            <p>Địa chỉ xưởng : Dị Nậu - Thạch Thất - Hà Nội - Việt Nam
            </p>
        </div>
        <br>
        <h3 class="contact-title">Liên hệ với chúng tôi</h3>
        <form class="form" method="post" action="{{URL::to('/contact')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p class="name">
                <label for="name">Họ và tên</label>
                <input type="text" name="name" id="name" placeholder="Họ và tên" />
            </p>
            <p class="name">
                 <label for="adress">Địa chỉ</label>
                <input type="text" name="adress" id="name" placeholder="Địa chỉ" />
            </p>
            <p class="name">
                <label for="adress">Số điện thoại</label>
                <input type="text" name="adress" id="name" placeholder="Số điện thoại" />
            </p>
            <p class="email">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="mail@example.com" />
            </p>
            <p class="text">
                <textarea name="text" placeholder="Gửi tin nhắn cho chúng tôi" /></textarea>
            </p>
            <p class="submit">
                <input type="submit" value="Send" />
            </p>
        </form>
    </div>
</div>
@endsection