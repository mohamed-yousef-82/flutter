<?php
	include "api/config.php";
$id='3';

$sql="Select * from chat where sender='$id' or receiver='$id' order by timestamp DESC LIMIT 1";
echo $sql;
		  $query = mysqli_query($conn, $sql);

if($query){
	  while ($row = mysqli_fetch_assoc($query)){

	  $temp=[];
				$temp['sender'] = $row['sender'];
				$temp['receiver'] = $row['receiver'];
                $temp['msg'] = $row['msg'];
                $temp['timestamp'] = $row['timestamp'];


				$data[]=$temp;

		}
//echo json_encode($data);
				            $data2= json_encode($data);
echo $data2;


	  }




 ?>
