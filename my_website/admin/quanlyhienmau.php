<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quản lý người hiến máu</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
    <?php
      require_once("../lib/connection.php");
    ?>
    <div class="container">
      <div class="row">
        <h3> Quản lý người hiến máu</h3>
        <table class="table">
          <caption>Danh sách người hiến máu đã đăng ký</caption>
          <thead>
            <tr>
              <th>STT</th>
              <th>Họ và tên</th>

              <th>Số CMT</th>
              <th>Số ĐT</th>
              <th>Địa chỉ</th>
              <th>Nhóm máu đá biết</th>
              <th>Lượng máu muốn hiến</th>
              </td>
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
              <td><?php echo $data["socmt"]; ?></td>
              <td><?php echo $data["sodt"]; ?></td>
              <td><?php echo $data["diachi"]; ?></td>
              <td><?php echo $data["nhommau"]; ?></td>
              <td><?php echo $data["luongmaumuonhien"]; ?></td>


              <td><a href="chinhsuahienmau.php?id=<?php echo $data["id"]; ?>">Sửa</a> <a href="xoahienmau.php?id=<?php echo $data["id"]; ?>">Xóa</a></td>
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
