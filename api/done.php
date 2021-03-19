<?php
include "config.php";
$task=$_POST['task'];
$date=$_POST['date'];
$done=$_POST['done'];
$user_id=$_POST['user_id'];
$x=date('Y-m-d');
$sql=" Update tasks set done='$done' , date='$x'   WHERE task='$task' and date='$date' and user_id='$user_id' ";

//echo $sql;
		  $query = mysqli_query($conn, $sql);
if ($conn->query($sql) === TRUE) {
	//echo "1";
	$t;
	$sql4="select * from tasks where task='$task' and date='$x' and user_id='$user_id' Limit 1";
	//echo $sql4;
	$query4 = mysqli_query($conn, $sql4);

	while ($row = mysqli_fetch_assoc($query4)){
	$t=$row['id'];
	}
	//echo "ssss".$t."sss";
	$sql1="select * from tasks where user_id='$user_id' and id >'$t' order by id Asc";
	$query2 = mysqli_query($conn, $sql1);
	$i=1;
	if($query2){
	while ($row = mysqli_fetch_assoc($query2)){
		  $y=date('Y-m-d', strtotime($x. ' + '.$i*14 .'days'));
		  //echo $y;
			$r=$row["id"];
			$sql2="Update tasks set  date='$y' WHERE id='$r'";
			if ($conn->query($sql2) === TRUE) {
			//echo $row['id']."----".$row['date'].'<br />';

			}else{
				echo  "0";
			}

			$i++;


	}
	}


}else{

	echo('Error: ' . mysqli_error($conn));

}


	$conn->close();





?>
