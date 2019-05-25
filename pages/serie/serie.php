<!DOCTYPE html>
<html>
	<head>
<?php
	include_once "../../admin/db_connection.php";
	if(isset($_GET['season'])){
		$season=$_GET['season'];
	}
	else{
		$season=1;
	}
	$serie_id = $_GET['serie_id'];
	$select_db="SELECT * FROM series WHERE serie_id='$serie_id'";
	$data=$connect -> query ($select_db);
	$fetched_data= $data -> fetch_assoc();
	//Views
	$last_visit_time_data= $fetched_data['serie_views'];
	$new_visit_time_data = $last_visit_time_data + 1 ;
	$update_visit_time_query = "UPDATE series SET serie_views='$new_visit_time_data' WHERE serie_id='$serie_id'";
	$run_update_visit_time_query =$connect -> query($update_visit_time_query);
	//Views END
?>
			<meta charset="UTF-8"/>
			<title>مسلسل <?php echo $fetched_data['serie_name'];?> الموسم <?php echo $season; ?> مترجم | AFlamocom</title>
			<meta name="keyword" content="مسلسل <?php echo $fetched_data['serie_name'];?> الموسم <?php echo $season; ?>,<?php echo $fetched_data['serie_name']; ?>,مترجم ,جودة,عالية,اونلاين,اون لاين,مسلسل,مشاهدة,كامل,الاجزاء,الجزء,جميع الحلقات,جميع ,كل الحلقات"/>
			<meta name="description" content="مسلسل <?php echo $fetched_data['serie_name'];?> الموسم <?php echo $season; ?> مترجم مشاهدة مباشرة و تحميل  "/>
			<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/reset.css"/>
			<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/bootstrap.css"/>
			<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/style.css"/>
			<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/media.css">
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
								<li><a href="/Projects/Aflamocom/">الرئيسية</a></li>
								<li><a href="/Projects/Aflamocom/">أفلام</a></li>
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
<?php
	$serie_name=$fetched_data['serie_name'];
?>
				<div class="movie-show-container">
					<div class="container">
						<div class="serie_container">
							<div class="serie_header">
								<img class="serie_header_img" alt="Header Image" src="/Projects/Aflamocom/images/serie_img/header/<?php echo $fetched_data['serie_header'];?>">
								<div class="serie_story">
									<h1><?php echo $serie_name;?></h1>
									<p class="serie_story_p"><?php echo $fetched_data["serie_description"];?></p>
								</div>
							</div>
							<div class="serie_seasons">
								<h1 class="serie_titles">الأجزاء</h1>
								<ul class="seasons_list">
<?php
	for($i=1;$i<=$fetched_data['seasons_nmbr'];$i++){
?>
									<li><a href='<?php echo $i;?>'> الجزء <?php echo $i;?></a></li>
<?php } ?>
								</ul>
							</div>
<?php
	$episode_query = "SELECT * FROM episodes WHERE serie_name='$serie_name' AND season = '$season'";
	$query_exe = $connect -> query($episode_query);
?>
							<div class="serie_episodes">
								<div class="episodes_container">
									<h1 class="serie_titles">الحلقات</h1>
									<ul class="episodes_list">
<?php
    while($episode_data=mysqli_fetch_array($query_exe)){
	$j=1;
?>
										<li><a target="_blank" href="/Projects/Aflamocom/episode/<?php echo $episode_data['episode_id'];?>"> الحلقة <?php echo $episode_data['episode_nmbr'];?> <i class="fa fa-1x fa-television"></i></a></li>
<?php $j++; } ?>
									</ul>
								</div>
							</div>
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
