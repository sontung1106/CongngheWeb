<?php
session_start();
?>
<html>
<head>
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/trangchu.css">
	<link rel="stylesheet" href="css/footer.css">
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
	//Gọi file connection.php ở bài trước
	require_once("lib/connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: trangchu1.php');
			}
		}
	}
?>
	<form method="POST" action="login.php">
	<fieldset>
	    <legend>Đăng nhập</legend>
	    	<table align='center'>
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input name="btn_submit" type="submit" value="Đăng nhập"></td>
	    		</tr>
	    	</table>
  </fieldset>
  </form>
</body>
</html>
