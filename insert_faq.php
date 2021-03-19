<?php

include 'api/config.php';



if ($_POST) {
    $ques = $_POST['ques'];
    $ans = $_POST['ans'];
    $add_by = $_POST['add_by'];

$sql = "INSERT INTO faq (ques, ans, added_by,timestamp) VALUES ('$ques', '$ans', '$add_by','$dte')";

if ($conn->query($sql) === TRUE) {

echo "ok";
}else{
  echo('Error: ' . mysqli_error($conn));

}

}


?>
