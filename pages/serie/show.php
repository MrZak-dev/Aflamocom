<!DOCTYPE html>
<html>
	<head>
<?php
	include_once "../../admin/db_connection.php";
	$the_id = $_GET['episode_id'];
	$select_db="SELECT * FROM episodes WHERE episode_id='$the_id'";
	$data=$connect -> query ($select_db);
	$fetched_data= $data -> fetch_assoc();
?>
			<meta charset="UTF-8">
			<title>مسلسل <?php echo $fetched_data['serie_name'];?> الموسم <?php echo  $fetched_data['season'];?> الحلقة <?php echo $fetched_data['episode_nmbr'];?> مترجم اون لاين | AFlamocom</title>
			<meta name="keyword" content="<?php echo $fetched_data['serie_name'];?>,الموسم,<?php echo $fetched_data['season'];?>,مترجم,جودة,عالية,اون لاين,اونلاين,الحلقة <?php echo $fetched_data['episode_nmbr'];?> ,مشاهدة,مسلسل"/>
			<meta name="description" content="مشاهدة و تحميل مسلسل <?php echo $fetched_data['serie_name'];?> مترجم بجودة عالية اون لاين"/>			
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
				<div class="movie-show-container">
					<div class="container">
						<div class="movie-description">
							<div class="description">
								<p class="description-p"><!--Ads or description here--></p>
							</div>
						</div>
						<div class="player_servers">
							<ul class="servers_list">
								<li><a href="/Projects/Aflamocom/episodes/<?php echo $_GET['episode_id']; ?>/1">سرفر 1</a></li>
								<li><a href="/Projects/Aflamocom/episodes/<?php echo $_GET['episode_id']; ?>/2">سرفر 2</a></li>
								<li><a href="/Projects/Aflamocom/episodes/<?php echo $_GET['episode_id']; ?>/3">سرفر 3</a></li>
								<li><a href="/Projects/Aflamocom/episodes/<?php echo $_GET['episode_id']; ?>/4">سرفر 4</a></li>
							</ul>
						</div>
						<div class="movie-player">
							<?php
							switch ($_GET['server']) {
								case 1:
								echo '
								<iframe class="active_player" width="100%" height="100%" src="'.$fetched_data['server1'].'" frameborder="0" allowfullscreen></iframe>
								';
								break;
								case 2:
								echo '
								<iframe class="active_player" width="100%" height="100%" src="'.$fetched_data['server2'].'" frameborder="0" allowfullscreen></iframe>
								';
								break;
								case 3:
								echo '
								<iframe class="active_player" width="100%" height="100%" src="'.$fetched_data['server3'].'" frameborder="0" allowfullscreen></iframe>
								';
								break;
								case 4:
								echo '
								<iframe class="active_player" width="100%" height="100%" src="'.$fetched_data['server4'].'" frameborder="0" allowfullscreen></iframe>
								';
								break;
								default:
								echo '
								<iframe class="active_player" width="100%" height="100%" src="'.$fetched_data['server1'].'" frameborder="0" allowfullscreen></iframe>
								';
								break;
							}
							 ?>
						</div>
					</div> 
					<div class="download-btn">
						<a  href="/Projects/Aflamocom/episode_download/<?php echo $fetched_data['episode_id']; ?>">تحميل <i class="fa fa-1x fa-download"></i></a>
					</div>
			<div class="social">
				<div class="social-icons">
					<a href="http://www.facebook.com/aflamocom" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
					<a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
				</div>
				<div class="rights">
                    <p class="rights_p">Copyright 2017 | All Rights Reserved. All movies in this website are NOT saved in its own server | <a href="/Projects/Aflamocom/DMCA/dmca.html">DMCA</a></p>
				</div>
			</div>
            <script type="text/javascript" src="/Projects/Aflamocom/js/jquery.js" async></script>
			<script type="text/javascript" src="/Projects/Aflamocom/js/bootstrap.js" async></script>
	</body>
</html>
