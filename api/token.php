<?php
include "config.php";
$user_id=$_POST['user_id'];
$token=$_POST['token'];

$sql1="Select * from tokens where user_id='$user_id'";
		  $query1 = mysqli_query($conn, $sql1);
if($query1){      
if (mysqli_num_rows($query1)==0)
{
	
 $sql = "INSERT INTO tokens (user_id, token,timestamp) VALUES ('$user_id', '$token','$dte')";

		  $query = mysqli_query($conn, $sql);

if($query){      
$reply=array("status"=>"true","action"=>"added");
echo json_encode($reply);


}else{
	$reply=array("status"=>"false","action"=>"false");

}



}else{
	
	  while ($row = mysqli_fetch_array($query1)){
$token_temp=$row['token'];


if ($token !=$token_temp){
	$sql = "INSERT INTO tokens (user_id, token,timestamp) VALUES ('$user_id', '$token','$dte')";

		  $query = mysqli_query($conn, $sql);

if($query){      
$reply=array("status"=>"true","action"=>"added");
echo json_encode($reply);


}else{
	$reply=array("status"=>"false","action"=>"false");

}

	
}

	  }	
	
	
}


}

$conn->close();		

?>