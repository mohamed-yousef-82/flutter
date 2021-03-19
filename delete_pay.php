<?php
//upload.php

include 'api/config.php';

if(isset($_POST['id']))
{
$id=$_POST['id'];
$sql1 = "select * from payement where id='$id'";
$query1 = mysqli_query($conn, $sql1);

while ($row = mysqli_fetch_assoc($query1)) {
unlink($row['invoice_path']);

}

 $sql = "delete from payement where id='$id'";

if ($conn->query($sql) === TRUE) {

echo "ok";

}else{
  echo('Error: ' . mysqli_error($conn));

}}
?>
