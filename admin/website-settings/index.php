<?php
session_start();
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Aflamocom | Admin Panel</title>
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
?>
          <div class="container">
            <div class="panel_menu_container">
              <div class="panel_menu">
                  <ul class="panel_list">
                    <li><a href="../add">أضافة فلم</a></li>
                    <li><a href="../add/serie">أضف مسلسل</a></li>
                    <li><a href="../add/episode">حلقة مسلسل</a></li>
                    <li><a href="../movie-settings">ادارة الأفلام</a></li>
                    <li><a href="#">ادارة الواجهة</a></li>
                    <li><a href="#">ادارة الموقع</a></li>
                  </ul>
                </div>
            </div>
                <div class="manager_container">
                  <div class="movie_manager row">
                    <div class="col-sm-12 user"><?php echo $_SESSION['user']; ?><form method="POST" action="../" ><button type="submit">LOGOUT</button></form></div>
                    <form action="receiver.php" method="post" enctype='multipart/form-data'>
                      <div class="col-sm-6">
                        <label class="form_label">Slide Image 1</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="file" name="slide1">
                      </div>
                      <div class="col-sm-6">
                        <label class="form_label">Link 1</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="link1">
                      </div>
                      <div class="col-sm-6">
                        <label class="form_label">Slide Image 2</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="file" name="slide2">
                      </div>
                      <div class="col-sm-6">
                        <label class="form_label">Link 2</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="link2">
                      </div>
                      <div class="col-sm-6">
                        <label class="form_label">Slide Image 3</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="file" name="slide3">
                      </div>
                      <div class="col-sm-6">
                        <label class="form_label">Link 3</label>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="link3">
                      </div>
                      <div class="col-sm-12"><input type="submit" value="Save"></div>
                    </form>

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
