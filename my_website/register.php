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
	<head>
		<div id="menu" >
	<ul>


		<li><a href="trangchu.php">Trang chủ</a></li>
		<li>  <a href="#">Đăng ký hiến máu</a>
			<li>  <a href="#">Đăng ký nhận máu</a>

		</li>
		<li><a href="nganhangmau.php">Ngân hàng máu</a>

		</li>


		<li><a href="login.php">Đăng nhập</a></li>
		<li><a href="register.php">Đăng ký</a></li>
	</ul>
	</div>
	<!-- Header -->
	<header class="w3-display-container w3-content" style="max-width:1500px;">

	<div class="w3-display-left w3-padding w3-col l6 m8">

	</div>
	</head>
	<body>
		<?php
		require_once("lib/connection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			 $name = $_POST["name"];
  			$email = $_POST["email"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $name == "" || $email == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where username='$username'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO users(
	    					username,
	    					password,
	    					name,
						    email
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$name',
	    					'$email'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã đăng ký thành công";
					}


			  }
	}
	?>
	<form action="register.php" method="post">
		<table align="center">
			<tr>
			<p id=tencacdiadiem align="center">Đăng ký tài khoản </p>
			</tr>
			<tr>
				<td>Tên tài khoản:</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Mật Khẩu:</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>Họ và tên:</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Đăng ký"></td>
			</tr>

		</table>

	</form>
	</body>
	</html>
