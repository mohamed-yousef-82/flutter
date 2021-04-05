<?php
include "header2.php";
?>
<form class="form form-page" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
  <a class="logo-link" href="<?php echo $domain ?>/home.php"><img class="logo" src="<?php echo $domain ?>/img/Smile_Logo-dark.png" alt="" /></a>
  <h3>Register</h3>
<div class="form-group">
  <label>Name</label>		    <input class="form-control" name="name" id="name" type="text" >
</div>
<div class="form-group">
<label>address</label>		 <input class="form-control" name="address" id="address" type="text" >
</div>
<div class="form-group">
<label>Mobile</label>		 <input class="form-control" name="mobile" id="mobile" type="number" >
</div>
<div class="form-group">
<label>email</label>		 <input class="form-control" name="email" id="email" type="text" >
</div>
<div class="form-group">
<label>Password</label>		 <input class="form-control" name="password" id="password" type="text" >
</div>
<div class="form-group">
<label>Confirm Password</label>		 <input class="form-control" name="confirm" id="confirm" type="text" >
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
          <div class="form-group">
<label>Role</label>
 <select class="form-control" name="role" id="role"  >
    <option disabled selected >role</option>
    <option value="admin">admin</option>
    <option value="Moderator">Moderator</option>
    <option value="Customer Service">Customer Service</option>
    <option value="Accountant">Accountant</option>
    <option value="IT">IT</option>
    <option value="Manager">Manager</option>
    <option value="Doctor">Doctor</option>
  </select>
</div>
<input class="btn btn-primary" name="submit" value="Add" type="submit" >


</form>

</html>




<?php
if(isset($_POST['submit'])){

$name=$_POST['name'];
$pass=$_POST['password'];
$confirm=$_POST['confirm'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$role=$_POST['role'];
//$_SESSION['role']=$role;
if($pass==$confirm){
  $pass=password_hash($pass,PASSWORD_DEFAULT);
  $role=password_hash($role,PASSWORD_DEFAULT);
$sql= "insert into users (name,password,mobile,email,timestamp,address,city,role,code) values ('$name','$pass','$mobile','$email','$dte','$address','$city','$role','+20')";

	$sql3 = "SELECT mobile As duplicates FROM users WHERE mobile='$mobile' ";
				 $result3=mysqli_query($conn,$sql3);
 $num_rows=mysqli_fetch_assoc($result3);
		 $count=$num_rows['duplicates'];

//echo $count;
if ($count<1) {

if ($conn->query($sql) === TRUE) {
	  Echo "Registered Successfully";
    header("Location:index.php");

} else {
 echo("Error: " . $sql . $conn->error);



}}else{
echo "duplicated";


}

}else{
	echo "Password doesn't match";
}
}
$conn->close();

?>
<?php
include "footer.php";
?>
