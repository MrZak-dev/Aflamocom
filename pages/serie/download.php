<!DOCTYPE html>
<html>
<?php
	include_once "../../admin/db_connection.php";
	$the_id = $_GET['episode_id'];
	$select_db="SELECT * FROM episodes WHERE episode_id='$the_id'";
	$data=$connect -> query($select_db);
	$fetched_data=$data -> fetch_assoc();

 ?>
	<head>
		<meta charset="UTF-8">
		<title>تحميل مسلسل <?php echo $fetched_data['serie_name'];?> الموسم <?php echo  $fetched_data['season'];?> الحلقة <?php echo $fetched_data['episode_nmbr'];?> مترجم | AFlamocom</title>
		<meta name="keyword" content="تحميل,<?php echo $fetched_data['serie_name'];?>,الموسم <?php echo $fetched_data['season'];?>,مترجم,جودة,عالية,اون لاين,اونلاين,الحلقة <?php echo $fetched_data['episode_nmbr'];?> ,مشاهدة,مسلسل">
		<meta name="description" content="تحميل مسلسل <?php echo $fetched_data['serie_name'];?> الموسم <?php echo  $fetched_data['season'];?> الحلقة <?php echo $fetched_data['episode_nmbr'];?> مترجم">
		<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/media.css"/>
		<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/font-awesome.css"/>
		<link rel="icon" type="image/png" href="/Projects/Aflamocom/images/icon.png"/>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		</head>
			<body>
				<div class="container">
					<header>
						<div class="menu">
							<div class="home">
								<ul class="menu-items">
									<li><a href="/Projects/Aflamocom">الرئيسية</a></li>
									<li><a href="/Projects/Aflamocom">أفلام</a></li>
									<li><a href="/Projects/Aflamocom/series/1">مسلسلات</a></li>
								</ul>
							</div>
							<div class="logo">
								<a href="/Projects/Aflamocom/"><img alt="Logo" class="logo-img" src="/Projects/Aflamocom/images/logo.png"></a>
							</div>
						</div>
							<div class="scnd-menu">
								<ul class="scnd-menu-items">
									<li><a href="/Projects/Aflamocom/section/ajnabi/1">أفلام أجنبية</a></li>
	  								<li><a href="/Projects/Aflamocom/section/arabic/1">أفلام عربية</a></li>
	  								<li><a href="/Projects/Aflamocom/section/anime/1">أفلام أنمي</a></li>
	  								<li><a href="/Projects/Aflamocom/section/documentary/1">برامج وثائقية</a></li>
	  								<li><a href="/Projects/Aflamocom/section/other/1">منوعات</a></li>
								</ul>
							</div>
					</header>
				</div>
		      <div class="download-container">
				<div class="container">
			        <div class="download-link">
			          <ul class="link-list">
<?php
							echo '
							<li><a target="_blank" href="'.$fetched_data["download1"].'" ><i class="fa fa-download fa-2x"></i> Download Link 1</a></li>
							<li><a target="_blank" href="'.$fetched_data["download2"].'" ><i class="fa fa-download fa-2x"></i> Download Link 2</a></li>
							<li><a target="_blank" href="'.$fetched_data["download3"].'" ><i class="fa fa-download fa-2x"></i> Download Link 3</a></li>
							';
?>
			          </ul>
			        </div>
			      </div>
			    </div>
				<div class="social">
					<div class="social-icons">
						<a href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
						<a href="#" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
						<a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
					</div>
					<div class="rights">
                        <p class="rights_p">Copyright 2017 | All Rights Reserved. All movies in this website are NOT saved in its own server | <a href="/Projects/Aflamocom/DMCA/dmca.html">DMCA</a></p>
					</div>
				</div>
				<script src="/Projects/Aflamocom/js/jquery.js"></script>
				<script src="/Projects/Aflamocom/js/bootstrap.js"></script>
				<script src="/Projects/Aflamocom/js/javascript.js"></script>
		  </body>
</html>
