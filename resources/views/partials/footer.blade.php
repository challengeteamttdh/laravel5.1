<footer id="footer"><!--Footer-->
    <div class="row footer-widget">
        <div class=" footer_ct">
            <p><span style="font-size:16px"><strong>NỘI THẤT NGỌC
                            DŨNG</strong></span></p>
            <p><a href="http://noithatngocdung.vn/">http://noithatngocdung.vn</a></p>
            <p>Địa chỉ xưởng&nbsp;: Dị Nậu -&nbsp;Thạch Thất - Hà Nội - Việt Nam</p>
            <p>SĐT: 0983438810</p>
            <p>Email: noithatngocdung.vn@gmail.com</p>
            <p>Bản quyền thuộc về Cơ Sở Sản Xuất Và&nbsp;Tư Vấn Thiết Kế Nội Thất Ngọc Dũng</p>
        </div>
        <div class=" right-footer">
            <div id="map"></div>
        </div>
        <div class="clearfix"></div>
        <script>
            function initMap() {
                var mapDiv = document.getElementById('map');
                var myLatlng = new google.maps.LatLng(21.048982, 105.626769);
                var map = new google.maps.Map(mapDiv, {
                    center: {lat: 21.048982, lng: 105.626769},
                    zoom: 16
                });
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    title: "Nội Thất Ngọc Dũng"
                });
                marker.setMap(map);
            }
        </script>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2016 Noi that ngoc dung. All rights reserved.</p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->