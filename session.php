<?php
include 'connection.php';
session_start();
$user_check=$_SESSION['login_user'];
$q = mysqli_query($conn,"SELECT fullname FROM welcome WHERE email = '$user_check'");
   
   $row = mysqli_fetch_array($q,MYSQLI_ASSOC);
   
   $login_session = $row['fullname'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>