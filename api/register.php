<?php
include "config.php";
$name=$_POST['name'];
$pass=$_POST['pass'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$code=$_POST['code'];

$pass=password_hash($pass,PASSWORD_DEFAULT);

$sql= "insert into users (name,password,mobile,email,timestamp,address,age,gender,city,code,role) values ('$name','$pass','$mobile','$email','$dte','$address','$age','$gender','$city','$code','user')";

	$sql3 = "SELECT mobile As duplicates FROM users WHERE mobile='$mobile' ";
				 $result3=mysqli_query($conn,$sql3);
 $num_rows=mysqli_fetch_assoc($result3);
		 $count=$num_rows['duplicates'];

//echo $count;
if ($count<1) {

if ($conn->query($sql) === TRUE) {
	  $last_id = $conn->insert_id;

$reply=array("reply"=>$last_id);

} else {
 $reply=array("reply"=>"Error: " . $sql . $conn->error);


}
}else{
$reply=array("reply"=>"duplicated");


}
echo json_encode($reply);

$conn->close();



?>
