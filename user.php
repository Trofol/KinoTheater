<!--doctype html-->
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--==Title==================================-->
	<title> 
	<?php 
		 $id = $_GET['id'];
		 $db = mysqli_connect('localhost', 'root', '', 'kinozal_db' );
		 $sql = "SELECT * FROM kinozal_db.users where id='$id'" ;
		 $query = mysqli_query($db, $sql);
		 while ($row = mysqli_fetch_assoc($query)){
		 echo $row['username'];}
	?> 
	</title>
	<!--Stylesheet(CSS)==========================-->
	<link rel="stylesheet" href="css/style.css"/>
	<!--==Fav-icon===============================-->
	<link rel="shortcut icon" href="img/cinema.png"/>
	<!--==Import-poppins-font====================-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!--==Import-Monoton-Font====================-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
	<!--==Using-Font-Awesome======================-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<!--==Scroll-Progress-bar=========================-->
		<div id="progress">
			<span id="progress-value"></span>
		</div>
		<!--==Navigation===================================-->
		<nav class="navigation">
			<!--menu-btn--------------->
			<input type="checkbox" class="menu-btn" id="menu-btn">
			<label for="menu-btn" class="menu-icon">
					<span class="nav-icon"></span>
			</label>
			<!--logo------------------->
			<a href="index.php" class="logo">
					Кинотеатр<span>.hd</span>
			</a>
			<!--menu------------------->
			<ul class = "menu">
				<li> <a href="index.php">Главная</a></li>
				<li> <a href="#">Мультфильмы</a></li>
				<li> <a href="#">Сериалы</a></li>
				<li> <a href="#">Фильмы</a></li>
				<li> <a href="#">Контакты</a></li>
			</ul>
			<form action="" class="search-box">
			<?php 
					echo "<a href= '/php/destroy.php'> <p>Выйти</p> </a>";
					
			?>
			
			</form>
			<!--Search-box------------->
			<form action="" class="search-box">
					<!--input-->
					<input type="text" name="search" placeholder="Search Movie" class="search-input" required/>
					<!--btn-->
					<button type="submit">
						<i class="fas fa-search"></i>
					</button>
			</form>
		</nav>
        <?php 
            $id = $_GET['id'];
            $db = mysqli_connect('localhost', 'root', '', 'kinozal_db' );
            $sql = "SELECT * FROM kinozal_db.users where id='$id'" ;
            $query = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($query)){
                if($row['rights'] == 'Администратор'){
                    header('Location: /admin.php');
                }
            echo "
            <!--nav-end-->
            <!--==Movie-Banner=========================================-->
            <section class='movie-banner'>
                <!--==img==================================-->
                <!--content================================-->
                    <div class='banner-container'>
                        <!--title-container*******************----->
                        <div class='movie-title'>
                                <h1>Имя: {$row['username']}</h1>
                                <h1>Почта: {$row['email']}</h1>
								<h1>Статус: {$row['rights']}</h1>
                            </div>
                        
                    </div>
                </section>
    
                <!-- banner end -->
    
    
    
                <!-- details -->
                <section class='movie-details'>
                    
                </section>";
            }
        ?>
		<section id="latest">
		<!--heading-->
		<div class="latest-heading">
			<h1>Понравившиеся фильмы</h1>
		</div>

		<!-- container -->
		<div class="post-container">
		<?php 
		session_start();
		$db = mysqli_connect('localhost', 'root', '', 'kinozal_db' );
		$kino_sql = "SELECT * from kinozal_db.kino, kinozal_db.film_like where kino.id = film_like.film_like_id and film_like.user_like_id =".$_SESSION['id'] ;
		$kino_query = mysqli_query($db, $kino_sql);
			while ($kino_row = mysqli_fetch_assoc($kino_query)){
				# Выводим
				echo " 

				<div class='post-box'>
				<div class='post-img'>
					<img src='{$kino_row['banner']}' alt=''>
				</div>
				<!--text-->
				<div class='main-slider-text'>
					<!--quality-->
					<span class='quality'>Full HD</span>
					
					<!--bottom-text-->
					<div class='bottom-text'>
						<!--name-->
						<div class='movie-name'>
							<span>{$kino_row['date']}</span>
							<a href='kino.php?id={$kino_row['id']}'>{$kino_row['name']}</a>
						</div>

						<!--Category- and rating-->
						<div class='category-rating'>
							<div class='category'>
							<a href='#'>{$kino_row['Themes']}</a>,<a href='#'>{$kino_row['Themes2']}</a>
							<a href= '/php/delete.php?id={$kino_row['id']}'> <i style=color:white; class='fa fa-heart-o'></i> </a>
							</div>

							<div class='rating'>
							
							{$row['Grade']} <img alt='imbd' src='img/IMDb-icon.png'/>
							</div>
						</div>
					</div>
				</div>
			</div>";
			}
		?>
		</div>
	</section>
		


				<!-- footer -->
	<footer>
		<!-- footer-logo -->
		<a href="index.php" class="logo">Кинотеатр <span>hd</span></a>
		<!-- autor -->
		<span class="autor">Created by Kirill Kogol</span>
	</footer>


			<!--==jQuery=======================================-->
			<script src="js/jQuery.js"></script>
			<script>
			/*==popup-open==================================*/
			$(document).on('click','.play-btn a',function(){
					$('.play').addClass('active-popup');
					$('.menu-icon').addClass('menu-popup');
			});
			/*==popup-Close==================================*/
			$(document).on('click','.close-movie',function(){
					$('.play').removeClass('active-popup');
					$('.menu-icon').removeClass('menu-popup');
			});
				/*==auto-play-when-popup-open===================*/
				$('.play-btn a').click(function(){
					$('#m-video')[0].play();
				});
				/*==Close-video-when-poppup-close==============*/
				$('.close-movie').click(function(){
					$('#m-video')[0].pause();
				});
			</script>
				<script src="js/jQuery.js"></script>
				<script src="js/swiper-bundle.min.js"></script>
				<script src="js/swiperIn.js"></script>
				<script src="js/menu-fix.js"></script>
				<script src="js/scroll-progress.js"></script>
	</body>
	</html>