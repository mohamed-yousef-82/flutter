<?php


include 'api/config.php';



if ($_POST) {
    $id = $_POST['id'];

$sql = "select * from chat where sender='$id' or receiver='$id' order by timestamp ASC";

$query = mysqli_query($conn, $sql);

if($query){
while ($row = mysqli_fetch_assoc($query)){

    if ($row['sender']==$id){
  echo '<div class="row no-gutters">
  <div class="col-md-6 ">
    <div class="chat-bubble chat-bubble--left">'.$row['msg'].'
    <p style="color:#888">'.$row['timestamp'].'</p>
      </div>
  </div>
  </div>';
}else{

  echo '<div class="row no-gutters">
  <div class="col-md-12 offset-md-9">
    <div style="float:right" class="chat-bubble chat-bubble--right">'.$row['msg'].'
      </div>
  </div>
  </div>';


}
}
echo '';

}
}



 ?>
