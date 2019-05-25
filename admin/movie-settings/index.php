<?php
session_start();
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Movie Settings</title>
    <link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/media.css">
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.css">
    <link rel="icon" type="image/png" href="../../images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
  </head>
  <body>
<?php
         if(isset($_SESSION['user'])){
           include_once "../db_connection.php";
           $data_per_page=10;
           if(isset($_GET["page"])){
             $page=$_GET["page"];
           }
           else{
             $page=1;
           }
           $from=($page-1)*$data_per_page;
           $data_sql ="SELECT * FROM movies ORDER BY movie_id DESC ";
           $run_sql = $connect -> query($data_sql);
?>
          <div class="container">
            <div class="panel_menu_container">
              <div class="panel_menu">
                  <ul class="panel_list">
                    <li><a href="../add">أضافة فلم</a></li>
                    <li><a href="../add/serie">أضف مسلسل</a></li>
                    <li><a href="../add/episode">حلقة مسلسل</a></li>
                    <li><a href="../movie-settings">ادارة الأفلام</a></li>
                    <li><a href="../website-settings">ادارة الواجهة</a></li>
                    <li><a href="#">ادارة الموقع</a></li>
                  </ul>
                </div>
            </div>
                <div class="manager_container">
                  <div class="movie_manager row">
                    <div class="col-sm-12 user"><?php echo $_SESSION['user']; ?><form method="POST" action="../" ><button type="submit">LOGOUT</button></form></div>
                    <table class="table table-hover movie_table">
                      <thead>
                        <tr>
                          <td>Movie Name</td>
                          <td>Date Added </td>
                          <td>Settings</td>
                        </tr>
                      <tbody>
                        <?php
                          while($data = $run_sql -> fetch_assoc()){
                         ?>
                        <tr>
                          <td><a href="#" target="_blank"><?php echo $data["movie_title"]; ?></a></td>
                          <td><?php echo $data["movie_date"]; ?></td>
                          <td>
                            <ul class="settings_tools">
                              <li><a href="#" target="_blank"><i class="fa fa-1x fa-times"></i></a></li>
                              <li><a href="movie-edit/index.php?movie_id=<?php echo $data['movie_id'];?>" target="_blank"><i class="fa fa-1x fa-wrench"></i></a></li>
                              <li><a href="#" target="_blank"><i class="fa fa-1x fa-video-camera"></i></a></li>
                            </ul>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                      </thead>
                    </table>

                   </div>
                 </div>
            </div>

<?php }
          else {
?>
           <div class="login_error waning">
             <p class="warning login_error_msg">WRONG LOGIN INFORMATIONS</p>
             <a href="index.php">Try Again</a>
           </div>
<?php }
?>
  </body>
</html>
