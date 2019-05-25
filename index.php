<!DOCTYPE html>
<html>
  	<head>
  	    <title>AFlamocom | أفلامكم</title>
  	    <meta charset="UTF-8"/>
        <meta name="description" content="موقع أفلامكم لمشاهدة و تحميل الأفلام بسرعة و بجودة عالية "/>
        <meta name="keyword" content="aflamocom,aflamkom 2,aflamkom,aflam online,online,movie,movies,+18,أفلام,افلام,اونلاين,أون لاين,مشاهدة,تحميل,افلام للكبار,للكبار,اون لاين,افلام اون لاين,افلام اجنبية مترجمة,مترجمة,افلام مترجمة,افلام بالعربية,جودة عالية,مترجمة بالعربية,افلامكم,أفلامكم,aflamocom,aflamcom,alamocom"/>
        <link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/reset.css"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/bootstrap.css"/>
  	    <link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/style.css"/>
  	    <link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/media.css"/>
  	    <link rel="stylesheet" type="text/css" href="/Projects/Aflamocom/css/font-awesome.css"/>
  	    <link rel="icon" type="image/png" href="/Projects/Aflamocom/images/icon.png"/>
        <link rel="alternate" href="http://aflamocom.com/" hreflang="ar" />
  	    <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="google-site-verification" content="GoqKhOo6d8GK01p6dh6w7m6CsdTx9KS0Sgmwdpfaziw" />
  	</head>
  	<body>

<?php
          //Pagination
        $nmbr_data_per_page = 15;
        include_once "admin/db_connection.php"; //include data base conection
        if( isset($_GET["page"]) ){ $page=$_GET["page"]; }else{ $page=1; }
        $start_from = ($page-1) * $nmbr_data_per_page;
        $mysql="SELECT * FROM movies ORDER BY movie_id DESC LIMIT $start_from, $nmbr_data_per_page";
        $run_query=mysqli_query($connect,$mysql);
?>
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
<?php
          $slides_query = "SELECT slide_link FROM slides";
          $run_slides_query = $connect -> query($slides_query);
?>
        <div class="slide_container">
<?php
          $i=1;
          while ($links = mysqli_fetch_array($run_slides_query)){
?>

      		<div class="one_slide">
      			<a href="<?php echo $links['slide_link']; ?>"><img alt="slide_img" class="slide_img img-responsive" src="/Projects/Aflamocom/images/slide<?php echo $i;?>.jpg"></a>
      		</div>
<?php
          $i++;}
?>
        </div>
        <div class="arrows">
          <i class="fa fa-2x fa-arrow-circle-left left_arrow"></i>
          <i class="fa fa-2x fa-arrow-circle-right right_arrow"></i>
        </div>
  			<div class="search">
  				<form action="/Projects/Aflamocom/pages/search.php" method="get">
  					<input type="text" name="search" placeholder="بحث">
  				</form>
  			</div>
      </div>
  		<div class="movies">
        <div class="container">
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
                        <span class="movie_year">'.$fetched_data["movie_date"].'</span>
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
            $mysql="SELECT * FROM movies";
            $run_query=mysqli_query($connect,$mysql);
            $total_data=mysqli_num_rows($run_query);
            $total_pages=ceil( $total_data / $nmbr_data_per_page );
?>
    	<div class="movies-list-nmbr">
                <div class="list_nmbr_container">
          				<ul class="list-nmbr">
          					<li><a href="/Projects/Aflamocom/page/1"><?php echo "<< 1"; ?></a></li>
<?php
                    if(isset($_GET["page"])){
                      $current_page = $_GET["page"];
                    }
                    else{
                      $current_page = 1;
                    }
                    if ($current_page == 1   ) {
                      if(!isset($_GET['page'])){
                        echo '<li><a href="/Projects/Aflamocom/page/2">2</a></li>';
                      }
                      else{
                          echo '<li><a href="/Projects/Aflamocom/page/'.($current_page + 1).'">'.($current_page + 1).'</a></li>';
                      }
                    }
                    if ($current_page == $total_pages ) {
                      echo '<li><a href="/Projects/Aflamocom/page/'.($current_page - 1).'">'.($current_page - 1).'</a></li>';
                      }
                    if($current_page > 1 && $current_page < $total_pages ){
                      echo '<li><a href="/Projects/Aflamocom/page/'.($current_page - 1).'">'.($current_page - 1).'</a></li>';
                      echo '<li class="selected_page" ><a href="'.$current_page.'">'.$current_page.'</a></li>';
                      echo '<li><a href="/Projects/Aflamocom/page/'.($current_page + 1).'">'.($current_page + 1).'</a></li>';
                      }
?>
          					<li><a href="/Projects/Aflamocom/page/<?php echo $total_pages; ?>"><?php echo "$total_pages >>"; ?></a></li>
          				</ul>
                </div>
    		</div>
        </div> 
  		</div>
  		<footer class="footer">
        <div class="popular">
           <div class="popular_title"><span>أفضل الأفلام</span></div>
<?php
            //MOST VISITED
            $most_visited_query="SELECT * FROM movies ORDER BY movie_views DESC LIMIT 6";
            $run_most_visited_query=mysqli_query($connect,$most_visited_query);
            while($popular_movie=mysqli_fetch_assoc($run_most_visited_query)){
              $popular_movie_name = strtolower(str_replace($search,$replace,$popular_movie['movie_title']));
              echo '
  			        <div class="one_popular">
  		            <a href="/Projects/Aflamocom/show/'.$popular_movie['movie_id']."/".$popular_movie_name.'"><img class="popular_movie_img" alt="" src="/Projects/Aflamocom/images/movie_img/'.$popular_movie['movie_img'].'"></a>
                  <div class="one_popular_cover"><a href="/Projects/Aflamocom/show/'.$popular_movie['movie_id']."/".$popular_movie_name.'"></a></div>
                  <a href="/Projects/Aflamocom/show/'.$popular_movie['movie_id']."/".$popular_movie_name.'"><i class="fa fa-television fa-2x popular_tel"></i></a>
  			        </div>
                  ';}
?>
  		    </div>
         <div class="social">
           <div class="social-icons">
             <a href="http://www.facebook.com/aflamocom" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
             <a href="#" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
             <a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
           </div>
         </div>
         <div class="rights">
            <p class="rights_p">Copyright 2017 | All Rights Reserved. All movies in this website are NOT saved in its own server | <a href="/DMCA/dmca.html">DMCA</a></p>
         </div>
  		</footer>
        <script type="text/javascript" src="/Projects/Aflamocom/js/jquery.js"></script>
        <script type="text/javascript" src="/Projects/Aflamocom/js/bootstrap.js"></script>
        <script type="text/javascript" src="/Projects/Aflamocom/js/javascript.js"></script>
  </body>
</html>
