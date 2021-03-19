<?php

include 'api/config.php';



if ($_POST) {
    $id = $_POST['id'];
    $by_doc = $_POST['by_doc'];
  
$sql = "update users set by_doc='$by_doc' where id='$id'";

if ($conn->query($sql) === TRUE) {

echo "ok";
}else{
	
}

}


?>