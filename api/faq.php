<?php
include "config.php";
$sql="SELECT * from faq  order by id ";
	//	  echo $sql;
		  $query = mysqli_query($conn, $sql);

if($query){      
if (mysqli_num_rows($query)>0)
{
	  while ($row = mysqli_fetch_array($query)){
		  $temp=[];
				//$temp['id'] = $row['id'];
				$temp['ques'] = $row['ques'];
                $temp['ans'] = $row['ans'];
                
				$data[]=$temp;

		}

				            echo json_encode( $data);

}else{
			            echo json_encode(['status' => false, 'message'=>'no data']);

}
}else{
		            echo json_encode(['status' => false, 'message'=>'false']);
	
	
}
$conn->close();


?>