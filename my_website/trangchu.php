<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/trangchu.css">
<link rel="stylesheet" href="css/footer.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="">

    <div id="menu" >
  <ul>


    <li><a href="trangchu.php">Trang chủ</a></li>
    <li>  <a href="dkhienmau.php">Đăng ký hiến máu</a>
      <li>  <a href="dangkynhanmau.php">Đăng ký nhận máu</a>

    </li>
    <li><a href="nganhangmau.php">Ngân hàng máu</a>

    </li>


    <li><a href="login.php">Đăng nhập</a></li>
    <li><a href="register.php">Đăng ký</a></li>

  </ul>
</div>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="http://special.tienphong.vn/special/5/w/images/img1.jpg" alt="" style="min-width:1000px" width="1500" height="800">
  <div class="w3-display-left w3-padding w3-col l6 m8">

  </div>
</header>
  <p id=tencacdiadiem align="center">HIẾN MÁU CỨU NGƯỜI MỘT NGHĨA CỬ CAO ĐẸP </p>
<
<div class="w3-container" id="contact">
  <h2>LIÊN HỆ</h2>
  <p>NẾU CÓ THẮC MẮC GÌ ,ĐỪNG NGẦN NGẠI HÃY LIÊN LAC VỚI CHÚNG TÔI.</p>
  <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> HÀ NỘI ,VIỆT NAM<br>
  <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +00 151515<br>
  <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: tung.bgbg@gmail.com<br>
  <form action="/action_page.php" target="_blank">
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
    <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
  </form>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity" ></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>

  </div>
  <p>Powered by <a href="https://plus.google.com/u/0/106974998444610829545" target="_blank" class="w3-hover-text-green">tung.bgbg@gmail.com</a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>

</html>
