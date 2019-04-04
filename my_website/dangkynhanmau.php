<?php session_start(); ?>
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


    <li><a href="role.php"> Xin Chào  :<?php echo $_SESSION['username']; ?>  Đăng xuất</a></li>
  
  </ul>
</div>
	</head>
	<body>
		<?php
		require_once("lib/connection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$hovaten = $_POST["hovaten"];
  			$password = $_POST["pass"];
 			 $nghenghiep = $_POST["nghenghiep"];
              $diachidaydu = $_POST["email"];
              $nhommau = $_POST["email"];

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
	    				$sql = "INSERT INTO hienmau(
	    					hovaten',
	    					ngaysinh',
						    nghenghiep',
                            diachidaydu',
                            nhommau',
							luongmaumuonhien'
	    					) VALUES (
	    					'$hovaten',
	    					'$ngaysinh',
						    '$nghenghiep',
                            '$diachidaydu'
                            '$nhommau',
							'$luongmaumuonhien'
                            
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
			<tr id=tencacdiadiem align="center" >
				<td colspan="2">PHIẾU ĐĂNG KÝ HỒ SƠ NHẬN MÁU</td>
			</tr>	
			<tr>
				<td>HỌ VÀ TÊN :</td>
				<td><input type="hovaten" id="username" name="HỌ VÀ TÊN"></td>
			</tr>
			<tr>
				<td>NGÀY SINH :</td>
				<td><input type="ngaysinh" id="pass" name="NGÀY SINH"></td>
			</tr>
			<tr>
				<td>NGHỀ NGHIỆP:</td>
				<td><input type="text" id="nghenghiep" name="NGHỀ NGHIỆP"></td>
			</tr>
            <td>SỐ CHỨNG MINH THƯ  :</td>
				<td><input type="text" id="socmt" name="số chứng minh thư"></td>
			</tr>
            <td>SỐ ĐIỆN THOẠI :</td>
				<td><input type="text" id="luongmau" name="lượng máu"></td>
			</tr>
	
				<td>ĐẠI CHỈ ĐẦY ĐỦ:</td>
				<td><input type="text" id="diachidaydu" name="ĐỊA CHỈ ĐẦY ĐỦ"></td>
			</tr><tr>
				<td>NHÓM MÁU(ĐÃ BIẾT) :</td>
				<td><input type="text" id="nhommau" name="NHÓM MÁU"></td>
			</tr>
            <td>LƯỢNG MÁU MUỐN NHẬN  :</td>
				<td><input type="text" id="luongmau" name="lượng máu"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="ĐĂNG KÝ CHỜ NHẬN MÁU"></td>
			</tr>
 
		</table>
 
	</form>
	</body>
	</html>