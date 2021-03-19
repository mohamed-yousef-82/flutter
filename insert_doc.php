<?php
//upload.php

include 'api/config.php';

if($_FILES["file"]["name"] != '')
{
  $id = $_POST['id'];
  $doc_name = $_POST['doc_name'];
  $add_by = $_POST['add_by'];

 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = uniqid("doc",false) . '.' . $ext;
 $location = 'pdf/' . $name;
 if(move_uploaded_file($_FILES["file"]["tmp_name"], $location)){
 //echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
// echo $pay."....".$date.$invoice_no.$location;
 $sql = "INSERT INTO pdftable (receiver, name,sender,timestamp,pdffile) VALUES ('$id', '$doc_name', '$add_by','$dte','$location')";

if ($conn->query($sql) === TRUE) {

echo "<tr><td>".$doc_name."</td>"."<td>"."<a href='".$location."'> View </a></td></tr>'";

}else{
  echo('Error: ' . mysqli_error($conn));

}}}
?>
