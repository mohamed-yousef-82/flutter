<?php
include "config.php";

$mobile=$_POST['mobile'];
$email=$_POST['email'];
$code=$_POST['code'];
$city=$_POST['city'];


//echo $name."-".$pass;
$sql="Select * from users where mobile='$mobile' and code='$code' and city='$city' and email='$email'" ;
		  $query = mysqli_query($conn, $sql);

if($query){
if (mysqli_num_rows($query)>0)
{
	  while ($row = mysqli_fetch_array($query)){
			$encr_id = openssl_encrypt ($row['id'],"AES-128-CBC","Focus_smart",0,"Focus_smartsmile");

				sendMail($email,'forget2.php?q="'.$encr_id.'"');

		$reply=array("status"=>"True","login"=>"Password sent to registered mail");
		echo json_encode($reply);

}

}else{
		$reply=array("status"=>"false","login"=>"User not found");

	echo json_encode($reply);

}}
function sendMail($email, $password)
{
	 $to      =$email;
$subject ="Recover Password -- Smart Smile";
$message ="Your password reset link is ".$pass;

$headers = 'From: inquiry@focuspublish.com' . "\r\n" .
	 'Reply-To: inquiry@focuspublish.com' . "\r\n" .
	 'X-Mailer: PHP/' . phpversion();



$success = mail($to, $subject, $message, $headers);
if (!$success) {
	 $errorMessage = error_get_last()['message'];
}
else{
 echo "okkkkkkk";
//---------- send mail
}
}

}




?>
