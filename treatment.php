<?php

include 'api/config.php';



if ($_POST) {
    $name = $_POST['user'];
    $date = $_POST['date'];
    $city = $_POST['city'];
    $school = $_POST['school'];

$sql = "INSERT INTO plan (user, date, city,school,timestamp) VALUES ('$name', '$date', '$city','$school','$dte')";

if ($conn->query($sql) === TRUE) {

echo "ok";
}else{
	
}

}


?>