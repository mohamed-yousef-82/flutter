<?php
include "config.php";
$user_id=$_POST['user_id'];
$date=$_POST['date'];

		 $sql = "INSERT INTO appoi (user_id, date,timestamp) VALUES ('$user_id', '$date','$dte')";

		  $query = mysqli_query($conn, $sql);

if($query){      
$reply=array("status"=>"true","action"=>"added");
echo json_encode($reply);


}else{
	$reply=array("status"=>"false","action"=>"false");

}

?>