<?php
  session_start();
  date_default_timezone_set("UTC");
  include_once "../db_connection.php";
  $movie_title = $_POST['movie_title'];
  if($_FILES){
    $extension = pathinfo($_FILES['movie_img']['name'], PATHINFO_EXTENSION);
    $_FILES['movie_img']['name']=$movie_title.".".$extension;
    $movie_img=$_FILES['movie_img']['name'];
    $dir="../../images/movie_img";
    move_uploaded_file($_FILES['movie_img']['tmp_name'], "$dir/$movie_img");
  }else{
    die ("image upload error");
  }
  $player_server1=$_POST['player_server1'];
  $player_server2=$_POST['player_server2'];
  $player_server3=$_POST['player_server3'];
  $player_server4=$_POST['player_server4'];
  $movie_download_1=$_POST['movie_download_1'];
  $movie_download_2=$_POST['movie_download_2'];
  $movie_download_3=$_POST['movie_download_3'];
  $movie_category=$_POST['movie_category'];
  $movie_section=$_POST['movie_section'];
  $movie_date=date("y-m-d");
  $movie_year = $_POST['movie_year'];
  $visit_time=0;
  $mysql_insert="INSERT INTO `movies`(`movie_title`, `player_server1`,`player_server2`,`player_server3`,`player_server4`, `movie_download_1`, `movie_download_2`, `movie_download_3`,`movie_img`, `movie_category`,`movie_section`, `movie_date`,`movie_year`,`movie_views`) VALUES ('$movie_title','$player_server1','$player_server2','$player_server3','$player_server4','$movie_download_1','$movie_download_2','$movie_download_3','$movie_img','$movie_category','$movie_section','$movie_date','$movie_year','$visit_time')";
  $run_mysql_insert =$connect->query($mysql_insert);
 ?>
 <!DOCTYPE html>
 <html lang="en">
  <head></head>
  <body>
    <a href="index.php">Back</a>
  </body>
 </html>
