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
        <form class="form">
            <p class="name">
                <input type="text" name="name" id="name" placeholder="Họ và tên" />
                <label for="name">Họ và tên</label>
            </p>
            <p class="name">
                <input type="text" name="adress" id="name" placeholder="Địa chỉ" />
                <label for="adress">Địa chỉ</label>
            </p>
            <p class="name">
                <input type="text" name="adress" id="name" placeholder="Số điện thoại" />
                <label for="adress">Số điện thoại</label>
            </p>
            <p class="email">
                <input type="text" name="email" id="email" placeholder="mail@example.com" />
                <label for="email">Email</label>
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