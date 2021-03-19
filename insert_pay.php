<?php
//upload.php

include 'api/config.php';

if($_FILES["file"]["name"] != '')
{
  $id = $_POST['id'];
  $pay = $_POST['pay'];
  $add_by = $_POST['add_by'];
  $date = $_POST['date'];
  $invoice_no = $_POST['invoice_no'];

 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = uniqid("invoice",false) . '.' . $ext;
 $location = 'invoices/' . $name;
 if(move_uploaded_file($_FILES["file"]["tmp_name"], $location)){
 //echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
// echo $pay."....".$date.$invoice_no.$location;
 $sql = "INSERT INTO payement (patient_id, est_date, pay,add_by,timestamp,invoice_no,invoice_path) VALUES ('$id', '$date', '$pay','$add_by','$dte','$invoice_no','$location')";

if ($conn->query($sql) === TRUE) {

echo "<tr><td>".$date."</td>"."<td>".$pay."</td>"."<td>"."<a href='".$location."'> View </a></td></tr>'";

}else{
  echo('Error: ' . mysqli_error($conn));

}
}}
?>
