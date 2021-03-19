<?php
include "../api/config.php";
include "../api/session.php";
include "../functions.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Chat</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!--<meta http-equiv="refresh" content="5"/>-->
<div class="container">
	<div class="row no-gutters">
	  <div class="col-md-4 border-right">
		<div class="settings-tray">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/filip.jpg" alt="Profile img">
		  <span class="settings-tray--right">
		  </span>
		</div>
		<!-- <div class="search-box">
		  <div class="input-wrapper">
			<i class="material-icons">search</i>
			<input placeholder="Search here" type="text">
		  </div>
		</div> -->
<?php

$sql="select distinct sender from chat where sender !='99999' order by timestamp DESC";
$query = mysqli_query($conn, $sql);

if($query){
while ($row = mysqli_fetch_assoc($query)){
$data2=json_decode(user_info($row['sender']),true);
$data3=json_decode(get_msg($row['sender']),true);

echo '  <div class="friend-drawer friend-drawer--onhover" data-id="'.$data2[0] ["id"].'" onclick="mes.call(this);">
<input type="hidden" id="user_id" value="'.$user_id.'" />
    <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="">
    <div  class="text">
    <h6 >'.$data2[0] ["name"].'</h6></h6>
    <p class="text-muted">


'.$data3[0] ["msg"].'
    </p>
    </div>
    <span class="time text-muted small">'.$data3[0] ["timestamp"].'
</span>
  </div>
  <hr>
';
}
}

?>
    </div>
	  <div class="col-md-8">
		<div class="settings-tray">
			<div class="friend-drawer no-gutters friend-drawer--grey">
			<img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="">
			<div class="text">
			  <h6 id="name_chat">Smart Smile</h6>
			</div>
			<span class="settings-tray--right">

		  </div>
		</div>
		<div class="chat-panel" >
		  <div class="row">
			<div class="col-12">
			  </div>
		  </div>
		</div>
    <div class="chat-box-tray"  >
    <input type="text" placeholder="Type your message here..." id="msgbox">
    <button class="material-icons" onclick="insert_mes.call(this)" >send</i>
    </div>
	  </div>
	</div>
  </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
<script>
var id=  $('#id').val();

//$( '.friend-drawer--onhover' ).on( 'click',  function () {
//alert("dd");
function refresh(){


  //alert("sss"+id);

$.ajax({
        type: "POST",
        url: "../get_chat.php", // Name of the php files
        data: {
            "id" : id,


        },
        dataType: "html",
        success: function(data) {
$('.chat-panel').html(data);
//alert(data);
//alert("ssssssssss ");

}
    });
}


function get_info(){

$.ajax({
        type: "POST",
        url: "../get_info.php", // Name of the php files
        data: {
            "id" : id,


        },
        dataType: "html",
        success: function(data) {
$('#name_chat').html(data);
//alert(data);
//alert("ssssssssss ");

}
    });
}

function insert_mes(){
  var msg=  $('#msgbox').val();
  var user_id=  $('#user_id').val();

//  alert("sss"+msg+id+user_id);

$.ajax({
        type: "POST",
        url: "../insert_mes.php", // Name of the php files
        data: {
            "sender" : id,
            "receiver" : user_id,
            "msg" : msg


        },
        dataType: "html",
        success: function(data) {
$('.chat-panel').html(data);
//alert(data);
//alert("ssssssssss ");

}
    });
}


function mes(){

   id = $(this).data('id');

//  alert("sss"+id);

$.ajax({
        type: "POST",
        url: "../get_chat.php", // Name of the php files
        data: {
            "id" : id,


        },
        dataType: "html",
        success: function(data) {
$('.chat-panel').html(data);
get_info();
//alert(data);
//alert("ssssssssss ");

}
    });
}

$( document ).ready(function() { //set up refresh timer on page load
    var refreshTimer = setInterval(function(){refresh()},5000); //creates timer to request every 5 seconds
});

</script>
