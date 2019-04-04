<?php

//multiple_update.php

include('database_connection.php');

if(isset($_POST['hidden_id']))
{
 $name = $_POST['name'];
 $id = $_POST['hidden_id'];
 for($count = 0; $count < count($id); $count++)
 {
  $data = array(
   ':name'   => $name[$count],
   ':id'   => $id[$count]
  );
  $query = "
  UPDATE product 
  SET name = :name 
  WHERE id = :id
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
 }
}

?>
