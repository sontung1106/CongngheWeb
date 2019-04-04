<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Thông tin người hiến máu</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
      <div class="row">
      	<?php
		    require_once("../lib/connection.php");

		    if (isset($_POST["save"])) {
		    	$id_user = $_POST["id_user"];
		    	$hovaten = $_POST["hovaten"];
		    	$socmt = $_POST["socmt"];
		    	$sodt = $_POST["sodt"];
          $diachi = $_POST["diachi"];
          $nhommau = $_POST["nhommau"];
          $luongmaumuonhien = $_POST["luongmaumuonhien"];
		    	$sql = "update hienmau set hovaten = '$hovaten', socmt = '$socmt', sodt = '$sodt', diachi = '$diachi', nhommau = '$nhommau', luongmaumuonhien = '$luongmaumuonhien' where id = $id_user";
		    	mysqli_query($conn, $sql);
		    }



        		    $id = "";
                $hovaten= "";
                $socmt= "";
                $sodt= "";
                $diachi= "";
                $nhommau= "";
                $luongmaumuonhien= "";
		    if (isset($_GET["id"])) {
		    	//thực hiện việc lấy thông tin user
		    	$id = $_GET["id"];
		    	$sql = "select * from hienmau where id = $id";
		    	$query = mysqli_query($conn, $sql);
          
		    	while ( $data = mysqli_fetch_array($query) ) {

            $hovaten=$data["hovaten"];
            $socmt=$data["socmt"];
            $sodt=$data["sodt"];
            $diachi=$data["diachi"];
            $nhommau=$data["nhommau"];
            $luongmaumuonhien=$data["luongmaumuonhien"];





		    	}
		    }
		?>
        <h3> Thông tin hiến máu</h3>
        <form method="POST" name="fr_update">
	        <table class="table">
	          <caption>Danh sách người hiến máu đã đăng ký</caption>
	          	<input type="hidden" name="id_user" value="<?php echo $id; ?>">
	          	<tr><td>Họ tên : </td><td><input type="text" name="hovaten" value="<?php echo $hovaten; ?>" /></td></tr>
	          	<tr><td>Số CMT : </td><td><input type="text" name="socmt" value="<?php echo $socmt; ?>"/></td></tr>
              <tr><td>Số ĐT : </td><td><input type="text" name="sodt" value="<?php echo $sodt; ?>"/></td></tr>
              <tr><td>Địa chỉ : </td><td><input type="text" name="diachi" value="<?php echo $diachi; ?>"/></td></tr>
              <tr><td>Nhóm máu : </td><td><input type="text" name="nhommau" value="<?php echo $nhommau; ?>"/></td></tr>
              <tr><td>Lượng máu muốn hiến : </td><td><input type="text" name="luongmaumuonhien" value="<?php echo $luongmaumuonhien; ?>"/></td></tr>


	          	<tr><td colspan="2"><input href="quanlyhienmau.php" type="submit" name="save" value="Lưu thông tin" ></td></tr>
              <a href="quanlyhienmau.php"><< Quay lại</a>
	        </table>
        </form>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


</body></html>
