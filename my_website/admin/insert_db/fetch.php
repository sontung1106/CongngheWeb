<?php
//fetch.php
$connect = mysqli_connect"localhost", "root", "", "zzz");
$output = '';
$query = "SELECT * FROM product";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h3 align="center">Item Data</h3>
<table class="table table-bordered table-striped">
 <tr>
  <th width="30%">Product Name</th>
  <th width="10%">Product ID</th>
  <th width="10%">Product Brand</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["name"].'</td>
  <td>'.$row["id"].'</td>
  <td>'.$row["brand_id"].'</td>
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
