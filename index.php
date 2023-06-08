<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Кинотеатр</title>
	<!-- CSS  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<link rel="stylesheet" href="css/Responsive.css">
	<!--Icon-->
	<link rel="shortcut icon" href="img/cinema.png">
	<!--import-poppins-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!--import-font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Russo+One&display=swap" rel="stylesheet">
	<!--Using-font-Avesome-->
	<script src="https://kit.fontawesome.com/d2d9861c95.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php 
	session_start();
	?>
	<!-- Scroll progress -->
	<div id="progress">
		<span id="progress-value">

		</span>
	</div>


	<!--Navigation-->
	<nav class="navigation">
		<!--menu-btn-->
		<input type="checkbox" class="menu-btn" id="menu-btn">
		<label for="menu-btn" class="menu-icon">
			<span class="nav-icon"></span>
		</label>

		<!--logo-->
		<a href="index.php" class="logo">
			Кинотеатр<span>.hd</span>
		</a>

		<!--menu-->
		<ul class = "menu">
			<li> <a href="index.php">Главная</a></li>
			<li> <a href="#">Мультфильмы</a></li>
			<li> <a href="#">Сериалы</a></li>
			<li> <a href="#">Фильмы</a></li>
			<li> <a href="#">Контакты</a></li>
		</ul>
		<form action="" class="search-box">
			<?php 
				if($_SESSION['id'] == ''){
					echo "<a href= 'login.php'> <p>Войти</p> </a>";
				}
				else{
					echo "<a href= 'user.php?id={$_SESSION['id']}'> <p>Личный кабинет</p> </a>";
				}

			?>
			
		</form>
		<!--Search-box-->
		<form action="post" class="search-box">
			<!--input-->
			<input type="text" name="search" placeholder="Поиск" class="search-input" required/>
			<!--button-->
			<!-- <a href="#"><i class="fas fa-search"></i></a> -->
				
		</form>
	</nav>

	<!--nav-end-->


<!--==slider============================================-->
<section id="main-slider">
	<!-- Swiper -->
	<div class="swiper mySwiper">
		<div class="swiper-wrapper">
				<?php 
				$max_num = 14;
				$num_count = 10;
				
				$array = [];
				
				while (count($array) < $num_count) {
				  $r = rand(0, $max_num);
				  $array[$r] = 1;
				}
				
				$array = array_keys($array);
				$db = mysqli_connect('localhost', 'root', '', 'kinozal_db' );
				for($i = 0; $i <10; $i++){
					$rand = $array[$i];
					$sql = "SELECT * FROM kinozal_db.kino where id='$rand'" ;
					$query = mysqli_query($db, $sql);
					while ($row = mysqli_fetch_assoc($query)){
						# Выводим
						echo " <div class='swiper-slide'>
							<div class='main-slider-box'>
							<!--overlayer-------->
							<a href='kino.php?id={$row['id']}' class='main-slider-overlay'>
								<i class='fas fa-play'></i>
							</a>
							<!--img----------->
							<div class='main-slider-img'>
								<img style= 'width: 300px; height: 400px;' alt='Poster' src='{$row['banner']}'/>
							</div>
							<!--text---------->
							<div class='main-slider-text'>
								<!--quality----->
								<span class='quality'>Full HD</span>
								<!--bottom-text-->
								<div class='bottom-text'>
									<!--name----->
									<div class='movie-name'>	
										<span>{$row['date']}</span>
										<a href='#'> {$row['name']} </strong>
									</div>
									<!--Category-and-rating---->
									<div class='category-rating'>
										<!--category-->
										<div class='category'>
											<a href='#'>{$row['Themes']}</a>,<a href='#'>{$row['Themes2']}</a>
										</div>
										<!--rating--->
										<div class='rating'>
										{$row['Grade']} <img alt='imbd' src='img/IMDb-icon.png'/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>";
					}
					$rand = 0;
				}
				
				
				?>
			
		</div>
	</div>
</section>
	<!--btns-->
	<div class="swiper-buttons">
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>


	<!--latest-Movies-->
	<section id="latest">
		<!--heading-->
		<div class="latest-heading">
			<h1>Популярные фильмы</h1>
		</div>

		<!-- container -->
		<div class="post-container">

			<!-- post-box-1 -->
			
			<?php 
				$max_num = 14;
				$num_count = 9;
				
				$array = [];
				
				while (count($array) < $num_count) {
				  $r = rand(1, $max_num);
				  $array[$r] = 1;
				}
				
				$array = array_keys($array);
				$db = mysqli_connect('localhost', 'root', '', 'kinozal_db' );
				for($i = 0; $i < 9; $i++){
					$rand = $array[$i];
					$sql = "SELECT * FROM kinozal_db.kino where id='$rand'" ;
					$query = mysqli_query($db, $sql);
					while ($row = mysqli_fetch_assoc($query)){
						# Выводим
						echo " <div class='post-box'>
						<div class='post-img'>
							<img src='{$row['banner']}' alt=''>
						</div>
						<!--text-->
						<div class='main-slider-text'>
							<!--quality-->
							<span class='quality'>Full HD</span>
		
							<!--bottom-text-->
							<div class='bottom-text'>
								<!--name-->
								<div class='movie-name'>
									<span>{$row['date']}</span>
									<a href='kino.php?id={$row['id']}'>{$row['name']}</a>
								</div>
		
								<!--Category- and rating-->
								<div class='category-rating'>
									<div class='category'>
									<a href='#'>{$row['Themes']}</a>,<a href='#'>{$row['Themes2']}</a>
									</div>
		
									<div class='rating'>
									{$row['Grade']} <img alt='imbd' src='img/IMDb-icon.png'/>
									</div>
								</div>
							</div>
						</div>
					</div>";
					}
					$rand = 0;
				}
				
				
				?>
		</div>
		<!-- container end -->
		<!-- page number -->
		<div class="page-number">
			<a href="#" class="page-active">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			.....
			<a href="#">100</a>
		</div>
	</section>

	<!-- latest-post-end -->


	<!-- footer -->
	<footer>
		<!-- footer-logo -->
		<a href="index.php" class="logo">Кинотеатр <span>hd</span></a>
		<!-- autor -->
		<span class="autor">Created by Kirill Kogol</span>
	</footer>


	<script src="js/jQuery.js"></script>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="js/swiperIn.js"></script>
	<script src="js/menu-fix.js"></script>
	<script src="js/scroll-progress.js"></script>
</body>
</html>
