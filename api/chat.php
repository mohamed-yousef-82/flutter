<?php
include "config.php";
$user_id=$_POST['user_id'];
$sql="SELECT * from chat WHERE sender='$user_id' or receiver='$user_id' order by timestamp DESC";
	//	  echo $sql;
		  $query = mysqli_query($conn, $sql);

if($query){      
if (mysqli_num_rows($query)>0)
{
	  while ($row = mysqli_fetch_array($query)){
		  $temp=[];
				$temp['sender'] = $row['sender'];
                $temp['receiver'] = $row['receiver'];
                $temp['msg'] = $row['msg'];
                $temp['time'] = $row['timestamp'];
                
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