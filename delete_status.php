<?php
//upload.php

include 'api/config.php';

if(isset($_POST['id']))
{
$id=$_POST['id'];
 $sql = "delete from status where id='$id'";

if ($conn->query($sql) === TRUE) {

echo "ok";

}else{
  echo('Error: ' . mysqli_error($conn));

}}
?>
