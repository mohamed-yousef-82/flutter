<?php
include "config.php";
$user_id=$_POST['user_id'];
$txt=$_POST['txt'];
$receiver_id=$_POST['receiver_id'];

		 $sql = "INSERT INTO chat (sender, receiver,msg,timestamp) VALUES ('$user_id', '$receiver_id','$txt','$dte')";

		  $query = mysqli_query($conn, $sql);

if($query){      
$reply=array("status"=>"true","action"=>"added");
echo json_encode($reply);


}else{
	$reply=array("status"=>"false","action"=>"false");

}

?>