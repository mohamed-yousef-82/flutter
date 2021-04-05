<?php
$domain =  $_SERVER['REQUEST_SCHEME'] . '://' .$_SERVER['HTTP_HOST']."/flutter";
include realpath(dirname(__FILE__)).'/api/config.php';
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
      <div class="main-content" id="main_content" style="width:100%;background:#eee;">
        <div class="right-content">
