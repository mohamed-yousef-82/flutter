<?php
include "header2.php";
?>
<form class="form form-page" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
  <a class="logo-link" href="<?php echo $domain ?>/home.php"><img class="logo" src="<?php echo $domain ?>/img/Smile_Logo-dark.png" alt="" /></a>
  <h3>Change Password</h3>
<div class="form-group">
  <label>Mobile</label>		 <input class="form-control" name="mobile" id="mobile" type="number" >
</div>
<div class="form-group">
<label>email</label>		 <input class="form-control" name="email" id="email" type="text" >
</div>
<div class="form-group">
<label>City</label>

          <select class="form-control" name="city" id="city"  >
            <option disabled selected >City</option>
            <option value="Cairo">Cairo</option>
            <option value="Giza">Giza</option>
            <option value="Alexandria">Alexandria</option>
            <option value="Tanta">Tanta</option>
            <option value="Mansoura">Mansoura</option>
            <option value="Red Sea">Red Sea</option>
          </select>
        </div>
<input class="btn btn-primary" name="submit" value="Add" type="submit" >


</form>





<?php
if(isset($_POST['submit'])){

$mobile=$_POST['mobile'];
$email=$_POST['email'];
$city=$_POST['city'];
//$_SESSION['role']=$role;

	$sql = "SELECT * from users WHERE mobile='$mobile' ";
	$query = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($query)) {
if($email==$row['email'] && $city=$row['city'] && $role=$row['role']){
$encr_id = openssl_encrypt ($row['id'],"AES-128-CBC","Focus_smart",0,"Focus_smartsmile");

	sendMail($email,'forget2.php?q="'.$encr_id.'"');

}

}
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


$conn->close();
}
?>
<?php
include "footer.php";
?>
