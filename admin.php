<!--doctype html-->
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--==Title==================================-->
	<title>Панель администратора</title>
	<!--Stylesheet(CSS)==========================-->
	<link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/admin.css"/>
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
            $servername = "localhost";
            $name = "root";
            $pass = "";
            $dbname = "Kinozal_db";
            // if($_SESSION['id'] != 8){
            //     header('Location: /index.php');
            // }
            $db = mysqli_connect($servername, $name, $pass, $dbname);
           if (!$db) {
             die("Ошибка: " . mysqli_connect_error());
           }
           
           $sql = "SELECT * FROM Users";
           if($result = mysqli_query($db, $sql)){
                
               $rowsCount = (mysqli_num_rows($result)-1); // количество полученных строк
               echo "<p>Количество пользователей: $rowsCount</p> <hr>";
               echo "<table class = 'table'><tr><th>ID</th><th>Имя</th><th>Любимый фильм</th><th>Статус</th></tr>";
               foreach($result as $row){
                   if($row['rights'] == 'Администратор'){
           
                   }
                   else{
                       echo "<tr>
                       <td>" . $row["id"] . "</td>
                       <td>" . $row["username"] . "</td>
                       <td>" . $row["feavorit_film"] . "  </td>
                       <td>" . $row["rights"] . "  </td>
                       <td><a href='admin_update.php?id=" . $row["id"] . "'>Изменить</a></td>
                               <td><form action='/delete.php' method='post'>
                                   <input type='hidden' name='id' value='" . $row["id"] . "' />
                                   <input type='submit' value='Удалить'>
                               </form></td>
                           </tr>";
                   }
                   
               }
               echo "</table>";
               mysqli_free_result($result);
           } else{
               echo "Ошибка: " . mysqli_error($db);
           }
           
           mysqli_close($db);
           ?>
           <hr>
           <h2>Список фильмов</h2>
           <a style="text-decoration:none; color: white;" href="film_create.php">Добавить фильм</a>
           <?php
            $servername = "localhost";
            $name = "root";
            $pass = "";
            $dbname = "Kinozal_db";
            
            $db = mysqli_connect($servername, $name, $pass, $dbname);
           if (!$db) {
             die("Ошибка: " . mysqli_connect_error());
           }
           
           $sql = "SELECT * FROM kino";
           if($result = mysqli_query($db, $sql)){
                
               $rowsCount = (mysqli_num_rows($result)); // количество полученных строк
               echo "<p>Количество фильмов: $rowsCount</p> <hr>";
               echo "<table class = 'table'><tr><th>ID</th><th>Название</th><th>Описание</th><th>Баннер</th><th>Дата выхода</th><th>Продолжительность</th><th>Язык</th><th>Фильм</th></tr>";
               foreach($result as $row){
                       echo "<tr>
                       <td>" . $row["id"] . "</td>
                       <td>" . $row["name"] . "</td>
                       <td>" . $row["description"] . "  </td>
                       <td>" . $row["banner"] . "  </td>
                       <td>" . $row["date"] . "  </td>
                       <td>" . $row["time"] . "  </td>
                       <td>" . $row["language"] . "  </td>
                       <td>" . $row["movie"] . "  </td>
                       <td><a href='update_film.php?id=" . $row["id"] . "'>Изменить</a></td>
                               <td><form action='/delete_film.php' method='post'>
                                   <input type='hidden' name='id' value='" . $row["id"] . "' />
                                   <input type='submit' value='Удалить'>
                               </form></td>
                           </tr>";
               }
               echo "</table>";
               mysqli_free_result($result);
           } else{
               echo "Ошибка: " . mysqli_error($db);
           }
           
           mysqli_close($db);
           ?>
		<div>
            <div class ='users'>

            </div>
        </div>


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
			</script>
				<script src="js/jQuery.js"></script>
				<script src="js/swiper-bundle.min.js"></script>
				<script src="js/swiperIn.js"></script>
				<script src="js/menu-fix.js"></script>
				<script src="js/scroll-progress.js"></script>
	</body>
	</html>