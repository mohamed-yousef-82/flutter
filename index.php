<?php
include "api/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.min.css" />
  </head>
  <body>

<div class="login">
<div class="row">
  <div class="col-md-6">
    <div class="form-container">
      <img class="logo" src="img/Smile_Logo-white.png" alt="" />
      <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" value="" placeholder="mobile">

          </div>
          <div class="form-group">
          <input type="password" name="password" class="form-control" value="" placeholder="password">
        </div>

        <div class="form-group">
            <button type="submit"	class="btn btn-primary">Login</button>
            <a class="btn btn-danger" href="register.php">Register</a>
            <a class="forget" href="forget.php">Forget Password</a>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-6">
    <div class="image-container">
      <!-- <img src="img\login.jpg" alt="" /> -->
  </div>
  </div>

</div>
</div>


          </body>
        </html>
<?php
session_start();

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$mobile=$_POST['name'];
$pass=$_POST['password'];
//echo $mobile.$pass;

//echo $name."-".$pass;
$sql="Select * from users where mobile='$mobile' and code='+20'" ;
		  $query = mysqli_query($conn, $sql);

if($query){
if (mysqli_num_rows($query)>0)
{
	  while ($row = mysqli_fetch_array($query)){
		  //if ($pass==$row['password']){
if (  $row['active']=="1") {

  $hashed=$row['password'];
		  if (password_verify($pass,$hashed)==1){
$rolehashed= $row['role'];
if (password_verify("admin",$rolehashed)==1){
  $_SESSION['role'] = "admin";

}elseif (password_verify("Moderator",$rolehashed)==1) {
  $_SESSION['role'] = "Moderator";

}elseif (password_verify("Customer Service",$rolehashed)==1) {
  $_SESSION['role'] = "Customer Service";

}elseif (password_verify("Accountant",$rolehashed)==1) {
  $_SESSION['role'] = "Accountant";

}elseif (password_verify("IT",$rolehashed)==1) {
  $_SESSION['role'] = "IT";

}elseif (password_verify("Manager",$rolehashed)==1) {
  $_SESSION['role'] = "v";

}elseif (password_verify("Doctor",$rolehashed)==1) {
  $_SESSION['role'] = "Doctor";

}
$_SESSION['id'] = $row['id'];
//echo $pass."---".$hashed;
//echo (password_verify($pass,$hashed));
header("Location:home.php");

	  }else{
echo "Incorrect Password";

}}else{
  echo "Account isn't activated";

}}

}else{

	echo "User not found";

}
}
				}



?>
