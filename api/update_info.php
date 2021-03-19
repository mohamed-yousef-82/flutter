<?php
include "config.php";

$user_id=$_POST['user_id'];
$pass=$_POST['pass']??'';
$mobile=$_POST['mobile']??'';
$email=$_POST['email']??'';
$address=$_POST['address']??'';
$age=$_POST['age']??'';
$city=$_POST['city']??'';
$code=$_POST['code']??'';

//echo $name."-".$pass;
$sql="update users  set password='$pass' ,mobile='$mobile',city='$city' , address='$address' , email='$email', age='$age' ,code='$code' where id='$user_id'";
		  $query = mysqli_query($conn, $sql);

if($query){      


	$reply=array("reply"=>"updated");

} else {
 $reply=array("reply"=>"Error: " . $sql . $conn->error);

}
echo json_encode($reply);

$conn->close();



?>
