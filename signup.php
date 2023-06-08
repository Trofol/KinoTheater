<!--doctype html-->
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--==Title==================================-->
	<title>Movie Name - MHD</title>
	<!--Stylesheet(CSS)==========================-->
	<link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/login.css">
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
		</nav>

                <h1>Вход</h1>
		<form method="POST" action="/php/signup.php">
        <div class= "login">
        <div class="row_text">
            <label for="username">Имя:</label> <br>
			<label for="email">Email:</label> <br>
            <label for="pass1">Пароль:</label> <br>
            <label for="pass2">Повтор пароля:</label> <br>
			<label for="feavorit_film">Любимый фильм:</label> <br>
    
        </div>
        <div class="row_in">
        <input name="username" id="username" autocomplete="off" />
        <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
		<input type="email" name="email" id="email" autocomplete="off" />
        <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
        <input type="password" name="pass1" id="pass1" />
        <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
        <input type="password" name="pass2" id="pass2" />
		<h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
        <input type="username" name="feavorit_film" id="feavorit_film" />
        </div>
        </div>

        <div class="button">
            <input type="submit" />
            <a href="login.php">В аккаунт</a>
        </div>
        </form>

				<!-- footer -->
	<footer>
		<!-- footer-logo -->
		<a href="index.php" class="logo">Кинотеатр <span>hd</span></a>
		<!-- autor -->
		<span class="autor">Created by Kirill Kogol</span>
	</footer>
	</body>
	</html>