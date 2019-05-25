<?php
session_start();
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Movie Settings</title>
    <link rel="stylesheet" type="text/css" href="../../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../css/media.css">
    <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.css">
    <link rel="icon" type="image/png" href="../../../images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <?php
      include_once "../../db_connection.php";
      $movie_id=$_GET['movie_id'];
      $_SESSION['movie_id']=$movie_id;
      $query = "SELECT * FROm movies WHERE movie_id=$movie_id";
      $query_connect = $connect -> query($query);
      $data = $query_connect -> fetch_assoc();
      $_SESSION['movie_img']=$data['movie_img'];
    ?>
  </head>
  <body>
          <div class="container">
            <div class="panel_menu_container">
              <div class="panel_menu">
                  <ul class="panel_list">
                    <li><a href="../../add">أضافة فلم</a></li>
                    <li><a href="../../add/serie">أضف مسلسل</a></li>
                    <li><a href="../../add/episode">حلقة مسلسل</a></li>
                    <li><a href="../">ادارة الأفلام</a></li>
                    <li><a href="../../website-settings">ادارة الواجهة</a></li>
                    <li><a href="#">ادارة الموقع</a></li>
                  </ul>
                </div>
            </div>
                <div class="manager_container">
                  <div class="movie_manager row">
                    <div class="col-sm-12 user"><?php echo $_SESSION['user']; ?><form method="POST" action="../" ><button type="submit">LOGOUT</button></form></div>
                    <form method="post" action="receiver.php" enctype="multipart/form-data">
                      <div class="col-sm-3"><lable class="form_label">Movie Title</label></div>
                      <div class="col-sm-3"><input type="text" name="movie_title" value="<?php echo $data['movie_title'];?>"></div>
                      <div class="col-sm-3"><lable class="form_label">server 1</label></div>
                      <div class="col-sm-3"><input type="text" name="server1" value="<?php echo $data['player_server1'];?>"></div>
                      <div class="col-sm-3"><lable class="form_label">server 2</label></div>
                      <div class="col-sm-3"><input type="text" name="server2" value="<?php echo $data['player_server2'];?>"></div>
                      <div class="col-sm-3"><lable class="form_label">server 3</label></div>
                      <div class="col-sm-3"><input type="text" name="server3" value="<?php echo $data['player_server3'];?>"></div>
                      <div class="col-sm-3"><lable class="form_label">server 4</label></div>
                      <div class="col-sm-3"><input type="text" name="server4" value="<?php echo $data['player_server4'];?>"></div>
                      <div class="col-sm-3"><lable class="form_label">Download 1</label></div>
                      <div class="col-sm-3"><input type="text" name="download1" value="<?php echo $data['movie_download_1'];?>"></div>
                      <div class="col-sm-3"><lable class="form_label">Download 2</label></div>
                      <div class="col-sm-3"><input type="text" name="download2" value="<?php echo $data['movie_download_2'];?>"></div>
                      <div class="col-sm-3"><lable class="form_label">Download 3</label></div>
                      <div class="col-sm-3"><input type="text" name="download3" value="<?php echo $data['movie_download_3'];?>"></div>
                      <div class="col-sm-4"><img alt="Movie Image" src="../../../images/movie_img/<?php echo $data['movie_img'];?>"></div>
                      <div class="col-sm-4"><input type="file" name="movie_img"></div>
                      <div class="col-sm-4"><input type="submit" value="SAVE"></div>
                    </form>

                  </div>
                 </div>
            </div>

  </body>
</html>
