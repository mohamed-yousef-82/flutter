<?php

include 'api/config.php';



if ($_POST) {
    $id = $_POST['id'];
    $add_by = $_POST['add_by'];
    $submit_date = $_POST['submit_date'];
    $delivery_date = $_POST['delivery_date'];
    $aligner1_date = $_POST['aligner1_date'];
    $sql2="select steps from treatment where patient_id='$id' order by timestamp DESC LIMIT 1";
    //echo $sql2;
    $query = mysqli_query($conn, $sql2);
$steps=0;
if($query){
  while ($row = mysqli_fetch_assoc($query)){
$steps=$row['steps'];

}
}
//echo $steps;
for ($i=0 ; $i<$steps ; $i++) {
  $x=date('Y-m-d', strtotime($aligner1_date. ' + '.$i*14 .'days'));
//  echo $x;
  $y="Aligner No: ".($i+1);
$sql = "INSERT INTO tasks (user_id, task, type,date,delivery_date,done,admin_id,timestamp) VALUES ('$id', '$y', '$submit_date','$x','$delivery_date','0','$add_by','$dte')";

if ($conn->query($sql) === TRUE) {

echo "<tr><td>".$submit_date."</td>"."<td>".$delivery_date."</td>"."<td>".$x."</td></tr>";
}else{
  echo('Error: ' . mysqli_error($conn));

}
}
}


?>
