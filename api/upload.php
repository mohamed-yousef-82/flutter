<?php 
include 'config.php';
$x=$_POST['attachment'];
if ($x!=null){
	
	$json = json_decode($x, true);
	$keys = array_keys($json);

//print_r ($keys[0]);
	$length=count($json);
	//echo $length;
for ( $z=0;$z<$length;$z++){

	 $name =$json[$z]['fileName'];
    $image = $json[$z]['encoded'];
    $user_id = $json[$z]['user_id'];
 
    $realImage = base64_decode($image);
 
    file_put_contents("uploads/".$name, $realImage);
	 $sql = "INSERT INTO book_scan (user_id, path,timestamp) VALUES ('$user_id', '$name','$dte')";

		  $query = mysqli_query($conn, $sql);

if($query){      

    echo "Image Uploaded Successfully.";

	}
}}else{
	echo "no";
}
$conn->close();
?>