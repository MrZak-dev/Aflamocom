<?php
session_start();
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/media.css">
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.css">
    <link rel="icon" type="image/png" href="../../images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <title>Movie Add</title>
  </head>
  <body>
<?php

         if(isset($_SESSION['user'])){
?>
          <div class="container">
            <div class="panel_menu_container">
              <div class="panel_menu">
                  <ul class="panel_list">
                    <li><a href="#">أضافة فلم</a></li>
                    <li><a href="serie/">أضف مسلسل</a></li>
                    <li><a href="episode/">حلقة مسلسل</a></li>
                    <li><a href="../movie-settings">ادارة الأفلام</a></li>
                    <li><a href="../website-settings">ادارة الواجهة</a></li>
                    <li><a href="#">ادارة الموقع</a></li>
                  </ul>
                </div>
            </div>
                <div class="manager_container">
                  <div class="movie_manager row">
                    <div class="col-sm-12 user"><?php echo $_SESSION['user']; ?><form method="POST" action="../" ><button type="submit">LOGOUT</button></form></div>
                    <form action="receiver.php" method="post" enctype='multipart/form-data'>
                      <div class="col-sm-3"><label class="form_label ">Movie Title</label></div><div class="col-sm-3"><input type="text"  name="movie_title" required></div>
                      <div class="col-sm-3"><label class="form_label ">Server 1</label></div><div class="col-sm-3"><input type="text"  name="player_server1" required></div>
                      <div class="col-sm-3"><label class="form_label ">Server 2</label></div><div class="col-sm-3"><input type="text"  name="player_server2" required></div>
                      <div class="col-sm-3"><label class="form_label ">Server 3</label></div><div class="col-sm-3"><input type="text"  name="player_server3" required></div>
                      <div class="col-sm-3"><label class="form_label ">Server 4</label></div><div class="col-sm-3"><input type="text"  name="player_server4" required></div>
                      <div class="col-sm-3"><label class="form_label ">Download Link 1</label></div><div class="col-sm-3"><input type="text"  name="movie_download_1" required></div>
                      <div class="col-sm-3"><label class="form_label ">Download Link 2</label></div> <div class="col-sm-3"><input type="text" name="movie_download_2" required></div>
                      <div class="col-sm-3"><label class="form_label ">Download Link 3</label></div><div class="col-sm-3"><input type="text"  name="movie_download_3" required></div>
                      <div class="col-sm-3"><label class="form_label ">Category</label></div>
                      <div class="col-sm-3">
                        <select name="movie_category">
                          <option value="all">Default</option>
                          <option value="action">Action</option>
                          <option value="comedy">Comedy</option>
                          <option value="horror">Horror</option>
                          <option value="scifi">Sci-Fi</option>
                          <option value="advanture">Advanture</option>
                          <option value="biographie">Biographie</option>
                          <option value="drama">Drama</option>
                        </select>
                      </div>
                      <div class="col-sm-3"><label class="form_label">Section</label></div>
                      <div class="col-sm-3">
                        <select name="movie_section">
                          <option value="other">Other</option>
                          <option value="ajnabi">Ajnabi</option>
                          <option value="anime">Anime</option>
                          <option value="arabic">Arabic</option>
                          <option value="serie">Serie</option>
                          <option value="documentary">Documentary</option>
                        </select>
                      </div>
                      <div class="col-sm-3"><label class="form_label ">Image Link</label></div>
                      <div class='col-sm-3'>
                          <input type='file'  name='movie_img'  >
                      </div>
                      <div class="col-sm-3"><label class="form_label ">Year</label></div>
                      <div class='col-sm-3'>
                          <input type='text' pattern="[0-9]{4}"  name='movie_year' maxlenght="4" >
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
             <p class="warning login_error_msg"> WRONG LOGIN INFORMATIONS</p>
             <a href="../">Try Again</a>
           </div>
<?php }
?>
  </body>
</html>
