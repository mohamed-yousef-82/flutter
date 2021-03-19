<?php

include 'api/config.php';



if ($_POST) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $add_by = $_POST['add_by'];
    $date = $_POST['date'];
    $Scan_type = $_POST['Scan_type'];
    $approval = $_POST['approval'];
    $package2 = $_POST['package2'];
    $instruction = $_POST['instruction'];

$sql = "INSERT INTO status (patient_id, est_date, status,add_by,timestamp,scan_type,approval,package,instruction) VALUES ('$id', '$date', '$status','$add_by','$dte','$Scan_type','$approval','$package2','$instruction')";

if ($conn->query($sql) === TRUE) {

echo "<tr><td>".$date."</td>"."<td>".$status."</td></tr>";
}else{
  echo('Error: ' . mysqli_error($conn));

}

}


?>
