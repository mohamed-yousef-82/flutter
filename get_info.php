<?php


include 'api/config.php';



if ($_POST) {
    $id = $_POST['id'];

    include "api/config.php";

  $sql="Select * from users where id='$id'";
  		  $query = mysqli_query($conn, $sql);

  if($query){
  	  while ($row = mysqli_fetch_assoc($query)){
echo $row['name']  ;

}
}
}



 ?>
