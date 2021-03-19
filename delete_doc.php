<?php
//upload.php

include 'api/config.php';

if(isset($_POST['id']))
{
$id=$_POST['id'];
$sql1 = "select * from pdftable where id='$id'";
$query1 = mysqli_query($conn, $sql1);

while ($row = mysqli_fetch_assoc($query1)) {
unlink($row['pdffile']);

}

 $sql = "delete from pdftable where id='$id'";

if ($conn->query($sql) === TRUE) {

echo "ok";

}else{
  echo('Error: ' . mysqli_error($conn));

}}
?>
