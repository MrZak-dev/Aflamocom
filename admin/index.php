<?php
session_start();
session_destroy();
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Website Settings</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/media.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="icon" type="image/png" href="../images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="admin_logo">
        <a href="../index.php"><img alt="Logo" class="logo-img" src="../images/logo.png"></a>
      </div>
    </header>
    <main>
        <div class="login_box">
          <form method="post" action="login/index.php">
            <div class="form_elements"><label><i class="fa fa-user fa-1x"></i></label><input type="text" name="user_name" placeholder="Username"></div>
            <div class="form_elements"><label><i class="fa fa-key fa-1x"></i></label><input type="password" name="user_password" placeholder="Password"></div>
            <div class="form_elements"><input type="submit" value="LOG-IN"></div>
          </form>
        </div>
    </main>
  </body>
</html>
