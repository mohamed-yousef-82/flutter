<?php
$servername="localhost";
$username="root";
$password="";
$dbName="flutter";
$conn = new mysqli($servername, $username, $password, $dbName);
$conn ->set_charset("utf8");
//mysqli_set_charset($conn,"utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set("Africa/Cairo");

$t=time();
$dte=date("Y-m-d H:i:s a",$t);

 

?>