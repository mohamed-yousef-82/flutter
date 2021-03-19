<?php
include "api/session.php";
// echo $_SESSION['id'];
// echo $_SESSION['role'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.min.css" />
  </head>
  <body>
    <div class="intro">
      <div class="container">
  <a href='mysql/search.php'>
    <i class="fa fa-home" />
    <span>Clients</span>
  </a>
  <a href='doctors.php'>doctors</a>
  <a href='chat/index.php'>chat</a>
  <a href='users.php'>add users</a>
  <a href='faq.php'>Faq</a>
  <a href='mysql/noti.php'>Notification</a>

      </div>
    </div>
</body>
</html>
