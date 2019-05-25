<?php
  session_start();
  include_once "../db_connection.php";
  if($_FILES){
    $extension1 = pathinfo($_FILES['slide1']['name'], PATHINFO_EXTENSION);
    $extension2 = pathinfo($_FILES['slide2']['name'], PATHINFO_EXTENSION);
    $extension3 = pathinfo($_FILES['slide3']['name'], PATHINFO_EXTENSION);
    $_FILES['slide1']['name']="slide1.".$extension1;
    $_FILES['slide2']['name']="slide2.".$extension2;
    $_FILES['slide3']['name']="slide3.".$extension3;
    $slide1=$_FILES['slide1']['name'];
    $slide2=$_FILES['slide2']['name'];
    $slide3=$_FILES['slide3']['name'];
    $dir = "../../images";
    move_uploaded_file($_FILES['slide1']['tmp_name'],"$dir/$slide1");
    move_uploaded_file($_FILES['slide2']['tmp_name'],"$dir/$slide2");
    move_uploaded_file($_FILES['slide3']['tmp_name'],"$dir/$slide3");
  }
  else {
    die("ERROR");
  }
  $link1=$_POST['link1'];
  $link2=$_POST['link2'];
  $link3=$_POST['link3'];
  $query1="UPDATE slides SET slide_link='$link1' WHERE slide_id=1";
  $query2="UPDATE slides SET slide_link='$link2' WHERE slide_id=2";
  $query3="UPDATE slides SET slide_link='$link3' WHERE slide_id=3";
  $run_query = $connect -> query($query1);
  $run_query = $connect -> query($query2);
  $run_query = $connect -> query($query3);
?>
<!DOCTYPE html>
<html lang="en">
 <head></head>
 <body>
   <a href="index.php">Back</a>
 </body>
</html>
