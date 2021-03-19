<?php
//upload.php

include 'api/config.php';

if(isset($_POST['id']))
{
$id=$_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$add_by = $_POST['add_by'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$company = $_POST['company'];

 $sql = "update doctors set name='$name',address='$address',add_by='$add_by',mobile='$mobile',city='$city',company='$company' where id='$id'";

if ($conn->query($sql) === TRUE) {

echo "ok";

}else{
  echo('Error: ' . mysqli_error($conn));

}}
?>
