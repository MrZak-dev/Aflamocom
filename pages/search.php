<!DOCTYPE html>

<html>
	<head>
		<title>AFlamocom | أفلامكم</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/reset.css">
		<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/style.css">
		<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/media.css">
		<link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/font-awesome.css">
		<link rel="icon" type="image/png" href="/Projects/Aflamocom/images/icon.png">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
	      <div class="container">
	  			<div class="search">
	  				<form action="search.php" method="get">
							<?php
								$search_word   = $_GET['search'];
								$low_search_word = strtolower($search_word);
								$search_word_array=explode(" ",$low_search_word);
							?>
	  					<input type="text" name="search" value="<?php echo $low_search_word; ?>" >
	  				</form>
	        </div>
	        <div class="search_result">
	            <?php
								include_once "../admin/db_connection.php";
	              echo '<p class="search_p">';
	              if(!empty($low_search_word)){
	                echo " \"$low_search_word\" نتائج البحث";
	              echo '</p>';
								$search_query ="SELECT * FROM movies ";
								$run_search_query=mysqli_query($connect,$search_query);
								while ($search_data=mysqli_fetch_assoc($run_search_query)){
									$low_search_data=strtolower($search_data['movie_title']);
									$search_data_array=explode(" ",$low_search_data);
									$nmbr_of_words=count($search_data_array);
									$match=0;
									foreach ($search_word_array as $one_word) {
										for ($i=0; $i <=$nmbr_of_words ; $i++) {
											if($one_word==$search_data_array[$i]){
												$match++;
											}
										}
									}
									if($match>=1){
                                        $search = array(" : "," ",":","_");
               							$replace = array("-","-","-","-");
                						$movie_name = strtolower( str_replace($search,$replace,$search_data['movie_title']));
										echo '
											<div class="movie">
												<a href="/Projects/Aflamocom/show/'.$search_data['movie_id']."/".$movie_name.'"><img alt="'.$search_data['movie_title'].'" src="/Projects/Aflamocom/images/movie_img/'.$search_data['movie_img'].'" class="movie_img"></a>
												<div class="movie_tools_top">
													<span class="views"><i class="fa fa-1x fa-eye"></i>'.$search_data['movie_views'].'</span>
												</div>
												<div class="movie_tools_bottom">
													<span class="movie_title"><a href="/Projects/Aflamocom/show/'.$search_data['movie_id']."/".$movie_name.'">'.$search_data['movie_title'].'</a></span>
													<a href="/Projects/Aflamocom/download/'.$search_data['movie_id']."/".$movie_name.'"<i class="movie_btn fa fa-2x fa-download"></i></a>
													<a href="/Projects/Aflamocom/show/'.$search_data['movie_id']."/".$movie_name.'"><i class="movie_btn fa fa-2x fa-television"></i></a>
												</div>
											</div>
										';
									}
								}
							}
							else {
								echo '<p class="search_p">قم بادخال كلمة بحث</p>';
							}
	            ?>
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
