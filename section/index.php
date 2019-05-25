<!DOCTYPE html>
<html>
  	<head>
<?php
        $movie_section=$_GET['section'];
        switch ($movie_section){
            case "ajnabi":
                $theSection = "أفلام أجنبية";
            break;
            case "arabic":
                $theSection = "أفلام عربية";
            break;
            case "anime":
                $theSection = "أفلام أنمي";
            break;
            case "documentary":
                $theSection = "أفلام وتائقية";
            break;
            case "other":
                $theSection = "منوعات";
            break;
        }
?>
  	    <title>AFlamocom | <?php echo $theSection;?></title>
  	    <meta charset="UTF-8">
        <meta name="description" content="موقع أفلامكم لمشاهدة و تحميل الأفلام بسرعة و بجودة عالية ">
        <meta name="keyword" content="aflam,online,movie,<?php echo $theSection;?>,movies,+18,أفلام,افلام,اونلاين,أون لاين,مشاهدة,تحميل,افلام للكبار,للكبار,اون لاين,افلام اون لاين,افلام اجنبية مترجمة,مترجمة,افلام مترجمة,افلام بالعربية,جودة عالية,مترجمة بالعربية,افلامكم,أفلامكم,aflamocom,aflamcom,alamocom">
        <link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/reset.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/bootstrap.css">
  	    <link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/style.css">
  	    <link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/media.css">
  	    <link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/font-awesome.css">
  	    <link rel="icon" type="image/png" href="/Projects/Aflamocom/images/icon.png">
  	    <meta name="viewport" content="width=device-width, initial-scale=1">
  	</head>
  	<body>
<?php
          //Pagination
        $nmbr_data_per_page = 15;
        include_once "../admin/db_connection.php"; //include data base conection
        if( isset($_GET["page"]) ){ $page=$_GET["page"]; }else{ $page=1; }
        $start_from = ($page-1) * $nmbr_data_per_page;
        if(isset($_GET["category"])){
          $movie_category=$_GET["category"];
          $mysql="SELECT * FROM movies WHERE movie_section='$movie_section' AND movie_category='$movie_category' ORDER BY movie_id DESC LIMIT $start_from, $nmbr_data_per_page";
        }
        else{
          $mysql="SELECT * FROM movies WHERE movie_section='$movie_section'  ORDER BY movie_id DESC LIMIT $start_from, $nmbr_data_per_page";
        }
        $run_query=$connect -> query($mysql);
?>
  		<div class="container">
  			<header>
  				<div class="menu">
  					<div class="home">
  						<ul class="menu-items">
  							<li><a href="/Projects/Aflamocom/">الرئيسية</a></li>
  							<li><a href="/Projects/Aflamocom/">أفلام</a></li>
  							<li><a href="/Projects/Aflamocom/">مسلسلات</a></li>
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
  			<div class="movies">
            <div class="container">
              <div class="categories">
                <ul class="category_list">
                  <li><a href="/Projects/Aflamocom/section/<?php echo $movie_section;?>/action/1" >أكشن</a></li>
                  <li><a href="/Projects/Aflamocom/section/<?php echo $movie_section;?>/comedy/1" >فكاهة</a></li>
                  <li><a href="/Projects/Aflamocom/section/<?php echo $movie_section;?>/horror/1" >رعب</a></li>
                  <li><a href="/Projects/Aflamocom/section/<?php echo $movie_section;?>/scifi/1" >خيال علمي</a></li>
                  <li><a href="/Projects/Aflamocom/section/<?php echo $movie_section;?>/drama/1" >دراما</a></li>
                  <li><a href="/Projects/Aflamocom/section/<?php echo $movie_section;?>/advanture/1" >مغامرة</a></li>
                  <li><a href="/Projects/Aflamocom/section/<?php echo $movie_section;?>/biographie/1" >قصص واقعية</a></li>
                </ul>
              </div>
<?php
                  while($fetched_data=mysqli_fetch_assoc($run_query)){
                    $search = array(" : "," ",":","_");
                    $replace = array("-","-","-","-");
                    $movie_name = strtolower( str_replace($search,$replace,$fetched_data['movie_title']));
                    echo '
                      <div class="movie">
                        <a href="/Projects/Aflamocom/show/'.$fetched_data['movie_id']."/".$movie_name.'"><img alt="'.$fetched_data['movie_title'].'" src="/Projects/Aflamocom/images/movie_img/'.$fetched_data['movie_img'].'" class="movie_img"></a>
                        <div class="movie_tools_top">
                          <span class="views"><i class="fa fa-1x fa-eye"></i>'.$fetched_data['movie_views'].'</span>
                        </div>
                        <div class="movie_tools_bottom">
                          <span class="movie_title"><a href="/Projects/Aflamocom/show/'.$fetched_data['movie_id']."/".$movie_name.'">'.$fetched_data['movie_title'].'</a></span>
                          <a href="/Projects/Aflamocom/download/'.$fetched_data['movie_id']."/".$movie_name.'"><i class="movie_btn fa fa-2x fa-download"></i></a>
                          <a href="/Projects/Aflamocom/show/'.$fetched_data['movie_id']."/".$movie_name.'"><i class="movie_btn fa fa-2x fa-television"></i></a>
                        </div>
                      </div>
                    ';
                  }
?>
<?php
                $mysql2="SELECT * FROM movies";
                $run_query=$connect -> query($mysql2);
                $total_data=mysqli_num_rows($run_query);
                $total_pages=ceil( $total_data / $nmbr_data_per_page);
?>
    				<div class="movies-list-nmbr">
              <div class="list_nmbr_container">
      					<ul class="list-nmbr">
      						<li><a href="1"><?php echo "<< 1"; ?></a></li>
                    <?php
                      $current_page = $_GET["page"];
                      if ($current_page == 1 or !isset($_GET['page']) ) {
                        echo '<li><a href="'.($current_page + 1).'">'.($current_page + 1).'</a></li>';
                      }
                      if ($current_page == $total_pages) {
                        echo '<li><a href="'.($current_page - 1).'">'.($current_page - 1).'</a></li>';
                      }
                      if($current_page > 1 && $current_page < $total_pages ){
                        echo '<li><a href="'.($current_page - 1).'">'.($current_page - 1).'</a></li>';
                        echo '<li class="selected_page" ><a href="'.$current_page.'">'.$current_page.'</a></li>';
                        echo '<li><a href="'.($current_page + 1).'">'.($current_page + 1).'</a></li>';
                      }
                     ?>
      						  <li><a href="<?php echo $total_pages; ?>"><?php echo "$total_pages >>"; ?></a></li>
      					</ul>
              </div>
    		  </div>
      </div>
  	</div>
  			<footer class="footer">
             <div class="social">
               <div class="social-icons">
                 <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                 <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
                 <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
               </div>
             </div>
             <div class="rights">
                <p class="rights_p">Copyright 2017 | All Rights Reserved. All movies in this website are NOT saved in its own server</p>
             </div>
  			</footer>
            <script src="/Projects/Aflamocom/js/jquery.js"></script>
            <script src="/Projects/Aflamocom/js/bootstrap.js"></script>
            <script src="/Projects/Aflamocom/js/javascript.js"></script>
  </body>
</html>
