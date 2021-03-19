<?php
include "config.php";
$user_id=$_POST['user_id'];
$sql="SELECT * from pdftable where receiver='$user_id'";
	//	  echo $sql;
		  $query = mysqli_query($conn, $sql);

if($query){      
if (mysqli_num_rows($query)>0)
{
	  while ($row = mysqli_fetch_array($query)){
		  $temp=[];
				$temp['pdffile'] = $row['pdffile'];
                $temp['name'] = $row['name'];
            	
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