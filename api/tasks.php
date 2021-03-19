<?php
include "config.php";
$user_id=$_POST['user_id'];
$sql="SELECT * from tasks WHERE user_id='$user_id'";
	//	  echo $sql;
		  $query = mysqli_query($conn, $sql);

if($query){      
if (mysqli_num_rows($query)>0)
{
	  while ($row = mysqli_fetch_array($query)){
		  $temp=[];
				$temp['admin_id'] = $row['admin_id'];
                $temp['task'] = $row['task'];
                $temp['type'] = $row['type'];
                $temp['date'] = $row['date'];
                $temp['done'] = intval($row['done']);
				
				$data[]=$temp;

		}

				            echo json_encode(['status' => true, 'data' => $data]);

}else{
			            echo json_encode(['status' => false, 'message'=>'no data']);

}
}else{
		            echo json_encode(['status' => false, 'message'=>'false']);
	
	
}



?>