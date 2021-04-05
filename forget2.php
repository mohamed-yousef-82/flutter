<?php
include "header2.php";
?>
<form class="form form-page" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	<a class="logo-link" href="<?php echo $domain ?>/home.php"><img class="logo" src="<?php echo $domain ?>/img/Smile_Logo-dark.png" alt="" /></a>
	<h3>Change Password</h3>
<div class="form-group">
	<label>New Password</label>		 <input class="form-control" name="pass" id="pass" type="text" >
</div>
<div class="form-group">
<label>Confirm Password</label>		 <input class="form-control" name="confirm" id="confirm" type="text" >
</div>
<input class="btn btn-primary" name="submit" value="Add" type="submit" >
</form>
<?php

if(isset($_POST['submit'])){

$pass=$_POST['pass'];
$id=$_GET['q'];
$decrypted = openssl_decrypt($id, "AES-128-CBC", "Focus_smart",0,"Focus_smartsmile");
$confirm=$_POST['confirm'];
if($pass==$confirm){

$pass=password_hash($pass,PASSWORD_DEFAULT);

	$sql = "update users set password='$pass' where id='$decrypted' ";
  $query = mysqli_query($conn, $sql);

  if ($conn->query($sql) === TRUE) {

  echo "Password Updated";
  }else{

  }
}else{
  echo "Password doesn't match";
}
$conn->close();
}
?>
<?php
include "footer.php";
?>
