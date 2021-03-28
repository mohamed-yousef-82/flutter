<?php
$domain =  $_SERVER['REQUEST_SCHEME'] . '://' .$_SERVER['HTTP_HOST']."/flutter";
include realpath(dirname(__FILE__)).'/api/config.php';
include realpath(dirname(__FILE__)).'/api/session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>/mysql/datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>/css/style.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>/css/all.min.css" />

</head>
<body>
  <div class="dashboard">
    <div class="content-wrap">
      <?php
      include realpath(dirname(__FILE__))."/menu.php";
       ?>
      <div class="main-content" id="main_content">
        <div class="top-header">
          <i class="fas fa-bars" id="bars"></i>
          <div class="top-header-right">
            <div class="btn-group">
              <button class="btn btn-default btn-sm dropdown-toggle user-dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user"></i>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
              </ul>
            </div>


          </div>
        </div>
        <div class="right-content">
