<!--doctype html-->
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--==Title==================================-->
	<title>
		<?php 
		session_start();

		$id = $_GET['id'];
		$db = mysqli_connect('localhost', 'root', '', 'kinozal_db' );
		$sql = "SELECT * FROM kinozal_db.kino where id='$id'" ;
		$query = mysqli_query($db, $sql);
		while ($row = mysqli_fetch_assoc($query)){ 
			echo $row['name'];
		};
		$_SESSION['kino_id'] = $id; 
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
				if($_SESSION['id'] == ''){
					echo "<a href= 'login.php'> <p>Войти</p> </a>";
				}
				else{
					echo "<a href= 'user.php?id={$_SESSION['id']}'> <p>Личный кабинет</p> </a>";
				}

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
            $sql = "SELECT * FROM kinozal_db.kino where id='$id'" ;
            $query = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($query)){
            echo "
            <!--nav-end-->
            <!--==Movie-Banner=========================================-->
            <section class='movie-banner'>
                <!--==img==================================-->
                <div class='m-banner-img'>
                        <img alt='' src='{$row['poster']}'>
                </div>
                <!--content================================-->
                    <div class='banner-container'>
                        <!--title-container*******************----->
                        <div class='title-container'>
                            <!--title-top===============-->
                            <div class='title-top'>
                            <!--title----->
                            <div class='movie-title'>
                                <h1>{$row['name']}</h1>
                            </div>
                            <!--more-about-movie-->
                            <div class='more-about-movie'>
                                <span class='quality'>Full HD</span>
                                <div class='rating'>
                                {$row['Grade']} <img alt='imbd' src='img/IMDb-icon.png'>
                                </div>
                                <span>{$row['date']}</span>
                                <span>{$row['time']}</span>
                            </div>
                            <!--language--------->
                            <div class='language'>
                                <span>{$row['language']}</span>
								<a href= '/php/like.php'> <i style=color:white; class='fa fa-heart-o'></i> </a>
                            </div>
							
                            </div>
                            <!--Title-botttom==========================-->
                            <div class='title-bottom'>
                                <!--category------->
                                <div class='category'>
                                        <strong>Жанр</strong><br/>
                                        <a href='#'>{$row['Themes']}</a>,<a href='#'>{$row['Themes2']}</a>
                                </div>
                                <!--trailer-btn---->
                                <a href='{$row['Treiler']}' class='watch-btn'>Трейлер</a>
								
                            </div>
                        </div>
                        <!--play-btn******************************--->
                        <div class='play-btn-container'>
                            <div class='play-btn'>
                                <a href='javascript:void'>
                                        <i class='fas fa-play'></i>
                                </a>
                            </div>
                        </div>
                        <!--Video/full-Movie***************************-->
                        <div id='play' class='play'>
                            <!--close-btn--->
                            <a href='javascript:void' class='close-movie'>
                                <i class='fas fa-times'></i>
                            </a>
                            <!--movie------->
                            <div class='play-movie'>
                                <iframe src='{$row['movie']}' frameborder='0' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </section>
    
                <!-- banner end -->
    
    
    
                <!-- details -->
                <section class='movie-details'>
                    <strong>{$row['name']}</strong>
                    <p style = 'color: #d9d9d9;'>{$row['description']}</p>
                </section>
    
                <!-- screenshost -->
                <section class='screen'>
                    <strong>Скриншоты</strong>
                    <!-- скрины -->
                    <div class='screen-container'>
                        <img src='{$row['img1']}' alt=''>
                        <img src='{$row['img2']}' alt=''>
                        <img src='{$row['img3']}' alt=''>
                        <img src='{$row['img4']}' alt=''>
                    </div>
                </section>";
            }
        ?>
		


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