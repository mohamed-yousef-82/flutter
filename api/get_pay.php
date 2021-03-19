<?php
include "config.php";
$id=$_POST['user_id'];
$sql="SELECT * from payement  where patient_id='$id' ";
	//	  echo $sql;
		  $query = mysqli_query($conn, $sql);

if($query){      
if (mysqli_num_rows($query)>0)
{
	  while ($row = mysqli_fetch_array($query)){
		  $temp=[];
				$temp['id'] = $row['id'];
				$temp['pay'] = $row['pay'];
                $temp['est_date'] = $row['est_date'];
                $temp['invoice_no'] = $row['invoice_no'];
                $temp['invoice_path'] = $row['invoice_path'];
                
				$data[]=$temp;

		}

				            			            echo json_encode(['status' => false, 'data'=>$data]);
//echo json_encode( $data);

}else{
			            echo json_encode(['status' => false, 'message'=>'no data']);

}
}else{
		            echo json_encode(['status' => false, 'message'=>'false']);
	
	
}
$conn->close();


?>