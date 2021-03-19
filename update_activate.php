<?php

include 'api/config.php';



if ($_POST) {
    $id = $_POST['id'];

$sql = "update users set active='1' where id='$id'";

if ($conn->query($sql) === TRUE) {

echo "ok";
}else{

}

}


?>
