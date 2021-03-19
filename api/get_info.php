<?php
include "config.php";

$user_id=$_POST['user_id'];
//echo $name."-".$pass;
$sql="Select * from users where id='$user_id'";
		  $query = mysqli_query($conn, $sql);

if($query){      
if (mysqli_num_rows($query)>0)
{
	  while ($row = mysqli_fetch_array($query)){
		  $temp=[];
				$temp['name'] = $row['name'];
                $temp['city'] = $row['city'];
                $temp['address'] = $row['address'];
                $temp['age'] = $row['age'];
                $temp['password'] = $row['password'];
                $temp['email'] = $row['email'];
				                $temp['mobile'] = $row['mobile'];
				                $temp['code'] = $row['code'];

                
				$data[]=$temp;

		}

				            echo json_encode(['status' => true, 'data' => $data]);
	

}else{
			$reply=array("status"=>"false","login"=>"User not found");

	echo json_encode($reply);

	
	
}}
$conn->close();


?>
