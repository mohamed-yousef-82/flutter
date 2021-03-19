<?php

include 'api/config.php';



if ($_POST) {
    $id = $_POST['id'];
    $plan_menu = $_POST['plan_menu'];
    $add_by = $_POST['add_by'];
    $case = $_POST['case'];
    $steps = $_POST['steps'];
    $attachement = $_POST['attachement'];
    $ipr = $_POST['ipr'];
    $Retainer = $_POST['Retainer'];
    $Refeniment = $_POST['Refeniment'];
    $Redesign = $_POST['Redesign'];

$sql = "INSERT INTO treatment (patient_id, plan_menu,case2,add_by,timestamp,steps,attachement,ipr,Retainer,Refeniment,Redesign) VALUES ('$id', '$plan_menu', '$case','$add_by','$dte','$steps','$attachement','$ipr','$Retainer','$Refeniment','$Redesign')";

if ($conn->query($sql) === TRUE) {

echo "<tr><td>".$plan_menu."</td>"."<td>".$steps."</td></tr>";
}else{

}

}


?>
