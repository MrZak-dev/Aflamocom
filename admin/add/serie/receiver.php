<?php
  session_start();
  include_once "../../db_connection.php";
  $serie_name=$_POST['serie_name'];
  if($_FILES){
    $extension1 = pathinfo($_FILES['serie_img']['name'], PATHINFO_EXTENSION);
    $extension2 = pathinfo($_FILES['serie_header']['name'], PATHINFO_EXTENSION);
    $_FILES['serie_img']['name']=$serie_name.".".$extension1;
    $_FILES['serie_header']['name']=$serie_name.".".$extension1;
    $serie_img = $_FILES['serie_img']['name'];
    $serie_header=$_FILES['serie_header']['name'];
    $dir1="../../../images/serie_img/img/";
    $dir2="../../../images/serie_img/header/";
    move_uploaded_file($_FILES['serie_img']['tmp_name'], "$dir1/$serie_img");
    move_uploaded_file($_FILES['serie_header']['tmp_name'], "$dir2/$serie_header");
  }else{
    die ("image upload error");
  }
  $serie_description = $_POST['serie_description'];
  $seasons_nmbr=$_POST['seasons_nmbr'];
  $serie_views=0;
  $query = "INSERT INTO series(serie_name,serie_img,serie_header,serie_description,seasons_nmbr,serie_views) VALUES('$serie_name','$serie_img','$serie_header','$serie_description','$seasons_nmbr','$serie_views')";
  $run_query =$connect->query($query);
 ?>
 <!DOCTYPE html>
 <html lang="en">
  <head></head>
  <body>
    <a href="index.php">Back</a>
  </body>
 </html>
