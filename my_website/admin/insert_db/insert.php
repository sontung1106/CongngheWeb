<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "zzz");
if(isset($_POST["item_name"]))
{
 $item_name = $_POST["item_name"];
 $item_code = $_POST["item_code"];
 $item_brand = $_POST["item_brand"];
 $query = '';
 for($count = 0; $count<count($item_name); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($connect, $item_name[$count]);
  $item_code_clean = mysqli_real_escape_string($connect, $item_code[$count]);
  $item_brand_clean = mysqli_real_escape_string($connect, $item_brand[$count]);
  if($item_name_clean != '' && $item_code_clean != '' && $item_brand_clean != '' )
  {
   $query .= '
   INSERT INTO product(name, id, brand_id)
   VALUES("'.$item_name_clean.'", "'.$item_code_clean.'","'.$item_brand_clean.'");
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>
