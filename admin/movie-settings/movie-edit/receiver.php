<?php
  session_start();
  include_once "../../db_connection.php";
  $movie_title = $_POST['movie_title'];
  if(!empty($_FILES['movie_img']['name'])){
    $extension = pathinfo($_FILES['movie_img']['name'], PATHINFO_EXTENSION);
    $_FILES['movie_img']['name']=$movie_title.".".$extension;
    $movie_img=$_FILES['movie_img']['name'];
    $dir="../../../images/movie_img";
    move_uploaded_file($_FILES['movie_img']['tmp_name'], "$dir/$movie_img");
  }else{
    $movie_img=$_SESSION['movie_img'];
  }
  $movie_id = $_SESSION['movie_id'];
  $player_server1=$_POST['server1'];
  $player_server2=$_POST['server2'];
  $player_server3=$_POST['server3'];
  $player_server4=$_POST['server4'];
  $movie_download_1=$_POST['download1'];
  $movie_download_2=$_POST['download2'];
  $movie_download_3=$_POST['download3'];
  $mysql_insert="UPDATE movies SET movie_title='$movie_title',player_server1='$player_server1',player_server2='$player_server2',player_server3='$player_server3',player_server4='$player_server4',movie_download_1='$movie_download_1',movie_download_2='$movie_download_2',movie_download_3='$movie_download_3',movie_img='$movie_img' WHERE movie_id='$movie_id'";
  $run_mysql_insert =$connect->query($mysql_insert);
 ?>
 <!DOCTYPE html>
 <html lang="en">
  <head></head>
  <body>
    <a href="index.php?movie_id=<?php echo $movie_id?>">Back</a>
  </body>
 </html>
