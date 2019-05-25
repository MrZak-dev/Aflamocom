<?php
  session_start();
  include_once "../../db_connection.php";
  $episode_nmbr=$_POST['episode_nmbr'];
  $serie_name=$_POST['serie_name'];
  $season=$_POST['season'];
  $server1=$_POST['server1'];
  $server2=$_POST['server2'];
  $server3=$_POST['server3'];
  $server4=$_POST['server4'];
  $download1=$_POST['download1'];
  $download2=$_POST['download2'];
  $download3=$_POST['download3'];
  $query= "INSERT INTO episodes(episode_nmbr,serie_name,season,server1,server2,server3,server4,download1,download2,download3)VALUES('$episode_nmbr','$serie_name','$season','$server1','$server2','$server3','$server4','$download1','$download2','$download3')";
  $run_query =$connect->query($query);
 ?>
 <!DOCTYPE html>
 <html lang="en">
  <head></head>
  <body>
    <a href="index.php">Back</a>
  </body>
 </html>
