<?php
include "config.php";

$mobile=$_POST['mobile'];
$pass=$_POST['pass'];
$code=$_POST['code'];


//echo $name."-".$pass;
$sql="Select * from users where mobile='$mobile' and code='$code' and role='user'" ;
		  $query = mysqli_query($conn, $sql);

if($query){
if (mysqli_num_rows($query)>0)
{
	  while ($row = mysqli_fetch_array($query)){
			$hashed=$row['password'];
				  if (password_verify($pass,$hashed)==1){
$reply=array("status"=>"true","login"=>"ok");
echo json_encode($reply);

}else{
	$reply=array("status"=>"true","login"=>"Incorrect Password");
echo json_encode($reply);

}

}}else{
		$reply=array("status"=>"false","login"=>"User not found");

	echo json_encode($reply);

}
}



?>
