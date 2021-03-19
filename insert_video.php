<?php
//upload.php

include 'api/config.php';

if($_FILES["file"]["name"] != '')
{
  $id = $_POST['id'];
  $video_name = $_POST['video_name'];
  $add_by = $_POST['add_by'];

 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = uniqid("video",false) . '.' . $ext;
 $location = 'video/' . $name;
 if(move_uploaded_file($_FILES["file"]["tmp_name"], $location)){
 $sql = "INSERT INTO videotable (receiver, name,sender,timestamp,pdffile) VALUES ('$id', '$video_name', '$add_by','$dte','$location')";

if ($conn->query($sql) === TRUE) {

echo "<tr><td>".$video_name."</td>"."<td>"."<a href='".$location."'> View </a></td></tr>'";

}else{
  echo $conn -> error;
}}}
?>
