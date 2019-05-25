<?php
  session_start();
  include_once '../db_connection.php';
  $user_name=$_POST['user_name'];
  $user_password=sha1($_POST['user_password']);
  $sql = "SELECT * FROM admins WHERE admin_username='$user_name' AND admin_password='$user_password' ";
  $result = $connect->query($sql);
  $row=$result->fetch_assoc();
  if($row){
    $_SESSION['user']=$row['admin_username'];
  }
  header ('LOCATION:../add/index.php');
?>
