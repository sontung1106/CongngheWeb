<?php 

 
// Xóa session login
set_logout();
 
// Chuyển hướng sang trang login
redirect(base_url('login.php'));
?>