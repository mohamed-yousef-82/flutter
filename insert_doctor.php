<?php

include 'api/config.php';



if ($_POST) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $add_by = $_POST['add_by'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $company = $_POST['company'];

$sql = "INSERT INTO users (name, address, mobile,timestamp,city,by_doc,role) VALUES ('$name', '$address', '$mobile','$dte','$city','$company','doctor')";

if ($conn->query($sql) === TRUE) {

echo "ok";
}else{
  echo('Error: ' . mysqli_error($conn));

}

}


?>
