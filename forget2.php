<html>
<form class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

<label>New Password</label>		 <input class="form-control" name="pass" id="pass" type="text" >
<label>Confirm Password</label>		 <input class="form-control" name="confirm" id="confirm" type="text" >

<input class="btn btn-primary" name="submit" value="Add" type="submit" >


</form>

</html>




<?php
include "api/config.php";
include "api/session.php";
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
