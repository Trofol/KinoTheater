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
					Кинозал<span>.hd</span>
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
<h1 id= "title">Создание фильма</h1>
<form  method="POST" action="film_create.php">
    <div class= "login">
        <div class="row_text">
                    <label for="name">Имя:</label> <br>
                    <label for="description">Описание:</label> <br>
                    <label for="banner">Баннер:</label> <br>
                    <label for="poster">Постер:</label> <br>
                    <label for="date">Дата выхода:</label> <br>
                    <label for="time">Продолжительность:</label> <br>
                    <label for="language">Язык:</label> <br>
                    <label for="movie">Фильм:</label> <br>
                    <label for="Grade">Оценка:</label> <br>
                    <label for="Themes">Тема:</label> <br>
                    <label for="Themes2">Доп. тема:</label> <br>
                    <label for="Treiler">Трейлер:</label> <br>
                    <label for="img1">Изображение 1:</label> <br>
                    <label for="img2">Изображение 2:</label> <br>
                    <label for="img3">Изображение 3:</label> <br>
                    <label for="img4">Изображение 4:</label> <br>
                </div>
                <div style="padding-top:15px;" class="row_in">
                    
                    <input name="name" id="name" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="description" id="description" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="banner" id="banner" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="poster" id="poster" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="date" id="date" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="time" id="time" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="language" id="language" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="movie" id="movie" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="Grade" id="Grade" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="Themes" id="Themes" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="Themes2" id="Themes2" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="Treiler" id="Treiler" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="img1" id="img1" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="img2" id="img2" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="img3" id="img3" autocomplete="off" /> <br>
                    <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                    <input name="img4" id="img4" autocomplete="off" /> <br>

                </div>

            <div style="display:none;" class="row_id">
                <input type="number" name="id" id="id" value= "<?php echo $_GET['id'] ?>">
            </div>
            <div class="row">
                <input type="submit" />
            </div>
    </div>
</form>
<button id="back"><a href="admin.php">Назад</a></button>
<?php
    if (isset($_POST["name"]) or  isset($_POST["description"]) or  isset($_POST["banner"]) or  isset($_POST["poster"]) or  isset($_POST["date"]) or  isset($_POST["time"]) or  isset($_POST["language"]) or  isset($_POST["movie"]) or  isset($_POST["Grade"]) or  isset($_POST["Themes"]) or  isset($_POST["Themes2"]) or  isset($_POST["Treiler"]) or  isset($_POST["img1"]) or  isset($_POST["img2"]) or  isset($_POST["img3"]) or  isset($_POST["img4"])) {
    
        $servername = "localhost";
        $name = "root";
        $password = "";
        $dbname = "kinozal_db";
        
        $db = mysqli_connect($servername, $name, $password, $dbname);
        if (!$db) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        $upd_id = (int)$_POST["id"];
        $upd_name = $_POST['name'];
        $description = $_POST['description'];
        $banner = $_POST['banner'];
        $poster = $_POST['poster'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $language = $_POST['language'];
        $movie = $_POST['movie'];
        $Grade = $_POST['Grade'];
        $Themes = $_POST['Themes'];
        $Themes2 = $_POST['Themes2'];
        $Treiler = $_POST['Treiler'];
        $img1 = $_POST['img1'];
        $img2 = $_POST['img2'];
        $img3 = $_POST['img3'];
        $img4 = $_POST['img4'];

        $upd_sql = "INSERT INTO kinozal_db.kino (name, description, banner, poster, date, time, language, movie, Grade, Themes, Themes2, Treiler, img1, img2, img3, img4) VALUES ('$upd_name','$description', '$banner', '$poster', '$date', '$time', '$language', '$movie', '$Grade', '$Themes', '$Themes2', '$Treiler', '$img1', '$img2', '$img3', '$img4')";
        echo $upd_sql;
        if(mysqli_query($db, $upd_sql)){
            header('Location:admin.php');
        } else{
            echo "Ошибка: " . mysqli_error($db);
        }
        mysqli_close($db);
        }
?>
				<!-- footer -->
                <footer>
		<!-- footer-logo -->
		<a href="index.php" class="logo">Кинозал <span>hd</span></a>
		<!-- autor -->
		<span class="autor">Created by Kirill Kogol</span>
	</footer>

	</body>
	</html>