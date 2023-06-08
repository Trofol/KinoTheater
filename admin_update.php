<!--doctype html-->
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--==Title==================================-->
	<title>Изменение данных</title>
	<!--Stylesheet(CSS)==========================-->
	<link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/login.css"/>
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

        <form method="POST" action="admin_update.php">
        <div class= "login">
            <div class="row_text">
                <label for="username">Имя:</label> <br>
                <label for="email">Email:</label> <br>
                <label for="rights">Статус:</label> <br>
        
            </div>
            <div class="row_in">
                <input name="username" id="username" autocomplete="off" />
                <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
                <input type="email" name="email" id="email" autocomplete="off" />
                <h1 class= "tsss"> Никто не узнает, что я кастыль</h1>
				<select name="rights" id="rights">
				<optgroup >
					<option value="Пользователь">Пользователь</option>
					<option value="Администратор">Администратор</option>
					<option value="Модератор">Модератор</option>
				</optgroup>
				</select>
                <div style="display:none;" class="row_id">
                    <input type="number" name="id" id="id" value= "<?php echo $_GET['id'] ?>">
                </div>
            </div>
           
        </div>
        <div class="button">
                <input type="submit" />
                <a href="admin.php">Назад</a>
            </div>
        </form>
        <?php 
        if(isset($_POST['username']) or isset($_POST['email']) or isset($_POST['rights'])){
            $servername = "localhost";
            $name = "root";
            $pass = "";
            $dbname = "Kinozal_db";
            
            $db = mysqli_connect($servername, $name, $pass, $dbname);

            if (!$db) {
                die("Connection failed: " . mysqli_connect_error());
            }
              $upd_id = (int)$_POST["id"];
              $rights = $_POST['rights'];
              $upd_username = $_POST['username'];
              $Email = $_POST['email'];
          
              if(empty($upd_username)){
                  $query = "Select username from users where id = '$upd_id'";
                  $result = mysqli_query($db, $query);
                  $row = mysqli_fetch_array($result);
                  $upd_username = $row['username'];
                  $query = $result = $row = 0;
              }
              if(empty($rights)){
                  $query = "Select rights from users where id = '$upd_id'";
                  $result = mysqli_query($db, $query);
                  $row = mysqli_fetch_array($result);
                  $rights = $row['rights'];
                  $query = $result = $row = 0;
              }
              if(empty($Email)){
                $query = "Select Email from users where id = '$upd_id'";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_array($result);
                $Email = $row['Email'];
                $query = $result = $row = 0;
                }
              $upd_sql = "UPDATE Users SET username = '$upd_username', rights = '$rights', email = '$Email' WHERE id = '$upd_id'";
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