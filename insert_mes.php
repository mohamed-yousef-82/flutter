<?php

include 'api/config.php';



if ($_POST) {
    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $msg = $_POST['msg'];

$sql = "INSERT INTO chat (sender, receiver, msg,timestamp) VALUES ('$sender', '$receiver', '$msg','$dte')";

if ($conn->query($sql) === TRUE) {

  $sql = "select * from chat where sender='$sender' or receiver='$sender' order by timestamp ASC";

  $query = mysqli_query($conn, $sql);

  if($query){
  while ($row = mysqli_fetch_assoc($query)){

      if ($row['sender']==$sender){
    echo '<div class="row no-gutters">
    <div class="col-md-3 ">
      <div class="chat-bubble chat-bubble--left">'.$row['msg'].'
        </div>
    </div>
    </div>';
  }else{

    echo '<div class="row no-gutters">
    <div class="col-md-3 offset-md-9">
      <div class="chat-bubble chat-bubble--right">'.$row['msg'].'
        </div>
    </div>
    </div>';


  }
  }


  }

}else{
  echo('Error: ' . mysqli_error($conn));

}

}


?>
