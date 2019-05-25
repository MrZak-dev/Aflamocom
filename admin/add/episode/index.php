<?php
session_start();
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../css/media.css">
    <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.css">
    <link rel="icon" type="image/png" href="../../../images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <title>Episode Add</title>
  </head>
  <body>
<?php

         if(isset($_SESSION['user'])){
?>
          <div class="container">
            <div class="panel_menu_container">
              <div class="panel_menu">
                  <ul class="panel_list">
                    <li><a href="../">أضافة فلم</a></li>
                    <li><a href="../serie">أضف مسلسل</a></li>
                    <li><a href="#">حلقة مسلسل</a></li>
                    <li><a href="../../movie-settings">ادارة الأفلام</a></li>
                    <li><a href="../../website-settings">ادارة الواجهة</a></li>
                    <li><a href="#">ادارة الموقع</a></li>
                  </ul>
                </div>
            </div>
                <div class="manager_container">
                  <div class="movie_manager row">
                    <div class="col-sm-12 user"><?php echo $_SESSION['user']; ?><form method="POST" action="../../" ><button type="submit">LOGOUT</button></form></div>
                    <form action="receiver.php" method="post" enctype='multipart/form-data'>
                      <div class="col-sm-3"><label class="form_label ">Episode Number</label></div><div class="col-sm-3"><input type="text"  name="episode_nmbr" required></div>
                      <div class="col-sm-3"><label class="form_label ">Serie Name</label></div><div class="col-sm-3"><input type="text"  name="serie_name" required></div>
                      <div class="col-sm-3"><label class="form_label ">Season</label></div><div class="col-sm-3"><input type="text"  name="season" required></div>
                      <div class="col-sm-3"><label class="form_label ">Server 1</label></div><div class="col-sm-3"><input type="text"  name="server1" required></div>
                      <div class="col-sm-3"><label class="form_label ">Server 2</label></div><div class="col-sm-3"><input type="text"  name="server2" required></div>
                      <div class="col-sm-3"><label class="form_label ">Server 3</label></div><div class="col-sm-3"><input type="text"  name="server3" required></div>
                      <div class="col-sm-3"><label class="form_label ">Server 4</label></div><div class="col-sm-3"><input type="text"  name="server4" required></div>
                      <div class="col-sm-3"><label class="form_label ">Download Link 1</label></div><div class="col-sm-3"><input type="text"  name="download1" required></div>
                      <div class="col-sm-3"><label class="form_label ">Download Link 2</label></div> <div class="col-sm-3"><input type="text" name="download2" required></div>
                      <div class="col-sm-3"><label class="form_label ">Download Link 3</label></div><div class="col-sm-3"><input type="text"  name="download3" required></div>
                      <div class="col-sm-12"><input type="submit" value="Save"></div>
                    </form>

                   </div>
                 </div>
            </div>

<?php }
          else {
?>
           <div class="login_error waning">
             <p class="warning login_error_msg"> WRONG LOGIN INFORMATIONS</p>
             <a href="../../">Try Again</a>
           </div>
<?php }
?>
  </body>
</html>
