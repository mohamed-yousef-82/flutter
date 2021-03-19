<?php
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location: api/error.php");
    die();
}else{
  $role=$_SESSION['role'];
//echo $role;
  $user_id=$_SESSION['id'];
}
?>
