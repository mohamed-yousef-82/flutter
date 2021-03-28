<?php
include "api/session.php";
// echo $_SESSION['id'];
// echo $_SESSION['role'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />

  </head>
  <body>
    <div class="intro">
      <div class="left-menu" id="left_menu">
        <button id="menu_left" type="button">Treatments DataList</button>
        <div class="left-data" id="right_data">
          <div class="menu-block">
            <ul>
              <li><i class="fa fa-user"></i><span>Mohamed Yousef</span></li>
              <li><i class="fa fa-calendar"></i><span>11/3/2021</span></li>
              <li><span>add txt here add txt here add txt here add txt here</span></li>
            </ul>
          </div>
          <div class="menu-block">
            <ul>
              <li><i class="fa fa-user"></i><span>Mohamed Yousef</span></li>
              <li><i class="fa fa-calendar"></i><span>11/3/2021</span></li>
              <li><span>add txt here add txt here add txt here add txt here</span></li>
            </ul>
          </div>
          <div class="menu-block">
            <ul>
              <li><i class="fa fa-user"></i><span>Mohamed Yousef</span></li>
              <li><i class="fa fa-calendar"></i><span>11/3/2021</span></li>
              <li><span>add txt here add txt here add txt here add txt here</span></li>
            </ul>
          </div>
          <div class="menu-block">
            <ul>
              <li><i class="fa fa-user"></i><span>Mohamed Yousef</span></li>
              <li><i class="fa fa-calendar"></i><span>11/3/2021</span></li>
              <li><span>add txt here add txt here add txt here add txt here</span></li>
            </ul>
          </div>
                </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a class="intro-block" href='mysql/search.php'>
              <i class="fas fa-handshake"></i>
              <span>Clients</span>
            </a>
          </div>
  <div class="col-md-4">
    <a class="intro-block" href='doctors.php'>
<i class="fas fa-user-md"></i>
      <span>doctors</span>
    </a>
  </div>
  <div class="col-md-4">
    <a class="intro-block" href='chat/index.php'>
<i class="fas fa-comments"></i>
      <span>chat</span>
    </a>
  </div>
  <div class="col-md-4">
    <a class="intro-block" href='users.php'>
<i class="fas fa-user-plus"></i>
      <span>add users</span>
    </a>
  </div>
  <div class="col-md-4">
    <a class="intro-block" href='faq.php'>
<i class="far fa-question-circle"></i>
      <span>Faq</span>
    </a>
  </div>
  <div class="col-md-4">
    <a class="intro-block" href='mysql/noti.php'>
<i class="fas fa-bell"></i>
      <span>Notification</span>
    </a>
  </div>
  </div>
      </div>
      <div class="right-menu" id="right_menu">
        <button id="menu_right" type="button">UpComing Payment</button>
        <div class="right-data" id="right_data">
        <div class="menu-block">
          <ul>
            <li><i class="fa fa-user"></i><span>Mohamed Yousef</span></li>
            <li><i class="fa fa-calendar"></i><span>11/3/2021</span></li>
            <li><i class="fas fa-file-invoice-dollar"></i><span>50 pound</span></li>
          </ul>
        </div>
        <div class="menu-block">
          <ul>
            <li><i class="fa fa-user"></i><span>Mohamed Yousef</span></li>
            <li><i class="fa fa-calendar"></i><span>11/3/2021</span></li>
            <li><i class="fas fa-file-invoice-dollar"></i><span>50 pound</span></li>
          </ul>
        </div>
        <div class="menu-block">
          <ul>
            <li><i class="fa fa-user"></i><span>Mohamed Yousef</span></li>
            <li><i class="fa fa-calendar"></i><span>11/3/2021</span></li>
            <li><i class="fas fa-file-invoice-dollar"></i><span>50 pound</span></li>
          </ul>
        </div>
        <div class="menu-block">
          <ul>
            <li><i class="fa fa-user"></i><span>Mohamed Yousef</span></li>
            <li><i class="fa fa-calendar"></i><span>11/3/2021</span></li>
            <li><i class="fas fa-file-invoice-dollar"></i><span>50 pound</span></li>
          </ul>
        </div>
        <div class="menu-block">
          <ul>
            <li><i class="fa fa-user"></i><span>Mohamed Yousef</span></li>
            <li><i class="fa fa-calendar"></i><span>11/3/2021</span></li>
            <li><i class="fas fa-file-invoice-dollar"></i><span>50 pound</span></li>
          </ul>
        </div>
        </div>
      </div>

    </div>
</body>
</html>
<script>
menu_right.onclick = function(){
  if(right_menu.classList.contains("show_menu")){
    right_menu.classList.remove("show_menu");
  }else{
    right_menu.classList.add("show_menu");

  }
}
menu_left.onclick = function(){
  if(left_menu.classList.contains("show_menu_left")){
    left_menu.classList.remove("show_menu_left");
  }else{
    left_menu.classList.add("show_menu_left");

  }
}
</script>
