<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

    <title>Ngân hàng máu</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
    <?php
      require_once("lib/connection.php");
    ?>
    <div class="container">
      <div class="row">
        <h3> Ngân hàng máu</h3>
        <table class="table">
          <caption>Đã đăng ký hiến máu</caption>
          <thead>
            <tr>
              <th>STT</th>

              <th>Họ tên</th>
              <th>Địa chỉ </th>
              <th>Số điện thoại</th>
              <th>Nhóm máu</td>


            </tr>
          </thead>
          <tbody>
          <?php
            $stt = 1 ;
            $sql = "SELECT * FROM hienmau";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?php echo $stt++ ?></th>
              <td><?php echo $data["hovaten"]; ?></td>
              <td><?php echo $data["diachi"]; ?></td>
              <td><?php echo $data["sodt"]; ?></td>
              <td><?php echo $data["nhommau"]; ?></td>


              <td>

              </td>
                     </tr>
          <?php
            }
          ?>
          </tbody>
        </table>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


</body></html>
